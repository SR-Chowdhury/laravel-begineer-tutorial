<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    public function write() {
        return view('clean-blog/write');
    }
    public function contact() {
        return view('clean-blog/contact');
    }
    public function addCategory() {
        return view('clean-blog/add_category');
    }

    // CRUD
    public function showCategory() {
        $fetchCategory = DB::table('categories')->get();
        // return response()->json($fetchCategory);
        // echo "<pre>";
        // print_r($fetchCategory);
        return view('clean-blog/all_category', compact('fetchCategory'));
    }

    public function insertCategory(Request $request) {
        // Check incoming data
        // return response()-> json($data);
        // echo "<pre>";
        // print_r($data);

        $validate = $request->validate([
            'name' => 'required|unique:categories|max:255|min:5',
            'slug' => 'required|unique:categories|max:255|min:5'
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = $request->slug;

        $category = DB::table('categories')->insert($data);

        if($category) {
            $notification = array(
                'message' => 'Alhamdulillah, Data is successfully inserted',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
        else {
            $notification = array(
                'message' => 'Ops! something went wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }

    }

    public function singleData($id) {
        // echo $id;
        $singleData = DB::table('categories')->where('id', $id)->first();
        // echo "<pre>";
        // print_r($singleData);
        return view('clean-blog/single_data')->with('singleData', $singleData);
    }

    public function deleteSingleData($id) {
        // echo $id;
        $deleteSingleData = DB::table('categories')->where('id', $id)->delete();
        $fetchCategory = DB::table('categories')->get();
        return view('clean-blog/all_category', compact('fetchCategory'));
    }

}
