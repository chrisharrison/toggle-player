<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function play(Request $request)
    {
    	return view('play', [
    		'videoId' => $request->get('videoId')
		]);
    }
}
