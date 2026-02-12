<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}">Tablero</a>
    </li>
    <li class="list-group-item {{ Request::is('message/*') ? 'active' : '' }}">
        <a href="{{ route('message') }}">Mensajes</a>
    </li>
    {{-- <li class="list-group-item {{ Request::is('wishlist') ? 'active' : '' }}">
        <a href="{{ route('wishlist') }}">Wishlist</a>
    </li> --}}
    <li class="list-group-item {{ Request::is('profile') ? 'active' : '' }}">
        <a href="{{ route('profile') }}">Editar perfil</a>
    </li>
    <li class="list-group-item">
        <a href="{{ route('logout') }}">Cerrar sesión</a>
    </li>
</ul>