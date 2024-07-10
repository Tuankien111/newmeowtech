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
                        <h2 class="title">Business Development</h2>
                        <span class="subtitle">{{ __('Online working') }}</span>
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
                                src="{{ asset('storage/assets/media/careers/careers-business-developer-intern.webp') }}"
                                width="610" height="460" alt="Thumbnail">
                        </div>
                        <p>
                        <h3>{{ __('Business Development Intern') }}</h3>
                        <br>
                        <h4>{{ __('Job Description') }}</h4>
                        <p style="margin-top: -50px">
                            <br>&bull; {{ __("Developing business strategies in fields such as Big Data Solutions, 3D Web App services for sectors like E-commerce, Finance,...") }}
                            <br>&bull; {{ __("Participating in business strategy planning with domestic and international partners.") }}
                            <br>&bull; {{ __("Proposing solutions to improve work-related issues, flexible business model changes.") }}
                            <br>&bull; {{ __("Organizing regular business reporting meetings and next business plans.") }}
                            <br>&bull; {{ __("Using available tools to gather information about related projects in the proposed area, searching for customer information.") }}
                            <br>&bull; {{ __("Working with related teams: Sales, Finance, Technical, Marketing, HR...") }}
                        </p>


                        <h4>{{ __('Requirements') }}</h4>
                        <p style="margin-top: -50px">
                            <br>&bull; {{ __("Passionate about future-oriented business direction.") }}
                            <br>&bull; {{ __("Proficient in English.") }}
                            <br>&bull; {{ __("Serious, responsible, eager to learn.") }}
                            <br>&bull; {{ __("Know how to use Google Sheets, Google Docs, clear and concise formatting, perfectionism is even better.") }}
                        </p>

                        <h4>{{ __('Benefits') }}</h4>
                        <p style="margin-top: -50px">
                            <br>&bull; {{ __("Have the opportunity to develop and manage the business team according to your ideas.") }}
                            <br>&bull; {{ __("Enhance problem-solving skills.") }}
                            <br>&bull; {{ __("Improve Google Sheets skills, report and exchange work skills.") }}
                            <br>&bull; {{ __("Supported with at least 1 cup of milk tea per week.") }}
                            <br>&bull; {{ __('Support for stamps') }}
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
