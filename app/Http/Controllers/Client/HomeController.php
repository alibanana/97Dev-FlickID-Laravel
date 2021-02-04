<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ProjectType;
use App\FeaturedProject;

class HomeController extends Controller
{
    // Show Landing Page.
    public function index(Request $request)
    {
        $project_types = ProjectType::all();
        $featured_projects = FeaturedProject::all();

        return view('client/index', compact('project_types, featured_projects'));
    }
}

