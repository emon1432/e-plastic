<div
    class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
    <div class="h-full flex items-center">
        @if (auth()->user()->role_id == 3 || auth()->user()->role_id == 4)
            <a href="{{ route('home') }}" class="-intro-x hidden md:flex">
                <img alt="eplastic" class="w-6" src="{{ asset('backend') }}/images/eplastic-logo.png">
                <span class="text-white text-lg ml-3"> e<span class="font-medium">Plastic</span> </span>
            </a>
        @else
            <a href="{{ route('dashboard') }}" class="-intro-x hidden md:flex">
                <img alt="eplastic" class="w-6" src="{{ asset('backend') }}/images/eplastic-logo.png">
                <span class="text-white text-lg ml-3"> e<span class="font-medium">Plastic</span> </span>
            </a>
        @endif

        <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
        </nav>
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="eplastic"
                    src="{{ asset('backend') }}/images/profile/{{ auth()->user()->image ?? 'avatar.png' }}">
            </div>
            <div class="dropdown-menu w-56">
                <ul
                    class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">{{ auth()->user()->name }}</div>
                        <div class="text-xs text-white/60 mt-0.5">{{ auth()->user()->role->name }}</div>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="{{ route('profile.show') }}" class="dropdown-item hover:bg-white/5"> <i
                                data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                    </li>
                    <li>
                        <a href="{{ route('password.edit') }}" class="dropdown-item hover:bg-white/5"> <i
                                data-feather="lock" class="w-4 h-4 mr-2"></i> Change Password </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="help-circle"
                                class="w-4 h-4 mr-2"></i> Help </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                class="dropdown-item hover:bg-white/5"> <i data-feather="toggle-right"
                                    class="w-4 h-4 mr-2"></i> Logout </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
