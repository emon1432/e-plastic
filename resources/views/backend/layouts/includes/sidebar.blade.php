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
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                    <div class="side-menu__title">
                        Orders
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
                            <div class="side-menu__title"> Completed Orders </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Cancelled Orders </div>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
</nav>
