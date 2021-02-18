<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Applicant;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Applicant::all();

        return view('admin/applicant', compact('applicants'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        Validator::make($input, [
            'status' => 'required'
        ])->validate();

        $applicant = Applicant::findorfail($id);
        $current_status = $applicant->status;
        $applicant->status = $input['status'];
        $applicant->save();
        
        $message = "Changed ".$applicant->firstname." ".$applicant->lastname."'s status from ".$current_status." to ".$applicant->status.".";

        return redirect()->back()->with('success', $message);
    }
}
