@extends('layouts/main')

@section('container-main')
    <h1>{{ $title }}</h1>
    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <span> author : <a href="/author/{{ $post->user->id }}">{{ $post->user->name }} </a></span>
        <p>
            {{ $post->excerpt }}
        </p>
        <a href="post/{{ $post->slug }}"> >> Detail Post</a>
    @endforeach
@endsection
