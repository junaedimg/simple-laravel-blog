@extends('layout.main')

@section('header')
    {{ $title }} : {{ $category }}
@endsection

@section('content')
    @foreach ($posts as $post)
        <h2 class="mt-3">{{ $post['title'] }}</h2>
        <p>{{ $post['excerpt'] }}</p>
        <hr>
    @endforeach
@endsection
