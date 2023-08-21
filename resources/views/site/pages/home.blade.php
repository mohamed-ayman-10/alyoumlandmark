@include('site.layouts.header')
@include('site.inc.nav')
{{-- Start Banner --}}
<section class="banner py-5 position-relative" style="background-image: url({{ asset('images/banner.png') }})">
    {{-- <img class="banner-img" src="{{ asset('images/banner.png') }}" alt=""> --}}
    <div class="container">
        <div class="content px-5 text-light">
            <h2 class="mb-4">Who We Are?</h2>
            <p>PVVRS Australia has a wide range and network of agents and suppliers globally, who look up to us and
                take the advantage we offer them by trading with us. VVRS Australia exports and imports a wide range
                of eatables. It also has a strong focus on international commodities such as wheat, sugar and
                barley.</p>
        </div>
    </div>
</section>
{{-- End Banner --}}
{{-- Start Brands --}}
<section class="brand bg-white-color py-5">
    <div class="main-title pb-5 text-center">
        <h3>Other Brands we supply</h3>
    </div>
    <div class="container">
        <div class="items d-flex align-items-center justify-content-center flex-wrap gap-4">
            @foreach ($brands as $brand)
                <img src="{{ asset($brand->image) }}" class="brand-img mb-1 bg-light rounded">
            @endforeach
        </div>
    </div>
</section>
{{-- End Brands --}}
{{-- Start Products --}}
<section class="product py-5 bg-green-color">
    <div class="main-title pb-5 text-center">
        <h3>Main Products</h3>
    </div>
    <div class="container">

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper pb-5">
                @foreach ($products as $product)
                    <div class="swiper-slide rounded">
                        <div class="card">
                            <img src="{{ asset($product->image) }}" class="card-img-top bg-card-color" alt="">
                            <div class="card-body">
                                <h3
                                    class="card-title {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }} text-truncate">
                                    {{ $product->title() }}</h3>
                                <p class="card-text {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }}">
                                    {{ $product->description() }}</p>
                                <a href="#"
                                    class="btn p-0 rounded {{ app()->getLocale() == 'ar' ? 'float-end' : 'float-start' }}">@lang('Order now →')</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
{{-- End Products --}}
{{-- Start Latest --}}
<section class="latest py-5">
    <div class="container">
        <div class="head d-flex align-items-center justify-content-between pb-5">
            <h3 class="left">The Latest</h3>
            <a href="#" class="btn p-0 right">Read more →</a>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-card-color p-3">
                    <div class="img">
                        <img src="{{ asset('images/latest/latest-1.png') }}" alt="" class="w-100 h-100">
                    </div>
                    <div class="body pe-2">
                        <h5>Good Morning America</h5>
                        <p class="m-0">Naomi Osaka joins sweetgreen as youngest investor <br> Discover what our
                            collab means for the future of fast food…</p>
                        <a href="#" class="btn p-0">Read more →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-card-color p-3">
                    <div class="img">
                        <img src="{{ asset('images/latest/latest-2.png') }}" alt="" class="w-100 h-100">
                    </div>
                    <div class="body pe-2">
                        <h5>Good Morning America</h5>
                        <p class="m-0">Naomi Osaka joins sweetgreen as youngest investor <br> Discover what our
                            collab means for the future of fast food…</p>
                        <a href="#" class="btn p-0">Read more →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-card-color p-3">
                    <div class="img">
                        <img src="{{ asset('images/latest/latest-3.png') }}" alt="" class="w-100 h-100">
                    </div>
                    <div class="body pe-2">
                        <h5>Good Morning America</h5>
                        <p class="m-0">Naomi Osaka joins sweetgreen as youngest investor <br> Discover what our
                            collab means for the future of fast food…</p>
                        <a href="#" class="btn p-0">Read more →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Latest --}}

{{-- Start Contact --}}
@include('site.inc.contact')
{{-- End Contact --}}

{{-- Start Footer --}}
@include('site.inc.footer')
{{-- End Footer --}}
@include('site.layouts.footer')
