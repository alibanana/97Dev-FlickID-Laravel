<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicantAnswer extends Model
{
    protected $table = 'applicant_answers';

    protected $fillable = ['answer', 'question_id', 'applicant_id'];

    // Get the question for an answer.
    public function question()
    {
        return $this->belongsTo('App\Question');
    }

    // Get the applicant of an answer.
    public function applicant()
    {
        return $this->belongsTo('App\Applicant');
    }
}
