<?php

namespace App\Http\Controllers;

use App\Events\apiEvent;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
      // this work 
        $client = new \GuzzleHttp\Client();
        $request = $client->get('jsonplaceholder.typicode.com/users');
        $response = json_decode($request->getBody());
        return view('welcome', ['response' => $response]);
    }

    public function apiData(Request $request)
    {
        $data = response()->json(['x' => $request->all(), 'dda' =>'d']);
        return event(new apiEvent($data));
    }

}
