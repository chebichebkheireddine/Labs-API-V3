<nav class="navbar navbar-expand-lg fixed-top bg-blue-300">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/T.png') }}" alt="logo">
        </a>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Tahalili</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home-page') ? 'active' : '' }}"
                            href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('analyses') || request()->routeIs('analyse-tag') ? 'active' : '' }}"
                            href="/Analyses">Analyses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('labs') || request()->routeIs('labs-tag') ? 'active' : '' }}"
                            href="/labs">Labs</a>
                    </li>
                </ul>

            </div>
        </div>
        <a href="" class="logein-button">LogeIn</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
