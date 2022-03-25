<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    //
    public function getData(Request $request)
    {
        $response = Http::get("https://api.nomics.com/v1/currencies/ticker?key=b7c420bdfa8049593fd93c79a1b3eac3300ccae4&per-page=100&page=1");
        return view('index', ['response' => $response->json()]);
    }

    public function about(Request $request) 
    {
        return view('about');
    }
}

//key b7c420bdfa8049593fd93c79a1b3eac3300ccae4

//url - curl "https://api.nomics.com/v1/currencies/ticker?key=b7c420bdfa8049593fd93c79a1b3eac3300ccae4&ids=BTC,ETH,XRP&interval=1d,30d&convert=EUR&platform-currency=ETH&per-page=100&page=1"

//curl "https://api.nomics.com/v1/currencies/ticker?key=your-key-here&ids=BTC,ETH,XRP&interval=1d,30d&convert=EUR&platform-currency=ETH&per-page=100&page=1"
