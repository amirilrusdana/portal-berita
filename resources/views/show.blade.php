@extends('layouts.main')

@section('container')


<div class="reservation-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="map">
                    @if ($post->image)
                    <div style="max-height:350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                    @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                    @endif
                </div>
            </div>
            <div class="col-lg-12">
                <form id="reservation-form" name="gs" method="submit" role="search" action="/about">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h4>{{ $post->title }}</h4>
                            <h6 class="blog-post-meta">By : <a href="/about?author={{ $post->author->id }}"
                                    class="text-decoration-none">
                                    {{ $post->author->name }}</a> in <a
                                    href="/about?category={{ $post->category->slug }}"
                                    class="text-decoration-none">{{ $post->category->name }}</a></h6>
                        </div>
                        <div class="col-lg-12 mb-5">
                            {!! $post->body !!}
                        </div>
                    </div>
                    <button class="main-button">back</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
