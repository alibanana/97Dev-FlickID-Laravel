<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\TeamMember;

class TeamController extends Controller
{
    // Show Contact-Us Page
    public function index()
    {
        $team_members = TeamMember::all();

        return view('client/aboutUs', compact('team_members'));
    }
}
