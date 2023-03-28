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
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                <div class="side-menu__title">
                    Profile
                    <i data-feather="chevron-down" class="side-menu__sub-icon"></i>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('profile.show') }}"
                        class="side-menu {{ $route == 'profile.show' ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">
                            Personal Information
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('password.edit') }}"
                        class="side-menu {{ $route == 'password.edit' ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-feather="lock"></i> </div>
                        <div class="side-menu__title">
                            Change Password
                        </div>
                    </a>
                </li>
            </ul>

        </li>
    </ul>
</nav>
