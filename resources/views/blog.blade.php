@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h6>
            By: <a href="" class="text-decoration-none">{{ $post->user->name }}</a>
            in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </h6>
        {!! $post->body !!}
    </article>

    <a href="/blogs">Back to Blogs</a>
@endsection