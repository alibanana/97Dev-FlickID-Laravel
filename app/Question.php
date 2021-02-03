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
    public function question_answer()
    {
        return $this->hasMany('App\QuestionAnswer');
    }

    // Get the applicant's answer to a particular question.
    public function applicant_answer()
    {
        return $this->hasOne('App\ApplicantAnswer');
    }
}
