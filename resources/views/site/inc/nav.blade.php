<nav class="navbar navbar-expand-lg bg-light position-sticky top-0">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="#">Our Menu</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="#">Our Mission</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="#">ABOUT US</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="#">CONTACT US</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <button class="bg-main-color text-yellow-color py-2 px-4" type="button">Order</button>
            </form>
        </div>
    </div>
</nav>
