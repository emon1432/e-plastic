@extends('backend.layouts.master')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Product Purchase Report</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
            <div class="hidden md:block mx-auto text-gray-600">
                <a href="{{ url('purchase-reports/0') }}" class="btn btn-outline-primary w-24 mr-1 mb-2">Today</a>
                <a href="{{ url('purchase-reports/6') }}" class="btn btn-outline-primary w-24 mr-1 mb-2">7
                    Days</a>
                <a href="{{ url('purchase-reports/29') }}" class="btn btn-outline-primary w-24 mr-1 mb-2">30
                    Days</a>
                <a href="{{ url('purchase-reports/364') }}" class="btn btn-outline-primary w-24 mr-1 mb-2">1
                    Year</a>
            </div>
        </div>
        {{-- date to date --}}
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
            <div class="hidden md:block mx-auto text-gray-600">
                <form action="{{ route('purchase.date-wise') }}" method="POST">
                    @csrf
                    <div class="flex">
                        <div class="mr-2">
                            <input type="date" name="start_date" class="input w-full border mt-2"
                                placeholder="Start Date">
                        </div>
                        <div class="mr-2">
                            <input type="date" name="end_date" class="input w-full border mt-2" placeholder="End Date">
                        </div>
                        <div class="mr-2">
                            <button type="submit" class="btn btn-primary w-24 mr-1 mb-2">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="listContainer" class="intro-y col-span-12 ">
            <div class="intro-y col-span-12 ">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr class="text-center">
                            <th>Product Name</th>
                            <th>Product Category</th>
                            <th>Seller Name</th>
                            <th>Seller Phone</th>
                            <th>Seller Address</th>
                            <th>Product Weight</th>
                            <th>Product Price</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="intro-x text-center font-medium whitespace-nowrap">
                                <td>{{ $order->product_name }}</td>
                                <td>{{ $order->category->name }}</td>
                                <td>{{ $order->created_at->format('d-m-Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
