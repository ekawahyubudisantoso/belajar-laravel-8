@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $blog->title }}</h2>

            <a href="/dashboard/blogs" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
            
            <article class="my-3 fs-5">
                {!! $blog->body !!}
            </article>
            
            <a href="/blogs">Back to Blogs</a>
        </div>
    </div>
</div>
@endsection