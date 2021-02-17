<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Question;
use App\QuestionType;
use App\QuestionAnswer;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        
        return view('admin/question', compact('questions'));
    }

    public function storeMCQ(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'question' => 'required',
            'question_answers' => 'required|array|min:2',
            'question_answers.*' => 'max:30'
        ]);

        if ($validator->fails()) {
            return redirect('/admin/question#add_mcq')->withErrors($validator)->withInput();
        }

        $question = new Question;
        $question->question = $input['question'];
        $question->question_type_id = QuestionType::where('type', 'Multiple-Choice')->first()->id;
        $question->save();

        foreach ($input['question_answers'] as $choice) {
            if ($choice) {
                $question_answer = new QuestionAnswer;
                $question_answer->question_answer = $choice;
                $question_answer->question_id = $question->id;
                $question_answer->save();
            }
        }
        
        return redirect()->route('admin.question.index')->with('success', 'An MCQ Question has been added to the database!');
    }

    public function storeSlider(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'question' => 'required',
            'question_answers' => 'required|array',
            'question_answers.0' => 'required|digits_between:1,30',
            'question_answers.1' => 'required|digits_between:1,30',
            'question_answers.2' => 'required|digits_between:1,30',
            'question_answers.3' => 'required|string|max:30',
            'question_answers.4' => 'required|string|max:30'
        ]);

        if ($validator->fails()) {
            return redirect('/admin/question#add_slider')->withErrors($validator)->withInput();
        }

        $question = new Question;
        $question->question = $input['question'];
        $question->question_type_id = QuestionType::where('type', 'Slider')->first()->id;
        $question->save();

        foreach ($input['question_answers'] as $choice) {
            if ($choice) {
                $question_answer = new QuestionAnswer;
                $question_answer->question_answer = $choice;
                $question_answer->question_id = $question->id;
                $question_answer->save();
            }
        }
        
        return redirect()->route('admin.question.index')->with('success', 'A Slider Question has been added to the database!');
    }

    public function storeOpenEnded(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'question' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/admin/question#add_open_ended')->withErrors($validator)->withInput();
        }

        $question = new Question;
        $question->question = $input['question'];
        $question->question_type_id = QuestionType::where('type', 'Open-Ended')->first()->id;
        $question->save();
        
        return redirect()->route('admin.question.index')->with('success', 'A Slider Question has been added to the database!');
    }

    public function destroy($id)
    {
        $question = Question::findorfail($id);
        $question->delete();

        return redirect()->route('admin.question.index')->with('success', 'Question has been deleted from the database!');
    }
}
