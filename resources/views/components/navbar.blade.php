@props(['username' => ''])

<header class="navbar">
    <nav class="navbar-inner">
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="brand">Pustaka<span>Kita</span></a>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-burger" aria-label="Buka menu">&#9776;</label>

        <div class="nav-menu">
            <ul class="nav-links">
                <li>
                    <a href="{{ route('dashboard', ['username' => $username]) }}"
                       class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('pengelolaan', ['username' => $username]) }}"
                       class="{{ request()->routeIs('pengelolaan') ? 'active' : '' }}">Pengelolaan</a>
                </li>
                <li>
                    <a href="{{ route('profile', ['username' => $username]) }}"
                       class="{{ request()->routeIs('profile') ? 'active' : '' }}">Profile</a>
                </li>
                <li><a href="{{ route('login') }}">Keluar</a></li>
            </ul>
        </div>
    </nav>
</header>
