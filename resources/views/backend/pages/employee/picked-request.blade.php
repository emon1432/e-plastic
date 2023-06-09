@extends('backend.layouts.master')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Picked Request List</h2>
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
                        @foreach ($pickedRequests as $pickedRequest)
                            @if (auth()->user()->id == $pickedRequest->employeeInfo->user_id)
                                <tr class="intro-x text-center font-medium whitespace-nowrap">
                                    <td>{{ $pickedRequest->sellRequestInfo->sellerInfo->name }}</td>
                                    <td>{{ $pickedRequest->sellRequestInfo->sellerInfo->phone }}</td>
                                    <td>{{ $pickedRequest->sellRequestInfo->address }}</td>
                                    <td>{{ $pickedRequest->sellRequestInfo->categoryInfo->name }}</td>
                                    <td>{{ $pickedRequest->sellRequestInfo->product_weight }}</td>
                                    <td>{{ $pickedRequest->sellRequestInfo->total_price }}</td>
                                    <td class="flex items-center justify-center">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="{{ $pickedRequest->sellRequestInfo->name }}" class="rounded-full"
                                                src="{{ asset('backend/images/sell-request') }}/{{ $pickedRequest->sellRequestInfo->image ?? 'avatar.png' }}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-primary">Picked</span>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
