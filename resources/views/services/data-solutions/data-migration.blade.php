@extends('layouts.master')
@section('title', 'Data migration')

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
                                <h3 class="title">{{ __('Data migration') }}</h3>
                                <p>{{ __('Very often, whether as a result of an acquisition or the need to harmonise data across organisational boundaries, companies will have existing sets of data that need to be migrated from one datastore to another but no means of moving the data in a reliable and repeatable way.') }}</p>
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
                                            {{ __('We help to migrate your data through data cleansing, data modelling and master data management best practices, to ensure the data that is migrated is accurate and reliable. Experience tells us that data migration can be a tricky process and our priority is to ensure the integrity of the data is maintained, through careful migration planning and regular checks at every step, including ETL processes, so that even if the data is being modified it can still be trusted to be complete and correct.') }}
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
