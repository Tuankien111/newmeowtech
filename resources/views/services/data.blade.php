@extends('layouts.master')
@section('title', 'Services')

@section('content')

    @include('components.navbar')


    <!--=====================================-->
    <!--=        Banner Area Start         =-->
    <!--=====================================-->
    <section class="banner banner-style-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <h1 class="title">{{ __('Data Solutions') }}</h1>
                        <h1 class="subtitle" style="color: white; font-size: 20px">{{ __('Data is the lifeblood of your business') }}
                        </h1>
                        <a href="https://meowtech.larksuite.com/file/IiQibHhzkoZu7pxN044uicEWsFS?from=from_copylink"
                            target='_blank' class="axil-btn btn-fill-white btn-large">{{ __('Brochure') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-18">
            <li class="shape shape-1" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100"><img
                    src="{{ asset('storage/assets/media/banner/banner-shape-1.webp') }}" width="700" height="600"
                    alt="Shape" type="image/webp"></li>
            <li class="shape shape-2" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100"><img
                    src="{{ asset('storage/assets/media/banner/banner-shape-2.webp') }}" width="702" height="400"
                    alt="Shape" type="image/webp"></li>
            <li class="shape shape-3" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="600"><img
                    src="{{ asset('storage/assets/media/others/bubble-16.webp') }}" width="24" height="24"
                    alt="Shape" type="image/webp"></li>
            <li class="shape shape-4" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="600"><img
                    src="{{ asset('storage/assets/media/others/bubble-15.webp') }}" width="140" height="140"
                    alt="Shape" type="image/webp"></li>
            <li class="shape shape-5" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="600"><img
                    src="{{ asset('storage/assets/media/others/bubble-14.webp') }}" width="80" height="80"
                    alt="Shape" type="image/webp"></li>
            <li class="shape shape-6" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="600"><img
                    src="{{ asset('storage/assets/media/others/bubble-16.webp') }}" width="24" height="24"
                    alt="Shape" type="image/webp"></li>
            <li class="shape shape-7" data-sal="slide-down" data-sal-duration="500" data-sal-delay="600"><img
                    src="{{ asset('storage/assets/media/others/bubble-26.webp') }}" width="408" height="300"
                    alt="Shape" type="image/webp"></li>
        </ul>
    </section>

    @include('partials.dataSolutionsService')

    @include('partials.estimateProject')

@stop
