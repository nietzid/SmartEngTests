<?php

namespace App\Http\Controllers;

use App\Models\TestCollection;
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
        return view('pages/CBT/test_landingpage');
    }

    public function testResult()
    {
        return view('pages/CBT/test_result');
    }

    public function addQuestion()
    {
        return view('pages/CBT/add_question');
    }

    public function cbtDashboard()
    {
        $tests = TestCollection::all();
        return view('pages/CBT/cbt_dashboard', ['tests' => $tests]);
    }

    public function cbtLandingPage()
    {
        $tests = TestCollection::all();
        return view('pages/CBT/test_landingpage', ['tests' => $tests]);
    }

    public function cbtDetail()
    {
        $tests = TestCollection::all();
        return view('pages/CBT/detail_test', ['tests' => $tests]);
    }

    public function storeNewTest(Request $request)
    {
        $testCollection = new TestCollection;
        $testCollection->title = $request->title;
        $testCollection->description = $request->description;
        $testCollection->date = $request->date;
        $testCollection->start_time = $request->start;
        $testCollection->end_time = $request->end;
        $testCollection->save();
        return view('pages/CBT/cbt_createtest');
    }

    public function cbtAdminDetailTest($id)
    {
        $testDetail = TestCollection::find($id);
        return view('pages/CBT/cbt_admin_detail_test',["id" => $id, "title" => $testDetail->title, "description" => $testDetail->description, "date" => $testDetail->date, "start_time" => $testDetail->start_time, "end_time" => $testDetail->end_time]);
    }
    
}