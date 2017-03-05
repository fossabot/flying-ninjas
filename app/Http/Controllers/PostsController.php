<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $title = 'News';
        return view('pages.news.index', compact('posts', 'title'));
    }
    public function show($slug) {
        $posts = Post::find($slug);
        $title = $posts->title;
        return view('pages.news.show', compact('posts', 'title'));
    }
}
