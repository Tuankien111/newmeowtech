@extends('layouts.master')

@section('title', 'Careers')

@section('content')
    @include('components.navbar')

    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">{{ __('Careers') }}</h1>
                <p>{{ __('Create innovative solutions, unlock enormous values for life through the best technology and excellent people.') }}</p>
            </div>
            <div class="banner-thumbnail thumbnail-3" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img src="{{asset('storage/assets/media/banner/banner-thumb-5.webp')}}" width="1188" height="845" alt="Illustration" type="image/webp')}}">
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{asset('storage/assets/media/others/bubble-9.webp')}}" width="377" height="330" alt="Bubble" type="image/webp')}}">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{asset('storage/assets/media/others/bubble-20.webp')}}" width="565" height="862" alt="Bubble" type="image/webp')}}">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{asset('storage/assets/media/others/line-4.webp')}}" width="1682" height="445" alt="Line" type="image/webp')}}">
            </li>
        </ul>
    </div>


    <!--=====================================-->
    <!--=        Careers Area Start         =-->
    <!--=====================================-->
    <section class="section section-padding-2">
            <div class="container">
                <div class="section-heading heading-left mb--40">
                    <span class="subtitle">{{ __('Careers') }}</span>
                    <h2 class="title gradient-text">{{ __('We are hiring...') }}</h2>
                </div>
                <div class="axil-isotope-wrapper">
                    <div class="isotope-button isotope-project-btn">
                        <button data-filter=".all" class="is-checked"><span class="filter-text">{{ __('All') }}</span></button>
                        <button data-filter=".technology"><span class="filter-text">{{ __('Technology') }}</span></button>
                        <button data-filter=".marketing"><span class="filter-text">{{ __('Marketing') }}</span></button>
                        <button data-filter=".management"><span class="filter-text">{{ __('Management') }}</span></button>
                        <button data-filter=".sales"><span class="filter-text">{{ __('Sales') }}</span></button>

                    </div>
                    <div class="row row-35 isotope-list">
                        <div class="col-md-6 project technology all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/software-engineer">
                                        <img src="{{asset('storage/assets/media/careers/careers-senior-software-engineer.webp')}}" width="613" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/software-engineer">Senior Software Engineer</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project marketing all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/tiktok-content-creator-fulltime">
                                        <img src="{{asset('storage/assets/media/careers/careers-tiktok-creator.webp')}}" width="610" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/tiktok-content-creator-fulltime">Tiktok Content Creator</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project marketing all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/digital-marketing">
                                        <img src="{{asset('storage/assets/media/careers/careers-digital-marketing-fulltime.webp')}}" width="610" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/digital-marketing">Digital Marketing</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project sales all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/sale-leader">
                                        <img src="{{asset('storage/assets/media/careers/careers-sale-leader.webp')}}" width="610" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/sale-leader">Sale Leader</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project sales all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/sales">
                                        <img src="{{asset('storage/assets/media/careers/careers-sales-it.webp')}}" width="610" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/sales">Sales IT (Online)</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project sales all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/business-development-intern">
                                        <img src="{{asset('storage/assets/media/careers/careers-business-developer-intern.webp')}}" width="610" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/business-development-intern">Business Development Intern</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project marketing all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/tiktok-content-creator-intern">
                                        <img src="{{asset('storage/assets/media/careers/careers-tiktok-creator-intern.webp')}}" width="610" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/tiktok-content-creator-intern">Tiktok Content Creator Intern</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project marketing all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/content-marketing-intern">
                                        <img src="{{asset('storage/assets/media/careers/careers-content-marketing-intern.webp')}}" width="613" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/content-marketing-intern">Content Marketing Intern</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project marketing all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/digital-marketing-intern">
                                        <img src="{{asset('storage/assets/media/careers/careers-digital-marketing-intern.webp')}}" width="613" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/digital-marketing-intern">Digital Marketing Intern</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project marketing all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/graphic-designer-intern">
                                        <img src="{{asset('storage/assets/media/careers/careers-graphic-designer-intern.webp')}}" width="610" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/graphic-designer-intern">Graphic Designer Intern</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project technology all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/data-analyst-intern">
                                        <img src="{{asset('storage/assets/media/careers/careers-data-analyst-intern.webp')}}" width="610" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/data-analyst-intern">Data Analyst Intern</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project technology all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/backend-intern">
                                        <img src="{{asset('storage/assets/media/careers/careers-backend-intern.webp')}}" width="613" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/backend-intern">Backend Intern</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project technology all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/data-engineer-intern">
                                        <img src="{{asset('storage/assets/media/careers/careers-data-engineer-internship.webp')}}" width="613" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/data-engineer-intern">Data Engineer Intern</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project management all">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/careers/hr-intern">
                                        <img src="{{asset('storage/assets/media/careers/careers-hr-intern.webp')}}" width="610" height="460" alt="project" type="image/webp')}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/careers/hr-intern">HR Intern</a></h4>
                                    <span class="subtitle">{{ __('Click to view Job Description.') }}</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <ul class="shape-group-7 list-unstyled">
                <li class="shape shape-1"><img src="{{asset('storage/assets/media/others/circle-2.webp')}}" width="886" height="888" alt="circle" type="image/webp')}}"></li>
                <li class="shape shape-2"><img src="{{asset('storage/assets/media/others/bubble-2.webp')}}" width="150" height="150" alt="Line" type="image/webp')}}"></li>
                <li class="shape shape-3"><img src="{{asset('storage/assets/media/others/bubble-1.webp')}}" width="88" height="88" alt="Line" type="image/webp')}}"></li>
            </ul>
    </section>

    @include('partials.estimateProject')

@stop
