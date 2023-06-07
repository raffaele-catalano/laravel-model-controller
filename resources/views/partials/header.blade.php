<header>
    <nav class="navbar navbar-expand-lg bg-dark nav-tabs pb-0 pt-3">
        <div class="container-fluid">
            <div class="collapse navbar-collapse text-danger" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-warning fw-bold fs-5 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning fw-bold fs-5 {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"
                            href="{{ route('movies') }}">Elenco Movies</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}"
                            href="{{ route('contacts') }}">Contatti</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</header>