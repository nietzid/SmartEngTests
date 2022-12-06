<?php

namespace App\Http\Controllers;

use App\Models\TestPassages;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GenerateController extends Controller
{
    public function index()
    {
        return view('pages/Generate/generate');
    }

    public function scrapping(Request $request){
        $client = new Client(); 
        $url = "https://article-scrape-api.herokuapp.com/scrape";
        $response = $client->request('POST', $url, [
            'form_params' => [
                'newsTitle' => $request->title, 
                'newsLink'  => $request->link,
                ],
            ]);
        $responseBody = json_decode($response->getBody());
        return redirect('/generate/preview-passage')->with(['reponse' => $responseBody ]);
    }

    public function input_passage()
    {
        return view('pages/Generate/input_passage');
    }

    public function store_passage(Request $request)
    {
        // $testPassage = new TestPassages();
        // $testPassage->passages = $request->passage;
        // $testPassage->save();
        // dd($request->passage); 
        $client = new Client(); 
        $url = "https://set-vocab.herokuapp.com/generate";
        $response = $client->request('POST', $url, [
            'form_params' => [
                'max' => '10' , 
                'fileTitle' => 'abc',
                'fileText' => $request->passage,
                ],
            ]);
        $responseBody = json_decode($response->getBody());
        dd($responseBody); 
        //return redirect('/generate/result')->with($responseBody);
        // return redirect('/generate/result');
        // return view('pages/Generate/generate');

    }

    public function preview_passage()
    {
        return view('pages/Generate/preview_passage');
    }

    public function generate_result()
    {
        
        return view('pages/Generate/generate_result');
    }
}
