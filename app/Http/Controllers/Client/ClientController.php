<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

use App\Client;
use App\Mail\PostClientAdminMail;

/*
|--------------------------------------------------------------------------
| Client ClientController Class.
|
| Description:
| This controller is responsible to show the "Contact Us" page as well as
| storing new clients information & sending the information to the admin's
| email address.
|--------------------------------------------------------------------------
*/ 
class ClientController extends Controller
{
    // Show Contact Us Page.
    public function create()
    {
        return view('client/contactUs');
    }

    // Store the new client
    public function store(Request $request)
    {
        $input = $request->all();

        if ($input['email']) {
            Validator::make($input, [
                'name' => 'required|max:40',
                'company' => 'required|max:40',
                'phone' => 'required|max:16|digits_between:7,16',
                'email' => 'email|max:191',
                'description' => 'required'
            ])->validate();
        } else {
            Validator::make($input, [
                'name' => 'required|max:40',
                'company' => 'required|max:40',
                'phone' => 'required|max:16|digits_between:7,16',
                'description' => 'required'
            ])->validate();
        }

        $client = new Client;
        $client->name = $input['name'];
        $client->company = $input['company'];
        $client->phone = $input['phone'];
        $client->email = $input['email'];
        $client->description = $input['description'];
        $client->save();

        Mail::to(env('ADMIN_MAIL_ADDRESS'))->send(new PostClientAdminMail($client));

        return redirect()->route('client.create')->with('success', 'Your project offer has been submitted...');
    }
}
