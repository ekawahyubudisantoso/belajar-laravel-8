@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $blog->title }}</h2>
                <h6 class="">
                    By <a href="/blogs?author={{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->name }}</a>
                    in <a href="/blogs?category={{ $blog->category->slug }}" class="text-decoration-none">{{ $blog->category->name }}</a>
                </h6>
                @if ($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid" alt="">
                @else
                    <img src="" alt="">
                @endif
                <article class="my-3 fs-5">
                    {!! $blog->body !!}
                </article>
                
                <a href="/blogs">Back to Blogs</a>
            </div>
        </div>
    </div>
@endsection