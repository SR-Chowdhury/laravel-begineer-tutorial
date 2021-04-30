<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function firstMethod() {
        return view('introduction/blog');
    }
    public function fourMethod() {
        return view('introduction/iv');
    }
    public function sixMethod() {
        return view('introduction/vi');
    }

    // Extend Yeield & Section
    public function extendIndex() {
        return view('extends/index');
    }
    public function extendAbout() {
        return view('extends/about');
    }
    public function extendContact() {
        return view('extends/contact');
    }
}
