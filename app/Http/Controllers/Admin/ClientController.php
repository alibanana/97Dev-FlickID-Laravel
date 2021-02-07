<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Client;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $clients = new Client;
        
        if ($request->has('sort')) {
            if ($request['sort'] == "latest") {
                $clients = $clients->orderBy('created_at');
            } else {
                $clients = $clients->orderBy('created_at', 'desc');
            }
        } else {
            $clients = $clients->orderBy('created_at');
        }

        if ($request->has('filter')) {
            if ($request['filter'] == "") {
                $url = route('admin.client.index', request()->except('filter'));
                return redirect($url);
            } else {
                $client_status_list= ['Pending', 'Rejected', 'Accepted', 'Finished'];
                foreach ($client_status_list as $status) {
                    if ($request['filter'] == strToLower($status)) {
                        $clients = $clients->where('status', $status);
                    }
                }
            }
        }

        if ($request->has('search')) {
            if ($request['search'] == "") {
                $url = route('admin.client.index', request()->except('search'));
                return redirect($url);
            } else {
                $search = $request['search'];
                $clients = $clients->where(function ($query) use ($search) {
                    $query->where([['name', 'like', "%".$search."%"]])
                    ->orWhere([['company', 'like', "%".$search."%"]])
                    ->orWhere([['email', 'like', "%".$search."%"]]);
                });
            }
        }

        $clients = $clients->paginate(15);

        return view('admin/clients', compact('clients'));
    }
}
