<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\FeaturedProject;
use App\Project;

class PortfolioController extends Controller
{
    // Show Portfolio Page.
    public function index()
    {
        $featured_projects = FeaturedProject::all();

        return view('client/portfolio', compact('featured_projects'));
    }

    // Show a certain project.
    public function show($id)
    {
        $project = Project::findorfail($id);

        // Get projects under the same type.
        $related_projects = Project::where('project_type_id', $project->project_type_id)->where('id', '!=', $project->id)->get();
        
        // If not available, get other projects
        if ($related_projects->isEmpty()) {
            $related_projects = Project::where('id', '!=', $project->id)->get();
        }
        
        return view('client/portfolioDetail', compact('project'));
    }
}
