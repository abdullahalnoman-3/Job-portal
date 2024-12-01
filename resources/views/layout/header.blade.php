
<nav class="navbar navbar-expand-lg pt-4 pb-5">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="{{route('findjob')}}">Find Jobs</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="{{route('employers')}}">Employers</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="#">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('about')}}">About Us</a>
                </li>
            </ul>
            <form class="d-flex nav-button">
                <button class="btn-outline me-2" type="submit"  formaction="{{route('contact')}}">Contact Us</button>
                <button class="btn btn-violet" type="submit" formaction="{{route('login')}}" >Login</button>
            </form>
        </div>
    </div>
</nav>
