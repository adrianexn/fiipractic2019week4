<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at')->with('user')->get();
        return view('posts', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::with('user')->find($id);
        if($post)
        {
            return view('post', ['post' => $post]);
        }
        return redirect('/');
    }
}
