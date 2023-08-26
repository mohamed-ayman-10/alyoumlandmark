@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card" style="text-align:{{ app()->getLocale() == 'ar' ? 'end' : 'start' }}">
                <div class="card-header">
                    <h5 class="m-0">@lang('Order')</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="border table text-nowrap text-md-nowrap table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                    <th>see</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach ($orders as $order)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td style="display: flex;justify-content:space-around">
                                            @if ($order->see == null)
                                                <a href="{{ route('admin.contact-us.updatesee', $order->id) }}"
                                                    class="btn">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                </form>
                                            @endif
                                            <a href="{{ route('admin.contact-us.delete', $order->id) }}" class="btn">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                        <td>
                                            @if ($order->see != null)
                                                <i class="fa fa-check btn" style="color:green;font-size:20px"></i>
                                            @endif
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
