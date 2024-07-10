<!--=====================================-->
<!--=        Footer Area Start       	=-->
<!--=====================================-->
<footer class="footer-area">
    <div class="container">
        <div class="footer-top">
            <div class="footer-social-link">
                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/meowtechglobal/" target="_blank" data-sal="slide-up"
                            data-sal-duration="500" data-sal-delay="100"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/meowtechglobal" target="_blank" data-sal="slide-up"
                            data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li><a href="https://g.page/r/CarwTJ5DitVnEAE" target="_blank" data-sal="slide-up"
                            data-sal-duration="500" data-sal-delay="600"><i class="fa-brands fa-google"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/company/meowtech/" target="_blank" data-sal="slide-up"
                            data-sal-duration="500" data-sal-delay="700"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li><a href="https://www.tiktok.com/@meowtechglobal" target="_blank" data-sal="slide-up"
                            data-sal-duration="500" data-sal-delay="700"><i class="fa-brands fa-tiktok"></i></a>
                    </li>
                    <li><a href="mailto:help@meowtech.vn" target="_blank" data-sal="slide-up" data-sal-duration="500"
                            data-sal-delay="800"><i class="fa-solid fa-envelope"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-main">
            <div class="row">
                <div class="col-xl-6 col-lg-5" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                    <div class="footer-widget border-end">
                        <div class="footer-newsletter">
                            <h2 class="title gradient-text">{{ __('Get in touch') }}!</h2>
                            <p>{{ __('Stay in the know with our newsletter') }}</p>
                            <form id="form_subscribe" action="" method="post">
                                <div class="form-group">
                                    <label for="email_sub">Email:</label><br>
                                    <input type="email" id="email_sub" name="email_sub"><br>
                                </div>
                                <input type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary"
                                    id="btn_submit_subscribe" name="btn_submit_subscribe" value="{{ __('Subscribe') }}" />
                                <div class="" id="success_email"
                                    style="display:none; margin: 20px; color: green;">
                                    <!-- <a href="{{ route('home') }}" class="close" data-dismiss="alert" aria-label="close">×</a> -->
                                </div>
                            </form>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('#btn_submit_subscribe').on('click', function() {
                                    $("#btn_submit_subscribe").attr("disabled", "disabled");
                                    var email = $('#email_sub').val();
                                    if (email != "") {
                                        $.ajax({
                                            url: "php/get_in_touch.php",
                                            type: "POST",
                                            data: {
                                                email: email,
                                            },
                                            cache: false,
                                            success: function(dataResult) {
                                                // alert(dataResult);
                                                var dataResult = JSON.parse(dataResult);
                                                if (dataResult.statusCode == 200) {
                                                    $("#btn_submit_subscribe").removeAttr("disabled");
                                                    $('#form_subscribe').find('input:text').val('');
                                                    $("#success_email").show();
                                                    $('#success_email').html('Email has been sent successfully');
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
                </div>
                <div class="col-xl-6 col-lg-7" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer-widget">
                                <h6 class="widget-title gradient-text">{{ __('Services') }}</h6>
                                <div class="footer-menu-link">
                                    <ul class="list-unstyled">

                                        <li><a href="{{ route('data') }}">{{ __('Data Solutions') }}</a></li>
                                        <li><a href="https://chat.meowtech.vn" target="_blank">ChatMeow</a>
                                        </li>



                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-widget">
                                <h6 class="widget-title gradient-text">{{ __('Resources') }}</h6>
                                <div class="footer-menu-link">
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('career') }}">{{ __('Careers') }}</a></li>
                                        <li><a href="{{ route('blog') }}" target="_blank">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-widget">
                                <h6 class="widget-title gradient-text">{{ __('Support') }}</h6>
                                <div class="footer-menu-link">
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
                                        <li><a href="{{ route('error') }}">{{ __('Privacy Policy') }}</a></li>
                                        <li><a href="{{ route('error') }}">{{ __('Terms of Use') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-copyright">
                        <span class="copyright-text">© 2023. All rights reserved by <a
                                href="{{ route('home') }}">MeowTech CO., LTD</a>.</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-bottom-link">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('error') }}">{{ __('Privacy Policy') }}</a></li>
                            <li><a href="{{ route('error') }}">{{ __('Terms of Use') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


</div>

<!-- Jquery Js -->
<script src="{{ asset('storage/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/odometer.min.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/jquery-appear.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/sal.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/js.cookie.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/jquery.style.switcher.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/tilt.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/green-audio-player.min.js') }}"></script>
<script src="{{ asset('storage/assets/js/vendor/jquery.nav.js') }}"></script>
<script src="https://kit.fontawesome.com/ea347ce605.js" crossorigin="anonymous"></script>

<!-- Site Scripts -->
<script src="{{ asset('storage/assets/js/app.js') }}"></script>

