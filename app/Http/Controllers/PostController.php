<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = new Post;
        $posts = $post->all();

        return view('posts.list-posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|min:3|max:128',
            'conteudo' => 'required|string|min:10|max:1024',
        ]);

        $post = new Post;
        $post->user_id = auth()->id();
        $post->titulo = $validated['titulo'];
        $post->conteudo = $validated['conteudo'];
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|min:3|max:128',
            'conteudo' => 'required|string|min:10|max:1024',
        ]);
        $post->titulo = $validated['titulo'];
        $post->conteudo = $validated['conteudo'];
        $post->update();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
