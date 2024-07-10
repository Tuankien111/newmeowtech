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
                    <li><a href= "{{ route('career') }}">{{ __('Careers') }}</a></li>
                    <li class="active">{{ __('Job Description') }}</li>
                </ul>
                <h1 class="title h2">{{ __('Job Description') }}</h1>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1 sal-animate" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('storage/assets/media/others/bubble-9.webp') }}" width="377" height="330"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-2 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('storage/assets/media/others/bubble-17.webp') }}" width="457" height="565"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-3 sal-animate" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{ asset('storage/assets/media/others/line-4.webp') }}" width="1682" height="445"
                    alt="Line" type="image/webp">
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
                        <h2 class="title">Tiktok Content Creator Intern</h2>
                        <span class="subtitle">Hybrid working</span>
                        <ul class="social-share list-unstyled">
                            <li><a href="https://www.facebook.com/meowtechglobal//"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/meowtechglobal/"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li><a href="https://meowtech.larksuite.com/share/base/form/shrusy0zUnTfU95XVcApF4Kwpub"><i
                                        class="fa-solid fa-envelope"></i></a></li>
                        </ul>
                        <div class="team-details-thumb">
                            <img class="paralax-image"
                                src="{{ asset('storage/assets/media/careers/careers-tiktok-creator-intern.webp') }}"
                                width="610" height="460" alt="Thumbnail">
                        </div>
                        <p>
                        <h3>{{ __('Tiktok Content Creator Intern') }}</h3>
                        <br>
                        <h4>{{ __('Job Description') }}</h4>
                        <p style="margin-top: -50px">
                            <br>&bull; {{ __("Receive product information from customers") }}
                            <br>&bull; {{ __("Prepare content plan, shooting schedule") }}
                            <br>&bull; {{ __("Develop ideas and scripts for each video") }}
                            <br>&bull; {{ __("Propose and work with KOLs suitable for brand direction and marketing campaigns") }}
                            <br>&bull; {{ __("Ensure finished videos adhere to company and client's Brand guidelines") }}
                            <br>&bull; {{ __("Implement other Ecommerce activities as required") }}
                        </p>


                        <h4>{{ __('Requirements') }}</h4>
                        <p style="margin-top: -50px">
                            <br>&bull; {{ __("Have a special love for Tiktok, as well as current trends") }}
                            <br>&bull; {{ __("Love creativity, enjoy writing, scripting, and have many new ideas") }}
                            <br>&bull; {{ __("Priority for candidates who have experience in managing Tiktok channels") }}
                            <br>&bull; {{ __("Ability to communicate, work well in teams, and have a proactive attitude at work") }}
                            <br>&bull; {{ __("Basic knowledge of products in household goods, fashion, or cosmetics is also a plus") }}
                        </p>

                        <h4>{{ __('Benefits') }}</h4>
                        <p style="margin-top: -50px">
                            <br>&bull; {{ __('Hybrid work') }}
                            <br>&bull; {{ __('Weekend bubble tea: 60,000 - 200,000/week') }}
                            <br>&bull; {{ __('KPI bonus') }}
                            <br>&bull; {{ __('Support for stamps') }}
                            <br>&bull; {{ __("Review full membership status after 3 months") }}
                            <br>
                            <i>👉🏻 {{ __('See more Internship Welfare Policies at') }}: <a
                                    href="https://meowtech.larksuite.com/docx/AB5zdVt0QojoqFxiVXTuSLXlsyh?from=from_copylink"
                                    target="_blank"> link </a></i>
                        </p>
                        <a href="https://meowtech.larksuite.com/share/base/form/shrusy0zUnTfU95XVcApF4Kwpub"
                            class="axil-btn btn-large btn-fill-primary">{{ __('Apply') }}</a>
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
