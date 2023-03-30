@extends('backend.layouts.master')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Employee List</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button data-tw-toggle="modal" data-tw-target="#create-employee-modal" class="btn btn-primary shadow-md mr-2"
                type="button">Add New Employee</button>
        </div>
        <div id="listContainer" class="intro-y col-span-12 ">
            <div class="intro-y col-span-12 ">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr class="text-center">
                            <th>IMAGES</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>ADDRESS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr class="intro-x text-center font-medium whitespace-nowrap">
                                <td class="flex items-center justify-center">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="{{ $employee->name }}" class="rounded-full"
                                            src="{{ asset('backend/images/employees') }}/{{ $employee->image ?? 'avatar.png' }}">
                                    </div>
                                </td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->address }}</td>
                                <td class="table-report__action w-56">
                                    <div class="flex  items-center">
                                        <button class="flex items-center mr-3" data-tw-toggle="modal"
                                            data-tw-target="#edit-employee-modal-{{ $employee->id }}">
                                            <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                        </button>
                                        @if ($employee->id != auth()->user()->id)
                                            <button class="flex items-center text-danger" data-tw-toggle="modal"
                                                data-tw-target="#delete-employee-modal-{{ $employee->id }}">
                                                <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <!-- Edit employee Modal -->
                            <div id="edit-employee-modal-{{ $employee->id }}" class="modal" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl p-2">
                                    <div class="modal-content p-8">
                                        <div
                                            class="intro-y text-primary text-2xl font-bold text-left pt-4 pb-2 mb-2 border-b-2 ">
                                            Edit employee
                                        </div>
                                        <form class="text-lg" action="{{ route('employee.update', $employee->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="grid grid-cols-12 gap-2 mt-3">
                                                <div class="col-span-6">
                                                    <label class="flex flex-col sm:flex-row">Full Name</label>
                                                    <input type="text" name="name" value="{{ $employee->name }}"
                                                        class="input w-full border mt-2">
                                                </div>
                                                <div class="col-span-6">
                                                    <label class="flex flex-col sm:flex-row">Email</label>
                                                    <input type="email" name="email" value="{{ $employee->email }}"
                                                        class="input w-full border mt-2">
                                                </div>
                                                <div class="col-span-6">
                                                    <label class="flex flex-col sm:flex-row">Phone</label>
                                                    <input type="text" name="phone" value="{{ $employee->phone }}"
                                                        class="input w-full border mt-2">
                                                </div>
                                                <div class="col-span-6">
                                                    <label class="flex flex-col sm:flex-row">Address</label>
                                                    <input type="text" name="address" value="{{ $employee->address }}"
                                                        class="input w-full border mt-2">
                                                </div>
                                                <div class="col-span-6">
                                                    <label class="flex flex-col sm:flex-row">Image</label>
                                                    <input type="file" name="image" class="input w-full border mt-2">
                                                </div>
                                                <div class="col-span-6">
                                                    <label class="flex flex-col sm:flex-row">Gender</label>
                                                    <select name="gender" class="input w-full border mt-2">
                                                        <option value="Male"
                                                            {{ $employee->gender == 'Male' ? 'selected' : '' }}>
                                                            Male</option>
                                                        <option value="Female"
                                                            {{ $employee->gender == 'Female' ? 'selected' : '' }}>
                                                            Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="flex flex-row-reverse mt-2">
                                                <button type="submit" class="btn btn-primary w-full shadow-md mr-2 ">
                                                    Update Employee
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete employee Modal -->
                            <div id="delete-employee-modal-{{ $employee->id }}" class="modal" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="p-5 text-center">
                                                <i data-feather="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                                <div class="text-3xl mt-5">Are you sure?</div>
                                                <div class="text-slate-500 mt-2">
                                                    Do you really want to delete these records?
                                                    <br>
                                                    This process cannot be undone.
                                                </div>
                                            </div>
                                            <div class="px-5 pb-8 text-center">

                                                <form action="{{ route('employee.destroy', $employee->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                                    <button type="submit" class="btn btn-danger w-24">Delete</button>
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

    <!-- Create employee Modal -->
    <div id="create-employee-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl p-2">
            <div class="modal-content p-8">
                <div class="intro-y text-primary text-2xl font-bold text-left pt-4 pb-2 mb-2 border-b-2 ">
                    Create New employee
                </div>
                <form class="text-lg" action="{{ route('employee.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-12 gap-2 mt-3">
                        <div class="col-span-6">
                            <label class="flex flex-col sm:flex-row">Full Name</label>
                            <input type="text" name="name" class="input w-full border mt-2"
                                placeholder="Full Name" required>
                        </div>
                        <div class="col-span-6">
                            <label class="flex flex-col sm:flex-row">Email</label>
                            <input type="email" name="email" class="input w-full border mt-2" placeholder="Email"
                                required>
                        </div>
                        <div class="col-span-6">
                            <label class="flex flex-col sm:flex-row">Phone</label>
                            <input type="text" name="phone" class="input w-full border mt-2" placeholder="Phone"
                                required>
                        </div>
                        <div class="col-span-6">
                            <label class="flex flex-col sm:flex-row">Address</label>
                            <input type="text" name="address" class="input w-full border mt-2" placeholder="Address"
                                required>
                        </div>
                        <div class="col-span-6">
                            <label class="flex flex-col sm:flex-row">Password</label>
                            <input type="password" name="password" class="input w-full border mt-2"
                                placeholder="Password" required>
                        </div>
                        <div class="col-span-6">
                            <label class="flex flex-col sm:flex-row">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="input w-full border mt-2"
                                placeholder="Confirm Password" required>
                        </div>
                        <div class="col-span-6">
                            <label class="flex flex-col sm:flex-row">Image</label>
                            <input type="file" name="image" class="input w-full border mt-2" placeholder="Image"
                                required>
                        </div>
                        <div class="col-span-6">
                            <label class="flex flex-col sm:flex-row">Gender</label>
                            <select name="gender" class="input w-full border mt-2">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-row-reverse mt-2">
                        <button type="submit" class="btn btn-primary w-full shadow-md mr-2 ">
                            Create employee
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
