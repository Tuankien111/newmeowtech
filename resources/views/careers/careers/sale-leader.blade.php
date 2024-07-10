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
            <h2 class="title">Sale Leader</h2>
            <span class="subtitle">Full time</span>
            <ul class="social-share list-unstyled">
              <li><a href="https://www.facebook.com/meowtechglobal//"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/meowtechglobal"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://meowtech.larksuite.com/share/base/form/shrusy0zUnTfU95XVcApF4Kwpub"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
            <div class="team-details-thumb">
              <img class="paralax-image" src="{{asset('storage/assets/media/careers/careers-sale-leader.webp')}}"  width="610" height="460" alt="Thumbnail" type="image/webp">
            </div>
            <p>
            🌈 Sale Leader
              <br>
              🥰 {{ __("Job is very relaxed, quickly closing deals for sales enthusiasts") }}😘
              <br>
              🥰 {{ __("Job Description") }}:
              <br>- {{ __("Manage, supervise, assign tasks for the entire sales team") }}
              <br>- {{ __("Establish standard work procedures and quality management of the sales team's work") }}
              <br>- {{ __("Set sales plans, establish plans to approach enterprise customers with IT service needs: Web, Marketing System, New Customers, Data Platforms") }}
              <br>- {{ __("Responsible for sales KPIs of the sales team on a monthly/quarterly/yearly basis") }}
              <br>- {{ __("Negotiate, promote, and execute contract signing procedures with customers") }}
              <br>- {{ __("Coordinate with the Marketing team to develop sales promotion plans") }}
              <br>- {{ __("Regularly report weekly/monthly/quarterly") }}
              <br>
              <br>🥳 {{ __("Requirements") }}
              <br>- {{ __("Graduated from University with majors in Economics, Business Administration, Marketing … or related fields") }}
              <br>- {{ __("Experience in sales, customer care") }}
              <br>- {{ __("Priority given to experience, knowledge in information technology, software, website, data") }}
              <br>- {{ __("Additional skills: Online channel deployment is an advantage") }}
              <br>- {{ __("Proficient in office computer skills (Words, Excel, Powerpoint)") }}
              <br>- {{ __("Good sales, communication, and negotiation skills") }}
              <br>- {{ __("Ability to lead teams according to plans") }}
              <br>
              <br>🤩 {{ __("Benefits") }}
              <br>- {{ __("Hybrid work") }}
              <br>- {{ __("Commission up to: 25%") }}
              <br>- {{ __("Minimum basic salary: 5 million/month") }}
              <br>- {{ __("Income based on performance up to 20 - 30 million/month") }}
              <br>- {{ __("Clear, transparent, professional process") }}
              <br>- {{ __("Support providing customer data") }}
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
