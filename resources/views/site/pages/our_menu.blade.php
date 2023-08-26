@include('site.layouts.header')
{{-- Start Navbar --}}
@include('site.inc.nav')
{{-- End Navbar --}}

<div class="menu text-center">
    <div class="container">
        <div class="qa" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
            <div class="menu-content ">
                <div class="header">
                    <h4 class="menu-title">@lang('Our Menu')</h4>
                </div>
                <div class="menu-body">
                    <p class="pra zxc">@lang('alyoum land mark products are:')</p>
                    <div class="menu-text">
                        @foreach ($products as $product)
                            <a href="" data-bs-toggle="modal" data-bs-target="#show" class="pra"
                                style="color: black;text-decoration: none" data-title="{{ $product->title() }}"
                                data-description="{{ $product->description() }}"
                                data-details="{{ $product->product_details() }}" data-img="{{ $product->image }}">
                                <p>{{ $product->title() }}</p>
                            </a>
                        @endforeach
                    </div>
                    <p class="pra">
                        @lang('We are ready to produce and pack any kind of frozen vegetable or Fruit because we are an agent for frozen Vegetables and fruit production and packing certified Egyptian facilities.')
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('modal.modalShow')
{{-- Start Contact --}}
@include('site.inc.contact')
{{-- End Contact --}}

{{-- Start Footer --}}
@include('site.inc.footer')
{{-- End Footer --}}
@include('site.layouts.footer')
