@extends('backend.layouts.master')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Accepted Request List</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div id="listContainer" class="intro-y col-span-12 ">
            <div class="intro-y col-span-12 ">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr class="text-center">
                            <th>NAME</th>
                            <th>PHONE</th>
                            <th>ADDRESS</th>
                            <th>TYPE</th>
                            <th>WEIGHT</th>
                            <th>PRICE</th>
                            <th>IMAGES</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($acceptedRequests as $acceptedRequest)
                            <tr class="intro-x text-center font-medium whitespace-nowrap">
                                <td>{{ $acceptedRequest->name }}</td>
                                <td>{{ $acceptedRequest->phone }}</td>
                                <td>{{ $acceptedRequest->address }}</td>
                                <td>{{ $acceptedRequest->product_category_id }}</td>
                                <td>{{ $acceptedRequest->product_weight }}</td>
                                <td>{{ $acceptedRequest->total_price }}</td>
                                <td class="flex items-center justify-center">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="{{ $acceptedRequest->name }}" class="rounded-full"
                                            src="{{ asset('backend/images/sell-request') }}/{{ $acceptedRequest->image ?? 'avatar.png' }}">
                                    </div>
                                </td>
                                
                                @if ($acceptedRequest->status == 'accepted')
                                    <td>
                                        <span class="text-success">Accepted</span>
                                    </td>
                                    <td>
                                        <button>
                                            <a href="#" class="btn btn-primary">Assign Employee</a>
                                        </button>
                                    </td>
                                @endif
                                @if ($acceptedRequest->status == 'assigned')
                                    <td>
                                        <span class="text-warning">Assigned</span>
                                    </td>
                                    <td>
                                        <span class="text-warning">Assigned</span>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
