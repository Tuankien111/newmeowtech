@extends('layouts.master')

@section('title', 'Data management')

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
                                <h3 class="title">{{ __('Data management') }}</h3>
                                <p>{{ __('At MeowTech, we know that being able to respond to data requests quickly and reliably is absolutely core to your business, and the key to this is to ensure your datastores are well maintained and well managed.') }}</p>
                                <br>
                                <br> <i style="color:#D3D3D4">{{ __('Please view the Data Solutions Brochure at the following link:') }} </i> <a
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
                                            {{ __('Our skilled team will deliver and operate data platforms that allow you to create reliable and trusted operational reports in the context of your individual business needs. Whatever the sources of your data, we will create a solution that can collate all of them quickly and reliably, and then fine tune it to be a responsive, secure, single source of truth, ensuring timely and accurate reports are consistently delivered.') }}
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
