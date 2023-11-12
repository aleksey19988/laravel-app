<?php
  /** @var Illuminate\Pagination\LengthAwarePaginator $posts */
?>
@extends('layouts.main')
@section('content')
    <h1>Posts</h1>
    <table class="table mb-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
                <th scope="col">Categories</th>
                <th scope="col">Tags</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->likes }}</td>
                <td>{{ $post->category->title ?? 'Category is not set' }}</td>
                <td>
                    <ul>
                        @foreach($post->tags as $tag)
                           <li>{{ $tag->title }}</li>
                        @endforeach
                    </ul>
                </td>
                <td class="d-flex">
                    <a href="{{ route('posts.show', $post->id) }}"><button class="btn btn-outline-success">Show</button></a>
                    <a href="{{ route('posts.edit', $post->id) }}"><button class="btn btn-outline-warning">Edit</button></a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{ $posts->withQueryString()->links() }}
    </div>
@endsection
