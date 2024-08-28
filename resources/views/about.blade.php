@extends('layouts.main')

@section('container')

<style>
    #section-1 .content-slider .slider #top-banner-1 {
    background: url("{{ asset('storage/' . $posts[0]->image) }}") no-repeat center center;
    background-size: cover;

  }
  #section-1 .content-slider .slider #top-banner-2 {
    background: url("{{ asset('storage/' . $posts[1]->image) }}") no-repeat center center;
    background-size: cover;
  }
  #section-1 .content-slider .slider #top-banner-3 {
    background: url("{{ asset('storage/' . $posts[2]->image) }}") no-repeat center center;
    background-size: cover;
  }
  #section-1 .content-slider .slider #top-banner-4 {
    background: url("{{ asset('storage/' . $posts[3]->image) }}") no-repeat center center;
    background-size: cover;
  }
</style>


<section id="section-1">
    <div class="content-slider">
        <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
        <input type="radio" id="banner2" class="sec-1-input" name="banner">
        <input type="radio" id="banner3" class="sec-1-input" name="banner">
        <input type="radio" id="banner4" class="sec-1-input" name="banner">
        <div class="slider">

            <div id="top-banner-1" class="banner">
                <div class="banner-inner-wrapper header-text">
                    <div class="main-caption">
                        <h1>{{ $posts[0]->title }}</h1>
                        <h2>{{ $posts[0]->excerpt }}</h2>
                        {{-- <div class="border-button"><a href="/about/{{ $posts[0]->slug }}">Read more...</a></div> --}}
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="more-info">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <i class="fa fa-user"></i>
                                            <h4><span>Author:</span><br>{{ $posts[0]->author->name }}</h4>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <i class="fa fa-globe"></i>
                                            <h4><span>Category:</span><br>{{ $posts[0]->category->slug }}</h4>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <i class="fa fa-home"></i>
                                            <h4><span>Publish :</span><br>{{ $posts[0]->created_at->diffForHumans() }}</h4>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <div class="main-button">
                                                <a href="/show/{{ $posts[0]->slug }}">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="top-banner-2" class="banner">
                <div class="banner-inner-wrapper header-text">
                    <div class="main-caption">
                        <h1>{{ $posts[1]->title }}</h1>
                        <h2>{{ $posts[1]->excerpt }}</h2>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="more-info">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <i class="fa fa-user"></i>
                                            <h4><span>Author:</span><br>{{ $posts[1]->author->name }}</h4>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <i class="fa fa-globe"></i>
                                            <h4><span>Category:</span><br>{{ $posts[1]->category->slug }}</h4>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <i class="fa fa-home"></i>
                                            <h4><span>Publish :</span><br>{{ $posts[1]->created_at->diffForHumans() }}</h4>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <div class="main-button">
                                                <a href="/show/{{ $posts[1]->slug }}">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="top-banner-3" class="banner">
                <div class="banner-inner-wrapper header-text">
                    <div class="main-caption">
                        <h1>{{ $posts[2]->title }}</h1>
                        <h2>{{ $posts[2]->excerpt }}</h2>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="more-info">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <i class="fa fa-user"></i>
                                            <h4><span>Author:</span><br>{{ $posts[2]->author->name }}</h4>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <i class="fa fa-globe"></i>
                                            <h4><span>Category:</span><br>{{ $posts[2]->category->slug }}</h4>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <i class="fa fa-home"></i>
                                            <h4><span>Publish :</span><br>{{ $posts[2]->created_at->diffForHumans() }}</h4>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <div class="main-button">
                                                <a href="/show/{{ $posts[2]->slug }}">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="top-banner-4" class="banner">
                <div class="banner-inner-wrapper header-text">
                  <div class="main-caption">
                    <h1>{{ $posts[3]->title }}</h1>
                    <h2>{{ $posts[3]->excerpt }}</h2>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="more-info">
                          <div class="row">
                            <div class="col-lg-3 col-sm-6 col-6">
                              <i class="fa fa-user"></i>
                              <h4><span>Author:</span><br>{{ $posts[3]->author->name }}</h4>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-6">
                              <i class="fa fa-globe"></i>
                              <h4><span>Category:</span><br>{{ $posts[3]->category->slug }}</h4>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-6">
                              <i class="fa fa-home"></i>
                              <h4><span>Publish :</span><br>{{ $posts[3]->created_at->diffForHumans() }}</h4>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-6">
                              <div class="main-button">
                                <a href="/show/{{ $posts[3]->slug }}">Read More...</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

        </div>

        <nav>
            <div class="controls">
              <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">1</span></label>
              <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">2</span></label>
              <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">3</span></label>
              <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">4</span></label>
            </div>
          </nav>

    </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<div class="visit-country mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="items">
                    <div class="row">
                        @foreach ($posts->skip(4) as $post)
                        <div class="col-lg-12">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5">
                                        <div class="image">
                                            <div class="position-absolute px-2 py-1"
                                                style="background-color: rgba(0,0,0,0.6)"><a
                                                    href="/about?category={{ $post->category->slug }}"
                                                    class=" text-decoration-none text-white">{{ $post->category->name }}</a>
                                            </div>
                                            @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}"
                                                alt="{{ $post->category->name }}" class="img-fluid">
                                            @else
                                            <img src="https://source.unsplash.com/681x696?{{ $post->category->name }}"
                                                class="card-img-top" alt="{{ $post->category->name }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-sm-7">
                                        <div class="right-content">
                                            <h4>{{ $post->title }}</h4>
                                            {{-- <span>By : <a href="/about?author={{ $posts[0]->author->username }}"
                                            class="text-decoration-none">
                                            {{ $posts[0]->author->name }}</a> in <a
                                                href="/about?category={{ $posts[0]->category->slug }}"
                                                class="text-decoration-none">{{ $posts[0]->category->slug }}</a>
                                            {{ $posts[0]->created_at->diffForHumans() }}</span> --}}

                                            <p>{{ $post->excerpt }}</p>
                                            <ul class="info">
                                                <li><i class="fa fa-user"></i><a
                                                        href="/about?author={{ $post->author->username }}"
                                                        class="text-decoration-none">
                                                        {{ $post->author->name }}</a></li>
                                                <li><i class="fa fa-globe"></i><a
                                                        href="/about?category={{ $posts[0]->category->slug }}"
                                                        class="text-decoration-none">{{ $posts[0]->category->slug }}</a>
                                                </li>
                                                <li><i class="fa fa-home"></i>
                                                    {{ $post->created_at->diffForHumans() }}</li>
                                            </ul>
                                            <div class="text-button d-flex justify-content-end">
                                                <a href="/show/{{ $post->slug }}">Read more... <i
                                                        class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="side-bar-map">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1116.6544431107193!2d112.64094137171006!3d-8.032340216651153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd627e0828d857d%3A0xb2bbc0706b62880!2sPerkantoran%20Terpadu%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1683703512969!5m2!1sid!2sid"
                                    width="100%" height="550px" frameborder="0" style="border:0; border-radius: 23px; "
                                    allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>


        </div>
    </div>
</div>

@endsection
