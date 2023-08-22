@include('site.layouts.header')
{{-- Start Navbar --}}
@include('site.inc.nav')
{{-- End Navbar --}}

<div class="menu">
    <div class="container">
        <div class="qa" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
            <div class="menu-content">
                <div class="header">
                    <h4 class="menu-title">@lang('Our Menu')</h4>
                </div>
                <div class="menu-body">
                    <p class="pra zxc">@lang('alyoum land mark products are:')</p>
                    <div class="menu-text">
                        <ol>
                            <li class="pra"><a href="">@lang('Frozen French fries and Frozen Potatoes')</a></li>
                            <li class="pra"><a href="">@lang('Certified, Analyzed Strawberry.') </a></li>
                            <li class="pra"><a href="">@lang('Mango in Slices or Cubes') </a></li>
                            <li class="pra"><a href="">@lang('Egyptian Pomegranate (frozen Seed)') </a></li>
                            <li class="pra"><a href="">@lang('Frozen Mixed Vegetables.') </a></li>
                            <li class="pra"><a href="">@lang('Green Bean') </a></li>
                            <li class="pra"><a href="">@lang('Okra ( All Sizes )') </a></li>
                            <li class="pra"><a href="">@lang('Frozen Spinach') </a></li>
                            <li class="pra"><a href="">@lang('Frozen Mulukhiyah') </a></li>
                            <li class="pra"><a href="">@lang('Frozen Sugary Pea') </a></li>
                            <li class="pra"><a href="">@lang('Frozen Dry Pea') </a></li>
                            <li class="pra"><a href="">@lang('Grilled Frozen eggplant') </a></li>
                            <li class="pra"><a href="">@lang('Frozen Artichoke ( Pellet and cubes)') </a></li>
                            <li class="pra"><a href="">@lang('Frozen Broccoli') </a></li>
                            <li class="pra"><a href="">@lang('Frozen Taro ( Cubes)') </a></li>
                            <li class="pra"><a href="">@lang('Guava ( slices , Cubes and minced)') </a></li>

                        </ol>
                        <p class="pra">
                            @lang('We are ready to produce and pack any kind of frozen vegetable or Fruit because we are an agent for frozen Vegetables and fruit production and packing certified Egyptian facilities.')
                        </p>
                    </div>
                </div>
            </div>
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
