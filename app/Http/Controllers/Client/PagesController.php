<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ProjectType;
use App\FeaturedProject;
use App\Project;

class PagesController extends Controller
{
    // Show Landing Page.
    public function index()
    {
        $project_types = ProjectType::all();
        $featured_projects = FeaturedProject::all();

        return view('client/index', compact('project_types', 'featured_projects'));
    }

    // Show Portfolio Page.
    public function portfolio_index()
    {
        $featured_projects = FeaturedProject::all();

        return view('client/portofolio', compact('featured_projects'));
    }

    // Show a certain project.
    public function portfolio_show($id)
    {
        $project = Project::findorfail($id);

        // Get projects under the same type.
        $related_projects = Project::where('project_type_id', $project->project_type_id)->where('id', '!=', $project->id)->get();
        
        // If not available, get other projects
        if ($related_projects->isEmpty()) {
            $related_projects = Project::where('id', '!=', $project->id)->get();
        }

        return view('client/portofolio-detail', compact('project', 'related_projects'));
    }
}
