@extends('layouts.main')


@section('container')

    <h1 class="mb-5">Category: {{ $category }}</h1>

    @foreach ($blogs as $blog)
        <article>
            <h2>
               <a href="/blog/{{ $blog->slug }}">
                    {{ $blog->title }}
                </a>
            </h2>
            <h5>By: {{ $blog["author"] }}</h5>
            <p>{{ $blog->excerpt }}</p>
        </article>
    @endforeach
@endsection
