<header>
    <nav class="navbar border-warning navbar-expand-lg bg-dark nav-tabs pb-0 pt-3">
        <div class="container-fluid">
            <div class="collapse navbar-collapse text-danger" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link border-warning text-warning fw-bold fs-5 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-warning text-warning fw-bold fs-5 {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"
                            href="{{ route('movies') }}">Movies List</a>
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
