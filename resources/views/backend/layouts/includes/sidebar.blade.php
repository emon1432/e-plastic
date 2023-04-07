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
                        <a href="index.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Pending Requests </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Accepted Requests</div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
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
                        <a href="index.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Pending Orders </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Accepted Orders</div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Rejected Orders </div>
                        </a>
                    </li>
                </ul>
            </li>
            <!--end of dropdown menu-->
        @endif

        <!--Employyers menu-->
        @if (auth()->user()->role_id == 2)
            <li>
                <a href="#" class="side-menu {{ $route == 'index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Assigned Order
                    </div>
                </a>
            </li>

            <li>
                <a href="#" class="side-menu {{ $route == 'index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Completed Delivery
                    </div>
                </a>
            </li>
        @endif
        <!--End of employers menu-->


        <!--Sellers menu-->
        @if (auth()->user()->role_id == 3)
            <li>
                <a href="#" class="side-menu {{ $route == 'index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Sell a Product
                    </div>
                </a>
            </li>

            <li>
                <a href="#" class="side-menu {{ $route == 'index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Pending Sell Request
                    </div>
                </a>
            </li>

            <li>
                <a href="#" class="side-menu {{ $route == 'index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Accepted Sell Request
                    </div>
                </a>
            </li>

            <li>
                <a href="#" class="side-menu {{ $route == 'index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Completed Sell Request
                    </div>
                </a>
            </li>

            <li>
                <a href="#" class="side-menu {{ $route == 'index' ? 'side-menu--active' : '' }}">
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
                <a href="#" class="side-menu {{ $route == 'index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Pending Order List
                    </div>
                </a>
            </li>

            <li>
                <a href="#" class="side-menu {{ $route == 'index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Accepted Order List
                    </div>
                </a>
            </li>

            <li>
                <a href="#" class="side-menu {{ $route == 'index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Track Order
                    </div>
                </a>
            </li>
        @endif
        <!--End of buyers menu-->
    </ul>
</nav>
