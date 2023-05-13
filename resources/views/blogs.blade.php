@extends('layouts.main')


@section('container')
<h1 class="mb-5">{{ $title }}</h1>

    @if ($blogs->count())
        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $blogs[0]->title }}</h5>
                <p class="card-text">
                    <small>
                        By <a href="/authors/{{ $blogs[0]->author->username }}" class="text-decoration-none">{{ $blogs[0]->author->name }}</a>
                        in <a href="/categories/{{ $blogs[0]->category->slug }}" class="text-decoration-none">{{ $blogs[0]->category->name }}</a>
                        {{ $blogs[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $blogs[0]->excerpt }}</p>
                <a href="/blog/{{ $blogs[0]->slug }}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif
    
    <div class="container">
        <div class="row">    
            @foreach ($blogs->skip(1) as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white rounded" style="background-color: rgba(0,0,0,0.7)">
                            <a href="/categories/{{ $blog->category->slug }}" class="text-decoration-none text-white">
                                {{ $blog->category->name }}
                            </a>
                        </div>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p>
                            <small>
                                By <a href="/authors/{{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->name }}</a>
                                {{ $blog->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $blog->excerpt }}..</p>
                        <a href="/blog/{{ $blog->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
