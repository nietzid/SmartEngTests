<?php

namespace App\Http\Controllers;

use App\Models\QuestionBank;
use App\Models\TestQuestion;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return view('pages/Generate/generate');
    }

    public function generate()
    {
        return view('pages/Generate/generate_question');
    }

    public function question_collection()
    {
        $questionModel = new QuestionBank();
        $questions = $questionModel::all();
        // foreach ($questions as $question) {
        //     if ($question->question_type == 'Multiple Choice Question') {
        //         $mcq
        //     } else if ($question->question_type == 'TF') {
        //         $question->question_type = 'True or False';
        //     } else if ($question->question_type == 'FIB') {
        //         $question->question_type = 'Fill in the Blank';
        //     } else if ($question->question_type == 'SA') {
        //         $question->question_type = 'Short Answer';
        //     }
        // }
        return view('pages/Generate/question_collection', ['questions' => $questions]);
    }

    public function add_question_manual()
    {
        return view('pages/Generate/add_question_manual');
    }

    public function add_question_test()
    {
        return view('pages/Generate/add_question_test');
    }
    public function removeQuestion($id)
    {
        $questionModel = new QuestionBank();
        $testQuestionModel = new TestQuestion();
        $testQuestionModel::where('question_id', $id)->delete();
        $questionModel::where('id', $id)->delete();
        return redirect('/question-collection');
    }
}
