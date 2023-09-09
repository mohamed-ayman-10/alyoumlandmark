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
                            <button type="button" class="pra border-0 bg-transparent" type="button"
                                data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id }}"
                                style="color: black;text-decoration: none">
                                <p class="" style="padding: 17px !important">{{ $product->title() }}</p>
                            </button>
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
@foreach ($products as $product)
    <!-- Modal -->
    <div class="modal fade modal-xl" id="exampleModal{{ $product->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-card-color">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 bg-card-color " dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                    <div class="text-center mb-3 px-3">
                        <div class="row">
                            @foreach ($product->images as $image)
                                <div class="col-md-4 mb-4">
                                    <div class="">
                                        <img src="{{ asset($image->path) }}" class="w-100 h-100" alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="details pb-5 bg-card-color text-light">
                        <div class="details-header text-center">
                            <h4 class="title  text-light">{{ $product->title() }}</h4>
                        </div>
                        <div>
                            <label for="" class="form-label ps-5 pe-5">@lang('Description')</label>
                            <p class="description ps-5 pe-5 m-0">{{ $product->description() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@include('modal.modalShow')
{{-- Start Contact --}}
@include('site.inc.contact')
{{-- End Contact --}}

{{-- Start Footer --}}
@include('site.inc.footer')
{{-- End Footer --}}
@include('site.layouts.footer')
