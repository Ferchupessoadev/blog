<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::query()->orderBy('id', 'desc')->paginate(10);

        if (!$posts) {
            abort(404);
        }

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request): RedirectResponse|JsonResponse
    {
        $new_post = array_merge($request->all(), ['published_at' => now(), 'image' => 'https://github.com/ferchupessoadev.png']);
        $post = Post::query()->create($new_post);

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Artículo creado con éxito',
                'post' => $post
            ], 201);
        }

        return redirect()->route('articulos.show', $post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): View
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): View
    {
        $post->update($request->all());

        return redirect()->route('articulos.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): JsonResponse
    {
        $post->delete();

        return response()->json(['success' => true]);
    }
}
