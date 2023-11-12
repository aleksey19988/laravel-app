<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::query()->paginate(15);
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.index', compact('posts', 'categories', 'tags'));
    }
}
