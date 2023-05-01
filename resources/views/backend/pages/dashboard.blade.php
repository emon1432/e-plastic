@extends('backend.layouts.master')
@section('content')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">General Report</h2>

                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="user"
                                            data-lucide="user" class="lucide lucide-user report-box__icon text-success">
                                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                    @php
                                        $users = App\Models\User::where('role_id', 2)->get();
                                    @endphp
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $users->count() }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total Employee</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="user"
                                            data-lucide="user" class="lucide lucide-user report-box__icon text-success">
                                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                    @php
                                        $users = App\Models\User::where('role_id', 3)->get();
                                    @endphp
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $users->count() }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total Seller</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="user"
                                            data-lucide="user" class="lucide lucide-user report-box__icon text-success">
                                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                    @php
                                        $users = App\Models\User::where('role_id', 4)->get();
                                    @endphp
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $users->count() }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total Buyer</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="user"
                                            data-lucide="user" class="lucide lucide-user report-box__icon text-success">
                                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                    @php
                                        $users = App\Models\User::where('role_id', 1)->get();
                                    @endphp
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $users->count() }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total Admin</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        {{-- category icon --}}
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" class="css-i6dzq1">
                                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                            <polyline points="2 17 12 22 22 17"></polyline>
                                            <polyline points="2 12 12 17 22 12"></polyline>
                                        </svg>
                                    </div>
                                    @php
                                        $categories = App\Models\ProductCategory::all();
                                    @endphp
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $categories->count() }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total Category</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" class="css-i6dzq1">
                                            <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                            <path
                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                            </path>
                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                        </svg>
                                    </div>
                                    @php
                                        $products = App\Models\Products::all();
                                    @endphp
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $products->count() }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total Product</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" class="css-i6dzq1">
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg>
                                    </div>
                                    @php
                                        $orders = App\Models\Order::all();
                                    @endphp
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $orders->count() }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total Order</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" class="css-i6dzq1">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </div>
                                    @php
                                        $totalOrderAmount = App\Models\Order::sum('amount');
                                    @endphp
                                    <div class="text-3xl font-medium leading-8 mt-6">
                                        {{ number_format($totalOrderAmount, 2) }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total Order Amount</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" class="css-i6dzq1">
                                            <circle cx="9" cy="21" r="1"></circle>
                                            <circle cx="20" cy="21" r="1"></circle>
                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                            </path>
                                        </svg>
                                    </div>
                                    @php
                                        $product_purchase = App\Models\ProductPurchase::all();
                                    @endphp
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $product_purchase->count() }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total Product Purchase</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" class="css-i6dzq1">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </div>
                                    @php
                                        $totalPurchaseAmount = App\Models\ProductPurchase::sum('buying_price');
                                    @endphp
                                    <div class="text-3xl font-medium leading-8 mt-6">
                                        {{ number_format($totalPurchaseAmount, 2) }}</div>
                                    <div class="text-base text-slate-500 mt-1">Total Purchase Amount</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 mt-8"></div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8"></div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8"></div>
                <div class="col-span-12 xl:col-span-8 mt-6"></div>
                <div class="col-span-12 xl:col-span-4 mt-6"></div>
                <div class="col-span-12 grid grid-cols-12 gap-6 mt-8"></div>
                <div class="col-span-12 mt-6"></div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Employees</h2>
                        </div>
                        <div class="mt-5">
                            @php
                                $employees = App\Models\User::where('role_id', 2)
                                    ->limit(6)
                                    ->get();
                            @endphp
                            @foreach ($employees as $employee)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="{{ $employee->name }}"
                                                src="{{ asset('backend') }}/images/employees/{{ $employee->image ?? 'avatar.png' }}">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $employee->name }}</div>
                                            <div class="text-slate-500 text-xs mt-0.5">{{ $employee->email }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <a href="{{ route('employee.index') }}"
                                class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
