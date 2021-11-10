<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    // pass with single data.
    /*public function index(){
        $appName = "DORA";
        return view('pages.index')->with('appName', $appName);
    }*/

    // pass with multiple data.
    /*public function index(){
        $data = array(
            'appName' => "DORA",
            'appServices' => ["Web Design", "Programming"]
        );
        return view('pages.index')->with($data);
    }*/
}
