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
}
