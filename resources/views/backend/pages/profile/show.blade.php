@extends('backend.layouts.master')
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Update Profile
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="eplastic" class="rounded-full"
                            src="{{ asset('backend/images/profile/') . auth()->user()->image }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">{{ auth()->user()->name }}</div>
                        <div class="text-slate-500">{{ auth()->user()->role->name }}</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-primary font-medium" href="{{ route('profile.show') }}"> <i
                            data-feather="activity" class="w-4 h-4 mr-2"></i> Personal Information </a>
                    <a class="flex items-center mt-5" href="{{ route('password.edit') }}"> <i data-feather="lock"
                            class="w-4 h-4 mr-2"></i>
                        Change Password </a>
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Personal Information
                    </h2>
                </div>
                <div class="p-5">

                    <form action="{{ route('user-profile-information.update') }}" method="POST"
                        class="flex flex-col-reverse xl:flex-row flex-col" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Name</label>
                                        <input id="update-profile-form-1" type="text" class="form-control"
                                            placeholder="Enter your name" value="{{ auth()->user()->name }}" name="name"
                                            required>
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-2" class="form-label">Email</label>
                                        <input id="update-profile-form-2" type="email" class="form-control"
                                            placeholder="Enter your email" value="{{ auth()->user()->email }}"
                                            name="email" required>
                                    </div>
                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <div class="mt-3 2xl:mt-0">
                                        <label for="update-profile-form-3" class="form-label">Gender</label>
                                        <select id="update-profile-form-3" data-search="true" class="tom-select w-full"
                                            name="gender">
                                            <option value="Male" {{ auth()->user()->gender == 'Male' ? 'selected' : '' }}>
                                                Male
                                            </option>
                                            <option value="Female"
                                                {{ auth()->user()->gender == 'Female' ? 'selected' : '' }}>Female
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-4" class="form-label">Phone Number</label>
                                        <input id="update-profile-form-4" type="text" class="form-control"
                                            placeholder="Enter your phone number" value="{{ auth()->user()->phone }}"
                                            name="phone" required>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="mt-3">
                                        <label for="update-profile-form-5" class="form-label">Address</label>
                                        <textarea id="update-profile-form-5" class="form-control" placeholder="Enter your address" name="address" required>{{ auth()->user()->address }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-20 mt-3">Save</button>
                        </div>
                        <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                            <div
                                class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img class="rounded-md" alt="Icewall Tailwind HTML Admin Template"
                                        src="{{ asset('backend') }}/images/profile/{{ auth()->user()->image ?? 'avatar.png' }}">
                                    <div title="Remove this profile photo?"
                                        class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <i data-feather="x" class="w-4 h-4"></i>
                                    </div>
                                </div>
                                <div class="mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="btn btn-primary w-full">Change Photo</button>
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0"
                                        name="photo">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
