<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Request $request)
    {
        $posts = Post::filter($request->all())->paginate(10);
        $categories = Category::all();
        $tags = Tag::all();
//
        return view('post.index', compact('posts', 'categories', 'tags'));
    }
}
