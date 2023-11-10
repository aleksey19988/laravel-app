<?php
/** @var \App\Models\Post $post */
?>

@extends('layouts.main')
@section('content')
    <h1>Showing post</h1>
    Title: {{ $post->title }}
    Content: {{ $post->content }}
@endsection
