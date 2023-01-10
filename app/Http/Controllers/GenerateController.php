<?php

namespace App\Http\Controllers;

use App\Models\QuestionBank;
use App\Models\TestPassages;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class GenerateController extends Controller
{
    public function index()
    {
        return view('pages/Generate/generate');
    }

    public function scrape(Request $request){
        $client = new Client(); 
        $url = "http://api.smartengtest.com/scrape";
        $response = $client->request('POST', $url, [
            'form_params' => [
                'newsTitle' => $request->title, 
                'newsLink'  => $request->link,
                ],
            ]);
        $responseBody = json_decode($response->getBody());
        return redirect('/generate/preview-passage')->with(['response' => $responseBody]);
    }

    public function input_passage()
    {
        return view('pages/Generate/input_passage');
    }

    public function store_passage(Request $request)
    {
        $passageId = TestPassages::insertGetId([
            'title' => $request->title,
            'passage' => $request->passage,
        ]);
        $client = new Client(); 
        $url = "http://api.smartengtest.com/generate";
        $response = $client->request('POST', $url, [
            'form_params' => [
                'max' => '10' , 
                'fileTitle' => 'abc',
                'fileText' => $request->passage
                ],
            ]);
        $responseBody = json_decode($response->getBody());
        session(['passage' => $request->passage]);
        return redirect('/generate/result')->with(['response' => $responseBody, 'passageId' => $passageId]);
    }

    public function preview_passage()
    {
        return view('pages/Generate/preview_passage');
    }

    public function generate_result()
    {
        return view('pages/Generate/generate_result');
    }
    public function save_generate_result(Request $request)
    {
        QuestionBank::insert([
            'user_id' => Auth::id(),
            'question' => $request->question,
            'answer' => $request->answer,
            'passage_id' => $request->passageId,
            'option1' => $request->option1,
            'option2' => $request->option2,
            'option3' => $request->option3,
            'option4' => $request->option4,
            'category' => "vocabulary"
        ]);

        return redirect('/question-collection');
        // return view('pages/Generate/generate_result');
    }
}
