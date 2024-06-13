<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Arr;

class RssFeedController extends Controller
{
    public function index(Request $request)
    {
        try {
            $client = new Client();
            $response = $client->get('https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json');
            $data = json_decode($response->getBody(), true);

            // Check if 'item' key exists in $data array
            $items = Arr::get($data, 'channel.item', []);

            return view('rssfeed', ['items' => $items]);
        } catch (\Exception $e) {
            return view('error')->with('message', $e->getMessage());
        }
    }
}
