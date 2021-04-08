<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ProjectType;
use App\FeaturedProject;
use App\Project;
use App\TeamMember;

/*
|--------------------------------------------------------------------------
| Client PagesController Class.
|
| Description:
| This controller class is responsible to handle client pages that does not
| have any other requests method types other than GET methods in their pages.
|--------------------------------------------------------------------------
*/ 
class PagesController extends Controller
{
    // Shows the landing page.
    public function index()
    {
        $project_types = ProjectType::all();
        $featured_projects = FeaturedProject::orderBy('position')->get();

        return view('client/index', compact('project_types', 'featured_projects'));
    }

    // Shows the main portfolio page.
    public function portfolio_index()
    {
        $featured_projects = FeaturedProject::orderBy('position')->get();

        return view('client/portofolio', compact('featured_projects'));
    }

    // Shows the portfolio-details page.
    public function portfolio_show($id)
    {
        $project = Project::findorfail($id);

        // Get projects under the same type.
        $related_projects = Project::where('project_type_id', $project->project_type_id)->where('id', '!=', $project->id)->get();
        
        // If not available, get other projects.
        if ($related_projects->isEmpty()) {
            $related_projects = Project::where('id', '!=', $project->id)->get();
        }

        return view('client/portofolio-detail', compact('project', 'related_projects'));
    }

    // Shows the about us page.
    public function aboutUs_index()
    {
        $team_members = TeamMember::all();

        return view('client/aboutUs', compact('team_members'));
    }
}
