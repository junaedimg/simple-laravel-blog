@extends('layout/main')

@section('header')
    {{ $title }}
@endsection

@section('content')
    <h2>Author</h2>
    @foreach ($posts as $post)
        <h3>{{ $post['title'] }}</h3>
        <p> {{ $post['excerpt'] }}</p>
    @endforeach
@endsection
