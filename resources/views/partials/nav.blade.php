<ul class="nav justify-content-around">
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Accueil</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('testi')}}">Testimonials</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>

    @auth

        <li>
            <a href="{{ url('/dashboard') }}">Dashboard</a>
        </li>

        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </li>

    @else

        <li>
            <a href="{{ route('login') }}">Log in</a>
        </li>

        @if (Route::has('register'))

            <li>
                <a href="{{ route('register') }}">Register</a>
            </li>
        @endif

    @endauth

</ul>

