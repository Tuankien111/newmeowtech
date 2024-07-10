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
                        <h2 class="title">Senior Software Engineer – NodeJS</h2>
                        <span class="subtitle">{{ __("Salary: from 1.500$") }}</span>
                        <ul class="social-share list-unstyled">
                            <li><a
                                    href="https://www.facebook.com/meowtechglobal//photos/pb.100069899750072.-2207520000../884380142954365/?type=3"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/p/Cf2rw61psCH/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://meowtech.larksuite.com/share/base/form/shrusy0zUnTfU95XVcApF4Kwpub"><i
                                        class="fa-solid fa-envelope"></i></a></li>
                        </ul>
                        <div class="team-details-thumb">
                            <img class="paralax-image"
                                src="{{ asset('storage/assets/media/careers/careers-senior-software-engineer.webp') }}"
                                width="613" height="460" alt="Thumbnail" type="image/webp">
                        </div>
                        <p>
                        <h3>Senior Software Engineer - NodeJS (Hybrid)</h3>
                        <br>
                        <h4>Description</h4>
                        <p style="margin-top: -50px">
                            <br><i>{{ __("The Senior Software Engineer (SSE) is responsible to write software programs from design specifications; Plans, executes, and documents unit tests; Reports status and issues; Documents detailed designs; Accountable for unit test leakage; Contributes to system architecture and design decisions.") }}</i>
                        </p>
                        <p style="margin-top: -50px">
                            <br>&bull; {{ __("To write, review, and maintain code in compliance with the established coding quality standards of the company.") }}
                            <br>&bull; {{ __("To write unit tests and run through all the test cases for assigned tasks and ensure all cases are tested and passed before release for testing.") }}
                            <br>&bull; {{ __("To self-train on new technologies.") }}
                            <br>&bull; {{ __("To coach junior members.") }}
                            <br>&bull; {{ __("To document detailed designs as part of the design team.") }}
                            <br>&bull; {{ __("Participate and contribute, if possible, to DevOps and Automation activities in some way as a daily part of the project delivery such as participating in the creation of relevant DevOps/Automation testing frameworks, scripting and execution even if the specialist roles act as the focal point.") }}
                            <br>&bull; {{ __("To perform other tasks assigned by the Project Manager.") }}
                        </p>


                        <h4>{{ __("Qualifications") }}</h4>
                        <p style="margin-top: -50px">
                            <br>&bull; {{ __("Good knowledge of OOP, SOLID principles") }}
                            <br>&bull; {{ __("Good knowledge of NodeJS development, at least one NodeJS framework such as Express, Hapi, Meteor.") }}
                            <br>&bull; {{ __("Good knowledge of web service development (RESTful).") }}
                            <br>&bull; {{ {__("Good knowledge of HTML, CSS, JavaScript, Ajax. Have the ability to do development work for both back-end and front-end.")} }}
                            <br>&bull; {{ __("Good awareness about security and performance in web development.") }}
                            <br>&bull; {{ __("Basic knowledge of Linux infrastructure, Linux-based web server.") }}
                            <br>&bull; {{ __("Have knowledge about TDD, BDD, and hands-on experience on the unit tests.") }}
                            <br>&bull; {{ __("Good to have additional skills:") }}
                            <br>&bull; {{ __("Basic knowledge of cloud services – especially Azure.") }}
                            <br>&bull; {{ __("Experience on any JavaScript Front-end framework (Angular/React/Vue).") }}
                            <br>&bull; {{ __("Experience with Docker.") }}
                        </p>

                        <h4>{{ __("Why You'll Love Working Here") }}</h4>
                        <p style="margin-top: -50px">
                            <br>&bull; {{ __("13-month salary per year.") }}
                            <br>&bull; {{ __("Performance bonus (up to 2-month salary).") }}
                            <br>&bull; {{ __("Social – Health – Insurance paid fully.") }}
                            <br>&bull; {{ __("Annual leaves: 14 ~ 18 days.") }}
                            <br>&bull; {{ __("Training courses: Technical skills – Soft skills – English.") }}
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
