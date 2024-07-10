@extends('layouts.master')
@section('title', 'Contact')

@section('content')

    @include('components.navbar')

    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    <li class="active">{{ __('Contact') }}</li>
                </ul>
                <h1 class="title h2">{{ __('Contact') }}</h1>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('storage/assets/media/others/bubble-9.webp') }}" width="377" height="330"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('storage/assets/media/others/bubble-17.webp') }}" width="457" height="565"
                    alt="Bubble" type="image/webp">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{ asset('storage/assets/media/others/line-4.webp') }}" width="1682" height="445"
                    alt="Line" type="image/webp">
            </li>
        </ul>
    </div>

    <!--=====================================-->
    <!--=       Contact  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-form-box shadow-box mb--30">
                        <h3 class="title">{{ __('Get a free quote now') }}</h3>
                        <form id="form-contact" action="" method="post">
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}:</label><br>
                                <input type="text" id="name" name="name"><br>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label><br>
                                <input type="text" id="email" name="email">
                            </div>
                            <div class="form-group mb--40">
                                <label for="phone">{{ __('Phone') }}:</label><br>
                                <input type="text" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="company">{{ __('Company') }}:</label><br>
                                <input type="text" id="company" name="company">
                            </div>
                            <div class="form-group mb--40">
                                <label>{{ __('How can we help you?') }}</label>
                                <textarea name="message" id="message" class="form-control textarea" cols="30" rows="4"></textarea>
                            </div>
                            <input id="btn_submit_contact" type="submit"
                                class="axil-btn btn-fill-primary btn-fluid btn-primary" name="btn_submit_contact"
                                value="{{ __('Get Pricing Now') }}" />
                            <!-- <p id="add-contact" style="color: green; margin-top: 20px">Email has been sent successfully</p> -->
                            <div class="" id="success" style="display:none; margin: 20px; color: green;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            </div>
                        </form>
                    </div>

                    <script>
                        $(document).ready(function() {
                            $('#btn_submit_contact').on('click', function() {
                                $("#btn_submit_contact").attr("disabled", "disabled");
                                var name = $('#name').val();
                                var email = $('#email').val();
                                var phone = $('#phone').val();
                                var company = $('#company').val();
                                var message = $('#message').val();
                                if (name != "" && email != "" && phone != "") {
                                    $.ajax({
                                        url: "php/mail.php",
                                        type: "POST",
                                        data: {
                                            name: name,
                                            email: email,
                                            phone: phone,
                                            company: company,
                                            message: message,
                                        },
                                        cache: false,
                                        success: function(dataResult) {
                                            var dataResult = JSON.parse(dataResult);
                                            if (dataResult.statusCode == 200) {
                                                $("#btn_submit_contact").removeAttr("disabled");
                                                $('#form-contact').find('input:text').val('');
                                                $("#success").show();
                                                $('#success').html('Email has been sent successfully');
                                            } else if (dataResult.statusCode == 201) {
                                                alert("Error occured !");
                                            }

                                        }
                                    });
                                } else {
                                    alert('Please fill all the field !');
                                }
                            });
                        });
                    </script>

                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1">
                    <div class="contact-info mb--100 mb_md--30 mt_md--0 mt--150">
                        <h4 class="title">{{ __('Phone') }}</h4>
                        <p>{{ __('Our customer care is open from Mon-Fri, 09:00 am to 5:00 pm') }}</p>
                        <h6 class="phone-number" style="font-size: 32px"><a href="tel:1234567890">(+84) 355 206 653</a>
                        </h6>
                    </div>
                    <div class="contact-info mb--20">
                        <h5 class="title">Email</h5>
                        <p>{{ __('Our support team will get back to in 48-h during standard business hours.') }}</p>
                        <h6 class="phone-number" style="font-size: 32px"><a
                                href="mailto:help@meowtech.vn">help@meowtech.vn</a></h6>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-12">
            <li class="shape shape-1"><img src="{{ asset('storage/assets/media/others/bubble-2.webp') }}" width="150"
                    height="150" alt="Bubble" type="image/webp"></li>
            <li class="shape shape-2"><img src="{{ asset('storage/assets/media/others/bubble-1.webp') }}" width="88"
                    height="88" alt="Bubble" type="image/webp"></li>
            <li class="shape shape-3"><img src="{{ asset('storage/assets/media/others/circle-3.webp') }}" width="811"
                    height="824" alt="Circle" type="image/webp"></li>
        </ul>
    </section>

    <!--=====================================-->
    <!--=       Location  Area Start        =-->
    <!--=====================================-->
    @include('partials.location')

    @include('partials.estimateProject')

@stop
