<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string'],
            'content' => ['string', 'required'],
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        /** @var Post $post */
        $post = Post::query()->create($data);
        $post->tags()->attach($tags);

        return to_route('posts.index');
    }
}
