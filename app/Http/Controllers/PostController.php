<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $posts = Post::orderBy('created_at', 'desc')->orderBy('title')->paginate();
    return view('posts.index', compact('posts'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post($request->validated());
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);
        if($post){
            return view('posts.show', compact('post'));
        }
        throw new NotFoundHttpException('Post not found');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
