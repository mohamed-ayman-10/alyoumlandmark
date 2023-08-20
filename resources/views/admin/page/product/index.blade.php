@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="clicked" style="text-align: end">
                        <a href="{{ route('admin.product.create') }}" class="btn btn-md btn-primary">@lang('Create product')</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border text-nowrap text-md-nowrap  table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@lang('Title')</th>
                                    <th>@lang('Description')</th>
                                    <th>@lang('Image')</th>
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
                                        <td>
                                            <img width="150" height="80" src="{{ asset($product->image) }}"
                                                alt="">
                                        </td>
                                        <td>{{ $product->price }}</td>
                                        <td>
                                            <a href="{{ route('admin.product.show', $product->id) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-success">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
