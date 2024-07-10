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
            <span class="subtitle">Full time</span>
            <ul class="social-share list-unstyled">
              <li><a href="https://www.facebook.com/meowtechglobal//"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/meowtechglobal"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://meowtech.larksuite.com/share/base/form/shrusy0zUnTfU95XVcApF4Kwpub"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
            <div class="team-details-thumb">
              <img class="paralax-image" src="{{asset('storage/assets/media/careers/careers-digital-marketing-fulltime.webp')}}"  width="610" height="460" alt="Thumbnail" type="image/webp">
            </div>
            <p>
            🌈 Digital Marketing Full time
              <br>
              🌤 {{ __('Job Description') }}
              <br>- {{ __("Plan, analyze, and execute Digital Marketing activities: Facebook, Google,…") }}
              <br>- {{ __("Monitor and evaluate to optimize the design/content of Facebook, Google ad campaigns…") }}
              <br>- {{ __("Analyze, measure, and report fanpage metrics. Responsible for engaging with viewers") }}
              <br>- {{ __("Administer and edit, update news on website, facebook, …") }}
              <br>- {{ __("Write articles for company website, facebook, and marketing channels") }}
              <br>- {{ __("Ensure technical stability and information quality on website") }}
              <br>- {{ __("Combine digital marketing channels to increase website traffic") }}
              <br>- {{ __("Develop suitable approaches to reach and manage communities on social media channels: Facebook, Google…") }}
              <br>- {{ __("Perform other tasks as requested by Direct Manager.") }}
              <br>
              <br>🌈 {{ __('Requirements') }}
              <br>- {{__("Graduated from University or above, major in Marketing/Journalism…")}}
              <br>- {{ __("At least 06 months of experience in equivalent positions") }}
              <br>- {{ __("Skills in image design, video editing") }}
              <br>- {{ __("Proficient in office computer skills (Word, Excel, Powerpoint)") }}
              <br>- {{ __("Use software to analyze web and social media metrics") }}
              <br>- {{ __("Web management skills") }}
              <br>
              <br>🥰 {{ __('Benefits') }}
              <br>- {{ __("Hybrid work") }}
              <br>- {{ __("Productivity-based bonus") }}
              <br>- {{ __("Basic salary: 9,000,000 VND/month + productivity bonus according to KPI") }}
              <br>
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
