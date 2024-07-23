<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with(['user', 'category'])->get();
        return response()->json($posts);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max: 255',
            'body' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
        ]);

        Log::info('Post Created: ', ['post' => $post]);
        return response()->json($post,201);
    }

    public function show(Post $post){
        $post->load(['user', 'category']);
        return response()->json($post);
    }

    public function update(Request $request, Post $post){
        $request->validate([
            'title' => 'required|string|max: 255',
            'body' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post->update($request->only(['title','body','category_id']));
        Log::info('Post Updated: ', ['post' => $post]);

        return response()->json($post);
    }

    public function destroy(Post $post){
        $post->delete();
        Log::info('Post Deleted: ', ['post' => $post]);
        return response()->json(null,204);
    }
    
}
