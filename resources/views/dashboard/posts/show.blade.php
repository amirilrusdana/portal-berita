@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-11">
            <h2 class="blog-post-title mb-2">{{ $post->title }}</h2>
            @if ($post->image)
            <div style="max-height:350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            <article class="my-3 fs-6">
                <p>{!! $post->body !!}</p>

            </article>
            <br>
            <h4>
                <a href="/dashboard/posts" class="btn btn-outline-dark"><span data-feather="arrow-left"></span> Back to
                    all my post</a>
                &nbsp;
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-decoration-none"><span
                        data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                            data-feather="trash-2"></span> Delete</button>
                </form>
            </h4>
        </div>
    </div>
</div>

@endsection
