<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ProjectType;
use App\Project;

class ProjectController extends Controller
{
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
}
