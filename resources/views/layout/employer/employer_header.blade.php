<nav class="navbar navbar-expand-lg pt-4 pb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-4">
                    <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                       href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link {{ Route::currentRouteName() === 'findjob' ? 'active' : '' }}"
                       href="{{ route('findjob') }}">Find Jobs</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link {{ Route::currentRouteName() === 'Post a Job' ? 'active' : '' }}"
                       href="{{ route('job_post') }}">Post a Job</a>
                </li>
                {{--                <li class="nav-item mx-3">--}}
                {{--                    <a class="nav-link" href="#">Admin</a>--}}
                {{--                </li>--}}
                <li class="nav-item mx-4">
                    <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'active' : '' }}"
                       href="{{ route('about') }}">About Us</a>
                </li>
            </ul>
            <form class="d-flex nav-button">

                @if (Cookie::get('token') !== null)
                    <button class="btn btn-violet mx-2" type="submit"
                            formaction="{{ url('/dashboard') }}">Dashboard</button>
                    <button class="btn btn-secondary" type="submit" formaction="{{ url('/api/logout') }}">Logout</button>
                @else
                    <button class="btn btn-violet" type="submit" formaction="{{ route('login') }}">Login</button>
                @endif

            </form>
        </div>
    </div>
</nav>

