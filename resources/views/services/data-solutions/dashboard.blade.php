@extends('layouts.master')
@section('title', 'Advanced analytics')

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
                                <h3 class="title">{{ __('Advanced analytics') }}</h3>
                                <p>{{ __('As your data sets grow and your business needs become increasingly ambitious, you may find it’s less easy to predict behaviours or influence customers or clients.') }}</p>
                                <br>
                                <br> <i style="color:#D3D3D4">{{ __('Please view the Data Solutions Brochure at the following link:') }}
                                </i> <a
                                    href="https://meowtech.larksuite.com/file/IiQibHhzkoZu7pxN044uicEWsFS?from=from_copylink"
                                    target="_blank">link</a>
                            </div>
                            <div class="accordion" id="choose-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa-solid fa-compress"></i> {{ __('Strategy') }}
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#choose-accordion">
                                        <div class="accordion-body">
                                            {{ __('At this stage, it is necessary to ask questions of the data that business intelligence alone can’t answer, to gain deeper insights, make predictions or generate recommendations. With a trusted data set, a machine learning model can be trained to recognize patterns, and once trained, make predictions. We work with you to design and automate learning solutions, transforming the value you derive from your data by combining predictive and prescriptive analysis. Through the adoption of advanced analytical solutions, you can deploy an automation framework which will significantly reduce time to market.') }}
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
