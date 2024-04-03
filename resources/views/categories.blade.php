@extends('layouts.main')
@section('container-main')
    <div class="row justify-content-around gy-3">
        @foreach ($categories as $category)
            <div class="col-12 col-sm-4">
                <a href="/posts?category={{ $category['slug'] }}">
                    <div class="card">
                        <img src="https://source.unsplash.com/random/500x500/?{{ $category->name }}" class="card-img-top"
                            alt="...">
                        <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <span class="text-white text-decoration-none text-center w-100 p-3"
                                style="background-color: rgba(0, 0, 0, .5); ">
                                {{ $category['name'] }}
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
