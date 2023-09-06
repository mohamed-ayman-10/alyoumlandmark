@extends('admin.layouts.master')
@section('content')
    <!-- Page Content -->
    <div class="content m-0 p-0 w-100">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-header">
                <a href="{{ route('admin.product.create') }}" class="btn btn-md btn-primary"
                    style="margin: {{ app()->getLocale() == 'ar' ? '0 0 0 auto' : '' }}">@lang('Create product')</a>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
                    class="table table-bordered table-striped table-vcenter js-dataTable-full {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('Title')</th>
                            <th>@lang('Description')</th>
                            <th>@lang('Price')</th>
                            <th>@lang('Actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $i => $product)
                            <tr>
                                <td> {{ $i + 1 }} </td>
                                <td>{{ $product->title() }}</td>
                                <td>
                                    <p class="text-truncate" style="width:200px">{{ $product->description() }}</p>
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="{{ route('admin.product.show', $product->id) }}"
                                        class="btn btn-sm btn-warning">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.product.edit', $product->id) }}"
                                        class="btn btn-sm btn-success">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-sm btn-danger" data-toggle="modal"
                                        data-target="#delete{{ $product->id }}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <!-- Delete Modal -->
                            <div class="modal fade" id="delete{{ $product->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="delete{{ $product->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-slideup" role="document">
                                    <div class="modal-content">
                                        <div class="block block-rounded block-themed block-transparent mb-0">
                                            <div class="block-header bg-primary-dark">
                                                <h3 class="block-title">@lang('Delete Product')</h3>
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
                                                <a href="{{ route('admin.product.destroy', $product->id) }}"
                                                    class="btn btn-primary">@lang('Ok')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Delete Modal -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>
    <!-- END Page Content -->
@endsection
@section('scripts')
@endsection
