@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">
                    <h4 class="m-0"> @lang('Update Product')</h4>
                </div>

                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                <div class="card-body">
                    <form action="{{ route('admin.product.update', $product->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
                            class="row {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Title In Arabic')</label>
                                    <input type="text" name="title_ar" value="{{ old('title_ar', $product->title_ar) }}"
                                        id="" class="form-control @error('title_ar') is-invalid @enderror"
                                        placeholder="{{ __('Title In Arabic') }}" aria-describedby="helpId">
                                    @error('title_ar')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Title In English')</label>
                                    <input type="text" name="title_en" value="{{ old('title_en', $product->title_en) }}"
                                        id="" class="form-control @error('title_en') is-invalid @enderror"
                                        placeholder="{{ __('Title In English') }}" aria-describedby="helpId">
                                    @error('title_en')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Description Ar')</label>
                                    <textarea class="form-control @error('description_ar') is-invalid @enderror" name="description_ar" id=""
                                        rows="5" placeholder="{{ __('Description Ar') }}">{{ old('description_ar', $product->description_ar) }}</textarea>
                                    @error('description_ar')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Description En')</label>
                                    <textarea class="form-control @error('description_en') is-invalid @enderror" name="description_en" id=""
                                        rows="5" placeholder="{{ __('Description En') }}">{{ old('description_en', $product->description_en) }}</textarea>
                                    @error('description_en')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Product Details Ar')</label>
                                    <textarea class="form-control @error('product_details') is-invalid @enderror" name="product_details_ar" id=""
                                        rows="5" placeholder="{{ __('Product Details Ar') }}">{{ old('product_details_ar', $product->product_details_ar) }}</textarea>
                                    @error('description_en')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Product Details En')</label>
                                    <textarea class="form-control @error('product_details_en') is-invalid @enderror" name="product_details_en"
                                        id="" rows="5" placeholder="{{ __('Product Details En') }}">{{ old('product_details_en', $product->product_details_en) }}</textarea>
                                    @error('description_en')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Choose image')</label>
                                    <input type="file" class="form-control-file  @error('image') is-invalid @enderror"
                                        name="image" id="image" aria-describedby="fileHelpId">
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-md btn-primary">@lang('Submit')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
