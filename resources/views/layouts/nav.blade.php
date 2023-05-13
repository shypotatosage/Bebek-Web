<nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: white">
    <div class="container w-100 justify-content-lg-between align-items-center nav-between-on-mobile">
        <a class="navbar-brand py-3 px-4" href="/">
            <img src="{{ asset('images/assets/bazaarbond.png') }}" height="35">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
            <ul class="navbar-nav text-center">
                <li class="nav-item active">
                    <a class="nav-link py-2 px-4" href="/bazaars">My Bazaars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 px-4" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 px-4" href="/contact">Contact Us</a>
                </li>

                @guest
                <li class="nav-item">
                    <a class="nav-link py-2 px-4" href="/login">Login</a>
                </li>
                @endguest

                @auth
                <li class="nav-item">
                    <a class="nav-link py-2 px-4" href="/profile">Profile</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
