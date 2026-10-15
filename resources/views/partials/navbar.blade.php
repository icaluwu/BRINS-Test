<header class="site-header">
    <nav class="nav-shell" aria-label="Navigasi utama">
        <a class="brand-mark" href="{{ url('/') }}">
            <span class="brand-mark__symbol">B</span>
            <span>
                <strong>Tes BRINS</strong>
                <small>Jawab semua 5 soal</small>
            </span>
        </a>

        <div class="nav-actions">
            @auth
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'is-active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="button button--quiet">Keluar</button>
                </form>
            @else
                <a class="button button--quiet" href="{{ route('login') }}">Masuk</a>
            @endauth
        </div>
    </nav>
</header>