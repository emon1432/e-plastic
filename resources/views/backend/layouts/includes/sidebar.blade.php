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
                <a href="{{ route('admin.index') }}" class="side-menu {{ $route == 'admin.index' ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                        Admin Management
                    </div>
                </a>
            </li>
        @endif
    </ul>
</nav>
