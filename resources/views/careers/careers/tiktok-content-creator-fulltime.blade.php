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
                        <h2 class="title">Tiktok Content Creator</h2>
                        <span class="subtitle">{{ __('Base salary: 10 - 15M') }}</span>
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
                                src="{{ asset('storage/assets/media/careers/careers-tiktok-creator.webp') }}" width="610"
                                height="460" alt="Thumbnail" type="image/webp">
                        </div>
                        <p>
                        <h3>Tiktok Content Creator</h3>
                        <br>
                        <h4>{{ __('Job Description') }}</h4>
                        <p style="margin-top: -50px">
                            <br>&bull; {{ __("Plan regular content for TikTok channel, TikTok shop.") }}
                            <br>&bull; {{ __("Come up with video ideas, write detailed scripts.") }}
                            <br>&bull; {{ __("Shoot and edit basic videos with suitable mobile apps.") }}
                            <br>&bull; {{ __("Manage channel content quality, update new trends, ensure channel content aligns with branding and meets set goals.") }}
                            <br>&bull; {{ __("Propose and collaborate with suitable KOLs aligned with brand direction and marketing campaigns.") }}
                            <br>&bull; {{ __("Ensure finished videos adhere to company and client's Brand guidelines.") }}
                            <br>&bull; {{ __("Implement other Ecommerce activities as required.") }}
                        </p>


                        <h4>{{ __('Requirements') }}</h4>
                        <p style="margin-top: -50px">
                            <br>&bull; {{ __("Priority for candidates with Ecommerce experience and Marketing degree.") }}
                            <br>&bull; {{ __("Minimum experience in related field from 6 months to one year.") }}
                            <br>&bull; {{ __("Ability to write content, storyboard, script.") }}
                        </p>

                        <h4>{{ __('Benefits') }}</h4>
                        <p style="margin-top: -50px">
                            <br>&bull; {{ __('Hybrid work') }}
                            <br>&bull; {{ __('13-month salary per year.') }}
                            <br>&bull; {{ __("KPI bonus") }}
                            <br>&bull; {{ __("Salary review every 3-6 months.") }}
                            <br>&bull; {{ __('Annual leaves: 14 ~ 18 days.') }}
                            <br>&bull; {{ __("Weekend bubble tea: 60,000 - 200,000/week") }}
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
