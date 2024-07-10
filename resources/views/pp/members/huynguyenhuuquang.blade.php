@extends('layouts.master')

@section('title', 'Huy Nguyen Huu Quang')

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
              <h2 class="title gradient-text">{{ __('Huy Nguyen Huu Quang') }}</h2>
              <span class="subtitle">Data Engineer</span>
              <ul class="social-share list-unstyled">
                <li><a href="{{ route('home')}}"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="mailto:huy.nguyenhuuquang@meowtech.vn"><i class="fa-solid fa-envelope"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="team-details-thumb">
              <img class="paralax-image" style="width: 400px; height: 400px; object-fit: contain;" src="{{asset('storage/assets/media/team/nguyenhuuquanghuy.jpg')}}" alt="avatar">
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('partials.estimateProject')

 @stop
