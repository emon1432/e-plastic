@extends('backend.layouts.master')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Assigned Request List</h2>
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
                            <th>IMAGE</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assignedRequests as $assignedRequest)
                            <tr class="intro-x text-center font-medium whitespace-nowrap">
                                <td>{{ $assignedRequest->sellRequestInfo->name }}</td>
                                <td>{{ $assignedRequest->sellRequestInfo->phone }}</td>
                                <td>{{ $assignedRequest->sellRequestInfo->address }}</td>
                                <td>{{ $assignedRequest->sellRequestInfo->product_category_id }}</td>
                                <td>{{ $assignedRequest->sellRequestInfo->product_weight }}</td>
                                <td>{{ $assignedRequest->sellRequestInfo->total_price }}</td>
                                <td class="flex items-center justify-center">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="{{ $assignedRequest->sellRequestInfo->name }}" class="rounded-full"
                                            src="{{ asset('backend/images/sell-request') }}/{{ $assignedRequest->sellRequestInfo->image ?? 'avatar.png' }}">
                                    </div>
                                </td>
                                @if ($assignedRequest->status == 'assigned')
                                    <td>
                                        <span class="text-warning">Assigned</span>
                                    </td>
                                @endif
                                @if ($assignedRequest->status == 'accepted')
                                    <td>
                                        <span class="text-success">Accepted</span>
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
