@extends('layouts.master')

@section('title', 'Blog details')

@section('content')
    @include('components.navbar')

    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    <li class="active">Blog</li>
                </ul>
                <h2 class="title h2 detail_title" data-id="{{ $id }}"></h2>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('storage/assets/media/others/bubble-9.webp') }}" width="377" height="330"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('storage/assets/media/others/bubble-17.webp') }}" width="457" height="565"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{ asset('storage/assets/media/others/line-4.webp') }}" width="1682" height="445"
                    alt="Line" type="image/webp">
            </li>
        </ul>
    </div>
    <section class="section-padding-equal">
        <div class="container">
            <div class="row row-40">
                <div class="col-lg-8">
                    <div class="single-blog">
                        <div class="single-blog-content blog-grid blog_detail">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="axil-sidebar">
                        <div class="widget widget-categories">
                            <h4 class="widget-title">{{ __('Categories') }}</h4>
                            <ul class="category-list list-unstyled">
                                <!-- -->
                            </ul>
                        </div>
                        <div class="widget widge-social-share">
                            <div class="blog-share">
                                <h5 class="title">{{ __('Follow') }}:</h5>
                                <ul class="social-list list-unstyled">
                                    <li><a href="https://www.facebook.com/meowtechglobal/"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.tiktok.com/@meowtechglobal"><i class="fab fa-tiktok"></i></a>
                                    </li>
                                    <li><a href="https://www.linkedin.com/company/meowtech/"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.instagram.com/meowtechglobal/"><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget-recent-post">
                            <h4 class="widget-title">{{ __('Recent posts') }}</h4>
                            <div class="post-list-wrap blog_recent">

                            </div>
                            <br>
                            <a>{{ __('See more') }} -></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       Recent Post Area Start      =-->
    <!--=====================================-->
    <section class="section section-padding-equal pt-0 related-blog-area">
        <div class="container">
            <div class="section-heading heading-left">
                <h3 class="title">{{ __("Related posts") }}</h3>
            </div>
            <div class="related-posts"></div>
        </div>
    </section>


    @include('partials.estimateProject')

@stop
@section('scripts')
    <script src="{{ asset('storage/assets/js/detail.js') }}"></script>
@stop
