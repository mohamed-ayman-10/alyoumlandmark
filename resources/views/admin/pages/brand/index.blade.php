@extends('admin.layouts.master')
@section('content')
    <!-- Page Content -->
    <div class="content m-0 p-0 w-100">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-header">
                <a href="#" class="btn btn-md btn-primary" data-toggle="modal" data-target="#create"
                    style="margin: {{ app()->getLocale() == 'ar' ? '0 0 0 auto' : '' }}">@lang('Create Brand')</a>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    @foreach ($brands as $brand)
                        <div class="col-6 col-md-3 col-lg-2 mb-4">
                            <div class="card">
                                <img src="{{ asset($brand->image) }}" alt="" class="card-img-top">
                                <div class="card-footer">
                                    <a href="#" class="btn btn-sm btn-outline-success w-100 mb-1" data-toggle="modal"
                                        data-target="#update{{ $brand->id }}">@lang('Update')</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger w-100" data-toggle="modal"
                                        data-target="#delete{{ $brand->id }}">@lang('Delete')</a>
                                </div>
                            </div>
                        </div>
                        <!-- Update Modal -->
                        <div class="modal fade" id="update{{ $brand->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="update{{ $brand->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-slideup" role="document">
                                <div class="modal-content">
                                    <div class="block block-rounded block-themed block-transparent mb-0">
                                        <div class="block-header bg-primary-dark">
                                            <h3 class="block-title">@lang('Update Brand')</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i class="fa fa-fw fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <form dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
                                            action="{{ route('admin.brand.update', $brand->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div
                                                class="block-content font-size-sm {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">
                                                <div class="form-group">
                                                    <label class="form-lable">
                                                        @lang('Choose image')
                                                        <input type="file" accept="image/*" name="image" required
                                                            class="form-control-file">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="block-content block-content-full text-right border-top">
                                                <button type="button" class="btn btn-alt-primary mr-1"
                                                    data-dismiss="modal">@lang('Close')</button>
                                                <button type="submit" class="btn btn-primary">@lang('Save')</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Update Modal -->
                        <!-- Delete Modal -->
                        <div class="modal fade" id="delete{{ $brand->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="delete{{ $brand->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-slideup" role="document">
                                <div class="modal-content">
                                    <div class="block block-rounded block-themed block-transparent mb-0">
                                        <div class="block-header bg-primary-dark">
                                            <h3 class="block-title">@lang('Delete Brand')</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i class="fa fa-fw fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <form dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
                                            action="{{ route('admin.brand.destroy', $brand->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <div
                                                class="block-content font-size-sm {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">
                                                <div class="alert alert-danger" role="alert">@lang('Are You Sure Delete?')</div>
                                            </div>
                                            <div class="block-content block-content-full text-right border-top">
                                                <button type="button" class="btn btn-alt-primary mr-1"
                                                    data-dismiss="modal">@lang('Close')</button>
                                                <button type="submit" class="btn btn-primary">@lang('Ok')</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Delete Modal -->
                    @endforeach
                </div>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>
    <!-- END Page Content -->

    <!-- Create Modal -->
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideup" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">@lang('Create Brand')</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
                        action="{{ route('admin.brand.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="block-content font-size-sm {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">
                            <div class="form-group">
                                <label class="form-lable">
                                    @lang('Choose image')
                                    <input type="file" accept="image/*" name="image" required
                                        class="form-control-file">
                                </label>
                            </div>
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-alt-primary mr-1"
                                data-dismiss="modal">@lang('Close')</button>
                            <button type="submit" class="btn btn-primary">@lang('Save')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Create Modal -->
@endsection
@section('scripts')
@endsection
