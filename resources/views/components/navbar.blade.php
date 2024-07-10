<header class="header axil-header header-style-1">
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-logo">
                    <a href="{{ route('home') }}"><img class="light-version-logo"
                            src="{{ asset('storage/assets/media/logo.svg') }}" alt="logo"></a>
                    <a href="{{ route('home') }}"><img class="dark-version-logo"
                            src="{{ asset('storage/assets/media/logo_dark.svg') }}" alt="logo-dark"></a>
                    <a href="{{ route('home') }}"><img class="sticky-logo"
                            src="{{ asset('storage/assets/media/logo.svg') }}" alt="logo"></a>
                </div>
                <div class="header-main-nav">

                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav" id="mobilemenu-popup">
                        <div class="d-block d-lg-none">
                            <div class="mobile-nav-header">
                                <div class="mobile-nav-logo">
                                    <a href="{{ route('home') }}">
                                        <img class="light-mode" src="{{ asset('storage/assets/media/logo.svg') }}"
                                            alt="Site Logo">
                                        <img class="dark-mode" src="{{ asset('storage/assets/media/logo_dark.svg') }}"
                                            alt="Site Logo">
                                    </a>
                                </div>
                                <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <ul class="mainmenu">
                            <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">{{ __('Services') }}<i
                                        class="fa-solid fa-angle-down"></i></a>
                                <ul class="axil-submenu">
                                    <li><a href="{{ route('service') }}">{{ __('Services') }}</a></li>
                                    <li><a href="{{ route('data') }}">{{ __('Data Solutions') }}</a></li>
                                    <li><a href="https://chat.meowtech.vn" target="_blank">ChatMeow</a></li>
                                    <li><a href="{{ route('chatbot') }}">AI Chatbot For Business</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('career') }}">{{ __('Careers') }}</a></li>
                            <li><a href="{{ route('aboutus') }}">{{ __('About Us') }}</a></li>
                            <li><a href="{{ route('blog') }}" target="_blank">{{ __('Blog') }}</a></li>
                            <li><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
                            <li>
                                @include('components.langSwitch')
                            </li>
                        </ul>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-action">
                    <ul class="list-unstyled">
                        <li class="sidemenu-btn d-lg-block d-none">
                            <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </li>
                        <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                            <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </li>
                        <li class="my_switcher d-block d-lg-none">
                            <ul>
                                <li title="Light Mode">
                                    <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                        <i class="fa-solid fa-sun"></i>
                                    </a>
                                </li>
                                <li title="Dark Mode">
                                    <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                        <i class="fas fa-moon"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--=====================================-->
    <!--=       Offcanvas Menu Area       	=-->
    <!--=====================================-->
    <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row ">
                <div class="col-lg-5 col-xl-6">
                    <ul class="main-navigation list-unstyled">

                        <li><a href="{{ route('data') }}">Data Solutions</a></li>
                        <li><a href="https://chat.meowtech.vn" target="_blank">ChatMeow</a></li>
                        <li>
                            @include('components.langSwitch')
                        </li>

                    </ul>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="contact-info-wrap">
                        <div class="contact-inner">
                            <address class="address">
                                <span class="title">Contact Information</span>
                                <p>Ho Chi Minh city <br>, Vietnam</p>
                            </address>
                            <address class="address">
                                <span class="title">We're Available 24/7. Contact Now.</span>
                                <a class="tel" href="tel:+84355206653"><i class="fas fa-phone"></i>(+84)
                                    355-206-653</a>
                                <a href="mailto:help@meowtech.vn"><i
                                        class="fa-solid fa-envelope"></i>help@meowtech.vn</a>
                            </address>
                        </div>
                        <div class="contact-inner">
                            <h5 class="title">Find us here</h5>
                            <div class="contact-social-share">
                                <ul class="social-share list-unstyled">
                                    <li><a href="https://www.facebook.com/meowtechglobal/" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/meowtechglobal" target="_blank"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://g.page/r/CarwTJ5DitVnEAE" target="_blank"><i
                                                class="fa-brands fa-google"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/meowtech/" target="_blank"><i
                                                class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.tiktok.com/@meowtechglobal" target="_blank"><i
                                                class="fa-brands fa-tiktok"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
