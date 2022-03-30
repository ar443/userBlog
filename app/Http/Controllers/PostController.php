<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.dashboard', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        Post::create(
            [
                'title'=> $request->title,
                'body'=> $request->body,
                'user_id'=>Auth::user()->id,
            ]
        );
        return back();
    }

    public function show(Post $post)
    {
        return view('post.view',compact('post'));
    }


    public function edit(Post $post)
    {
        return view('post.edit',compact('post'));

    }


    public function update(Request $request, Post $post)
    {
    //    return $request;
        $post->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        // return $post;
        return back();
    }


    public function destroy(Post $post)
    {
       $post->delete();
       return back();

    }
}
