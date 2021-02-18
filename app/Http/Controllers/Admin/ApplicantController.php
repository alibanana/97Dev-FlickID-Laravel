<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Applicant;

class ApplicantController extends Controller
{
    public function index(Request $request)
    {
        $applicants = new Applicant;

        if ($request->has('sort')) {
            if ($request['sort'] == "latest") {
                $applicants = $applicants->orderBy('created_at');
            } else {
                $applicants = $applicants->orderBy('created_at', 'desc');
            }
        } else {
            $applicants = $applicants->orderBy('created_at');
        }

        if ($request->has('filter')) {
            if ($request['filter'] == "") {
                $url = route('admin.applicant.index', request()->except('filter'));
                return redirect($url);
            } else {
                $applicant_status_list= ['Pending', 'Rejected', 'Accepted'];
                foreach ($applicant_status_list as $status) {
                    if ($request['filter'] == strToLower($status)) {
                        $applicants = $applicants->where('status', $status);
                    }
                }
            }
        }

        if ($request->has('search')) {
            if ($request['search'] == "") {
                $url = route('admin.applicant.index', request()->except('search'));
                return redirect($url);
            } else {
                $search = $request['search'];
                $applicants = $applicants->where(function ($query) use ($search) {
                    $query->where([['firstname', 'like', "%".$search."%"]])
                    ->orWhere([['lastname', 'like', "%".$search."%"]])
                    ->orWhere([['email', 'like', "%".$search."%"]]);
                });
            }
        }

        $applicants = $applicants->paginate(5);

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
