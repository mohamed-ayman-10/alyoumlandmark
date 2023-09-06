@include('site.layouts.header')
@include('site.inc.nav')
{{-- Start Banner --}}
<section class="banner py-5 position-relative" style="background-image: url({{ asset('images/banner.png') }})">
    {{-- <img class="banner-img" src="{{ asset('images/banner.png') }}" alt=""> --}}
    <div class="container">
        <div class="content px-5 text-light" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
            <h2 class="mb-4 ">@lang('Who We Are?')</h2>
            <p class="">@lang('Alyoum Land Mark company is an Egyptian company specialized in production , packaging , trading and eporting of frozen Vegetables, Fruits and French fries potatoes. Alyoum Land Mark company mission is to seek about qualified material. Our aim is to introduce safe and highly qualified final product with distinguished delicious taste. We consider our consumer as a main member of our Family so we keen carefully to taste him a very pleasant product.')</p>
        </div>
    </div>
</section>
{{-- End Banner --}}
{{-- Start Brands --}}
<section class="brand bg-white-color py-5">
    <div class="main-title pb-5 text-center">
        <h3>@lang('Other Brands we supply')</h3>
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
        <h3>@lang('Main Products')</h3>
    </div>
    <div class="container">

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper pb-5">
                @foreach ($products as $product)
                    <div class="swiper-slide rounded">
                        <div class="card">
                            <img src="{{ asset($product->images[0]->path) }}" class="card-img-top bg-card-color" alt="">
                            <div class="card-body">
                                <h3 dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
                                    class="card-title {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }} text-truncate">
                                    {{ $product->title() }}</h3>
                                <p class="card-text {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }}">
                                    {{ $product->description() }}</p>
                                <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{$product->id}}"
                                        class="btn p-0 rounded {{ app()->getLocale() == 'ar' ? 'float-end' : 'float-start' }}">@lang('Order now →')</button>
                            </div>
                        </div>

                    </div>

                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
        @foreach ($products as $product)
            <!-- Modal -->
            <div class="modal fade modal-lg" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header product-modal">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0 product-modal" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            <div class="text-center mb-3 px-3">
                                <div class="row">
                                    @foreach($product->images as $image)
                                        <div class="col-md-6 mb-4">
                                            <div class="">
                                                <img src="{{asset($image->path)}}" class="w-100 h-100" alt="">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="details pb-5">
                                <div class="details-header text-center">
                                    <h4 class="title">{{$product->title()}}</h4>
                                </div>
                                <div>
                                    <label for="" class="form-label ps-5 pe-5">@lang('Description')</label>
                                    <p class="description ps-5 pe-5 m-0">{{$product->description()}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
{{-- End Products --}}
{{-- Start Latest --}}
{{-- <section class="latest py-5">
    <div class="container">
        <div class="head d-flex align-items-center justify-content-between pb-5"
            style="flex-direction:{{ app()->getLocale() == 'ar' ? 'row-reverse' : 'row' }}">
            <h3 class="left">@lang('The Latest')</h3>
            <a href="#" class="btn p-0 right">@lang('Read more →')</a>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-card-color p-3">
                    <div class="img">
                        <img src="{{ asset('images/latest/latest-1.png') }}" alt="" class="w-100 h-100">
                    </div>
                    <div class="body pe-2">
                        <h5>@lang('Good Morning America')</h5>
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
</section> --}}
{{-- End Latest --}}

@include('modal.modalShow')

{{-- Start Contact --}}
@include('site.inc.contact')
{{-- End Contact --}}

{{-- Start Footer --}}
@include('site.inc.footer')
{{-- End Footer --}}
@include('site.layouts.footer')
