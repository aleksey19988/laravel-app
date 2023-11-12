<?php

namespace App\Services\Post;

use App\Models\Post;

class Service
{
    public function store(array $data): void
    {
        $tags = $data['tags'];
        unset($data['tags']);

        /** @var Post $post */
        $post = Post::query()->create($data);
        $post->tags()->attach($tags);
    }

    public function update(Post $post, array $data): void
    {
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
    }
}
