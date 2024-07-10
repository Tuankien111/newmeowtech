@extends('layouts.master')

@section('title', 'Home')

@section('content')
    @include('components.navbar')

    <!--=====================================-->
    <!--=        Banner Area Start         =-->
    <!--=====================================-->
    <section class="banner banner-style-1">
        <div class="container">
            <div class="row align-items-end align-items-xl-start">
                <div class="col-lg-6">
                    <div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <h1 class="title gradient-text">{{ __('Innovate for future') }}</h1>
                        <span
                            class="subtitle">{{ __('We, the Meowtronauts, are venturing into space to innovate and create through technology, alongside excellent individuals joining us on a journey aboard a spaceship, reaching for new stars.') }}</span>
                        <a href="{{ route('service') }}" class="axil-btn btn-fill-primary btn-large">
                            {{ __('Our services') }}
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumbnail">
                        <div class="large-thumb" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="300">
                            <img src="{{ asset('storage/assets/media/banner/window.webp') }}" alt="Laptop" width="470"
                                height="367" type="image/webp">

                        </div>
                        <div class="large-thumb-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="800">
                            <img src="{{ asset('storage/assets/media/banner/laptop-poses.webp') }}" width="550"
                                height="530" alt="Laptop" type="image/webp">

                        </div>
                        <ul class="list-unstyled shape-group">
                            <li class="shape shape-1" data-sal="slide-left" data-sal-duration="500" data-sal-delay="800">
                                <img src="{{ asset('storage/assets/media/banner/chat-group.webp') }}" width="112"
                                    height="172" alt="chat" type="image/webp">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-21">
            <li class="shape shape-1" data-sal="slide-down" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('storage/assets/media/others/bubble-39.webp') }}" width="500" height="212"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-2" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="500">
                <img src="{{ asset('storage/assets/media/others/bubble-38.webp') }}" width="378" height="378"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-3" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('storage/assets/media/others/bubble-14.webp') }}" width="80" height="80"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-4" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('storage/assets/media/others/bubble-14.webp') }}" width="80" height="80"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-5" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('storage/assets/media/others/bubble-14.webp') }}" width="80" height="80"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-6" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('storage/assets/media/others/bubble-40.webp') }}" width="26" height="26"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-7" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('storage/assets/media/others/bubble-41.webp') }}" width="26" height="26"
                    alt="Bubble" type="image/webp">
            </li>
        </ul>
    </section>
    <!--=====================================-->
    <!--=        Service Area Start         =-->
    <!--=====================================-->
    <section class="section section-padding-2 bg-color-dark">
        <div class="container">
            <div class="section-heading heading-light-left">
                <span class="subtitle">{{ __('What We Can Do For You') }}</span>
                <h2 class="title">{{ __('Services we can help you with') }}</h2>
                <p class="opacity-50">
                    {{ __('Create innovative solutions, unlock enormous values for life through the best technology and excellent people.') }}
                </p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <div class="services-grid">
                        <div class="thumbnail">
                            <img src="{{ asset('storage/assets/media/icon/icon-chat-meow.webp') }}" width="800"
                                height="800" alt="icon" type="image/webp">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="https://chat.meowtech.vn" target="_blank">ChatMeow - AI</a></h5>
                            <p>{{ __('ChatMeow was created by MeowTech, featuring a space-themed user interface alongside various astronaut...') }}
                            </p>
                            <a href="https://chat.meowtech.vn" class="more-btn"
                                target="_blank">{{ __('Find out more') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="services-grid">
                        <div class="thumbnail">
                            <img src="{{ asset('storage/assets/media/icon/icon-5.webp') }}" width="800"
                                height="800" alt="icon" type="image/webp">
                        </div>
                        <div class="content">
                            <h5 class="title"> <a href="{{ route('data') }}">{{ __('Data Solutions') }}</a></h5>
                            <p>{{ __('Database design, Data modeling, Business intelligence, Tooling data reporting, Data analysis, ETL, Data warehousing, Growth planning...') }}
                            </p>
                            <a href="{{ route('data') }}" class="more-btn">{{ __('Find out more') }}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <ul class="list-unstyled shape-group-10">
            <li class="shape shape-1"><img src="{{ asset('storage/assets/media/others/line-9.webp') }}" width="850"
                    height="187" alt="Circle" type="image/webp"></li>
            <li class="shape shape-2"><img src="{{ asset('storage/assets/media/others/bubble-42.webp') }}"
                    width="124" height="445" alt="Circle" type="image/webp"></li>
            <li class="shape shape-3"><img src="{{ asset('storage/assets/media/others/bubble-43.webp') }}"
                    width="32" height="32" alt="Circle" type="image/webp"></li>
        </ul>
    </section>
    <!--=====================================-->
    <!--=       Case Study Area Start       =-->
    <!--=====================================-->
    <section class="section section-padding-equal case-study-featured-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="slick-slider slick-dot-nav featured-content"
                        data-slick='{"infinite": true,"arrows": false, "dots": true, "slidesToShow": 1, "asNavFor": ".featured-thumbnail"}'>
                        <div class="slick-slide">
                            <div class="case-study-featured">
                                <div class="section-heading heading-left">
                                    <span class="subtitle">{{ __('Featured Case Study') }}</span>
                                    <h2 class="title gradient-text">ChatMeow</h2>
                                    <p>{{ __('ChatMeow was created by MeowTech, featuring a space-themed user interface alongside various astronaut...') }}
                                    </p>
                                    <p>{{ __('Notably, ChatMeow boasts a brand new, stunning interface that is sure to impress.') }}
                                    </p>
                                    <a href="https://chat.meowtech.vn" class="axil-btn btn-fill-primary btn-large"
                                        target="_blank">ChatMeow</a>
                                </div>
                                <div class="case-study-counterup">
                                    <div class="single-counterup">
                                        <h2 class="count-number">
                                            <span class="number count" data-count="90">90</span>
                                            <span class="symbol">%</span>
                                        </h2>
                                        <span class="counter-title">{{ __('Time') }}</span>
                                    </div>
                                    <div class="single-counterup">
                                        <h2 class="count-number">
                                            <span class="number count" data-count="80">80</span>
                                            <span class="symbol">%</span>
                                        </h2>
                                        <span class="counter-title">{{ __('Cost') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="case-study-featured">
                                <div class="section-heading heading-left">
                                    <span class="subtitle">{{ __('Featured Case Study') }}</span>
                                    <h2 class="title gradient-text">{{ __('Data Solutions') }}</h2>
                                    <p>{{ __('Bussiness Business intelligence. Building data architecture. Building Dashboard Reporting. Data analysis, ETL, Data warehousing, Growth planning.') }}
                                    </p>
                                    <p>{{ __('Bringing data together. Focusing on KPIs. Improving the decision-making process. Telling trends. Resource optimization. Cost optimization') }}
                                    </p>
                                    <a href="{{ route('data') }}"
                                        class="axil-btn btn-fill-primary btn-large">{{ __('Read Case Study') }}</a>
                                </div>
                                <div class="case-study-counterup">
                                    <div class="single-counterup">
                                        <h2 class="count-number">
                                            <span class="number count" data-count="2">Clouds</span>
                                        </h2>
                                        <span class="counter-title">Azure, AWS</span>
                                    </div>
                                    <div class="single-counterup">
                                        <h2 class="count-number">
                                            <span class="number count" data-count="40">40</span>
                                            <span class="symbol">%</span>
                                        </h2>
                                        <span class="counter-title">{{ __('Optimization') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 d-none d-lg-block" data-sal="slide-left" data-sal-duration="800">
                    <div class="slick-slider slick-dot-nav featured-thumbnail"
                        data-slick='{"infinite": true,"arrows": false, "dots": false, "fade": true, "slidesToShow": 1, "asNavFor": ".featured-content"}'>
                        <div class="slick-slide">
                            <div class="case-study-featured-thumb">
                                <img src="{{ asset('storage/assets/media/others/case-study-meow-chat.webp') }}"
                                    width="740" height="740" alt="travel" type="image/webp">
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="case-study-featured-thumb">
                                <img src="{{ asset('storage/assets/media/others/case-study-embi.webp') }}" width="740"
                                    height="740" alt="travel" type="image/webp">
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="case-study-featured-thumb">
                                <img src="{{ asset('storage/assets/media/others/case-study-4.webp') }}" width="740"
                                    height="740" alt="travel" type="image/webp">
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="case-study-featured-thumb">
                                <img src="{{ asset('storage/assets/media/others/case-study-5.webp') }}" width="740"
                                    height="740" alt="travel" type="image/webp">
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="case-study-featured-thumb">
                                <img src="{{ asset('storage/assets/media/others/case-study-6.webp') }}" width="740"
                                    height="740" alt="travel" type="image/webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Video Area Start         =-->
    <!--=====================================-->
    <section class="section section-padding-equal bg-color-light background-section">
        <div class="container">
            <div class="row">
                <h4 class="gradient-text" style ="text-align:center; ">{{ __('CREATE YOUR WORLD') }}</h4>
                <h1 class="video-text">{{ __('Experience everywhere') }}</h1>
                <div class="framer-tbfm3p-container">
                    <div class="d-flex justify-content-center">
                        <video class="video-frame"
                            src="https://framerusercontent.com/modules/assets/mjPeXzmkaAq8em5bUCscWYsiZA~WYD2hx54LBarJVT4fb4TxJ8j5wu8mAzECYirlsYtfqc.mp4"
                            loop="" autoplay="" muted="" playsinline=""></video>
                        <div class="text-wrapper">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=        About Area Start         =-->
    <!--=====================================-->
    <section class="section section-padding-equal bg-color-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-us">
                        <div class="section-heading heading-left mb-0">
                            <span class="subtitle">{{ __('About Us') }}</span>
                            <h2 class="title mb--40 gradient-text">MeowTech</h2>
                            <p> {{ __('MeowTech was founded 14/04/2022.') }}<br>
                                {{ __("Our slogan: \"Innovate for future\".") }}
                                {{ __('We, the Meowtronauts, are venturing into space to innovate and create through technology, alongside excellent individuals joining us on a journey aboard a spaceship, reaching for new stars.') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1" data-sal="slide-up" data-sal-duration="800"
                    data-sal-delay="100">
                    <div class="contact-form-box">
                        <h3 class="title gradient-text">{{ __('Contact') }}</h3>
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
                                <a href="{{ route('home') }}" class="close" data-dismiss="alert"
                                    aria-label="close">×</a>
                            </div>
                        </form>
                    </div>

                    {{-- <script>
                        $(document).ready(function() {
                            $('#btn_submit_home').on('click', function() {
                            $("#btn_submit_home").attr("disabled", "disabled");
                            var name = $('#name').val();
                            var email = $('#email').val();
                            var phone = $('#phone').val();
                            if(name!="" && email!="" && phone!=""){
                                $.ajax({
                                    url: "php/mail.php",
                                    type: "POST",
                                    data: {
                                        name: name,
                                        email: email,
                                        phone: phone,
                                    },
                                    cache: false,
                                    success: function(dataResult){
                                        var dataResult = JSON.parse(dataResult);
                                        if(dataResult.statusCode==200){
                                            $("#btn_submit_home").removeAttr("disabled");
                                            $('#form-home').find('input:text').val('');
                                            $("#success").show();
                                            $('#success').html('Email has been sent successfully');
                                        }
                                        else if(dataResult.statusCode==201){
                                            alert("Error occured !");
                                        }

                                    }
                                });
                                }
                                else{
                                    alert('Please fill all the field !');
                                }
                            });
                        });
                    </script> --}}
                </div>
            </div>
        </div>
        <ul class="shape-group-6 list-unstyled">

            <li class="shape shape-1"><img src="{{ asset('storage/assets/media/others/bubble-7.webp') }}" width="460"
                    height="446" alt="Bubble" type="image/webp"></li>
            <li class="shape shape-2"><img src="{{ asset('storage/assets/media/others/line-4.webp') }}" width="1682"
                    height="445" alt="line" type="image/webp"></li>
            <li class="shape shape-3"><img src="{{ asset('storage/assets/media/others/line-5.webp') }}" width="1883"
                    height="498" alt="line" type="image/webp"></li>
        </ul>
    </section>
    <!--=====================================-->
    <!--=        Project Area Start         =-->
    <!--=====================================-->
    <section class="section section-padding-2">
        <div class="container">
            <div class="section-heading heading-left mb--40">
                <span class="subtitle">{{ __('Our Project') }}</span>
                <h2 class="title gradient-text">{{ __('Some of our') }} <br> {{ __('finest work.') }}</h2>
            </div>
            <div class="axil-isotope-wrapper">
                <div class="isotope-button isotope-project-btn">
                    <button data-filter=".all" class="is-checked"><span
                            class="filter-text">{{ __('All') }}</span></button>
                    <button data-filter=".tech-products"><span class="filter-text"> {{ __('Products') }}</span></button>
                    <button data-filter=".data-solutions"><span
                            class="filter-text">{{ __('Data Solutions') }}</span></button>
                </div>
                <div class="row row-35 isotope-list">
                    <div class="col-md-6 project tech-products all">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a href="https://chat.meowtech.vn" target="_blank">
                                    <img src="{{ asset('storage/assets/media/project/project-chat-meow.png') }}"
                                        width="1220" height="920" alt="project" type="image/webp">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="https://chat.meowtech.vn" target="_blank">ChatMeow</a>
                                </h4>
                                <span class="subtitle">{{ __('ChatMeow was created by MeowTech.') }}</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 project data-solutions tech-products all">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a href="https://app.powerbi.com/view?r=eyJrIjoiMjcxNzM4ZmQtOGJiNy00ZjY1LWEwNzktZmVjNjQ4Y2Y1NmJlIiwidCI6ImI3OTllMDhkLWM2YzAtNGI4ZS1iMWU3LTUyYTdjYzNmMThlYSIsImMiOjEwfQ%3D%3D"
                                    target="_blank">
                                    <img src="{{ asset('storage/assets/media/project/project-esg-indicator-dashboard.webp') }}"
                                        width="1220" height="920" alt="project" type="image/webp">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a
                                        href="https://app.powerbi.com/view?r=eyJrIjoiMjcxNzM4ZmQtOGJiNy00ZjY1LWEwNzktZmVjNjQ4Y2Y1NmJlIiwidCI6ImI3OTllMDhkLWM2YzAtNGI4ZS1iMWU3LTUyYTdjYzNmMThlYSIsImMiOjEwfQ%3D%3D"
                                        target="_blank">{{ __('ESG Indicator Dashboard') }}</a></h4>
                                <span class="subtitle">Power BI</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 project data-solutions all">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a href="{{ route('dashboard') }}" target="_blank">
                                    <img src="{{ asset('storage/assets/media/project/project-realtimedashboard.webp') }}"
                                        width="1220" height="920" alt="project" type="image/webp">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="{{ route('dashboard') }}" target="_blank">
                                        {{ __('Real time Dashboard') }}
                                    </a>
                                </h4>
                                <span class="subtitle">{{ __('Technical') }}: Azure, Databricks, PowerBI </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <ul class="shape-group-7 list-unstyled">
            <li class="shape shape-1"><img src="{{ asset('storage/assets/media/others/circle-2.webp') }}" width="886"
                    height="888" alt="circle" type="image/webp"></li>
            <li class="shape shape-2"><img src="{{ asset('storage/assets/media/others/bubble-2.webp') }}" width="150"
                    height="150" alt="Line" type="image/webp"></li>
            <li class="shape shape-3"><img src="{{ asset('storage/assets/media/others/bubble-1.webp') }}" width="88"
                    height="88" alt="Line" type="image/webp"></li>
        </ul>
    </section>
    <!--=====================================-->
    <!--=        Counter Up Area Start      =-->
    <!--=====================================-->
    <section class="section section-padding bg-color-dark">
        <div class="container">
            <div class="section-heading heading-light">
                <span class="subtitle">MeowTech</span>
                <h2 class="title">{{ __('Innovate for future') }}</h2>
                <p>{{ __('Our achievements.') }}</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="counterup-progress active">
                        <div class="icon">
                            <img src="{{ asset('storage/assets/media/icon/icon-7.webp') }}" width="32"
                                height="32" alt="Month of operation" type="image/webp">
                        </div>
                        <div class="count-number h2">
                            <span class="number count" data-count="1">1</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">{{ __('Years of operation') }}</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <div class="counterup-progress">
                        <div class="icon">
                            <img src="{{ asset('storage/assets/media/icon/icon-8.webp') }}" width="32"
                                height="32" alt="Project delivered" type="image/webp">
                        </div>
                        <div class="count-number h2">
                            <span class="number count" data-count="12">12</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">{{ __('Projects delivered') }}</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="counterup-progress">
                        <div class="icon">
                            <img src="{{ asset('storage/assets/media/icon/icon-9.webp') }}" width="32"
                                height="32" alt="Members" type="image/webp">
                        </div>
                        <div class="count-number h2">
                            <span class="number count" data-count="30">30</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">{{ __('Members') }}</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                    <div class="counterup-progress">
                        <div class="icon">
                            <img src="{{ asset('storage/assets/media/icon/apple.webp') }}" width="34" height="34"
                                alt="Our brands" type="image/webp">
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

        <div class="container">
            <div class="section-heading heading-light-left">
                <span class="subtitle">{{ __('Technologies') }}</span>
                <h2 class="title">{{ __('Our technology stack') }}</h2>
                <p>{{ __('What We Use. We’ve built solutions:') }}</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500">
                    <div class="brand-grid active">
                        <a href="https://azure.microsoft.com/en-us" target="_blank"><img
                                src="{{ asset('storage/assets/media/brand/brand-azure.webp') }}" width="133"
                                height="71" alt="Brand" type="image/webp"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="brand-grid">
                        <a href="https://aws.amazon.com/?nc1=h_ls" target="_blank"><img
                                src="{{ asset('storage/assets/media/brand/brand-aws.webp') }}" width="133"
                                height="73" alt="Brand" type="image/webp"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200">
                    <div class="brand-grid">
                        <a href="https://powerbi.microsoft.com/en-us/" target="_blank"><img
                                src="{{ asset('storage/assets/media/brand/brand-powerbi.webp') }}" width="133"
                                height="79" alt="Brand" type="image/webp"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <div class="brand-grid">
                        <a href="https://azure.microsoft.com/en-us/products/mysql" target="_blank"><img
                                src="{{ asset('storage/assets/media/brand/brand-mysql.webp') }}" width="133"
                                height="81" alt="Brand" type="image/webp"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400">
                    <div class="brand-grid">
                        <a href="https://www.docker.com" target="_blank"><img
                                src="{{ asset('storage/assets/media/brand/brand-docker.webp') }}" width="133"
                                height="76" alt="Brand" type="image/webp"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500">
                    <div class="brand-grid">
                        <a href="https://powerapps.microsoft.com/vi-vn/" target="_blank"><img
                                src="{{ asset('storage/assets/media/brand/brand-power-apps.webp') }}" width="133"
                                height="73" alt="Brand" type="image/webp"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600">
                    <div class="brand-grid">
                        <a href="https://azure.microsoft.com/en-us/services/sql-database/campaign/#overview"
                            target="_blank"><img src="{{ asset('storage/assets/media/brand/brand-sql-server.webp') }}"
                                width="133" height="84" alt="Brand" type="image/webp"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700">
                    <div class="brand-grid">
                        <a href="https://www.databricks.com" target="_blank"><img
                                src="{{ asset('storage/assets/media/brand/brand-data-bricks.webp') }}" width="133"
                                height="79" alt="Brand" type="image/webp"></a>
                    </div>
                </div>
            </div>

        </div>

        <ul class="list-unstyled shape-group-10">
            <!-- <li class="shape shape-1"><img src="{{ asset('storage/assets/media/others/line-9.png') }}" alt="Circle"></li> -->
            <li class="shape shape-2"><img src="{{ asset('storage/assets/media/others/bubble-42.webp') }}"
                    width="124" height="445" alt="Circle" type="image/webp"></li>
            <li class="shape shape-3"><img src="{{ asset('storage/assets/media/others/bubble-43.webp') }}"
                    width="32" height="32" alt="Circle" type="image/webp"></li>
        </ul>
        <ul class="list-unstyled shape-group-10">
            <li class="shape shape-1"><img src="{{ asset('storage/assets/media/others/line-9.webp') }}" width="850"
                    height="187" alt="Circle" type="image/webp"></li>
        </ul>
    </section>


    <!--=====================================-->
    <!--=        Testimonial Area Start      =-->
    <!--=====================================-->

    <!--=====================================-->
    <!--=        Pricing Area Start       	=-->
    <!--=====================================-->
    <!--=====================================-->
    <!--=        Brand Area Start       	=-->
    <!--=====================================-->
    <!--=====================================-->
    <!--=        Blog Area Start       	    =-->
    <!--=====================================-->
    <section class="section section-padding-equal">
        <div class="container">
            <div class="section-heading">
                <span class="subtitle">{{ __("What's Going On") }}</span>
                <h2 class="title gradient-text">{{ __('Latest stories') }}</h2>
                <p>{{ __('News From MeowTech') }} </p>
            </div>
            <div class="row g-0">
                <div class="col-xl-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                    <div class="blog-list active">
                        <div class="post-thumbnail">
                            <a href="https://meowtech.larksuite.com/docx/EUSddWCDPo3tQox7JnWugAbGswf" target="_blank"><img
                                    src="{{ asset('storage/assets/media/blog/Template_MT_Social_Media_Post.webp') }}"
                                    width="300" height="240" alt="Blog Post" type="image/webp"></a>
                        </div>
                        <div class="post-content">
                            <h5 class="title"><a href="https://meowtech.larksuite.com/docx/EUSddWCDPo3tQox7JnWugAbGswf"
                                    target="_blank">{{ __('MeowTech Brand Guidelines 2024') }}</a></h5>
                            <p>👩🏻‍🎨👩🏻‍🎨 {{ __('MeowTech Brand Guidelines 2024 with "Innovate For Future" - Meowtronauts...') }}</p>
                            <a href="https://meowtech.larksuite.com/docx/EUSddWCDPo3tQox7JnWugAbGswf" target="_blank"
                                class="more-btn">{{ __('Learn more') }}<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                    <div class="blog-list border-start">
                        <div class="post-thumbnail">
                            <a href="{{ route('blog') }}" target="_blank"><img
                                    src="{{ asset('storage/assets/media/blog/blog-2.webp') }}" width="300"
                                    height="240" alt="Blog Post" type="image/webp"></a>
                        </div>
                        <div class="post-content">
                            <h5 class="title"><a href="{{ route('blog') }}" target="_blank">{{ __('Top industries successfully applying 3D websites') }}</a></h5>
                            <p>{{ __('After the heyday of flat graphics, 3D graphics are now gradually emerging to dominate future design trends. With eye-catching effects,...') }}</p>
                            <a href="{{ route('blog') }}" class="more-btn" target="_blank">{{ __('Learn more') }}<i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-1 list-unstyled">
            <li class="shape shape-1"><img src="{{ asset('storage/assets/media/others/bubble-1.webp') }}" width="88"
                    height="88" alt="bubble" type="image/webp"></li>
            <li class="shape shape-2"><img src="{{ asset('storage/assets/media/others/line-1.webp') }}" width="1634"
                    height="292" alt="bubble" type="image/webp"></li>
            <li class="shape shape-3"><img src="{{ asset('storage/assets/media/others/line-2.webp') }}" width="1634"
                    height="293" alt="bubble" type="image/webp"></li>
            <li class="shape shape-4"><img src="{{ asset('storage/assets/media/others/bubble-2.webp') }}" width="150"
                    height="150" alt="bubble" type="image/webp"></li>
        </ul>
    </section>

    @include('partials.estimateProject')
@stop
