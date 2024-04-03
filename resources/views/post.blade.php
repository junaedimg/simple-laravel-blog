@extends('layouts/main')

@section('container-main')
    <h1 class="mb-3">{{ $post->title }}</h1>

    <p>By. <a href="/posts?author={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in
        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
        class="img-fluid">

    <article class="my-3 fs-5">
        {!! $post->body !!}
    </article>

    <a href="/posts" class="d-block mt-3">Back to posts</a>
@endsection
