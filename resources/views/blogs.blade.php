@extends('layouts.main')


@section('container')
    <div class="row g-4">    
        @foreach ($blogs as $blog)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        By: <a href="/authors/{{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->name }}</a>
                        in <a href="/categories/{{ $blog->category->slug }}" class="text-decoration-none">{{ $blog->category->name }}</a>
                    </h6>
                    <p class="card-text">{{ $blog->excerpt }}..</p>
                    <a href="/blog/{{ $blog->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
                {{-- <article class="mb-5 border-bottom pb-4">
                    <h2>
                    <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <h5>
                        
                    </h5>
                    <p>{{ $post->excerpt }}</p>
                    <a href="/blog/{{ $post->slug }}" class="text-decoration-none"></a>
                </article> --}}
            </div>
        @endforeach
    </div>
@endsection
