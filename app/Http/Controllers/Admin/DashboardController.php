<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Client;

class DashboardController extends Controller
{
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

        

        return view('admin/dashboard', compact('client_counts'));
    }
}
