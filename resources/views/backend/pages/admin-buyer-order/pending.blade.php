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
                            {{-- <th>Product Category</th> --}}
                            <th>Product Weight(KG)</th>
                            <th>Product Price(TAKA)</th>
                            <th>Order Status</th>
                            <th>Payment Status</th>
                            <th>Transaction ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendingOrders as $order)
                            @if (auth()->user()->id == $order->user_id || auth()->user()->id == '1')
                                <tr class="intro-x text-center font-medium whitespace-nowrap">
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->user->phone }}</td>
                                    <td>{{ $order->user->address }}</td>
                                    <td>{{ $order->product->product_name }}</td>
                                    {{-- <td>{{ $order->category->name }}</td> --}}
                                    <td>{{ $order->product_weight }}</td>
                                    <td>{{ $order->amount }}</td>
                                    @if ($order->status == 'pending')
                                        <td>
                                            <span class="text-warning">{{ $order->status }}</span>
                                        </td>
                                    @endif
                                    @if ($order->status == 'assigned')
                                        <td>
                                            <span class="text-warning">{{ $order->status }}</span>
                                        </td>
                                    @endif
                                    <td>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td>
                                        <span class="text-primary">{{ $order->transaction_id }}</span>
                                    </td>
                                    @if ($order->status == 'pending')
                                        <td>
                                            <button class="flex items-center mr-3 btn btn-primary" data-tw-toggle="modal"
                                                data-tw-target="#employee-assign-modal-{{ $order->id }}">
                                                Assign
                                                Employee
                                            </button>
                                        </td>
                                    @endif

                                    @if ($order->status == 'assigned')
                                        <td>
                                            <span>Assigned</span>
                                        </td>
                                    @endif
                                    <div id="employee-assign-modal-{{ $order->id }}" class="modal" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-xl p-2">
                                            <div class="modal-content p-8">
                                                <div
                                                    class="intro-y text-primary text-2xl font-bold text-left pt-4 pb-2 mb-2 border-b-2 ">
                                                    Assign Employee
                                                </div>
                                                <form class="text-lg" action="{{ route('order.employee-assign') }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="grid grid-cols-12 gap-2 my-5">
                                                        <div class="col-span-12 flex items-center">
                                                            <label class=" sm:flex-row">Select
                                                                Employee</label>
                                                            <select name="employee_id" class="input w-full border mt-2">
                                                                <option value="" selected disabled>Select Employee
                                                                </option>
                                                                @foreach ($employees as $employee)
                                                                    <option value="{{ $employee->id }}">
                                                                        {{ $employee->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <input type="hidden" name="order_id"
                                                                value="{{ $order->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-row-reverse mt-2">
                                                        <button type="submit"
                                                            class="btn btn-primary w-full shadow-md mr-2 ">
                                                            Assign
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
