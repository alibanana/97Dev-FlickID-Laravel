<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        
        return view('admin/question', compact('questions'));
    }
}
