<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
