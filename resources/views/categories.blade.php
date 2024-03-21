@extends('layouts.main')

@section('container-main')
    @foreach ($categories as $category)
        <ul>
            <li>
                <a href="/category/{{ $category['id'] }}">
                    {{ $category['name'] }}
                </a>
            </li>
        </ul>
    @endforeach
@endsection
