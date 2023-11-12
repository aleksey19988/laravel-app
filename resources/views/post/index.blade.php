@extends('layouts.main')
@section('content')
    <h1>Posts</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->likes }}</td>
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
@endsection
