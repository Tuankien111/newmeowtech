@extends('layouts.master')

@section('title', 'Job description')

@section('content')

  @include('components.navbar')

  <!--=====================================-->
  <!--=       Breadcrumb Area Start       =-->
  <!--=====================================-->
  <div class="breadcrum-area">
    <div class="container">
      <div class="breadcrumb">
        <ul class="list-unstyled">
          <li><a href= "{{ route('career')}}">{{ __('Careers') }}</a></li>
          <li class="active">{{ __('Job Description') }}</li>
        </ul>
        <h1 class="title h2">{{ __('Job Description') }}</h1>
      </div>
    </div>
    <ul class="shape-group-8 list-unstyled">
      <li class="shape shape-1 sal-animate" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
        <img src="{{asset('storage/assets/media/others/bubble-9.webp')}}" width="377" height="330" alt="Bubble" type="image/webp">
      </li>
      <li class="shape shape-2 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
        <img src="{{asset('storage/assets/media/others/bubble-17.webp')}}" width="457" height="565" alt="Bubble" type="image/webp">
      </li>
      <li class="shape shape-3 sal-animate" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
        <img src="{{asset('storage/assets/media/others/line-4.webp')}}" width="1682" height="445" alt="Line" type="image/webp">
      </li>
    </ul>
  </div>
  <!--=====================================-->
  <!--=      Team Details Area Start      =-->
  <!--=====================================-->
  <section class="section-padding-equal team-details-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="row-lg-6">
          <div class="team-details-content">
            <h2 class="title">Sales IT (Online) </h2>
            <span class="subtitle">Full time/ Part time</span>
            <ul class="social-share list-unstyled">
              <li><a href="https://www.facebook.com/meowtechglobal/"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/meowtechglobal"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://meowtech.larksuite.com/share/base/form/shrusy0zUnTfU95XVcApF4Kwpub"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
            <div class="team-details-thumb">
              <img class="paralax-image" src="{{asset('storage/assets/media/careers/careers-sales-it.webp')}}"  width="610" height="460" alt="Thumbnail" type="image/webp">
            </div>
            <p>
            🌈 Sales IT (Online)
              <br>
              🥰 {{ __("Job is very relaxed, quickly closing deals for sales enthusiasts") }}😘
              <br>
              🥺 {{ __("Recruiting position Sales Staff (Online) for technology products (Business Intelligence for Employee Management, Data Solutions, Business Intelligence) for B2B enterprises") }}
              <br>
              <br>
              🥰 {{ __("Job Description") }}:
              <br>- {{ __("Research and search for potential customers") }}
              <br>- {{ __("Take care of potential customers assigned by the company") }}
              <br>- {{ __("Understand customer requirements") }}
              <br>- {{ __("Negotiate, bargain and close contracts with customers") }}
              <br>- {{ __("Efficiently handle orders processing") }}
              <br>- {{ __("Regularly report work") }}
              <br>- {{ __("Implement sales growth") }}
              <br>
              <br>🥳 {{ __("Requirements") }}
              <br>- {{ __("Experience in B2B sales") }}
              <br>- {{ __("Skills in searching for customers through social networks: LinkedIn, Facebook, Google maps") }}
              <br>- {{ __("Preference for candidates with knowledge of technology products") }}
              <br>- {{ __("Good communication skills, agile, good problem-solving skills") }}
              <br>- {{ __("Careful, honest, meticulous") }}
              <br>
              <br>🤩 {{ __("Benefits") }}
              <br>- {{ __("Income from 6-30 million/month + commission (10-30% per order)") }}
              <br>- {{ __("Flexible working hours") }}
              <br>- {{ __("Working hours: Mon-Fri. 8:30 - 17:30") }}
              <br>- {{ __("Phone allowance 200,000 VND/month") }}
              <br>- {{ __("Dynamic, youthful environment, always encouraging employees to be proactive and creative in their work") }}
              <br>
              <i>👉🏻 {{ __("See more Employee welfare policies for sales staff at:") }} <a href="https://meowtech.larksuite.com/docx/Ycbyd7bXNoZpB2xyg4buEZEcsJc?from=from_copylink" target="_blank"> link </a></i>
            </p>
            <a href="https://meowtech.larksuite.com/share/base/form/shrusy0zUnTfU95XVcApF4Kwpub" class="axil-btn btn-large btn-fill-primary">{{ __('Apply') }}</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--=====================================-->
  <!--=       Location  Area Start        =-->
  <!--=====================================-->
  @include('partials.location')

  @include('partials.estimateProject')

 @stop
