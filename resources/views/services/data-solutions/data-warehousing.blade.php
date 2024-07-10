@extends('layouts.master')
@section('title', 'Data warehousing')

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
                                <h3 class="title">{{ __('Data warehousing') }}</h3>
                                <p>{{ __('In a world of increasing complexity and competition, we recognise the importance of being able to extract the right information from your data and fully leverage its power.') }}</p>
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
                                            {{ __('Having a single, trusted source of aggregated and summary data is critical; by enhancing the quality and consistency of that data, you will be able to improve business intelligence and decision making and ensure your organisation maintains its competitive advantage. At MeowTech we recognise the advantages of a cloud first approach to data warehousing and data lakes and are well versed in the solutions provided by major cloud vendors. Our experience and expertise will allow you to avoid the common pitfalls and apply best practice to leverage the scalability of cloud-native platforms gaining and advantage in flexible pricing, storage and performance of your data warehouse.') }}
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
