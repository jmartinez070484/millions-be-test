<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Request $request){
        $this->authorize('viewAny', Post::class);

        return Post::paginate(10);
    }

    public function show($postid){
        $post = Post::findOrFail($postid);
        $this->authorize('view', [Post::class, $post]);

        return $post;
    }

    public function update(StorePostRequest $request, $postid){
        $post = Post::findOrFail($postid);
        $this->authorize('update', [Post::class, $post]);

        return $post;
    }
}
