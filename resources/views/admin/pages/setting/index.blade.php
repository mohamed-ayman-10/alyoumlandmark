@extends('admin.layouts.master')
@section('content')
    <!-- Page Content -->
    <div class="content m-0 p-0 w-100">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-header">
                <a href="#" class="btn btn-md btn-primary" data-toggle="modal" data-target="#create"
                    style="margin: {{ app()->getLocale() == 'ar' ? '0 0 0 auto' : '' }}">@lang('Update')</a>
            </div>
            <div class="block-content block-content-full">
                <table dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
                    class="table table-bordered table-hover {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">
                    <tbody>
                        <tr>
                            <td class="w-25">@lang('Title In Arabic')</td>
                            <td class="w-75">{{ $setting->title_ar }}</td>
                        </tr>
                        <tr>
                            <td class="w-25">@lang('Title In English')</td>
                            <td class="w-75">{{ $setting->title_en }}</td>
                        </tr>
                        <tr>
                            <td class="w-25">@lang('Address In Arabic')</td>
                            <td class="w-75">{{ $setting->address_ar }}</td>
                        </tr>
                        <tr>
                            <td class="w-25">@lang('Address In English')</td>
                            <td class="w-75">{{ $setting->address_en }}</td>
                        </tr>
                        <tr>
                            <td class="w-25">@lang('Phone')</td>
                            <td class="w-75">{{ $setting->phone }}</td>
                        </tr>
                        <tr>
                            <td class="w-25">@lang('Email')</td>
                            <td class="w-75">{{ $setting->email }}</td>
                        </tr>
                        <tr>
                            <td class="w-25">@lang('Facebook')</td>
                            <td class="w-75">{{ $setting->facebook }}</td>
                        </tr>
                        <tr>
                            <td class="w-25">@lang('Whatsapp')</td>
                            <td class="w-75">{{ $setting->whatsapp }}</td>
                        </tr>
                        <tr>
                            <td class="w-25">@lang('Logo')</td>
                            <td class="w-75">
                                <img src="{{ asset($setting->logo) }}" alt=""
                                    style="max-height: 150px; max-width:150px">
                            </td>
                        </tr>
                        <tr>
                            <td class="w-25">@lang('Favicon')</td>
                            <td class="w-75">
                                <img src="{{ asset($setting->favicon) }}" alt=""
                                    style="max-height: 150px; max-width:150px">
                            </td>
                        </tr>
                    </tbody>
                </table>
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
                        action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="block-content font-size-sm {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">
                            <div class="form-group">
                                <label class="form-lable w-100">
                                    @lang('Title In Arabic')
                                    <input type="text" name="title_ar" value="{{ $setting->title_ar }}" required
                                        placeholder="@lang('Title In Arabic')" class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-lable w-100">
                                    @lang('Title In English')
                                    <input type="text" name="title_en" value="{{ $setting->title_en }}" required
                                        placeholder="@lang('Title In English')" class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-lable w-100">
                                    @lang('Address In Arabic')
                                    <input type="text" name="address_ar" value="{{ $setting->address_ar }}" required
                                        placeholder="@lang('Address In Arabic')" class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-lable w-100">
                                    @lang('Address In English')
                                    <input type="text" name="address_en" value="{{ $setting->address_en }}" required
                                        placeholder="@lang('Address In English')" class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-lable w-100">
                                    @lang('Phone')
                                    <input type="text" name="phone" value="{{ $setting->phone }}" required
                                        placeholder="@lang('Phone')" class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-lable w-100">
                                    @lang('Email')
                                    <input type="email" name="email" value="{{ $setting->email }}" required
                                        placeholder="@lang('Email')" class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-lable w-100">
                                    @lang('Facebook')
                                    <input type="url" name="facebook" value="{{ $setting->facebook }}" required
                                        placeholder="@lang('Facebook')" class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-lable w-100">
                                    @lang('Whatsapp')
                                    <input type="text" name="whatsapp" value="{{ $setting->whatsapp }}" required
                                        placeholder="@lang('Whatsapp')" class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-lable">
                                    @lang('Logo')
                                    <input type="file" accept="image/*" name="logo" class="form-control-file">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-lable">
                                    @lang('Favicon')
                                    <input type="file" accept="image/*" name="favicon" class="form-control-file">
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
