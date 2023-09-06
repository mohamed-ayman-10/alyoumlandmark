@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
                class="card  {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">

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
                        <label for="" class="form-label">@lang('Title')</label>
                        <textarea class="form-control" rows="5" aria-describedby="helpId" readonly>{{ $product->product_details() }}</textarea>
                    </div>
                    <label for="" class="">@lang('Image')</label>
                    <div class="mb-3 row">
                        @foreach($product->images as $image)
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{ asset($image->path) }}" style="height: 400px;width:100%"
                                         class="card-img-top rounded-top" alt="">
                                    <div class="card-body text-center">
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target="#update{{ $image->id }}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#delete{{ $image->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- Update Modal --}}
                            <div class="modal fade" id="update{{ $image->id }}" tabindex="-1" role="dialog"
                                 aria-labelledby="delete{{ $image->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-slideup" role="document">
                                    <div class="modal-content">
                                        <div class="block block-rounded block-themed block-transparent mb-0">
                                            <div class="block-header bg-primary-dark">
                                                <h3 class="block-title">@lang('Update')</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <form action="{{route('admin.image.update')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="block-content font-size-sm">
                                                    <div class="form-group">
                                                        <label>@lang('Image')</label>
                                                        <input type="file" name="image" class="form-control" accept="image/*" required>
                                                    </div>
                                                    <input type="hidden" name="id" value="{{$image->id}}">
                                                </div>
                                                <div class="block-content block-content-full text-right border-top">
                                                    <button type="button" class="btn btn-alt-primary mr-1"
                                                            data-dismiss="modal">@lang('Close')</button>
                                                    <button type="submit" href="{{ route('admin.product.destroy', $product->id) }}"
                                                       class="btn btn-primary">@lang('Ok')</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--END Update Modal--}}
                            {{-- Delete Modal --}}
                            <div class="modal fade" id="delete{{ $image->id }}" tabindex="-1" role="dialog"
                                 aria-labelledby="delete{{ $image->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-slideup" role="document">
                                    <div class="modal-content">
                                        <div class="block block-rounded block-themed block-transparent mb-0">
                                            <div class="block-header bg-primary-dark">
                                                <h3 class="block-title">@lang('Delete')</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="block-content font-size-sm">
                                                <div class="alert alert-danger" role="alert">@lang('Are You Sure Delete?')</div>
                                            </div>
                                            <div class="block-content block-content-full text-right border-top">
                                                <button type="button" class="btn btn-alt-primary mr-1"
                                                        data-dismiss="modal">@lang('Close')</button>
                                                <a href="{{ route('admin.image.delete', $image->id) }}"
                                                   class="btn btn-primary">@lang('Ok')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--END Delete Modal--}}
                        @endforeach
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
