@include('site.layouts.header')
{{-- Start Navbar --}}
@include('site.inc.nav')
{{-- End Navbar --}}

<div class="about">
    <div class="container">
        <div class="content">
            <section class="sec1">

                <div class="header">
                    <h4 class="title">ABOUT US</h4>
                </div>
                <div class="body">
                    <p>Alyoum Land Mark company is an Egyptian company specialized in production , packaging , trading
                        and eporting of frozen Vegetables, Fruits and French fries potatoes.
                        Alyoum Land Mark company mission is to seek about qualified material.
                        Our aim is to introduce safe and highly qualified final product with distinguished delicious
                        taste.
                        We consider our consumer as a main member of our Family so we keen carefully to taste him a very
                        pleasant product.</p>
                </div>
            </section>
            <section class="sec2">
                <div class="container">
                    <div class="head">
                        <h3 class="main-title">certificates</h3>
                    </div>


                    <!-- Swiper -->
                    <div class="swiper mySwiper py-5 xx-3">
                        <div class="swiper-wrapper pb-5">
                            {{-- @foreach ($products as $product) --}}
                            <div class="swiper-slide rounded">
                                <img src="{{ asset('images/about/Rectangle 6452.png') }}"
                                    class="images  card-img-top bg-card-color" alt="">
                            </div>
                            <div class="swiper-slide rounded">
                                <img src="{{ asset('images/about/Rectangle 6452.png') }}"
                                    class="images card-img-top bg-card-color" alt="">
                            </div>
                            <div class="swiper-slide rounded">
                                <img src="{{ asset('images/about/Rectangle 6452.png') }}"
                                    class="images card-img-top bg-card-color" alt="">
                            </div>
                            <div class="swiper-slide rounded">
                                <img src="{{ asset('images/about/Rectangle 6452.png') }}"
                                    class="images card-img-top bg-card-color" alt="">
                            </div>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

            </section>

            <section class="sec3">
                <div class="container">
                    <div class="conf">

                        <div class="rounded">
                            <img src="{{ asset('images/about/image 188.png') }}"
                                class="images2 card-img-top bg-card-color" alt="">
                        </div>
                        <div class="rounded">
                            <img src="{{ asset('images/about/image 189.png') }}"
                                class="images2 card-img-top bg-card-color" alt="">
                        </div>
                        <div class="rounded">
                            <img src="{{ asset('images/about/image 190.png') }}"
                                class="images2 card-img-top bg-card-color" alt="">
                        </div>
                    </div>

                </div>
            </section>
        </div>

    </div>

</div>
{{-- Start Contact --}}
@include('site.inc.contact')
{{-- End Contact --}}

{{-- Start Footer --}}
@include('site.inc.footer')
{{-- End Footer --}}
@include('site.layouts.footer')
