<?php

namespace App\Http\Controllers;

use App\Models\TestCollection;
use Illuminate\Http\Request;
use App\Models\QuestionBank;
use App\Models\TestPassages;
use App\Models\TestQuestion;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner;

class CbtController extends Controller
{
    public function index()
    {
        return view('pages/CBT/cbt');
    }

    public function createTest()
    {
        return view('pages/CBT/cbt_createtest');
    }

    public function startTest($testCode)
    {
        $testCollection = new TestCollection;
        $questionBank = new QuestionBank;
        $testQuestion = new TestQuestion;
        $testId = $testCollection->where('code', $testCode)->first();
        $questionId = $testQuestion->where('test_id', $testId->id)->pluck('question_id');
        $question = $questionBank->whereIn('id', $questionId)->get();
        return view('pages/CBT/cbt_test', ['question' => $question]);
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
        $tests = TestCollection::all()->where('user_id', Auth::id());
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
        $testCollection->user_id = Auth::id();
        $testCollection->title = $request->title;
        $testCollection->description = $request->description;
        $testCollection->date = $request->date;
        $testCollection->start_time = $request->start_time;
        $testCollection->end_time = $request->end_time;
        $testCollection->code = $this->generateUniqueCode();
        $testCollection->password = $request->password;
        $testCollection->save();
        return redirect('cbt/cbt-dashboard');
    }

    public function cbtAdminDetailTest($id)
    {
        $testDetail = TestCollection::find($id);
        return view('pages/CBT/cbt_admin_detail_test', ["id" => $id, "title" => $testDetail->title, "description" => $testDetail->description, "date" => $testDetail->date, "start_time" => $testDetail->start_time, "end_time" => $testDetail->end_time, "code" => $testDetail->code, "password" => $testDetail->password]);
    }

    public function selectQuestionTest($id)
    {
        $testQuestion = new TestQuestion();
        return view('pages/CBT/select_question', [
            'id' => $id,
        ]);
    }

    public function detailSelectQuestionTest($id ,$question_type)
    {
        $questionModel = new QuestionBank();
        $questions = $questionModel::select('*')->where('user_id', Auth::id())->where('category', $question_type)->join('passages', 'question_banks.passage_id', '=', 'passages.id')->get();
        return view('pages/CBT/detail_select_question', [
            'id' => $id,
            'questions' => $questions,
            'question_type' => $question_type,
        ]);
    }

    public function preview()
    {
        return view('pages/CBT/preview');
    }

    public function generateUniqueCode(){
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersNumber = strlen($characters);
        $codeLength = 6;
        $code = '';
        while (strlen($code) < $codeLength) {
            $position = rand(0, $charactersNumber - 1);
            $character = $characters[$position];
            $code = $code.$character;
        }

        if (TestCollection::where('code', $code)->exists()) {
            $this->generateUniqueCode();
        }
        return $code;
    }

}
