<nav class="side-nav">
    @php
        $route = Route::currentRouteName();
    @endphp
    <ul>
        <li>
            <a href="{{ route('dashboard') }}" class="side-menu {{ $route == 'dashboard' ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>

        @if (auth()->user()->role_id == 1)
            <li>
                <a href="{{ route('admin.index') }}"
                    class="side-menu {{ $route == 'admin.index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Admin Management
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ route('employee.index') }}"
                    class="side-menu {{ $route == 'employee.index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Employee Management
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ route('seller.index') }}"
                    class="side-menu {{ $route == 'seller.index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Seller Management
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('buyer.index') }}"
                    class="side-menu {{ $route == 'buyer.index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Buyer Management
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ route('product.index') }}"
                    class="side-menu {{ $route == 'product.index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                    <div class="side-menu__title">
                        Products
                    </div>
                </a>
            </li>

            <!--Seller Request Dropdown-->
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                    <div class="side-menu__title">
                        Seller Requests
                        <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-down"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="{{ route('seller-sell-request.pending') }}"
                            class="side-menu {{ $route == 'seller-sell-request.pending' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Pending Requests </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('seller-sell-request.accepted') }}"
                            class="side-menu {{ $route == 'seller-sell-request.accepted' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i></div>
                            <div class="side-menu__title"> Accepted Requests</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('employee-assign-request.index') }}"
                            class="side-menu {{ $route == 'employee-assign-request.index' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-feather="activity"></i>
                            </div>
                            <div class="side-menu__title"> Assigned Requests </div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('employee-assign-request.picked') }}"
                            class="side-menu {{ $route == 'employee-assign-request.picked' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-feather="activity"></i>
                            </div>
                            <div class="side-menu__title"> Picked Requests</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('seller-sell-request.rejected') }}"
                            class="side-menu {{ $route == 'seller-sell-request.rejected' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-feather="activity"></i>
                            </div>
                            <div class="side-menu__title"> Rejected Requests </div>
                        </a>
                    </li>
                </ul>
            </li>
            <!--End of seller dropdown -->

            <!--Buyers Order menu-->
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                    <div class="side-menu__title">
                        Buyers Order
                        <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-down"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="{{ route('order.pending') }}"
                            class="side-menu {{ $route == 'order.pending' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Pending Orders </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('order.assigned') }}"
                            class="side-menu {{ $route == 'order.assigned' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-feather="activity"></i>
                            </div>
                            <div class="side-menu__title"> Assigned Requests </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('order.delivered') }}"
                            class="side-menu {{ $route == 'order.delivered' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-feather="activity"></i>
                            </div>
                            <div class="side-menu__title"> Delivered Orders </div>
                        </a>
                    </li>

                </ul>
            </li>

            {{-- <li>
                <a href="{{ route('admin.index') }}"
                    class="side-menu {{ $route == 'admin.index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Product Category
                    </div>
                </a>
            </li> --}}

            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                    <div class="side-menu__title">
                        Reports
                        <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-down"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="{{ route('sell.report') }}"
                            class="side-menu {{ $route == 'sell.report' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Sell Report </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('purchase.report') }}"
                            class="side-menu {{ $route == 'purchase.report' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Purchase Report</div>
                        </a>
                    </li>


                </ul>
            </li>
        @endif

        <!--Employyers menu-->
        @if (auth()->user()->role_id == 2)
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                    <div class="side-menu__title">
                        Assigned Request
                        <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-down"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="{{ route('assigned-request.index') }}"
                            class="side-menu {{ $route == 'assigned-request.index' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon ">
                                <i data-feather="activity"></i>
                            </div>
                            <div class="side-menu__title"> Assigned Requests </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('assigned-request.picked') }}"
                            class="side-menu {{ $route == 'assigned-request.picked' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon ">
                                <i data-feather="activity"></i>
                            </div>
                            <div class="side-menu__title"> Picked Requests</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                    <div class="side-menu__title">
                        Assigned Orders
                        <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-down"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="{{ route('assigned-order.index') }}"
                            class="side-menu {{ $route == 'assigned-order.index' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Assigned Orders </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('assigned-order.delivered') }}"
                            class="side-menu {{ $route == 'assigned-order.delivered' ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-feather="activity"></i>
                            </div>
                            <div class="side-menu__title">Delivered Orders</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
        <!--End of employers menu-->


        <!--Sellers menu-->
        @if (auth()->user()->role_id == 3)
            <li>
                <a href="#" class="side-menu {{ $route == 'index' ? 'side-menu--active' : '' }}"
                    data-tw-toggle="modal" data-tw-target="#sell-request-modal">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Sell a Product
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('sell-request.pending') }}"
                    class="side-menu {{ $route == 'sell-request.pending' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Pending Sell Request
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ route('sell-request.accepted') }}"
                    class="side-menu {{ $route == 'sell-request.accepted' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Accepted Sell Request
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ route('sell-request.completed') }}"
                    class="side-menu {{ $route == 'sell-request.completed' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Completed Sell Request
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ route('sell-request.rejected') }}"
                    class="side-menu {{ $route == 'sell-request.rejected' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Rejected Sell Request
                    </div>
                </a>
            </li>
        @endif
        <!--End of sellers menu-->

        <!--Buyers menu-->
        @if (auth()->user()->role_id == 4)
            <li>
                <a href="{{ route('order.pending') }}"
                    class="side-menu {{ $route == 'order.pending' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Pending Orders </div>
                </a>
            </li>

            <li>
                <a href="{{ route('order.assigned') }}"
                    class="side-menu {{ $route == 'order.assigned' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Accepted Orders </div>
                </a>
            </li>

            <li>
                <a href="{{ route('order.delivered') }}"
                    class="side-menu {{ $route == 'order.delivered' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Delevered Orders </div>
                </a>
            </li>
        @endif
        <!--End of buyers menu-->
        <li>
            <a href="{{ route('home') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">
                    Go to Website
                </div>
            </a>
        </li>
    </ul>
</nav>

@include('backend.pages.seller.sell-product')
