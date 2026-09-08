<nav class="bg-blue-500 p-4 text-white flex justify-between items-center">
    <ul class="flex space-x-4">
        <li>
            <a href="{{ route('inicio') }}"
                class="{{ request()->routeIs('inicio') ? 'font-bold underline' : 'hover:underline' }}">Inicio</a>
        </li>
        <li>
            <a href="{{ route('proyectos.index') }}"
                class="{{ request()->routeIs('proyectos.*') ? 'font-bold underline' : 'hover:underline' }}">Proyectos</a>
        </li>
    </ul>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="hover:underline cursor-pointer">
            Cerrar sesión
        </button>
    </form>
</nav>
