<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\{
    PostResource,
    PostCollection,
};
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return new PostCollection(Post::all());
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        Post::create($request->validated());

        return response()->json('data berhasil ditambahkan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // return new PostResource($post);

        return response()->json([
            'data'  => $post,
            'message'   => 'data ada kok',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return response()->json([
            'post' => $post,
            'message' => 'data ada',
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return new PostResource($post);

        // return response()->json(['message' => 'data berhasil diupdate..']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
