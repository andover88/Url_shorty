<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class UrlShortenerController extends Controller
{
    public function shorten(Request $request)
    {
        $longUrl = $request->input('long_url');
        $token = env('BITLY_API_TOKEN');

        $apiUrl = "https://api-ssl.bitly.com/v4/shorten";

        $data = [
            'long_url' => $longUrl,
            'domain' => 'bit.ly'

        ];
        $response = Http::withToken($token)->post($apiUrl, $data);

        if ($response->successful()) {
            return view('shorten-result', ['shortUrl' => $respnse->json()['links']]);
        } else {
            return back()->with('error', 'Failed to shorten URL');
        }

        }
    }


