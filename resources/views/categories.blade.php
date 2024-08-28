@extends('layouts/main')

@section('container')

<!-- ***** Main Banner Area Start ***** -->
<div class="about-main-content">

</div>
<!-- ***** Main Banner Area End ***** -->
<div class="cities-town mb-3">
    <div class="container">
        <div class="row">
            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Categories</h2>
                    </div>
                    <div class="col-lg-12">
                        <div class="owl-cites-town owl-carousel">
                            @foreach ($categories as $category)
                            <div class="item">
                                <div class="thumb">
                                    <img src="https://source.unsplash.com/720x720?{{ $category->name }}" class="card-img"
                            alt="{{ $category->name }}">
                                    <h4>{{ $category->name }}</h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
