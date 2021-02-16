<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question', 'question_type_id'];

    // Get the type of question.
    public function question_type()
    {
        return $this->belongsTo('App\QuestionType');
    }

    // Get the answers (choices) of a particular question.
    public function question_answers()
    {
        return $this->hasMany('App\QuestionAnswer');
    }

    // Get the applicant answers to a particular question.
    public function applicant_answers()
    {
        return $this->hasMany('App\ApplicantAnswer');
    }
}
