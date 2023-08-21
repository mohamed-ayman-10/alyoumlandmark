@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="card  {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">

                <div class="card-header">
                    <h4 class="m-0">@lang('View product:') {{ $product->title() }}</h4>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">@lang('Title')</label>
                        <input type="text" class="form-control" aria-describedby="helpId" value="{{ $product->title() }}"
                            readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">@lang('Description')</label>
                        <textarea class="form-control" rows="5" readonly>{{ $product->description() }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label mb-3">@lang('Image')</label>
                        <img src="{{ asset($product->image) }}" style="height: 400px;width:100%"
                            class="img-fluid rounded-top" alt="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">@lang('Price')</label>
                        <input type="text" class="form-control" aria-describedby="helpId" value="{{ $product->price }}"
                            readonly>
                    </div>

                    <div class="text-start">
                        <a href="{{ route('admin.product') }}" class="btn btn-lg mt-3 btn-primary">
                            <i class="fa fa-back"></i>
                            @lang('Back')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
