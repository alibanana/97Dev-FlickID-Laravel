<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Client;
use App\Applicant;
use App\Project;

/*
|--------------------------------------------------------------------------
| Admin DashboardController Class.
|
| Description:
| This controller is responsible in handling the admin's dashboard pages.
|--------------------------------------------------------------------------
*/ 
class DashboardController extends Controller
{   
    // Shows the Admin Dashboard page.
    public function index()
    {
        $clients = Client::all();

        $client_pending_count = 0; $client_rejected_count = 0; $client_accepted_count = 0; $client_finished_count = 0;
        foreach ($clients as $client) {
            if ($client->status == "Pending") { $client_pending_count++; }
            else if ($client->status == "Rejected") { $client_rejected_count++; }
            else if ($client->status == "Accepted") { $client_accepted_count++; }
            else if ($client->status == "Finished") { $client_finished_count++; }
        }

        $client_counts = [
            'Pending' => $client_pending_count,
            'Rejected' => $client_rejected_count,
            'Accepted' => $client_accepted_count,
            'Finished' => $client_finished_count,
        ];
        
        $applicants = Applicant::all();

        $applicant_pending_count = 0; $applicant_rejected_count = 0; $applicant_accepted_count = 0;
        foreach ($applicants as $applicant) {
            if ($applicant->status == "Pending") { $applicant_pending_count++; }
            else if ($applicant->status == "Rejected") { $applicant_rejected_count++; }
            else if ($applicant->status == "Accepted") { $applicant_accepted_count++; }
        }

        $applicant_counts = [
            'Pending' => $applicant_pending_count,
            'Rejected' => $applicant_rejected_count,
            'Accepted' => $applicant_accepted_count,
        ];

        $project_count = Project::all()->count();

        return view('admin/dashboard', compact('client_counts', 'applicant_counts', 'project_count'));
    }
}
