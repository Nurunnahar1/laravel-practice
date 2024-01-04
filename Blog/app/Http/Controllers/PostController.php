<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    function postPage(){
        return view('home');
    }

    function postStore(Request $request){
        $post = Post::create([
            'title'=>$request->title,
            'content'=>$request->content
        ]);
        Session::flash('msg', 'Post saved successfully');
        return back();
    }

    function postUpdatePage($id){
      
        $post = Post::where('id', $id)->first();
        return view('update',compact('post'));
    }

    function postEdit(Request $request, $id){
        $post = Post::where('id', $id)->first();
       
          $post->update([
             'title' => $request->input('title'),
             'content' => $request->input('content'),
        ]);
       Session::flash('msg', 'Post update successfully');
       return redirect()->route('post.store');
    }
}
