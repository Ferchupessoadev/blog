<header
    id="header"
    class="flex flex-col transition-colors duration-300 justify-between items-center gap-1 w-full text-text-dark px-12 py-2"
>
    <div class="flex justify-between items-between gap-4 w-full">
        <nav class="flex items-center gap-4 h-16">
            <a href="{{ route('home') }}">
                <x-code-icon></x-code-icon>
            </a>
            <ul class="flex items-center gap-4">
                <x-link-navbar url="{{ route('home') }}" content="Inicio"></x-link-navbar>
                <x-link-navbar url="{{ route('aboutme') }}" content="Sobre mi"></x-link-navbar>
                <x-link-navbar url="{{ route('articulos.index') }}" content="Articulos"></x-link-navbar>
                <x-link-navbar url="{{ route('contact') }}" content="Contactame"></x-link-navbar>
            </ul>
        </nav>
        <nav class="flex items-center">
            <ul class="flex items-center gap-5">
                @auth
                    <li class="relative group" x-data="{ open: false }">
                        <button x-on:click="open = !open" class="flex items-center gap-2 group-hover:bg-gray-400 p-2 rounded-lg">
                            <i class="fa-solid fa-user dark:text-white text-gray-700"></i>
                        </button>
                        <ul class="absolute top-8 right-0 bg-black rounded-lg w-max" :class="{ 'hidden': !open, 'block': open }">
                            <li class="w-full flex"><a class="w-full px-4 py-2" href="{{ route('admin.dashboard')}} ">Dashboard</a></li>
                            <li class="w-full flex"><a class="w-full px-4 py-2" href="{{ route('logout') }}">Cerrar sesion</a></li>
                        </ul>
                    </li>
                @endauth
                @guest
                    <x-link-navbar url="{{ route('login') }}" content="Iniciar sesion"></x-link-navbar>
                    <x-link-navbar url="{{ route('register.index') }}" content="Registrarse"></x-link-navbar>
                @endguest
                    <li>
                        <x-theme-switch.button-select></x-theme-switch.button-select>
                    </li>
            </ul>
        </nav>
    </div>
    <div class="w-full h-[1px] bg-gray-800"></div>
</header>
