<!-- Show Modal -->
<div class="modal fade" id="show" aria-hidden="true" aria-labelledby="show" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="max-width:1063px">
        <div class="modal-content product-content">
            <div class="modal-header product-modal">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><svg
                        xmlns="http://www.w3.org/2000/svg" width="43" height="54" viewBox="0 0 43 54"
                        fill="none">
                        <path d="M40 3L3 27L40 51" stroke="white" stroke-width="6" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg></button>
            </div>
            <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="modal-body xa-0">
                <div class="text-center product-modal" style="padding-bottom:63px">
                    <img alt="" id="img">
                </div>
                <div class="details">
                    <div class="details-header text-center">
                        <h4 class="title"></h4>
                        {{-- <p class="product-description "></p> --}}
                    </div>
                    <div class="products">

                        <div style="padding:10px 0">
                            <label for="" class="form-label ps-5 pe-5">@lang('Description')</label>
                            <p class="description ps-5 pe-5 m-0"></p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="zas">
                <p class="name m-0">Elyoumlandmark</p>
            </div>
        </div>
    </div>
</div>

<!-- END Show Modal -->
