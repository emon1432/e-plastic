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
                            <th>PICKUP ADDRESS</th>
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
                                <td>{{ $acceptedRequest->sellerInfo->name }}</td>
                                <td>{{ $acceptedRequest->sellerInfo->phone }}</td>
                                <td>{{ $acceptedRequest->address }}</td>
                                <td>{{ $acceptedRequest->categoryInfo->name }}</td>
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
                                        <button class="flex items-center mr-3 btn btn-primary" data-tw-toggle="modal"
                                            data-tw-target="#employee-assign-modal-{{ $acceptedRequest->id }}">
                                            Assign
                                            Employee
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
                                <div id="employee-assign-modal-{{ $acceptedRequest->id }}" class="modal" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-xl p-2">
                                        <div class="modal-content p-8">
                                            <div
                                                class="intro-y text-primary text-2xl font-bold text-left pt-4 pb-2 mb-2 border-b-2 ">
                                                Assign Employee
                                            </div>
                                            <form class="text-lg" action="{{ route('employee-assign-request.assigned') }}"
                                                method="POST">
                                                @csrf
                                                <div class="grid grid-cols-12 gap-2 my-5">
                                                    <div class="col-span-12 flex items-center">
                                                        <label class=" sm:flex-row">Select
                                                            Employee</label>
                                                        <select name="employee_id" class="input w-full border mt-2">
                                                            <option value="" selected disabled>Select Employee</option>
                                                            @foreach ($employees as $employee)
                                                                <option value="{{ $employee->id }}">
                                                                    {{ $employee->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <input type="hidden" name="id" value="{{ $acceptedRequest->id }}">
                                                    </div>
                                                </div>
                                                <div class="flex flex-row-reverse mt-2">
                                                    <button type="submit" class="btn btn-primary w-full shadow-md mr-2 ">
                                                        Assign
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
