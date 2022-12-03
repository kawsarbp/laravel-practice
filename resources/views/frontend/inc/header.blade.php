<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('post') ? 'active' : '' }}" href="{{ route('single-post') }}">Post</a></li>
{{--                @guest--}}
                <li class="nav-item"><a class="nav-link {{ request()->is('user/register') ? 'active' : '' }}" href="{{ route('user.registerForm') }}">Register</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('user/login') ? 'active' : '' }}" href="{{ route('user.loginForm') }}">Login</a></li>
{{--                @endguest--}}
                {{--@auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('user.logout') }}">{{ auth()->user()->name }} -> LogOut</a></li>
                @endauth--}}
            </ul>
        </div>
    </div>
</nav>
<!-- Page header with logo and tagline-->
<header class="py-1 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">@yield('title')</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>
