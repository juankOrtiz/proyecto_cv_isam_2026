<nav class="bg-blue-500 p-4 text-white flex justify-between">
    <ul class="flex space-x-4">
        <li>
            <a href="{{ route('inicio') }}"
                class="{{ request()->routeIs('inicio') ? 'font-bold underline' : 'hover:underline' }}">Inicio</a>
        </li>
        <li>
            <a href="{{ route('ofertas.index') }}"
                class="{{ request()->routeIs('ofertas.index') ? 'font-bold underline' : 'hover:underline' }}">Ofertas</a>
        </li>
    </ul>
</nav>
