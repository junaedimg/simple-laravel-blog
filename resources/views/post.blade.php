@extends('layouts/main')

@section('container-main')
    <h2>{{ $post->title }}</h2>
    <label>category : <a id="link" href="/category/{{ $post->category->id }}">{{ $post->category->name }}</a></label>
    <p>{{ $post->body }}</p>
    <a href="/blog">
        Back to Blog
    </a>
@endsection
