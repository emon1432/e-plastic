@extends('backend.layouts.master')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Pending Request List</h2>
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
                        @foreach ($pendingRequests as $pendingRequest)
                            <tr class="intro-x text-center font-medium whitespace-nowrap">
                                <td>{{ $pendingRequest->name }}</td>
                                <td>{{ $pendingRequest->phone }}</td>
                                <td>{{ $pendingRequest->address }}</td>
                                <td>{{ $pendingRequest->product_category_id }}</td>
                                <td>{{ $pendingRequest->product_weight }}</td>
                                <td>{{ $pendingRequest->total_price }}</td>
                                <td class="flex items-center justify-center">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="{{ $pendingRequest->name }}" class="rounded-full"
                                            src="{{ asset('backend/images/sell-request') }}/{{ $pendingRequest->image ?? 'avatar.png' }}">
                                    </div>
                                </td>
                                <td class="text-warning">{{ $pendingRequest->status }}</td>
                                <td class="table-report__action w-56">
                                    <div class="flex  items-center">
                                        <button class="flex items-center mr-3 text-success" data-tw-toggle="modal"
                                            data-tw-target="#accept-request-modal-{{ $pendingRequest->id }}">
                                            <i data-feather="check-square" class="w-4 h-4 mr-1 text-success"></i> Accept
                                        </button>
                                        <button class="flex items-center text-danger" data-tw-toggle="modal"
                                            data-tw-target="#reject-request-modal-{{ $pendingRequest->id }}">
                                            <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Reject
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Accept Request Modal -->
                            <div id="accept-request-modal-{{ $pendingRequest->id }}" class="modal" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="p-5 text-center">
                                                <i data-feather="x-circle" class="w-16 h-16 text-success mx-auto mt-3"></i>
                                                <div class="text-3xl mt-5">Are you sure?</div>
                                                <div class="text-2xl mt-2">
                                                    Do you really want to <span class="text-success">Accept</span> this request?
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="px-5 pb-8 text-center">

                                                <form
                                                    action="{{ route('seller-sell-request.accept', $pendingRequest->id) }}"
                                                    method="GET">
                                                    @csrf
                                                    <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                                    <button type="submit" class="btn btn-success w-24">Accept</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Reject Request Modal -->
                            <div id="reject-request-modal-{{ $pendingRequest->id }}" class="modal" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="p-5 text-center">
                                                <i data-feather="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                                <div class="text-3xl mt-5">Are you sure?</div>
                                                <div class="text-xl mt-2">
                                                    Do you really want to <span
                                                        class="text-2xl mt-2 text-danger">Reject</span> this request?
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="px-5 pb-8 text-center">
                                                <form
                                                    action="{{ route('seller-sell-request.reject', $pendingRequest->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="col-span-4 mb-5">
                                                        <label class="flex flex-col sm:flex-row">Reject Reason</label>
                                                        <input type="text" name="reject_reason" class="input w-full border mt-1"
                                                            placeholder="Enter Reject Reason" required>
                                                    </div>
                                                    <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                                    <button type="submit" class="btn btn-danger w-24">Reject</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
