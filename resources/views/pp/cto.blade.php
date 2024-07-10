@extends('layouts.master')

@section('title', 'CTO - Personal Portfolio')

@section('content')

    @include('components.navbar')

    <!--=====================================-->
    <!--=        Banner Area Start          =-->
    <!--=====================================-->
    <section class="banner banner-style-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <span class="subtitle" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">{{ __('Duc Vo Minh') }}</span>
                        <h1 class="title" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">Founder & CTO
                        </h1>
                        <div class="btn-group" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300">
                            <a href="{{ route('service') }}" class="axil-btn btn-fill-primary btn-large">{{ __('Our services') }}</a>
                            <a href="{{ route('aboutus') }}" class="about-btn">{{ __('About Us') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumbnail">
                        <div class="large-thumb" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                            <img class="paralax-image" src="{{ asset('storage/assets/media/team/team-founder-ceo.webp') }}"
                                width="638" height="590" alt="Shape" type="image/webp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-20">
            <li class="shape shape-1" data-sal="slide-down" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('storage/assets/media/others/bubble-32.webp') }}" width="550" height="208"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('storage/assets/media/others/bubble-33.webp') }}" width="1015" height="547"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-4" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('storage/assets/media/others/bubble-14.webp') }}" width="80" height="80"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-5" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('storage/assets/media/others/bubble-4.webp') }}" width="49" height="49"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-6" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('storage/assets/media/others/bubble-30.webp') }}" width="103" height="103"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-7" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('storage/assets/media/others/bubble-31.webp') }}" width="24" height="24"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-8 marque-images"></li>
        </ul>
    </section>
    <!--=====================================-->
    <!--=       Work Process Area Start     =-->
    <!--=====================================-->
    <section class="section section-padding bg-color-light pb--70">
        <div class="container">
            <div class="section-heading mb--90">
                <span class="subtitle">{{ __('My Company') }}</span>
                <h2 class="title">{{ __('I have worked') }}</h2>
            </div>
            <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
                <div class="thumbnail paralax-image">
                    <a href="{{ route('home') }}"><img
                            src="{{ asset('storage/assets/media/business-logo/meow-house-logo.webp') }}" width="410"
                            height="410" alt="Thumbnail" type="image/webp"></a>
                </div>
                <div class="content">
                    <span class="subtitle">MeowTech</span>
                    <h6>{{ __('April 2022 - Present') }}</h6>
                    <h3 class="title">Founder & CTO</h3>
                    <p>{{ __('MeowTech was founded on 14/04/2022. We create innovative solutions, unlock enormous values for life through the best technology and excellent people. Our services: 3D Web, Marketing Automation System with a unique feature which is "New Customer Recommendation". Data Solutions - Business Intelligence.') }}</p>
                </div>
            </div>
            <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                <div class="thumbnail paralax-image">
                    <a href="https://nashtechglobal.com/"><img
                            src="{{ asset('storage/assets/media/business-logo/nashtech-logo.webp') }}" width="410"
                            height="410" style="width: 410px; height: 410px" alt="Thumbnail" type="image/webp"></a>
                </div>
                <div class="content">
                    <span class="subtitle">NashTech Global</span>
                    <h6>{{ __('July 2022 - Present') }}</h6>
                    <h3 class="title">Data Engineer</h3>
                    <p>{{ __('NashTech - A brand of Harvey Nash (Vietnam) Company Ltd. NashTech specialises in software development, business process outsourcing, application maintenance, and support and testing to support global organizations to deliver the right technology solutions to support their business needs.') }}</p>
                </div>
            </div>
            <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000"
                data-sal-delay="100">
                <div class="thumbnail paralax-image">
                    <a href="https://www.tma.vn/"><img
                            src="{{ asset('storage/assets/media/business-logo/tma-solutions-logo.webp') }}"
                            width="410" height="410" alt="Thumbnail" type="image/webp"></a>
                </div>
                <div class="content">
                    <span class="subtitle">TMA Solutions</span>
                    <h6>{{ __('August 2021 - June 2022') }}</h6>
                    <h3 class="title">Data Engineer</h3>
                    <p>{{ __('3800 engineers and 25 years of experience in providing software services for many world-leading companies. #Name: TMA Solutions (English) - Tường Minh (Vietnamese). Year of establishment: 1997. Locations Vietnam: Ho Chi Minh City, Binh Dinh Province. USA: Vermont. Canada: Ottawa. Europe: Galway, Ireland. Japan: Tokyo. Australia: Melbourne') }}</p>
                </div>
            </div>
        </div>
        <ul class="shape-group-17 list-unstyled">
            <li class="shape shape-1"><img src="{{ asset('storage/assets/media/others/bubble-24.webp') }}"
                    width="400" height="271" alt="Bubble" type="image/webp"></li>
            <li class="shape shape-2"><img src="{{ asset('storage/assets/media/others/bubble-23.webp') }}"
                    width="1005" height="1338" alt="Bubble" type="image/webp"></li>
            <li class="shape shape-3"><img src="{{ asset('storage/assets/media/others/line-4.webp') }}" width="1682"
                    height="445" alt="Line" type="image/webp"></li>
            <li class="shape shape-4"><img src="{{ asset('storage/assets/media/others/line-5.webp') }}" width="1883"
                    height="498" alt="Line" type="image/webp"></li>
            <li class="shape shape-5"><img src="{{ asset('storage/assets/media/others/line-4.webp') }}" width="1682"
                    height="445" alt="Line" type="image/webp"></li>
            <li class="shape shape-6"><img src="{{ asset('storage/assets/media/others/line-5.webp') }}" width="1883"
                    height="498" alt="Line" type="image/webp"></li>
        </ul>
    </section>
    <!--=====================================-->
    <!--=        Project Area Start         =-->
    <!--=====================================-->
    <section class="section section-padding pb--80 pb_lg--40 pb_md--20 pb_sm--0">
        <div class="container">
            <div class="section-heading heading-left">
                <span class="subtitle">{{ __('Certificate') }}</span>
                <h2 class="title">Microsoft</h2>
            </div>
            <div class="row row-45">
                <div class="col-md-6" data-sal="slide-up" data-sal-duration="800">
                    <div class="project-grid project-style-2">
                        <div class="thumbnail">
                            <a href="https://www.linkedin.com/in/ducvoqn/" target="_blank">
                                <img src="{{ asset('storage/assets/media/project/azure-data-engineer-certificate.webp') }}"
                                    width="600" height="440" alt="project" type="image/webp">
                            </a>
                        </div>
                        <div class="content">
                            <span class="subtitle">May 2023</span>
                            <h5 class="title"><a href="https://www.linkedin.com/in/ducvoqn/" target="_blank"></a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <div class="project-grid project-style-2">
                        <div class="thumbnail">
                            <a href="https://www.linkedin.com/in/ducvoqn/" target="_blank">
                                <img src="{{ asset('storage/assets/media/project/azure-data-analyst-certificate.webp') }}"
                                    width="600" height="440" alt="project" type="image/webp">
                            </a>
                        </div>
                        <div class="content">
                            <span class="subtitle">December 2022</span>
                            <h5 class="title"><a href="https://www.linkedin.com/in/ducvoqn/" target="_blank"></a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-heading heading-left">
                <span class="subtitle">{{ __('Certificate') }}</span>
                <h2 class="title">Google</h2>
            </div>
            <div class="row row-45">
                <div class="col-md-6" data-sal="slide-up" data-sal-duration="800">
                    <div class="project-grid project-style-2">
                        <div class="thumbnail">
                            <a href="https://www.linkedin.com/in/ducvoqn/" target="_blank">
                                <img src="{{ asset('storage/assets/media/project/google-project-management-professional-certificate.webp') }}"
                                    width="600" height="440" alt="project" type="image/webp">
                            </a>
                        </div>
                        <div class="content">
                            <span class="subtitle">December 2022</span>
                            <h5 class="title"><a href="https://www.linkedin.com/in/ducvoqn/" target="_blank"></a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.estimateProject')

@stop
