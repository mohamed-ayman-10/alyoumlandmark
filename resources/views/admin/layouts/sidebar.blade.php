<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="font-w600 text-dual" href="index.html">
            <span class="smini-visible">
                <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide font-size-h5 tracking-wider">
                One<span class="font-w400">UI</span>
            </span>
        </a>
        <!-- END Logo -->
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
            <ul dir="{{ app()->getLocale() == 'ar' ? '' : 'rtl' }}"
                class="nav-main {{ app()->getLocale() == 'ar' ? 'text-right' : 'p-0' }}">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="{{ route('admin.index') }}">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">@lang('Dashboard')</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link active" href="{{ route('admin.product') }}">
                        <i class="nav-main-link-icon fa fa-box-open"></i>
                        <span class="nav-main-link-name">@lang('Products')</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="{{ route('admin.brand.index') }}">
                        <i class="nav-main-link-icon fa fa-landmark"></i>
                        <span class="nav-main-link-name">@lang('Brands')</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="{{ route('admin.contact-us.order') }}">
                        <i class="nav-main-link-icon fa fa-landmark"></i>
                        <span class="nav-main-link-name">@lang('Order')</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="{{ route('admin.setting') }}">
                        <i class="nav-main-link-icon si si-settings"></i>
                        <span class="nav-main-link-name">@lang('Setting')</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
