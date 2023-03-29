@extends('backend.layouts.master')
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Change Password
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="eplastic" class="rounded-full"
                            src="{{ asset('backend') }}/images/profile/{{ auth()->user()->image ?? 'avatar.png' }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">{{ auth()->user()->name }}</div>
                        <div class="text-slate-500">{{ auth()->user()->role->name }}</div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center" href="{{ route('profile.show') }}"> <i data-feather="activity"
                            class="w-4 h-4 mr-2"></i> Personal Information </a>
                    <a class="flex items-center mt-5 text-primary font-medium" href="{{ route('password.edit') }}"> <i
                            data-feather="lock" class="w-4 h-4 mr-2"></i>
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

                    <form action="{{ route('user-password.update') }}" method="POST"
                        class="flex flex-col-reverse xl:flex-row flex-col" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="p-5">
                            <div>
                                <label for="change-password-form-1" class="form-label">Old Password</label>
                                <input id="change-password-form-1" type="password" class="form-control"
                                    placeholder="Enter your old password" name="current_password">
                            </div>
                            <div class="mt-3">
                                <label for="change-password-form-2" class="form-label">New Password</label>
                                <input id="change-password-form-2" type="password" class="form-control"
                                    placeholder="Enter your new password" name="password">
                            </div>
                            <div class="mt-3">
                                <label for="change-password-form-3" class="form-label">Confirm New Password</label>
                                <input id="change-password-form-3" type="password" class="form-control"
                                    placeholder="Enter your new password again" name="password_confirmation">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
