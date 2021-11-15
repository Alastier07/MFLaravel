<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $posts = Post::orderBy('userLast', 'asc')->paginate(10);
        return view('pages.index')->with('posts', $posts);;
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
