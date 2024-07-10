@extends('layouts.master')
@section('title', 'Not found')

@section('content')

    @include('components.navbar')

    <!--=====================================-->
    <!--=           404 Area Start          =-->
    <!--=====================================-->
    <section class="error-page onepage-screen-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <h2 class="title">Page not found</h2>
                        <p>The page you are looking for might have been removed had its name changed or is temporarily
                            unavailable. </p>
                        <a href="{{ route('home') }}" class="axil-btn btn-fill-primary">Go Back</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="400">
                        <img src="{{ asset('storage/assets/media/others/404.webp') }}" width="800" height="539"
                            alt="404" type="image/webp">
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('storage/assets/media/others/bubble-9.webp') }}" width="377" height="330"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('storage/assets/media/others/bubble-27.webp') }}" width="853" height="970"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{ asset('storage/assets/media/others/line-4.webp') }}" width="1682" height="445"
                    alt="Line" type="image/webp">
            </li>
        </ul>
    </section>

    @include('partials.estimateProject')

@stop
