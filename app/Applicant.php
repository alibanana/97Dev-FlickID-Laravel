<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'email', 'phone', 
        'address', 'cv_file', 'status', 'job_id'
    ];

    // Get the job (applied) of a certain applicant.
    public function job()
    {
        return $this->belongsTo('App\Job');
    }

    // Get all the applicant's answers.
    public function applicant_answers()
    {
        return $this->hasMany('App\ApplicantAnswer');
    }
}
