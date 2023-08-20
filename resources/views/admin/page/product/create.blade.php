@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="m-0"> @lang('Create product')</h4>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body">
                    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Title Ar')</label>
                                    <input type="text" name="title_ar" id="" class="form-control"
                                        placeholder="{{ __('Title Ar') }}" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Title En')</label>
                                    <input type="text" name="title_en" id="" class="form-control"
                                        placeholder="{{ __('Title En') }}" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Description Ar')</label>
                                    <textarea class="form-control" name="description_ar" id="" rows="5"
                                        placeholder="{{ __('Description Ar') }}"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Description En')</label>
                                    <textarea class="form-control" name="description_en" id="" rows="5"
                                        placeholder="{{ __('Description En') }}"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Choose image')</label>
                                    <input type="file" class="form-control" name="image" id="image"
                                        placeholder="{{ __('image') }}" aria-describedby="fileHelpId">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">@lang('Price')</label>
                                    <input type="text" name="price" id="" class="form-control"
                                        placeholder="{{ __('Price') }}" aria-describedby="helpId">
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
