<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as ImageManager;

use App\ProjectType;
use App\Project;
use App\ProjectDetail;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show Admin Project Page
    public function index(Request $request)
    {
        $project_types = ProjectType::all();

        if ($request->has('filter')) {
            if ($request['filter'] == "") {
                $url = route('admin.project.index', request()->except('filter'));
                return redirect($url);
            } else {
                $filtered_type = ProjectType::where('type', $request['filter'])->first();
                $projects = $filtered_type->projects();
            }
        } else {
            $projects = new Project;
        }

        if ($request->has('sort')) {
            if ($request['sort'] == "latest") {
                $projects = $projects->orderBy('created_at', 'desc');
            } else {
                $projects = $projects->orderBy('created_at');
            }
        } else {
            $projects = $projects->orderBy('created_at', 'desc');
        }

        if ($request->has('search')) {
            if ($request['search'] == "") {
                $url = route('admin.project.index', request()->except('search'));
                return redirect($url);
            } else {
                $search = $request['search'];
                $projects = $projects->where(function ($query) use ($search) {
                    $query->where([['title', 'like', "%".$search."%"]])
                    ->orWhere([['description', 'like', "%".$search."%"]])
                    ->orWhere([['sub_description', 'like', "%".$search."%"]])
                    ->orWhere([['technologies', 'like', "%".$search."%"]])
                    ->orWhere([['deliverables', 'like', "%".$search."%"]])
                    ->orWhere([['headline', 'like', "%".$search."%"]])
                    ->orWhere([['sub_headline', 'like', "%".$search."%"]]);
                });
            }
        }

        $projects = $projects->paginate(8);
        
        return view('admin/project', compact('project_types', 'projects'));
    }

    // Show Create New Project Form
    public function create()
    {
        $project_types = ProjectType::all();
        
        return view('admin/addproject', compact('project_types'));
    }

    // Store the new Project
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'project_type_id' => 'required|digits:1',
            'logo_file' => 'required|image|mimes:jpeg,jpg,png,svg',
            'ilustration_file' => 'required|image|mimes:png,svg',
            'background_file' => 'required|image|mimes:jpeg,jpg,png',
            'title' => 'required|max:40',
            'description' => 'required',
            'sub_description' => 'required',
            'scope' => 'required',
            'technologies' => 'required',
            'deliverables' => 'required',
            'headline' => 'required|max:100',
            'featured_ilustration_file' => 'required|image|mimes:png,svg',
            'filter_invert' => 'required|digits_between:1,3',
            'filter_sepia' => 'required|digits_between:1,3',
            'filter_saturate' => 'required|digits_between:1,5',
            'filter_hue_rotate' => 'required|digits_between:1,5',
            'filter_brightness' => 'required|digits_between:1,3',
            'filter_contrast' => 'required|digits_between:1,3',
            'sub_headline' => 'required|max:100',
            'project_detail_title.*' => 'max:40',
            'project_detail_ilustration.*' => 'image|mimes:png,svg',
        ]);
        $validator->setAttributeNames([
            'project_detail_title.*'=>'title',
            'project_detail_ilustration.*'=>'ilustration',
        ]);
        $validator->validate();

        $project = New Project;
        $project->ilustration_file = $this->storeImage($request->file('ilustration_file'), 'ilustrations/', 'ilustration');
        $project->logo_file = $this->storeImage($request->file('logo_file'), 'logos/', 'logo');
        $project->title = $input['title'];
        $project->description = $input['description'];
        $project->sub_description = $input['sub_description'];
        $project->scope = $input['scope'];
        $project->technologies = $input['technologies'];
        $project->deliverables = $input['deliverables'];
        $project->bg_file = $this->storeImage($request->file('background_file'), 'background_file/', 'background');
        $project->headline = $input['headline'];
        $project->sub_headline = $input['sub_headline'];
        $project->featured_ilustration_file = $this->storeImage($request->file('featured_ilustration_file'), 'ilustrations/', 'ilustration');
        $project->filter_invert = $input['filter_invert'];
        $project->filter_sepia = $input['filter_sepia'];
        $project->filter_saturate = $input['filter_saturate'];
        $project->filter_hue_rotate = $input['filter_hue_rotate'];
        $project->filter_brightness = $input['filter_brightness'];
        $project->filter_contrast = $input['filter_contrast'];
        $project->project_type_id = $input['project_type_id'];
        $project->save();

        $project_detail_ilustration_list = $request->file('project_detail_ilustration');

        for ($i = 0; $i <= count($input['project_detail_title']); $i++) {
            if (empty($input['project_detail_title'][$i]) || empty($input['project_detail_description'][$i]) || empty($input['project_detail_ilustration'][$i])) {
                continue;
            } else {
                $project_detail = new ProjectDetail;
                $project_detail->title = $input['project_detail_title'][$i];
                $project_detail->description = $input['project_detail_description'][$i];
                $project_detail->ilustration_file = $this->storeImage($project_detail_ilustration_list[$i], 'ilustrations/', 'ilustration');
                $project_detail->project_id = $project->id;
                $project_detail->save();
            }
        }
        
        return redirect()->route('admin.project.index')->with('success', 'A new project has been added to the database!');
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

    public function edit($id)
    {
        $project_types = ProjectType::all();
        
        $project = Project::findorfail($id);

        return view('admin/updateproject', compact('project_types', 'project'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'project_type_id' => 'required|digits:1',
            'logo_file' => 'mimes:jpeg,jpg,png,svg',
            'logo_filename' => 'max:80',
            'ilustration_file' => 'mimes:png,svg',
            'ilustration_filename' => 'max:80',
            'background_file' => 'mimes:jpeg,jpg,png',
            'background_filename' => 'max:80',
            'title' => 'required|max:40',
            'description' => 'required',
            'sub_description' => 'required',
            'scope' => 'required',
            'technologies' => 'required',
            'deliverables' => 'required',
            'headline' => 'required|max:100',
            'featured_ilustration_file' => 'mimes:png,svg',
            'featured_ilustration_filename' => 'max:80',
            'filter_invert' => 'required|digits_between:1,3',
            'filter_sepia' => 'required|digits_between:1,3',
            'filter_saturate' => 'required|digits_between:1,5',
            'filter_hue_rotate' => 'required|digits_between:1,5',
            'filter_brightness' => 'required|digits_between:1,3',
            'filter_contrast' => 'required|digits_between:1,3',
            'sub_headline' => 'required|max:100',
            'project_detail_title.*' => 'max:40',
            'project_detail_ilustration.*' => 'image|mimes:png,svg',
        ]);
        $validator->setAttributeNames([
            'logo_filename'=>'logo_file',
            'ilustration_filename'=>'ilustration_file',
            'background_filename'=>'background_file',
            'featured_ilustration_filename'=>'featured_ilustration_file',
            'project_detail_title.*'=>'title',
            'project_detail_ilustration.*'=>'ilustration',
        ]);
        $validator->validate();
        
        $project = Project::findorfail($id);

        if ($request->has('ilustration_file')) {
            unlink($project->ilustration_file);
            $project->ilustration_file = $this->storeImage($request->file('ilustration_file'), 'ilustrations/', 'ilustration');
        }

        if ($request->has('logo_file')) {
            unlink($project->logo_file);
            $project->logo_file = $this->storeImage($request->file('logo_file'), 'logos/', 'logo');
        }

        $project->title = $input['title'];
        $project->description = $input['description'];
        $project->sub_description = $input['sub_description'];
        $project->scope = $input['scope'];
        $project->technologies = $input['technologies'];
        $project->deliverables = $input['deliverables'];

        if ($request->has('background_file')) {
            unlink($project->bg_file);
            $project->bg_file = $this->storeImage($request->file('background_file'), 'background_file/', 'background');
        }

        $project->headline = $input['headline'];
        $project->sub_headline = $input['sub_headline'];

        if ($request->has('featured_ilustration_file')) {
            unlink($project->featured_ilustration_file);
            $project->featured_ilustration_file = $this->storeImage($request->file('featured_ilustration_file'), 'ilustrations/', 'ilustration');
        }

        $project->filter_invert = $input['filter_invert'];
        $project->filter_sepia = $input['filter_sepia'];
        $project->filter_saturate = $input['filter_saturate'];
        $project->filter_hue_rotate = $input['filter_hue_rotate'];
        $project->filter_brightness = $input['filter_brightness'];
        $project->filter_contrast = $input['filter_contrast'];
        $project->project_type_id = $input['project_type_id'];
        $project->save();

        if ($request->file('project_detail_ilustration')) {
            $project_detail_ilustration_list = $request->file('project_detail_ilustration');
        }

        // Combine Project Details Data
        $counter = 0; $project_details = [];
        while (true) {
            if (($counter >= count($input['project_detail_title'])) || ($counter >= count($input['project_detail_description']))) {
                break;
            }

            if ($request->has('project_detail_ids')) {
                if ($counter >= count($input['project_detail_ids'])) {
                    $pd_id = null;
                } else {
                    $pd_id = $input['project_detail_ids'][$counter];
                }
            } else {
                $pd_id = null;
            }

            $pd_title = $input['project_detail_title'][$counter];
            $pd_description = $input['project_detail_description'][$counter];

            $pd_ilustration = null;
            if ($request->file('project_detail_ilustration') && array_key_exists($counter, $project_detail_ilustration_list)) {
                $pd_ilustration = $project_detail_ilustration_list[$counter];
            }

            $temp = [
                'id' => $pd_id,
                'title' => $pd_title,
                'description' => $pd_description,
                'ilustration' => $pd_ilustration
            ];

            array_push($project_details, $temp);
            $counter++;
        }

        foreach ($project_details as $project_detail) {
            if (is_null($project_detail['id'])) {
                if (empty($project_detail['title']) || empty($project_detail['description']) || empty($project_detail['ilustration'])) {
                    continue;
                } else {
                    $pd = new ProjectDetail;
                    $pd->title = $project_detail['title'];
                    $pd->description = $project_detail['description'];
                    $pd->ilustration_file = $this->storeImage($project_detail['ilustration'], 'ilustrations/', 'ilustration');
                    $pd->project_id = $project->id;
                    $pd->save();
                }
            } else {
                $pd = ProjectDetail::findorfail(intval($project_detail['id']));
                $pd->title = $project_detail['title'];
                $pd->description = $project_detail['description'];
                if ($project_detail['ilustration']) {
                    unlink($pd->ilustration_file);
                    $pd->ilustration_file = $this->storeImage($project_detail['ilustration'], 'ilustrations/', 'ilustration');
                }
                $pd->project_id = $project->id;
                $pd->save();
            }
        }

        return redirect()->route('admin.project.index')->with('success', 'Project has been updated!');
    }
    
    public function destroy($id)
    {
        $project = Project::findorfail($id);

        unlink($project->ilustration_file);
        unlink($project->logo_file);
        unlink($project->bg_file);
        
        foreach($project->project_details as $project_detail) {
            unlink($project_detail->ilustration_file);
            $project_detail->delete();
        }

        $project->delete();

        return redirect()->route('admin.project.index')->with('success', 'A project has been deleted from the database!');
    }

    public function destroyProjectDetail($id)
    {
        $project_detail = ProjectDetail::findorfail($id);
        $project_id = $project_detail->project_id;

        unlink($project_detail->ilustration_file);
        $project_detail->delete();

        return redirect()->route('admin.project.edit', $project_id)->with('success', 'Project Detail has been deleted from the database!');
    }
}
