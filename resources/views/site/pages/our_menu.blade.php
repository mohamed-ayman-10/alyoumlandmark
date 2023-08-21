@include('site.layouts.header')
{{-- Start Navbar --}}
@include('site.inc.nav')
{{-- End Navbar --}}

<div class="menu">
    <div class="container">
        <div class="qa">
            <div class="menu-content">
                <div class="header">
                    <h4 class="menu-title">Our Menu</h4>
                </div>
                <div class="menu-body">
                    <p class="pra zxc">@lang('alyoum land mark products are:')</p>
                    <div class="menu-text">
                        <ol>
                            <li class="pra">@lang('Frozen French fries and Frozen Potatoes')</li>
                            <li class="pra">@lang('Certified, Analyzed Strawberry.')</li>
                            <li class="pra">@lang('Mango in Slices or Cubes')</li>
                            <li class="pra">@lang('Egyptian Pomegranate (frozen Seed)')</li>
                            <li class="pra">@lang('Frozen Mixed Vegetables.')</li>
                            <li class="pra">@lang('Green Bean')</li>
                            <li class="pra">@lang('Okra ( All Sizes )')</li>
                            <li class="pra">@lang('Frozen Spinach')</li>
                            <li class="pra">@lang('Frozen Mulukhiyah')</li>
                            <li class="pra"> @lang('Frozen Sugary Pea')</li>
                            <li class="pra"> @lang('Frozen Dry Pea')</li>
                            <li class="pra"> @lang('Grilled Frozen eggplant')</li>
                            <li class="pra"> @lang('Frozen Artichoke ( Pellet and cubes)')</li>
                            <li class="pra"> @lang('Frozen Broccoli')</li>
                            <li class="pra"> @lang('Frozen Taro ( Cubes)')</li>
                            <li class="pra"> @lang('Guava ( slices , Cubes and minced)')</li>

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
