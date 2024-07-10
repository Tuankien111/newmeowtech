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
            <h2 class="title">Digital Marketing</h2>
            <span class="subtitle">{{ __('Online working') }}</span>
            <ul class="social-share list-unstyled">
              <li><a href="https://www.facebook.com/meowtechglobal//photos/pb.100069899750072.-2207520000../745642223494825/?type=3"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/p/CYBKqvbux67/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://meowtech.larksuite.com/share/base/form/shrusy0zUnTfU95XVcApF4Kwpub"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
            <div class="team-details-thumb">
              <img class="paralax-image" src="{{asset('storage/assets/media/careers/careers-digital-marketing-intern.webp')}}"  width="613" height="460" alt="Thumbnail" type="image/webp">
            </div>
            <p>
            🌈 {{ __("Digital Marketing Internship") }}
              <br>
              🌤 {{ __('Job Description') }}
              <br>- {{ __("Perform tasks assigned by the leader") }}
              <br>- {{ __("Manage media channels (SEO, increase fanpage likes, writing articles, website)") }}
              <br>- {{ __("Build and implement advertising campaigns") }}
              <br>- {{ __("Contribute to building and planning social media content (Facebook, Instagram…)") }}
              <br>- {{ __("Execute tasks to improve article quality and traffic on various platforms") }}
              <br>
              <br>🌈 {{ __('Requirements') }}
              <br>- {{ __("Preference for recent graduates or final-year students awaiting graduation") }}
              <br>- {{ __("Studied at universities, colleges majoring in: Marketing, Communication, Journalism, IT") }}
              <br>- {{ __("Have a career orientation in Marketing") }}
              <br>- {{ __("Have a personal laptop") }}
              <br>
              <br>🥰 {{ __('Benefits') }}
              <br>- {{__("Support internship certificates and reports")}}
              <br>- {{ __("Receive advanced training in knowledge and skills") }}
              <br>- {{ __("Performance-based allowances") }}
              <br>
             <i>👉🏻 {{ __("See more Internship Welfare Policies at") }}: <a href="https://meowtech.larksuite.com/docx/AB5zdVt0QojoqFxiVXTuSLXlsyh?from=from_copylink" target="_blank"> link </a></i>

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
