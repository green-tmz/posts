<?php

declare(strict_types=1);

namespace Green\Posts\Http\Controllers;

use Green\Posts\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        Post::create([
            'title' => 'Test'
        ]);

        $posts = Post::all();
        return view("posts::index", [
            "posts" => $posts
        ]);
    }
}
