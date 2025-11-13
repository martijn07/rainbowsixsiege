@if (Route::has('login'))
    <header class="site-header">
        <nav class="site-nav">
            @auth
                <a href="{{ url('/dashboard') }}" class="nav-link">
                    Dashboard
                </a>
                <form action="{{ route('logout') }}" method="POST" class="nav-form">
                    @csrf
                    <button type="submit" class="nav-link nav-button">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="nav-link">
                    Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-link nav-link-register">
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    </header>
@endif
