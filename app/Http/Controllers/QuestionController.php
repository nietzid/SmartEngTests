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
}
