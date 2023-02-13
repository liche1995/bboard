<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $access_time = Carbon::now();
        return view("index")->with("access_time", $access_time );
    }
}
