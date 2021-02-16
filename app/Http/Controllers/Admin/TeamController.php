<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as ImageManager;

use App\TeamMember;
use App\Job;

class TeamController extends Controller
{
    public function index()
    {
        $team_members = TeamMember::all();
        $jobs = Job::all();

        return view('admin/teamtable', compact('team_members', 'jobs'));
    }

    public function storeTeamMember(Request $request)
    {
        $input = $request->all();
        
        $validator = Validator::make($input, [
            'name' => 'required|max:40',
            'job_id' => 'required|max:40',
            'photo_file' => 'required|image|mimes:jpeg,jpg,png'
        ]);
        
        if ($validator->fails()) {
            return redirect('/admin/team#create_member')->withErrors($validator)->withInput();
        }

        $team_member = new TeamMember;
        $team_member->name = $input['name'];
        $team_member->job_id = intval($input['job_id']);
        $team_member->photo_file = $this->storeImage($request->file('photo_file'), 'profiles/', 'profile');
        $team_member->save();

        return redirect()->route('admin.team.index')->with('success', 'A new Team Member has been added to the database!');
    }

    private function storeImage($image, $foldername, $image_type){
        $ext = strtolower($image->getClientOriginalExtension());
        $destinationPath = 'storage/images/'.$foldername;

        if (!File::isDirectory($destinationPath)){
            File::makeDirectory($destinationPath, 0777, true, true);
        }

        while(true){
            $newName = $image_type.'_'.rand(100000,PHP_INT_MAX).'.'.$ext;
            if (!file_exists($destinationPath.$newName)){
                break;
            }
        }

        if ($ext == 'jpg' || $ext == 'jpeg') {
            $img_created = ImageManager::make($image->getRealpath());
            $img_created->orientate();
            $img_created->save($destinationPath.$newName, 75);
        } else {
            $image->move($destinationPath, $newName);
        }

        return $destinationPath.$newName;
    }

    public function updateTeamMember(Request $request, $id)
    {
        $input = $request->all();

        Validator::make($input, [
            'name' => 'max:40',
            'job_id' => 'max:40',
            'photo_file' => 'mimes:jpeg,jpg,png'
        ])->validate();
        
        $team_member = TeamMember::findorfail($id);
        $team_member->name = $input['name'];
        $team_member->job_id = $input['job_id'];

        if ($request->has('photo_file')) {
            unlink($team_member->photo_file);
            $team_member->photo_file = $this->storeImage($request->file('photo_file'), 'profiles/', 'profile');
        }

        $team_member->save();

        return redirect()->route('admin.team.index')->with('success', 'Team Member has been updated!');
    }

    public function destroyTeamMember($id)
    {
        $team_member = TeamMember::findorfail($id);
        
        unlink($team_member->photo_file);
        $team_member->delete();

        return redirect()->route('admin.team.index')->with('success', 'Team Member has been removed from the database!');
    }

    public function storeJob(Request $request)
    {
        $input = $request->all();

        Validator::make($input, [
            'title' => 'required|max:40'
        ])->validate();

        $job = new Job;
        $job->title = $input['title'];
        $job->save();

        return redirect()->route('admin.team.index')->with('success', 'A new Position has been stored in the database!');
    }

    public function updateJob(Request $request, $id)
    {
        $input = $request->all();

        Validator::make($input, [
            'title' => 'max:40',
        ])->validate();
        
        $job = Job::findorfail($id);
        $job->title = $input['title'];
        $job->save();
        
        return redirect()->route('admin.team.index')->with('success', 'Job has been updated!');
    }

    public function changeOfferable($job_id)
    {
        $job = Job::findorfail($job_id);

        $job->offerable = !($job->offerable);
        $job->save();

        return redirect()->route('admin.team.index')->with('success', 'Job "Offerable Status" has been changed!');
    }

    public function destroyJob($job_id)
    {
        $job = Job::findorfail($job_id);
        $job->delete();

        return redirect()->route('admin.team.index')->with('success', 'Job has been removed from the database!');
    }
}
