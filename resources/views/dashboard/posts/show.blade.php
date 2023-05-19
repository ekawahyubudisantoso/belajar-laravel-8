@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $blog->title }}</h2>

            <a href="/dashboard/blogs" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
            <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure about that?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            
            <article class="my-3 fs-5">
                {!! $blog->body !!}
            </article>
            
            <a href="/blogs">Back to Blogs</a>
        </div>
    </div>
</div>
@endsection