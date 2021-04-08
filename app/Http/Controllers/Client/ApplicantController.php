<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

use App\Question;
use App\Job;
use App\Applicant;
use App\ApplicantAnswer;
use App\Mail\PostApplicantAdminMail;

/*
|--------------------------------------------------------------------------
| Client ApplicantController Class.
|
| Description:
| This controller is responsible to show the "Career" page as well as storing
| new applicants information, storing their CV, & sending the information to
| the admin's email address. 
|--------------------------------------------------------------------------
*/ 
class ApplicantController extends Controller
{
    // Show Career Page.
    public function create()
    {
        $questions = Question::all();
        $offerable_positions = Job::where('offerable', 1)->get();

        return view('client/joinUs', compact('questions', 'offerable_positions'));
    }

    // Store new Applicant & email info to admin.
    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->has('question_ids')) {
            $validator = Validator::make($input, [
                'firstname' => 'required|max:40',
                'lastname' => 'required|max:40',
                'email' => 'required|email|max:191',
                'phone' => 'required|digits_between:7,16',
                'address' => 'required',
                'cv_file' => 'required|mimes:pdf',
                'job_id' => 'required',
                'question_ids' => 'required|array',
                'applicant_answers' => 'required|array',
                'applicant_answers.*' => 'max:100'
            ]);

            $flag_validation = false;

            if (count($input['question_ids']) != count($input['applicant_answers'])) {
                $flag_validation = true;
            } else {
                foreach ($input['applicant_answers'] as $applicant_answer) {
                    if (empty($applicant_answer) || is_null($applicant_answer)) {
                        $flag_validation = true;
                    }
                }
            }

            if ($validator->fails() && $flag_validation) {
                return redirect()->route('applicant.create')
                    ->withErrors($validator)
                    ->withInput()
                    ->with('question_unanswered_error', 'All the questions must be answered!');
            } else if ($validator->fails() && !$flag_validation) {
                return redirect()->route('applicant.create')
                    ->withErrors($validator)
                    ->withInput();
            } else if ($flag_validation) {
                return redirect()->route('applicant.create')
                    ->withInput()
                    ->with('question_unanswered_error', 'All the questions must be answered!');
            }
        } else {
            Validator::make($input, [
                'firstname' => 'required|max:40',
                'lastname' => 'required|max:40',
                'email' => 'required|email|max:191',
                'phone' => 'required|digits_between:7,16',
                'address' => 'required',
                'cv_file' => 'required|mimes:pdf',
                'job_id' => 'required',
            ])->validate();
        }      

        $applicant = new Applicant;
        $applicant->firstname = $input['firstname'];
        $applicant->lastname = $input['lastname'];
        $applicant->email = $input['email'];
        $applicant->phone = $input['phone'];
        $applicant->address = $input['address'];
        $applicant->cv_file = $this->storeFile($request->file('cv_file'), $input['firstname'], $input['lastname']);
        $applicant->job_id = $input['job_id'];
        $applicant->save();

        if ($input['question_ids']) {
            $counter = 0;
            foreach ($input['applicant_answers'] as $answer) {
                $applicant_answer = new ApplicantAnswer;
                $applicant_answer->answer = $answer;
                $applicant_answer->question_id = $input['question_ids'][$counter];
                $applicant_answer->applicant_id = $applicant->id;
                $applicant_answer->save();
                $counter++;
            }
        }

        Mail::to(env('ADMIN_MAIL_ADDRESS'))->send(new PostApplicantAdminMail($applicant));

        return redirect()->route('applicant.create')->with('success', 'Your application has been submitted...');
    }

    private function storeFile($file, $firstname, $lastname){
        $ext = strtolower($file->getClientOriginalExtension());
        $destinationPath = 'storage/documents/';

        // Check if path exists
        if (!File::isDirectory($destinationPath)){
            File::makeDirectory($destinationPath, 0777, true, true);
        }

        // Generate Name for file
        while(true){
            $newName = 'CV_'.$firstname.'_'.$lastname.'_'.rand(100000, PHP_INT_MAX).'.'.$ext;
            if (!file_exists($destinationPath.$newName)){
                $file->move($destinationPath, $newName);    
                break;
            }
        }

        return $destinationPath.$newName;
    }
}
