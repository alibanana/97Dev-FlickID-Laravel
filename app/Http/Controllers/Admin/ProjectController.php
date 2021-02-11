<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as ImageManager;

use App\ProjectType;
use App\Project;

class ProjectController extends Controller
{
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
                $projects = $projects->orderBy('created_at');
            } else {
                $projects = $projects->orderBy('created_at', 'desc');
            }
        } else {
            $projects = $projects->orderBy('created_at');
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
            'ilustration_file' => 'required|image|mimes:png,svg',
            'ilustration_filename' => 'required',
            'logo_file' => 'required|image|mimes:jpeg,jpg,png,svg',
            'logo_filename' => 'required',
            'title' => 'required|max:40',
            'description' => 'required',
            'sub_description' => 'required',
            'scope' => 'required',
            'technologies' => 'required',
            'deliverables' => 'required',
            'background_file' => 'required|image|mimes:jpeg,jpg,png,svg',
            'background_filename' => 'required',
            'headline' => 'required|max:100',
            'sub_headline' => 'required|max:100',
        ]);

        $validator->setAttributeNames(['project_type_id'=>'project_type']);
        $validator->setAttributeNames(['ilustration_file'=>'ilustration']);
        $validator->setAttributeNames(['ilustration_filename'=>'ilustration']);
        $validator->setAttributeNames(['logo_file'=>'logo']);
        $validator->setAttributeNames(['logo_filename'=>'logo']);
        $validator->setAttributeNames(['sub_description'=>'sub-description']);
        $validator->setAttributeNames(['background_file'=>'background']);
        $validator->setAttributeNames(['background_filename'=>'background']);
        $validator->setAttributeNames(['sub_headline'=>'sub-headline']);
        $validator->validate();

        $project = New Project;
        $project->ilustration_file = $this->storeImage($request->file('ilustration_file'), 'ilustrations/', 'ilustration');
        $project->logo_file = $this->storeImage($request->file('logo_file'), 'logos/', 'logo');
        $project->title = input['title'];
        $project->description = input['description'];
        $project->sub_description = input['sub_description'];
        $project->scope = input['scope'];
        $project->technologies = input['technologies'];
        $project->deliverables = input['deliverables'];
        $project->bg_file = $this->storeImage($request->file('background_file'), 'background_file/', 'background');
        $project->headline = input['headline'];
        $project->sub_headline = input['sub_headline'];
        $project->project_type_id = input['project_type_id'];
        $project->save();
        
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
}
