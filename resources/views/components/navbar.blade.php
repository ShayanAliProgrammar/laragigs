<nav class="flex items-center justify-between mb-4">
    <a href="/">
        <img class="w-24" src="{{ asset('images/logo.png') }}" alt="" class="logo" />
    </a>
    <ul class="flex mr-6 space-x-6 text-lg">
        @auth
            <li>
                <span class="font-bold uppercase">
                    Welcome {{ auth()->user()->name }}
                </span>
            </li>
            <li>
                <a href="/listings/manage" class="hover:text-laravel">
                    <i class="fa-solid fa-gear"></i>
                    Manage Listings
                </a>
            </li>

            <li>
                <form class="inline" action="/logout" method="POST">
                    @csrf
                    <button>
                        <i class="fa-solid fa-door-closed"></i>
                        Logout
                    </button>
                </form>
            </li>
        @else
            <li>
                <a href="/register" class="hover:text-laravel">
                    <i class="fa-solid fa-user-plus"></i> Register
                </a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login
                </a>
            </li>
        @endauth


    </ul>
</nav>
