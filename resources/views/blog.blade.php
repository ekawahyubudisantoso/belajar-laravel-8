@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $blog->title }}</h2>
        <h6>
            By: <a href="/authors/{{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->name }}</a>
            in <a href="/categories/{{ $blog->category->slug }}" class="text-decoration-none">{{ $blog->category->name }}</a>
        </h6>
        {!! $blog->body !!}
    </article>

    <a href="/blogs">Back to Blogs</a>
@endsection