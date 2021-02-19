<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\FeaturedProject;

class FeaturedProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $featured_projects = FeaturedProject::all();

        return view('admin/featured_project', compact('featured_projects'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Validator::make($input, [
            'project_id' => 'required|digits_between:1,20',
        ])->validate();

        $featured_project = new FeaturedProject;
        $featured_project->position = count(FeaturedProject::all()->toArray()) + 1;
        $featured_project->project_id = $input['project_id'];
        $featured_project->save();

        return redirect()->route('admin.featuredProject.index')->with('success', "A project has been added to the featured section!");
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        Validator::make($input, [
            'position' => 'required|digits_between:1,3'
        ])->validate();

        $featured_project = FeaturedProject::findorfail($id);
        $featured_project->position = $input['position'];
        $featured_project->save();

        return redirect()->route('admin.featuredProject.index')->with('success', "Featured Project's position has been changed!");
    }

    public function destroy($id)
    {
        $featured_project = FeaturedProject::findorfail($id);
        $featured_project->delete();

        return redirect()->route('admin.featuredProject.index')->with('success', 'A Project has been removed from the featured section!');
    }
}
