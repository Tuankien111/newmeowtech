@extends('layouts.master')
@section('title', 'Business intelligence')

@section('content')
    @include('components.navbar')

    @include('partials.breadcrumb')

    <!--=====================================-->
    <!--=        Service Area Start         =-->
    <!--=====================================-->
    <div class="service-scroll-navigation-area">
        <!--=====================================-->
        <!--=       Why Choose Area Start       =-->
        <!--=====================================-->
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="why-choose-us">
                            <div class="section-heading heading-left">
                                <span class="subtitle">{{ __('Data Solutions') }}</span>
                                <h3 class="title">{{ __('Business intelligence') }}</h3>
                                <p> {{ __('We understand that making better decisions based on data becomes increasingly challenging as data volumes increase.') }}
                                    <br>
                                    <br> <i style="color:#D3D3D4">{{ __('Please view the Data Solutions Brochure at the following link:') }}</i> <a
                                        href="https://meowtech.larksuite.com/file/IiQibHhzkoZu7pxN044uicEWsFS?from=from_copylink"
                                        target="_blank">link</a>

                                </p>
                            </div>
                            <div class="accordion" id="choose-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa-solid fa-compress"></i>
                                            {{ __('Strategy') }}
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#choose-accordion">
                                        <div class="accordion-body">
                                            {{ __('We apply user experience and design thinking to ensure the end user remains at the core of our business intelligence solutions, combining and simplifying reporting efforts across your business to get reliable, actionable and insightful real-time and historical analytics such as organisational KPIs, trend analysis, and revenue forecasting. Whether you are a data analyst wanting an in-depth view, or a senior executive who is looking at business trends and customer demand, we deploy tools such as Microsoft Power BI to create reporting, charting and predictive analysis in a way that is useful to everyone in your organisation, meaning you can gain real-time insights and improve speed to market.') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Get free quota --}}
                    @include('partials.getFreeQuota')

                </div>
            </div>
        </section>
        <!-- Data Solutions Service -->
        @include('partials.dataSolutionsService')


    </div>

    @include('partials.estimateProject')

@stop
