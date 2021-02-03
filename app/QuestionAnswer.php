<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    protected $fillable = ['question_answer', 'question_id'];

    // Get the question of a particular answer (choice)
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
