@extends('layouts.master')

@section('title', 'Nghia Ngo Trong')

@section('content')
    @include('components.navbar')

    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area">
      <div class="container">
        <div class="breadcrumb">
          <ul class="list-unstyled">
            <li><a href="{{ route('home')}}">{{ __('Home') }}</a></li>
            <li class="active">{{ __('Team Details') }}</li>
          </ul>
          <h1 class="title h2">{{ __('Team Details') }}</h1>
        </div>
      </div>
      <ul class="shape-group-8 list-unstyled">
        <li class="shape shape-1 sal-animate" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
          <img src="{{asset('storage/assets/media/others/bubble-9.webp')}}" alt="Bubble">
        </li>
        <li class="shape shape-2 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
          <img src="{{asset('storage/assets/media/others/bubble-17.webp')}}" alt="Bubble">
        </li>
        <li class="shape shape-3 sal-animate" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
          <img src="{{asset('storage/assets/media/others/line-4.webp')}}" alt="Line">
        </li>
      </ul>
    </div>
    <!--=====================================-->
    <!--=      Team Details Area Start      =-->
    <!--=====================================-->
    <section class="section-padding-equal team-details-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="team-details-content">
              <h2 class="title gradient-text">{{ __('Nghia Ngo Trong') }}</h2>
              <span class="subtitle">Software Engineer</span>
              <ul class="social-share list-unstyled">
                <li><a target="_blank" href="https://www.linkedin.com/in/ngotrongnghia/"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a target="_blank" href="https://ngotrongnghia.vercel.app"><i class="fa-solid fa-link"></i></a></li>
                <li><a target="_blank" href="mailto:nghia.ngotrong@meowtech.vn"><i class="fa-solid fa-envelope"></i></a></li>
              </ul>
              <div>
                <p style="text-align: justify; font-size:medium;" >
                {{ __("Hi there! I'm Nghia, I'm a Web Developer at MeowTech. I am highly responsible and committed to my work, constantly seeking personal growth. My goal is to contribute my skills to drive innovation in new projects.") }}
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="team-details-thumb">
              <img class="paralax-image" style="width: 400px; height: 400px; object-fit: contain; border-radius: 10px;" src="{{asset('storage/assets/media/team/ngotrongnghia.jpg')}}" alt="avatar">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--=====================================-->
    <!--=       Work Process Area Start     =-->
    <!--=====================================-->
    <section class="section section-padding bg-color-light pb--70">
      <div class="container">
        <div class="section-heading mb--90">
          <span class="subtitle">{{ __('My Company') }}</span>
          <h2 class="title">{{ __('I have worked') }}</h2>
        </div>
        <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
          <div class="thumbnail paralax-image">
            <a href="{{ route('home')}}"><img src="{{asset('storage/assets/media/business-logo/meow-house-logo.webp')}}" width="410" height="410" alt="Thumbnail" type="image/webp"></a>
          </div>
          <div class="content">
            <span class="subtitle">MeowTech</span>
            <h6>{{ __('Oct 2023 - Present') }}</h6>
            <h3 class="title">Software Engineer</h3>
            <p>{{ __('MeowTech was founded on 14/04/2022. We create innovative solutions, unlock enormous values for life through the best technology and excellent people. Our services: 3D Web, Marketing Automation System with a unique feature which is "New Customer Recommendation". Data Solutions - Business Intelligence.') }}</p>
          </div>
        </div>


        <ul class="shape-group-17 list-unstyled">
          <li class="shape shape-1"><img src="{{asset('storage/assets/media/others/bubble-24.webp')}}" width="400" height="271" alt="Bubble" type="image/webp"></li>
          <li class="shape shape-2"><img src="{{asset('storage/assets/media/others/bubble-23.webp')}}" width="1005" height="1338" alt="Bubble" type="image/webp"></li>
          <li class="shape shape-3"><img src="{{asset('storage/assets/media/others/line-4.webp')}}" width="1682" height="445" alt="Line" type="image/webp"></li>
          <li class="shape shape-4"><img src="{{asset('storage/assets/media/others/line-5.webp')}}" width="1883" height="498" alt="Line" type="image/webp"></li>
          <li class="shape shape-5"><img src="{{asset('storage/assets/media/others/line-4.webp')}}" width="1682" height="445" alt="Line" type="image/webp"></li>
          <li class="shape shape-6"><img src="{{asset('storage/assets/media/others/line-5.webp')}}" width="1883" height="498" alt="Line" type="image/webp"></li>
        </ul>
    </section>

    @include('partials.estimateProject')

@stop
