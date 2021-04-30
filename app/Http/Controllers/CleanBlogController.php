<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CleanBlogController extends Controller
{
    public function home() {
        return view('clean-blog/welcome');
    }
    public function index() {
        return view('clean-blog/index');
    }
    public function about() {
        return view('clean-blog/about');
    }
    public function post() {
        return view('clean-blog/post');
    }
    public function contact() {
        return view('clean-blog/contact');
    }
}
