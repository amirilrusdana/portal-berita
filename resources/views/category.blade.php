@extends('layouts/main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $category }}</h1>
    </div>
</main>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    @foreach ($posts as $post)
    <article class="blog-post">
        <h2 class="h2"><a href="/about/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <h5 class="blog-post-meta">By : <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name }}</a>
            in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        <p>{{ $post->excerpt }}</p>
    </article>

    @endforeach

</main>
@endsection
