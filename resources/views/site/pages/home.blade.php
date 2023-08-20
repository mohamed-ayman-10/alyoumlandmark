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
            <img src="{{ asset('images/brand/brand-1.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-2.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-3.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-4.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-5.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-6.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-7.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-8.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-9.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-10.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-11.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-12.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-13.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-14.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-15.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-16.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-17.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-18.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-19.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-20.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-21.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-22.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-23.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-24.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-25.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-26.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-27.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-28.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-29.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-30.png') }}" alt="" class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-31.png') }}" alt=""
                class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-34.png') }}" alt=""
                class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-35.png') }}" alt=""
                class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-36.png') }}" alt=""
                class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-37.png') }}" alt=""
                class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-38.png') }}" alt=""
                class="brand-img mb-1 bg-light rounded">
            <img src="{{ asset('images/brand/brand-39.png') }}" alt=""
                class="brand-img mb-1 bg-light rounded">
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
                <div class="swiper-slide rounded">
                    <div class="card">
                        <img src="{{ asset('images/products/product-1.png') }}" class="card-img-top bg-card-color"
                            alt="">
                        <div class="card-body">
                            <h3 class="card-title text-start">Kale Caesar</h3>
                            <p class="card-text text-start">Roasted chicken, tomatoes, parmesan crisps, shaved
                                parmesan, shredded
                                kale, chopped romaine, lime squeeze, caesar dressing</p>
                            <a href="#" class="btn p-0 rounded ">Order now →</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide rounded">
                    <div class="card">
                        <img src="{{ asset('images/products/product-2.png') }}" class="card-img-top bg-card-color"
                            alt="">
                        <div class="card-body">
                            <h3 class="card-title text-start">Kale Caesar</h3>
                            <p class="card-text text-start">Roasted chicken, tomatoes, parmesan crisps, shaved
                                parmesan, shredded
                                kale, chopped romaine, lime squeeze, caesar dressing</p>
                            <a href="#" class="btn p-0 rounded ">Order now →</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide rounded">
                    <div class="card">
                        <img src="{{ asset('images/products/product-3.png') }}" class="card-img-top bg-card-color"
                            alt="">
                        <div class="card-body">
                            <h3 class="card-title text-start">Kale Caesar</h3>
                            <p class="card-text text-start">Roasted chicken, tomatoes, parmesan crisps, shaved
                                parmesan, shredded
                                kale, chopped romaine, lime squeeze, caesar dressing</p>
                            <a href="#" class="btn p-0 rounded ">Order now →</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide rounded">
                    <div class="card">
                        <img src="{{ asset('images/products/product-1.png') }}" class="card-img-top bg-card-color"
                            alt="">
                        <div class="card-body">
                            <h3 class="card-title text-start">Kale Caesar</h3>
                            <p class="card-text text-start">Roasted chicken, tomatoes, parmesan crisps, shaved
                                parmesan, shredded
                                kale, chopped romaine, lime squeeze, caesar dressing</p>
                            <a href="#" class="btn p-0 rounded ">Order now →</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide rounded">
                    <div class="card">
                        <img src="{{ asset('images/products/product-2.png') }}" class="card-img-top bg-card-color"
                            alt="">
                        <div class="card-body">
                            <h3 class="card-title text-start">Kale Caesar</h3>
                            <p class="card-text text-start">Roasted chicken, tomatoes, parmesan crisps, shaved
                                parmesan, shredded
                                kale, chopped romaine, lime squeeze, caesar dressing</p>
                            <a href="#" class="btn p-0 rounded ">Order now →</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide rounded">
                    <div class="card">
                        <img src="{{ asset('images/products/product-3.png') }}" class="card-img-top bg-card-color"
                            alt="">
                        <div class="card-body">
                            <h3 class="card-title text-start">Kale Caesar</h3>
                            <p class="card-text text-start">Roasted chicken, tomatoes, parmesan crisps, shaved
                                parmesan, shredded
                                kale, chopped romaine, lime squeeze, caesar dressing</p>
                            <a href="#" class="btn p-0">Order now →</a>
                        </div>
                    </div>
                </div>
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
<section class="contact py-5 bg-green-color">
    <div class="main-title pb-5 text-center">
        <h3>Contact Information</h3>
    </div>
    <div class="container text-center">
        <h2>Address</h2>
        <p>Ist Zone, 7th District, Block 66, 301, C, Nasr City, 11727, Egypt</p>
        <div class="contact-line bg-light mb-4"></div>
        <h2>Phone</h2>
        <p>Sales/Enquiry :01001840354</p>
        <div class="contact-line bg-light mb-4"></div>
        <h2>Email</h2>
        <p>Sales : fady@seleem.net</p>
        <div class="contact-line bg-light mb-4"></div>
        <h2>About</h2>
        <p>Terms of Service</p>
        <p>Refund Policy</p>
        <p>Privacy Policy</p>
        <div class="contact-line bg-light mb-4"></div>
        <h2>BE THE FIRST TO KNOW</h2>
        <p>Get all the latest information on Events, Sales and Offers, Sign up for newsletter today.</p>
        <div class="contact-line bg-light mb-4"></div>
        <h2 class="pb-3">Subscribe</h2>
        <form action="#" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control bg-card-color p-4 rounded-start-pill"
                    placeholder="Enter Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn2 border-0 bg-card-color rounded-end-pill px-4" type="button" id="button-addon2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
</section>
{{-- End Contact --}}

{{-- Start Footer --}}
<footer class="py-5 bg-card-color">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-5 mb-md-0">
                <div class="content text-center">
                    <h4>Follow us</h4>
                    <ul class="d-flex align-items-center justify-content-center list-unstyled gap-4">
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 0H2C0.897 0 0 0.897 0 2V14C0 15.103 0.897 16 2 16H8V10.5H6V8H8V6C8 5.20435 8.31607 4.44129 8.87868 3.87868C9.44129 3.31607 10.2044 3 11 3H13V5.5H12C11.448 5.5 11 5.448 11 6V8H13.5L12.5 10.5H11V16H14C15.103 16 16 15.103 16 14V2C16 0.897 15.103 0 14 0Z"
                                        fill="#00473C" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    viewBox="0 0 24 16" fill="none">
                                    <path
                                        d="M7.64091 6.71675V9.5435H11.9713C11.851 10.6862 10.7082 12.8514 7.64091 12.8514C5.05474 12.8514 2.94971 10.6862 2.94971 8.03991C2.94971 5.39359 4.93445 3.22842 7.52063 3.22842C9.02422 3.22842 10.0467 3.82985 10.588 4.37115L12.693 2.38641C11.6142 1.36269 10.256 0.68192 8.79029 0.430228C7.32455 0.178536 5.81708 0.367227 4.45859 0.972431C3.1001 1.57763 1.95163 2.57216 1.15846 3.83019C0.365295 5.08822 -0.0369313 6.55324 0.00266623 8.03991C0.00266623 12.25 3.43086 15.6782 7.64091 15.6782C12.0915 15.6782 14.9784 12.4905 14.9784 8.1602L14.8582 6.71675"
                                        fill="#00473C" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.3236 8.61128V11.2877H19.5794V8.61128H16.903V6.86712H19.5794V4.19072H21.3236V6.86712H24V8.61128H21.3236Z"
                                        fill="#00473C" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M8 1.44578C10.1205 1.44578 10.4096 1.44578 11.2771 1.44578C12.0482 1.44578 12.4337 1.63855 12.7229 1.73494C13.1084 1.92771 13.3976 2.0241 13.6867 2.31325C13.9759 2.60241 14.1687 2.89157 14.2651 3.27711C14.3614 3.56627 14.4578 3.95181 14.5542 4.72289C14.5542 5.59036 14.5542 5.78313 14.5542 8C14.5542 10.2169 14.5542 10.4096 14.5542 11.2771C14.5542 12.0482 14.3614 12.4337 14.2651 12.7229C14.0723 13.1084 13.9759 13.3976 13.6867 13.6867C13.3976 13.9759 13.1084 14.1687 12.7229 14.2651C12.4337 14.3614 12.0482 14.4578 11.2771 14.5542C10.4096 14.5542 10.2169 14.5542 8 14.5542C5.78313 14.5542 5.59036 14.5542 4.72289 14.5542C3.95181 14.5542 3.56627 14.3614 3.27711 14.2651C2.89157 14.0723 2.60241 13.9759 2.31325 13.6867C2.0241 13.3976 1.83133 13.1084 1.73494 12.7229C1.63855 12.4337 1.54217 12.0482 1.44578 11.2771C1.44578 10.4096 1.44578 10.2169 1.44578 8C1.44578 5.78313 1.44578 5.59036 1.44578 4.72289C1.44578 3.95181 1.63855 3.56627 1.73494 3.27711C1.92771 2.89157 2.0241 2.60241 2.31325 2.31325C2.60241 2.0241 2.89157 1.83133 3.27711 1.73494C3.56627 1.63855 3.95181 1.54217 4.72289 1.44578C5.59036 1.44578 5.87952 1.44578 8 1.44578ZM8 0C5.78313 0 5.59036 0 4.72289 0C3.85542 0 3.27711 0.192772 2.79518 0.385543C2.31325 0.578314 1.83133 0.867471 1.3494 1.3494C0.867471 1.83133 0.674699 2.21687 0.385543 2.79518C0.192772 3.27711 0.0963856 3.85542 0 4.72289C0 5.59036 0 5.87952 0 8C0 10.2169 0 10.4096 0 11.2771C0 12.1446 0.192772 12.7229 0.385543 13.2048C0.578314 13.6867 0.867471 14.1687 1.3494 14.6506C1.83133 15.1325 2.21687 15.3253 2.79518 15.6145C3.27711 15.8072 3.85542 15.9036 4.72289 16C5.59036 16 5.87952 16 8 16C10.1205 16 10.4096 16 11.2771 16C12.1446 16 12.7229 15.8072 13.2048 15.6145C13.6867 15.4217 14.1687 15.1325 14.6506 14.6506C15.1325 14.1687 15.3253 13.7831 15.6145 13.2048C15.8072 12.7229 15.9036 12.1446 16 11.2771C16 10.4096 16 10.1205 16 8C16 5.87952 16 5.59036 16 4.72289C16 3.85542 15.8072 3.27711 15.6145 2.79518C15.4217 2.31325 15.1325 1.83133 14.6506 1.3494C14.1687 0.867471 13.7831 0.674699 13.2048 0.385543C12.7229 0.192772 12.1446 0.0963856 11.2771 0C10.4096 0 10.2169 0 8 0Z"
                                        fill="#00473C" />
                                    <path
                                        d="M8 3.85542C5.68675 3.85542 3.85542 5.68675 3.85542 8C3.85542 10.3133 5.68675 12.1446 8 12.1446C10.3133 12.1446 12.1446 10.3133 12.1446 8C12.1446 5.68675 10.3133 3.85542 8 3.85542ZM8 10.6988C6.55422 10.6988 5.30121 9.54217 5.30121 8C5.30121 6.55422 6.45783 5.30121 8 5.30121C9.44578 5.30121 10.6988 6.45783 10.6988 8C10.6988 9.44578 9.44578 10.6988 8 10.6988Z"
                                        fill="#00473C" />
                                    <path
                                        d="M12.241 4.72289C12.7733 4.72289 13.2048 4.29136 13.2048 3.75904C13.2048 3.22671 12.7733 2.79518 12.241 2.79518C11.7086 2.79518 11.2771 3.22671 11.2771 3.75904C11.2771 4.29136 11.7086 4.72289 12.241 4.72289Z"
                                        fill="#00473C" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16"
                                    viewBox="0 0 22 16" fill="none">
                                    <path
                                        d="M21.45 2.42857C21.175 1.42857 20.4875 0.714286 19.525 0.428572C17.875 2.55448e-07 10.8625 0 10.8625 0C10.8625 0 3.98751 2.55448e-07 2.20001 0.428572C1.23751 0.714286 0.549996 1.42857 0.274996 2.42857C-4.20026e-06 4.28572 0 8 0 8C0 8 4.17978e-06 11.7143 0.412504 13.5714C0.687504 14.5714 1.375 15.2857 2.3375 15.5714C3.9875 16 11 16 11 16C11 16 17.875 16 19.6625 15.5714C20.625 15.2857 21.3125 14.5714 21.5875 13.5714C22 11.7143 22 8 22 8C22 8 22 4.28572 21.45 2.42857ZM8.79999 11.4286V4.57143L14.575 8L8.79999 11.4286Z"
                                        fill="#00473C" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 mb-5 mb-md-0">
                <div class="content text-center">
                    <h4>Let’s chat</h4>
                    <ul class="d-flex align-items-center justify-content-center list-unstyled gap-4">
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 18 18" fill="none">
                                    <path
                                        d="M17.5974 4.32744L17.592 4.30667C17.1577 2.60824 15.2 0.785733 13.4022 0.406573L13.3819 0.402533C10.474 -0.134178 7.52545 -0.134178 4.61811 0.402533L4.59723 0.406573C2.79997 0.785733 0.842259 2.60824 0.40741 4.30667L0.402638 4.32744C-0.134213 6.69936 -0.134213 9.10474 0.402638 11.4767L0.40741 11.4974C0.823708 13.1234 2.63564 14.8621 4.36638 15.3403V17.2363C4.36638 17.9224 5.23071 18.2595 5.72223 17.7643L7.70768 15.7676C8.1383 15.7909 8.56915 15.8039 9 15.8039C10.4638 15.8039 11.9282 15.67 13.3819 15.4016L13.4022 15.3976C15.2 15.0184 17.1577 13.1959 17.592 11.4975L17.5974 11.4767C18.1342 9.10475 18.1342 6.69936 17.5974 4.32744ZM16.0262 11.1327C15.7363 12.2408 14.2498 13.6183 13.0687 13.8728C11.5225 14.1573 9.96412 14.2789 8.40726 14.2371C8.3763 14.2363 8.34653 14.2479 8.32494 14.2694C8.104 14.4888 6.87527 15.7092 6.87527 15.7092L5.33331 17.2402C5.22057 17.3539 5.02253 17.2766 5.02253 17.1196V13.9789C5.02253 13.927 4.98424 13.8829 4.93157 13.8729C4.93127 13.8729 4.93187 13.873 4.93157 13.8729C3.7505 13.6184 2.26372 12.2407 1.97322 11.1326C1.49006 8.98869 1.49006 6.8153 1.97322 4.67134C2.26372 3.5633 3.7496 2.18574 4.93067 1.93123C7.63103 1.43434 10.369 1.43434 13.0687 1.93123C14.2504 2.18574 15.7363 3.5633 16.0262 4.67134C16.5099 6.81536 16.5099 8.98875 16.0262 11.1327Z"
                                        fill="#00473C" />
                                    <path
                                        d="M11.5687 12.5824C11.3871 12.5291 11.2141 12.4933 11.0534 12.4288C9.38817 11.7603 7.85563 10.898 6.64169 9.57617C5.95136 8.82449 5.41105 7.97585 4.95431 7.07776C4.73772 6.65186 4.55519 6.20927 4.36914 5.76958C4.19949 5.3686 4.44937 4.95435 4.71248 4.65224C4.95938 4.36871 5.27707 4.15171 5.62114 3.9918C5.88968 3.86697 6.15459 3.93894 6.35072 4.15916C6.77471 4.63527 7.16417 5.13574 7.47954 5.68763C7.67346 6.02708 7.62025 6.44202 7.26879 6.67304C7.18338 6.72919 7.10553 6.79509 7.02596 6.85852C6.95617 6.91409 6.89049 6.97025 6.84265 7.0455C6.75521 7.1832 6.75103 7.3456 6.80734 7.4953C7.24076 8.64766 7.97129 9.54374 9.17014 10.0264C9.36198 10.1036 9.55465 10.1935 9.77565 10.1686C10.1458 10.1267 10.2656 9.73395 10.525 9.52873C10.7785 9.32819 11.1025 9.32553 11.3755 9.49272C11.6487 9.65997 11.9135 9.83951 12.1766 10.0209C12.435 10.199 12.6922 10.3733 12.9305 10.5763C13.1596 10.7715 13.2385 11.0277 13.1095 11.2926C12.8733 11.7778 12.5296 12.1815 12.0338 12.4392C11.8938 12.5119 11.7266 12.5354 11.5687 12.5824C11.7266 12.5354 11.3871 12.5291 11.5687 12.5824Z"
                                        fill="#00473C" />
                                    <path
                                        d="M9.00418 3.43699C11.1823 3.49602 12.9712 4.89453 13.3546 6.9779C13.4199 7.33288 13.4432 7.69582 13.4722 8.05611C13.4845 8.20766 13.3958 8.35165 13.2267 8.35361C13.0521 8.35563 12.9736 8.2143 12.9622 8.06281C12.9398 7.76294 12.9242 7.46175 12.8815 7.16436C12.6561 5.59457 11.3623 4.29584 9.74723 4.01715C9.50422 3.9752 9.25548 3.96418 9.00931 3.93919C8.85368 3.92337 8.64985 3.91426 8.61538 3.7271C8.58645 3.57018 8.72334 3.44524 8.87778 3.43722C8.91977 3.43497 8.962 3.43681 9.00418 3.43699C11.1823 3.49602 8.962 3.43681 9.00418 3.43699Z"
                                        fill="#00473C" />
                                    <path
                                        d="M12.3141 7.58844C12.3105 7.61476 12.3086 7.67662 12.2927 7.73491C12.2349 7.94648 11.9033 7.97297 11.827 7.75944C11.8044 7.69607 11.801 7.62399 11.8008 7.55578C11.8001 7.10944 11.6998 6.66356 11.4672 6.27523C11.228 5.8761 10.8627 5.54057 10.4342 5.33754C10.175 5.21479 9.89481 5.13849 9.61081 5.09302C9.48668 5.07317 9.36124 5.0611 9.23651 5.04431C9.08536 5.02399 9.00465 4.93079 9.01181 4.78669C9.01849 4.65164 9.12049 4.55452 9.2726 4.56283C9.77247 4.5903 10.2553 4.69481 10.6997 4.92248C11.6033 5.3855 12.1196 6.11635 12.2702 7.09224C12.277 7.13645 12.288 7.18025 12.2915 7.22463C12.3 7.33422 12.3054 7.44393 12.3141 7.58844C12.3105 7.61476 12.3054 7.44393 12.3141 7.58844Z"
                                        fill="#00473C" />
                                    <path
                                        d="M10.9595 7.5374C10.7772 7.54058 10.6797 7.44299 10.6609 7.28134C10.6479 7.16863 10.6375 7.05442 10.6097 6.94477C10.555 6.72881 10.4363 6.52867 10.2486 6.39634C10.1599 6.33384 10.0595 6.28831 9.95425 6.25893C9.82057 6.22159 9.68176 6.23186 9.54838 6.20024C9.40355 6.1659 9.32344 6.05244 9.34623 5.92098C9.36693 5.80134 9.48724 5.70796 9.62235 5.71743C10.4668 5.77641 11.0704 6.1988 11.1565 7.16061C11.1626 7.22848 11.1697 7.30021 11.1542 7.36514C11.1275 7.47629 11.0425 7.53198 10.9595 7.5374C11.0425 7.53198 10.7772 7.54058 10.9595 7.5374Z"
                                        fill="#00473C" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14"
                                    viewBox="0 0 16 14" fill="none">
                                    <path
                                        d="M1.09992 6.09647C5.39487 4.26188 8.25885 3.05241 9.69185 2.46805C13.7834 0.799594 14.6335 0.509765 15.1877 0.500093C15.3095 0.49809 15.582 0.527703 15.7586 0.66813C15.9076 0.786703 15.9486 0.94688 15.9683 1.0593C15.9879 1.17172 16.0123 1.42782 15.9929 1.62793C15.7712 3.91192 14.8118 9.45457 14.3237 12.0127C14.1172 13.0951 13.7105 13.458 13.3168 13.4936C12.4613 13.5707 11.8116 12.9392 10.9829 12.4067C9.68624 11.5733 8.95369 11.0545 7.69503 10.2414C6.24042 9.30157 7.18338 8.78505 8.01236 7.94091C8.22931 7.71999 11.999 4.35836 12.0719 4.05341C12.0811 4.01527 12.0895 3.87311 12.0034 3.79804C11.9172 3.72297 11.7901 3.74864 11.6983 3.76906C11.5683 3.79799 9.4968 5.14035 5.48389 7.79611C4.89591 8.19195 4.36333 8.38482 3.88616 8.37472C3.36012 8.36357 2.34822 8.08311 1.59598 7.84338C0.673328 7.54933 -0.0599784 7.39387 0.00387615 6.8945C0.0371355 6.63439 0.402482 6.36838 1.09992 6.09647Z"
                                        fill="#00473C" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 18 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.3 2.5875C13.6125 0.9 11.3625 0 9 0C4.05 0 0 4.05 0 9C0 10.575 0.450007 12.15 1.23751 13.5L0 18L4.72501 16.7625C6.07501 17.4375 7.5375 17.8875 9 17.8875C13.95 17.8875 18 13.8375 18 8.8875C18 6.525 16.9875 4.275 15.3 2.5875ZM9 16.425C7.65 16.425 6.30001 16.0875 5.17501 15.4125L4.94999 15.3L2.13749 16.0875L2.92501 13.3875L2.69999 13.05C1.91249 11.8125 1.57499 10.4625 1.57499 9.1125C1.57499 5.0625 4.95 1.6875 9 1.6875C11.025 1.6875 12.825 2.475 14.2875 3.825C15.75 5.2875 16.425 7.0875 16.425 9.1125C16.425 13.05 13.1625 16.425 9 16.425ZM13.05 10.8C12.825 10.6875 11.7 10.125 11.475 10.125C11.25 10.0125 11.1375 10.0125 11.025 10.2375C10.9125 10.4625 10.4625 10.9125 10.35 11.1375C10.2375 11.25 10.125 11.25 9.89999 11.25C9.67499 11.1375 9.00001 10.9125 8.10001 10.125C7.42501 9.5625 6.97501 8.775 6.86251 8.55C6.75001 8.325 6.86251 8.2125 6.97501 8.1C7.08751 7.9875 7.2 7.875 7.3125 7.7625C7.425 7.65 7.42501 7.5375 7.53751 7.425C7.65001 7.3125 7.53751 7.2 7.53751 7.0875C7.53751 6.975 7.08751 5.85 6.86251 5.4C6.75001 5.0625 6.52501 5.0625 6.41251 5.0625C6.30001 5.0625 6.18749 5.0625 5.96249 5.0625C5.84999 5.0625 5.62499 5.0625 5.39999 5.2875C5.17499 5.5125 4.61251 6.075 4.61251 7.2C4.61251 8.325 5.39999 9.3375 5.51249 9.5625C5.62499 9.675 7.08749 12.0375 9.33749 12.9375C11.25 13.725 11.5875 13.5 12.0375 13.5C12.4875 13.5 13.3875 12.9375 13.5 12.4875C13.725 11.925 13.725 11.475 13.6125 11.475C13.5 10.9125 13.275 10.9125 13.05 10.8Z"
                                        fill="#00473C" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 my-auto">
                <p>copyright @ 21.Al Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
{{-- End Footer --}}
@include('site.layouts.footer')
