<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model
{
    protected $fillable = ['type'];

    // Get questions belonging to a certain type (MCQ, Open-ended, Slider)
    public function question()
    {
        return $this->hasOne('App\Question');
    }
}
