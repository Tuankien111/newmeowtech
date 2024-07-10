@extends('layouts.master')

@section('title', 'About us')

@section('content')
    @include('components.navbar')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">{{ __('Innovate for future') }}</h1>
                <p>{{ __("We, the Meowtronauts, are venturing into space to innovate and create through technology, alongside excellent individuals joining us on a journey aboard a spaceship, reaching for new stars.") }}</p>
            </div>
            <div class="banner-thumbnail thumbnail-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img src="{{ asset('storage/assets/media/banner/banner-thumb-3.webp') }}" width="938" height="666"
                    alt="Illustration" type="image/webp">
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('storage/assets/media/others/bubble-9.webp') }}" width="377" height="330"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('storage/assets/media/others/bubble-22.webp') }}" width="565" height="862"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{ asset('storage/assets/media/others/line-4.webp') }}" width="1682" height="445"
                    alt="Line" type="image/webp">
            </li>
        </ul>
    </div>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-lg-6" data-sal="slide-up" data-sal-duration="800">
                <div class="about-us">
                    <div class="section-heading heading-left mb-0">
                        <span class="subtitle">{{ __('About Us') }}</span>
                        <h2 class="title mb--40 gradient-text">MeowTech</h2>
                        <p>{{ __('MeowTech was founded 14/04/2022.') }} <br>
                            {{ __('Our slogan: "Innovate for future".') }}
                            {{ __('We, the Meowtronauts, are venturing into space to innovate and create through technology, alongside excellent individuals joining us on a journey aboard a spaceship, reaching for new stars.') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                <div class="contact-form-box">
                    <h3 class="title gradient-text">{{ __('Contact Us') }}</h3>
                    <form id="form-home" action="" method="post">
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}:</label><br>
                            <input type="text" id="name" name="name"><br>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label><br>
                            <input type="text" id="email" name="email">
                        </div>
                        <div class="form-group mb--40">
                            <label for="phone">{{ __('Phone') }}:</label><br>
                            <input type="text" id="phone" name="phone">
                        </div>
                        <input type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary"
                            id="btn_submit_home" name="btn_submit_home" value="{{ __('Get Free Quote') }}" />
                        <div class="" id="success" style="display:none; margin: 20px; color: green;">
                            <a href="{{ route('home') }}" class="close" data-dismiss="alert" aria-label="close">×</a>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>


    <!--=====================================-->
    <!--=           Team  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding bg-color-dark pb--70 pb_lg--20 pb_md--0">
        <div class="container">
            <div class="section-heading heading-light">
                <span class="subtitle">MeowTech</span>
                <h2 class="title mb--50">{{ __('Our team') }}</h2>
                <p>{{ __('Innovate for future') }}</p>
            </div>
            <div class="row">

                <!-- CEO -->
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid active">
                        <div class="thumbnail">
                            <a href="{{ route('pp') }}">
                                <img src="{{ asset('storage/assets/media/team/team-founder-ceo.webp') }}" width="128"
                                    height="128" alt="Team Member" type="image/webp">
                            </a>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="{{ route('pp') }}">{{ __('Duc Vo Minh') }}</a></h5>
                            <span class="designation">Founder & CTO</span>
                        </div>
                    </div>
                </div>

                <!-- TEAM MEMBERS -->
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="/member/nghiangotrong">
                                <img class="member-avt" src="{{ asset('storage/assets/media/team/ngotrongnghia.jpg') }}"
                                    alt="Team Member" width="128" height="128">
                            </a>
                        </div>
                        <div class="content">
                            <h5 class="title">{{ __('Nghia Ngo Trong') }}</h5>
                            <span class="designation">Software Engineer</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="/member/kienlamminhtuan">
                                <img class="member-avt"
                                    src="{{ asset('storage/assets/media/team/lamminhtuankien.jpg') }}" alt="Team Member"
                                    width="128" height="128">
                            </a>
                        </div>
                        <div class="content">
                            <h5 class="title">{{ __('Kien Lam Minh Tuan') }}</h5>
                            <span class="designation">Software Engineer</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="/member/huynguyenhuuquang">
                                <img class="member-avt"
                                    src="{{ asset('storage/assets/media/team/nguyenhuuquanghuy.jpg') }}"
                                    alt="Team Member" width="128" height="128">
                            </a>
                        </div>
                        <div class="content">
                            <h5 class="title">{{ __('Huy Nguyen Huu Quang') }}</h5>
                            <span class="designation">Data Engineer</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <ul class="list-unstyled shape-group-10">
            <li class="shape shape-1"><img src="{{ asset('storage/assets/media/others/circle-1.webp') }}" width="663"
                    height="663" alt="Circle" type="image/webp"></li>
            <li class="shape shape-2"><img src="{{ asset('storage/assets/media/others/line-3.webp') }}" width="550"
                    height="550" alt="Circle" type="image/webp"></li>
            <li class="shape shape-3"><img src="{{ asset('storage/assets/media/others/bubble-5.webp') }}" width="105"
                    height="106" alt="Circle" type="image/webp"></li>
        </ul>
    </section>


    <!--=====================================-->
    <!--=       Experts  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding expert-counterup-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-heading heading-left">
                        <span class="subtitle">{{ __('Experts in field') }}</span>
                        <h2 class="gradient-text">{{ __('What makes us special?') }}</h2>
                        <p class="mb--50">{{ __('Our achievements.') }}</p>
                        <a href="{{ route('career') }}" class="axil-btn btn-large btn-fill-primary">{{ __('Careers') }}</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1">
                    <div class="row" id="no-equal-gallery">
                        <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800"
                            data-sal-delay="100">
                            <div class="counterup-progress counterup-style-2 active">
                                <div class="icon">
                                    <img class="dark-icon" src="{{ asset('storage/assets/media/icon/icon-7.webp') }}"
                                        width="32" height="32" alt="Icon" type="image/webp">
                                    <img class="light-icon" src="{{ asset('storage/assets/media/icon/icon-7.webp') }}"
                                        width="32" height="32" alt="Icon" type="image/webp">
                                </div>
                                <div class="count-number h2">
                                    <span class="number count" data-count="1">1</span>
                                    <span class="symbol">+</span>
                                </div>
                                <h6 class="title">{{ __('Years of operation') }}</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 mt--90 mt_md--0 no-equal-item" data-sal="slide-up" data-sal-duration="800"
                            data-sal-delay="200">
                            <div class="counterup-progress counterup-style-2">
                                <div class="icon">
                                    <img class="dark-icon" src="{{ asset('storage/assets/media/icon/icon-11.webp') }}"
                                        width="32" height="32" alt="Icon" type="image/webp">
                                    <img class="light-icon" src="{{ asset('storage/assets/media/icon/icon-11.webp') }}"
                                        width="32" height="32" alt="Icon" type="image/webp">
                                </div>
                                <div class="count-number h2">
                                    <span class="number count" data-count="12">12</span>
                                    <span class="symbol">+</span>
                                </div>
                                <h6 class="title">{{ __('Projects deliverd') }}</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800"
                            data-sal-delay="300">
                            <div class="counterup-progress counterup-style-2">
                                <div class="icon">
                                    <img class="dark-icon" src="{{ asset('storage/assets/media/icon/icon-12.webp') }}"
                                        width="32" height="32" alt="Icon" type="image/webp">
                                    <img class="light-icon" src="{{ asset('storage/assets/media/icon/icon-12.webp') }}"
                                        width="32" height="32" alt="Icon" type="image/webp">
                                </div>
                                <div class="count-number h2">
                                    <span class="number count" data-count="30">30</span>
                                    <span class="symbol">+</span>
                                </div>
                                <h6 class="title">{{ __('Members') }}</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800"
                            data-sal-delay="400">
                            <div class="counterup-progress counterup-style-2">
                                <div class="icon">
                                    <img class="dark-icon" src="{{ asset('storage/assets/media/icon/apple.webp') }}"
                                        width="34" height="34" alt="Icon" type="image/webp">
                                    <img class="light-icon" src="{{ asset('storage/assets/media/icon/apple.webp') }}"
                                        width="34" height="34" alt="Icon" type="image/webp">
                                </div>
                                <div class="count-number h2">
                                    <span class="number count" data-count="3">3</span>
                                    <span class="symbol">+</span>
                                </div>
                                <h6 class="title">{{ __('Our brands') }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=====================================-->
    <!--=       Location  Area Start        =-->
    <!--=====================================-->
    @include('partials.location')

    <!--=====================================-->
    <!--=       About Team  Area Start      =-->
    <!--=====================================-->
    <section class="section-padding-equal">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                    <div class="about-team">
                        <div class="thumbnail">
                            <img src="{{ asset('storage/assets/media/about/about-2.webp') }}" width="680"
                                height="782" alt="thumbnail" type="image/webp">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                    <div class="about-team">
                        <div class="section-heading heading-left">
                            <span class="subtitle">{{ __('Our Family') }}</span>
                            <h2 class="gradient-text">{{ __('Become a member?') }}</h2>
                            <p>{{ __('Create innovative solutions, unlock enormous values for life through the best technology and excellent people.') }}</p>
                            <a href="{{ route('career') }}" class="axil-btn btn-large btn-fill-primary">{{ __('Careers') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.estimateProject')

@stop
