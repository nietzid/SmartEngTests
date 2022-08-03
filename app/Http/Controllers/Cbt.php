<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cbt extends Controller
{
    public function index()
    {
        return view('pages/CBT/cbt');
    }

    public function createTest()
    {
        return view('pages/CBT/cbt_createtest');
    }

    public function startTest()
    {
        return view('pages/CBT/cbt_test');
    }

    public function testLandingPage()
    {
        return view('pages/CBT/testlandingpage');
    }

    public function testResult()
    {
        return view('pages/CBT/test_result');
    }

    public function addQuestion()
    {
        return view('pages/CBT/add_question');
    }
}
