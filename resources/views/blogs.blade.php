@extends('layouts.main')


@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row mb-3 justify-content-center">
        <div class="col-md-4">
            <form action="/blogs">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($blogs->count())
        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $blogs[0]->title }}</h5>
                <p class="card-text">
                    <small>
                        By <a href="/blogs?author={{ $blogs[0]->author->username }}" class="text-decoration-none">{{ $blogs[0]->author->name }}</a>
                        in <a href="/blogs?category={{ $blogs[0]->category->slug }}" class="text-decoration-none">{{ $blogs[0]->category->name }}</a>
                        {{ $blogs[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $blogs[0]->excerpt }}</p>
                <a href="/blog/{{ $blogs[0]->slug }}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    
        <div class="container">
            <div class="row">    
                @foreach ($blogs->skip(1) as $blog)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white rounded" style="background-color: rgba(0,0,0,0.7)">
                                <a href="/blogs?category={{ $blog->category->slug }}" class="text-decoration-none text-white">
                                    {{ $blog->category->name }}
                                </a>
                            </div>
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p>
                                <small>
                                    By <a href="/blogs?author={{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->name }}</a>
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
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $blogs->links() }}
    </div>

@endsection
