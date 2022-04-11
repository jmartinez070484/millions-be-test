<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request){
        $data = [
            'posts' => Post::orderBy('created_at','DESC') -> paginate(5)
        ];

        return view('posts.index')->with($data);
    }

    public function show(Post $post){
        $data = [
            'post' => $post
        ];

        return view('posts.show')->with($data);
    }
}
