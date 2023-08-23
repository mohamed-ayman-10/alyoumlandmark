<!-- Show Modal -->
<div class="modal fade" id="show" aria-hidden="true" aria-labelledby="show" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px">
        <div class="modal-content" style="width:800px">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">@lang('Product Details:') <span class="title"></span>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="modal-body">
                <div class="text-center">
                    <img alt="" id="img">
                </div>
                <div>
                    <label for="" class="form-label ps-5 pe-5">@lang('Description')</label>
                    <p class="description ps-5 pe-5"></p>
                </div>
                <div>
                    <label for="" class="form-label ps-5 pe-5">@lang('Description')</label>
                    <p class="product-description ps-5 pe-5"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">
                    @lang('Back')</button>
            </div>
        </div>
    </div>
</div>

<!-- END Show Modal -->
