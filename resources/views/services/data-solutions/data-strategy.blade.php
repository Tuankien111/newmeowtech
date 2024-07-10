@extends('layouts.master')
@section('title', 'Data strategy')

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
                                <h3 class="title">{{ __('Data strategy') }}</h3>
                                <p>{{ __('Whether your business is expanding, or you are going through a process of stabilisation, our goal is to ensure your data is handled effectively, both now and in the future.') }}</p>
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
                                            {{ __('We leverage our data architecture and data management competencies to help you understand the current state of your data ecosystem and the maturity, build capability and skills, embed the processes and implement the technology platforms and tools required to organise, control, and govern your data. We work with you to address any short-term needs, and provide a roadmap for your future requirements based on your goals. Whether through new green-field data platforms or migration from legacy, we create a data architecture that is structured and well defined, ensuring your data continues to be an asset as your business grows.') }}
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
