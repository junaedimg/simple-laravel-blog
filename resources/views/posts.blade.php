@extends('layouts/main')

@section('container-main')
    <h1>{{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-4">
            <img src="https://source.unsplash.com/random/1200x400/?web" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title"> {{ $posts[0]->title }}</h5>
                <p> By. <a href="/posts?author={{ $posts[0]->user->username }}">{{ $posts[0]->user->name }} </a> in <a
                        href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> <small
                        class="text-body-secondary">{{ $posts[0]->updated_at->diffForHumans() }}</small></p>
                <p class="card-text"> {{ $posts[0]->excerpt }}</p>
                <a href="post/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="container row gy-5 justify-content-between mx-auto">
            @foreach ($posts->skip(1) as $post)
                <div class="col-12 col-sm-4 col-md-3 d-flex mx-auto">
                    <div class="card">
                        <img src="https://source.unsplash.com/random/500x500/?{{ $post->category->name }}"
                            class="card-img-top" alt="...">

                        <a class="text-white text-decoration-none position-absolute p-2"
                            style="background-color: rgba(0, 0, 0, .5);"
                            href="/posts?category={{ $post->category->slug }}">
                            {{ $post->category->name }}</a>

                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p> By. <a href="/posts?author={{ $post->user->username }}">{{ $post->user->name }} </a>
                                {{ $posts[0]->updated_at->diffForHumans() }}</p>
                            <p>
                            <p class="card-text"> {{ $post->excerpt }}.</p>
                            <a href="post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end mt-5">
            {{ $posts->links() }}
        </div>
    @else
        <h2>Post Not Found</h2>
    @endif
@endsection
