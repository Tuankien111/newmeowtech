<section class="section section-padding bg-color-dark overflow-hidden">
    <div class="container">
        <div class="section-heading heading-light-left">
            <span class="subtitle">{{ __('Find Us') }}</span>
            <h2 class="title">{{ __('Our office') }}</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="office-location">
                    <div class="thumbnail">
                        <a href="https://goo.gl/maps/4tWJ2SkLMD9hs3cx5" target="_blank"><img
                                src="{{ asset('storage/assets/media/others/location-hochiminhcity.webp') }}"
                                alt="Office" type="image/webp"></a>
                    </div>
                    <div class="content">
                        <h4 class="title">{{ __('Ho Chi Minh city') }}</h4>
                        <p>{{ __('E.town 1, 364 Cong Hoa, Tan Binh district, Ho Chi Minh city, Vietnam') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="office-location">
                    <div class="thumbnail">
                        <a href="{{ route('home') }}"><img style="filter: grayscale(100%);"
                                src="{{ asset('storage/assets/media/san-francisco.jpg') }}" width="300"
                                height="200" alt="Office" type="image/webp"></a>
                    </div>
                    <div class="content">
                        <h4 class="title">San Francisco</h4>
                        <p>693 Tech Boulevard, San Francisco, CA 94105 United States</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="shape-group-11 list-unstyled">
        <li class="shape shape-1"><img src="{{ asset('storage/assets/media/others/line-6.webp') }}" width="1682"
                height="445" alt="line" type="image/webp"></li>
        <li class="shape shape-2"><img src="{{ asset('storage/assets/media/others/circle-3.webp') }}" width="811"
                height="824" alt="line" type="image/webp"></li>
    </ul>
</section>
