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
                        <h2 class="title">HR</h2>
                        <span class="subtitle">{{ __('Online working') }}</span>
                        <ul class="social-share list-unstyled">
                            <li><a
                                    href="https://www.facebook.com/meowtechglobal//photos/pb.100069899750072.-2207520000../879387173453662/?type=3"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/p/Cflu43QsVm-/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://meowtech.larksuite.com/share/base/form/shrusy0zUnTfU95XVcApF4Kwpub"><i
                                        class="fa-solid fa-envelope"></i></a></li>
                        </ul>
                        <div class="team-details-thumb">
                            <img class="paralax-image"
                                src="{{ asset('storage/assets/media/careers/careers-hr-intern.webp') }}" width="610"
                                height="460" alt="Thumbnail" type="image/webp">
                        </div>
                        <p>
                            🌈 {{ __('HR Internship') }}
                            <br>
                            <br> ⛅{{ __('Job Description') }}
                            <br> - {{ __("Search for candidates through various platforms, channels,...") }}
                            <br> - {{ __("Participate in candidate screening, interviews") }}
                            <br> - {{ __("Notify interview results, send information to candidates") }}
                            <br> - {{ __("Provide input to develop recruitment plans, strategies") }}
                            <br> - {{ __("Manage, implement promotional campaigns on page") }}
                            <br>- {{ __("Report recruitment results to the team") }}
                            <br>
                            <br>⭐ {{ __('Requirements') }}
                            <br>- {{ __("Recent graduates or 3rd, 4th-year students from colleges/universities related majors") }}
                            <br>- {{ __("Desire to practice, be serious in the field of recruitment") }}
                            <br>- {{ __("Able to work 5 days/week (minimum 20 hours/week)") }}
                            <br>- {{ __("Diligent, eager to learn and work") }}
                            <br>- {{ __("Have a personal laptop") }}
                            <br>- {{ __("Proficient in office computer skills") }}
                            <br>
                            <br>⛅ {{ __('Benefits') }}
                            <br>- {{ __("Support for stamps, documents for internship reports") }}
                            <br>- {{ __("Training in professional recruitment skills") }}
                            <br>- {{ __("Training, supplementing computer knowledge") }}
                            <br>- {{ __("Appropriate recruitment allowances and bonuses according to individual abilities") }}
                            <br>
                            <i>👉🏻 {{ __("See more Internship Welfare Policies at") }}: <a
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
