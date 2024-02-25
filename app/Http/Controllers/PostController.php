<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
// use TCG\Voyager\Models\Category;


class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();

        $posts = Post::with('category')->get();

        return view('welcome', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    

}