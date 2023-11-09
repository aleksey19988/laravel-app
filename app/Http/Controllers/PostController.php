<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        dd($posts->reduce(function(Collection $carry, $item) {
            $carry->push($item->title);
            return $carry;
        }, collect()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $postsArr = [
            [
                'title' => 'title_5',
                'content' => 'content',
                'likes' => 44,
                'is_published' => true,
            ],
            [
                'title' => 'title_6',
                'content' => 'content_6',
                'likes' => 55,
                'is_published' => false,
            ],
        ];

        foreach($postsArr as $post) {
            Post::query()->create($post);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post = Post::query()->first();
        dd($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function delete()
    {
        $post = Post::withTrashed()->first();
        dd($post->restore());
    }

    public function firstOrCreate()
    {
        $post = Post::query()->firstOrCreate(['title' => 'title_1'], [
            'title' => 'new title',
            'content' => 'new content',
        ]);

        dd($post);
    }

    public function updateOrCreate()
    {
        $post = Post::query()->updateOrCreate(['title' => 'new title'], [
            'title' => 'updated title',
        ]);

        dd($post);
    }
}
