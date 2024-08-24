<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts.index' , compact('posts'));
    }

    public function create() {
        return view('posts.create');

    }
    public function store(Request $request) {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1024',
            'content' => 'required|string|max:10000',
        ]);

        Post::query()->create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $validateData['content'],
        ]);
        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }

    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1024',
            'content' => 'required|string|max:10000',
        ]);
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $validateData['content'],
        ]);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post) {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}
