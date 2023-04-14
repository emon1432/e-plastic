@extends('backend.layouts.master')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Buyer Pending Order List</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div id="listContainer" class="intro-y col-span-12 ">
            <div class="intro-y col-span-12 ">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr class="text-center">
                            <th>Buyer Name</th>
                            <th>Buyer Phone</th>
                            <th>Buyer Address</th>
                            <th>Product Name</th>
                            <th>Product Category</th>
                            <th>Product Weight</th>
                            <th>Product Price</th>
                            <th>Payment Status</th>
                            <th>Transaction ID</th>
                            <th>Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assignedOrders as $order)
                            @if (auth()->user()->id == $order->user_id || auth()->user()->id == '1')
                                <tr class="intro-x text-center font-medium whitespace-nowrap">
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->user->phone }}</td>
                                    <td>{{ $order->user->address }}</td>
                                    <td>{{ $order->product->product_name }}</td>
                                    <td>{{ $order->category->name }}</td>
                                    <td>{{ $order->product_weight }}</td>
                                    <td>{{ $order->amount }}</td>
                                    <td>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td>
                                        <span class="text-primary">{{ $order->transaction_id }}</span>
                                    </td>
                                    @if ($order->status == 'assigned')
                                        <td>
                                            <span class="text-warning">{{ $order->status }}</span>
                                        </td>
                                    @endif
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
