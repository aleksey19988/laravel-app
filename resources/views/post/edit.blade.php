<?php
/** @var Post $post */
?>
@extends('layouts.main')
@section('content')
    <h1>Create new post</h1>
    <form method="post" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content" rows="3">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
