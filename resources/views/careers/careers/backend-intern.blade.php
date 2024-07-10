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
            <h2 class="title">Backend</h2>
            <span class="subtitle">{{ __('Online working') }}</span>
            <ul class="social-share list-unstyled">
              <li><a href="https://www.facebook.com/meowtechglobal//"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/meowtechglobal/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://meowtech.larksuite.com/share/base/form/shrusy0zUnTfU95XVcApF4Kwpub"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
            <div class="team-details-thumb">
              <img class="paralax-image" src="{{asset('storage/assets/media/careers/careers-backend-intern.webp')}}" width="613" height="460" alt="Thumbnail" type="image/webp">
            </div>
            <p>
            🌈 {{ __('Backend Internship') }}
              <br>
            🌸 {{ __('Job Description') }}:
              <br>{{ __("Participate in software architecture and data structure design.") }}
              <br>{{ __("Develop APIs based on JavaScript language, JavaScript Framework.") }}
              <br>{{ __("Participate in Web App - Data Platform projects.") }}
              <br>{{ __("Optimize systems for handling big data.") }}
              <br>{{ __("Research and apply techniques to ensure user requirements.") }}

              <br>
              <br> 👉🏻 {{ __('Requirements') }}:
              <br>- {{ __("3rd or 4th-year students with knowledge of JavaScript programming language") }}
              <br>- {{ __("Fundamental knowledge of CSS/SCSS, HTML...") }}
              <br>- {{ __("Understanding of relational databases and experience with one of the databases: MySQL, SQL Server") }}
              <br>- {{ __("Fundamental knowledge of Git") }}
              <br>- {{ __("Priority given to knowledge of Cloud: Azure/AWS") }}
              <br>- {{ __("Preference for candidates with experience working with Restful API, MySQL") }}

              <br>
              <br>🌈 {{ __('Time') }}
              <br>- {{ __("Part-time / Full-time") }}
              <br>- {{ __("Monday - Friday") }}
              <br>- {{ __("Maximum: 3 months") }}

              <br>
              <br>🥰 {{ __("Benefits") }}:
              <br>- {{ __('Online working') }}
              <br>- {{ __("Support for stamps") }}
              <br>- {{ __("Internship allowance") }}
              <br>- {{ __("Support for internship report writing") }}
              <br>- {{ __("1-1 mentorship guidance") }}
              <br>
              <i>👉🏻 {{ __("See more Internship Welfare Policies at") }}: <a href="https://meowtech.larksuite.com/docx/AB5zdVt0QojoqFxiVXTuSLXlsyh?from=from_copylink" target="_blank"> link </a></i>
            </p>
            <a href="https://meowtech.larksuite.com/share/base/form/shrusy0zUnTfU95XVcApF4Kwpub" class="axil-btn btn-large btn-fill-primary">{{ __("Apply") }}</a>
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
