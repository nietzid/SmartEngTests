<?php

namespace App\Http\Controllers;

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
        $url = "http://192.168.0.109:5000/scrape";

        $response = $client->request('POST', $url, [
            'form_params' => [
                'newsTitle' => $request->title,
                'newsLink'  => $request->article,
                ],
            ]);
        $responseBody = json_decode($response->getBody());
        return redirect()->route('preview_passage', ['reponse' => $responseBody ]);
    }

    public function input_passage()
    {
        return view('pages/Generate/input_passage');
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
