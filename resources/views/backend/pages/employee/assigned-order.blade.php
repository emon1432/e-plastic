@extends('backend.layouts.master')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Assigned Order List</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div id="listContainer" class="intro-y col-span-12 ">
            <div class="intro-y col-span-12 ">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr class="text-center">
                            <th>BUYER NAME</th>
                            <th>BUYER PHONE</th>
                            <th>PICKUP ADDRESS</th>
                            <th>TYPE</th>
                            <th>WEIGHT</th>
                            <th>PRICE</th>
                            <th>IMAGE</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assignedOrder as $assignedRequest)
                            @if (auth()->user()->id == $assignedRequest->assign_employee_id)
                                <tr class="intro-x text-center font-medium whitespace-nowrap">
                                    <td>{{ $assignedRequest->user->name }}</td>
                                    <td>{{ $assignedRequest->user->phone }}</td>
                                    <td>{{ $assignedRequest->address }}</td>
                                    <td>{{ $assignedRequest->category->name }}</td>
                                    <td>{{ $assignedRequest->product_weight }}</td>
                                    <td>{{ $assignedRequest->amount }}</td>
                                    <td class="flex items-center justify-center">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="{{ $assignedRequest->user->name }}" class="rounded-full"
                                                src="{{ asset('backend/images/sell-request') }}/{{ $assignedRequest->user->image ?? 'avatar.png' }}">
                                        </div>
                                    </td>
                                    @if ($assignedRequest->status == 'assigned')
                                        <td>
                                            <span class="text-warning">Assigned</span>
                                        </td>
                                        <td>
                                            <button class="flex items-center mr-3 btn btn-success text-white"
                                                data-tw-toggle="modal"
                                                data-tw-target="#accept-request-modal-{{ $assignedRequest->id }}">
                                                <i data-feather="check-square" class="w-4 h-4 mr-1 text-white"></i> Accept
                                            </button>
                                        </td>
                                    @endif
                                    @if ($assignedRequest->status == 'accepted')
                                        <td>
                                            <span class="text-success">accepted</span>
                                        </td>
                                        <td>
                                            <button class="flex items-center btn btn-primary text-white"
                                                data-tw-toggle="modal"
                                                data-tw-target="#picked-request-modal-{{ $assignedRequest->id }}">
                                                <i data-feather="check-square" class="w-4 h-4 mr-1 text-white"></i> Delivered
                                            </button>
                                        </td>
                                    @endif
                                </tr>

                                <!-- Accept Request Modal -->
                                <div id="accept-request-modal-{{ $assignedRequest->id }}" class="modal" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="p-5 text-center">
                                                    <i data-feather="check-square"
                                                        class="w-16 h-16 text-success mx-auto mt-3"></i>
                                                    <div class="text-3xl mt-5">Are you sure?</div>
                                                    <div class="text-2xl mt-2">
                                                        Do you really want to <span class="text-success">Accept</span> this
                                                        request?
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="px-5 pb-8 text-center">

                                                    <form
                                                        action="{{ route('assigned-order.accept', $assignedRequest->id) }}"
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

                                <!-- Picked Request Modal -->
                                <div id="picked-request-modal-{{ $assignedRequest->id }}" class="modal" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="p-5 text-center">
                                                    <i data-feather="check-square"
                                                        class="w-16 h-16 text-primary mx-auto mt-3"></i>
                                                    <div class="text-3xl mt-5">Are you sure?</div>
                                                    <div class="text-2xl mt-2">
                                                        Do you really want to <span class="text-primary">Deliver</span> this
                                                        order?
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="px-5 pb-8 text-center">

                                                    <form
                                                        action="{{ route('assigned-order.deliver', $assignedRequest->id) }}"
                                                        method="GET">
                                                        @csrf
                                                        <button type="button" data-tw-dismiss="modal"
                                                            class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                                        <button type="submit" class="btn btn-primary w-24">Pick</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
