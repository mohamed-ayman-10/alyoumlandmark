<nav class="navbar navbar-expand-lg bg-light position-sticky top-0 ">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 vc-0"
                style="flex-direction:{{ app()->getLocale() == 'ar' ? 'row-reverse' : 'row' }}">
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="{{ route('menu') }}">@lang('Our Menu')</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="#">@lang('Our Mission')</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="{{ route('about') }}">@lang('ABOUT US')</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="{{ route('contact') }}">@lang('CONTACT US')</a>
                </li>

            </ul>
            <!-- Lang Dropdown -->

            <div class="btn-group " style="margin-right: 10px">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ app()->getLocale() == 'ar' ? 'العربية' : 'English' }}
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="{{ url('local?local=ar') }}">
                            <span class="font-size-sm font-w500">العربية</span>
                        </a></li>
                    <li> <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="{{ url('local?local=en') }}">
                            <span class="font-size-sm font-w500">English</span>
                        </a></li>
                </ul>
            </div>

            <form class="d-flex" role="search">
                <button class="bg-main-color text-yellow-color py-2 px-4" type="button">@lang('Order')</button>
            </form>
        </div>
    </div>
</nav>
