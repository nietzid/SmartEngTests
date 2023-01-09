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
        $client = new Client(); 
        $url = "http://api.smartengtest.com/generate";
        $response = $client->request('POST', $url, [
            'form_params' => [
                'max' => '10' , 
                'fileTitle' => 'abc',
                'fileText' => $request->passage,
                ],
            ]);
        $responseBody = json_decode($response->getBody());
        session(['passage' => $request->passage]);
        return redirect('/generate/result')->with(['response' => $responseBody]);
    }

    public function preview_passage()
    {
        return view('pages/Generate/preview_passage');
    }

    public function generate_result()
    {
        TestPassages::get();
        return view('pages/Generate/generate_result');
    }
}
