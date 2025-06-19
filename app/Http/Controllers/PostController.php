<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::latest()->paginate(30);

        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $post = Post::create([
            'post_id' => uniqid(),
            'content' => $request->content,
            'user_id' => 0,
            'like_count' => 0,
            'comment_count' => 0,
            'uploader_id' => auth()->id() ?? 0, // Use authenticated user
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
}
