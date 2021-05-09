<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function allPost() {

        $post = DB::table('posts')
                ->join('categories', 'posts.category_id', 'categories.id')
                ->select('posts.*', 'categories.name')
                ->get();

        return view('clean-blog.all_post', compact('post'));
    }

    public function storePost(Request $request) {
        $validate = $request->validate([
            'title' => 'required|max:100|min:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'details' => 'required|max:200|min:5',
        ]);

        $data = array();
        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['details'] = $request->details;
        $image = $request->file('image');
        if ($image) {
            // $image_name = str_random(5);
            $image_name = hexdec(uniqid());
            $extension = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$extension;
            $upload_path = 'public/img/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $data['image'] = $image_url;

            $storePost = DB::table('posts')->insert($data);
            $notification = array(
                'message' => 'Alhamdulillah, Post is successfully inserted',
                'alert-type' => 'success'
            );
            return Redirect()->route('all-post')->with($notification);
        }
        else {

            $storePost = DB::table('posts')->insert($data);
            $notification = array(
                'message' => 'Alhamdulillah, Post is successfully inserted',
                'alert-type' => 'success'
            );
            return Redirect()->route('all-post')->with($notification);
        }
    }

    public function ViewSinglePost($id) {
        // echo $id;
        $singlePost = DB::table('posts')
                      ->join('categories', 'posts.category_id', 'categories.id')
                      ->select('posts.*', 'categories.name')
                      ->where('posts.id', $id)
                      ->first();
        // echo "<pre>";
        // print_r($singlePost);

        return view('clean-blog/singlePost')->with('singlePost', $singlePost);
    }

    public function EditSinglePost($id) {
        $category = DB::table('categories')->get();
        $editSinglePost = DB::table('posts')
                        ->where('posts.id', $id)
                        ->first();
        // echo "<pre>";
        // print_r($editSinglePost);

        return view('clean-blog/editPost', compact('category','editSinglePost'));

    }

    public function UpdateSinglePost(Request $request, $id) {
        $validate = $request->validate([
            'title' => 'required|max:100|min:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'details' => 'required|max:200|min:5',
        ]);
        $data = array();
        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['details'] = $request->details;
        $image = $request->file('image');
        if ($image) {
            // $image_name = str_random(5);
            $image_name = hexdec(uniqid());
            $extension = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$extension;
            $upload_path = 'public/img/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $data['image'] = $image_url;
            @unlink($request->old_photo);
            $updatePost = DB::table('posts')->where('id', $id)->update($data);
            $notification = array(
                'message' => 'Alhamdulillah, Post is successfully Updated',
                'alert-type' => 'success'
            );
            return Redirect()->route('all-post')->with($notification);
        }
        else {
            $data['image'] = $request->old_photo;
            $updatePost = DB::table('posts')->where('id', $id)->update($data);
            $notification = array(
                'message' => 'Alhamdulillah, Post is successfully Updated',
                'alert-type' => 'success'
            );
            return Redirect()->route('all-post')->with($notification);
        }
    }

    public function DeleteSinglePost($id) {
        $data = DB::table('posts')->where('id', $id)->first();

        $deletePost = DB::table('posts')->where('id', $id)->delete();

        if($deletePost) {
            @unlink($data->image);
            
            $notification = array(
                'message' => 'Alhamdulillah, Post is successfully Deleted',
                'alert-type' => 'success'
            );
            return Redirect()->route('all-post')->with($notification);
        }
        else {
            $notification = array(
                'message' => 'Ops! something went wrong',
                'alert-type' => 'error'
            );
            return Redirect()->route('all-post')->with($notification);
        }
    }

}
