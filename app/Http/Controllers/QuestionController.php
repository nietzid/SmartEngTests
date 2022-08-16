<?php

namespace App\Http\Controllers;

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
        return view('pages/Generate/question_collection');
    }

    public function add_question_manual()
    {
        return view('pages/Generate/add_question_manual');
    }

    public function add_question_test()
    {
        return view('pages/Generate/add_question_test');
    }
}
