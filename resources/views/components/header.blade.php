<header
    id="header"
    class="flex flex-col justify-between items-center gap-1 w-full text-text-dark px-10 py-2 dark:bg-background-dark"
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
                        <div class="hs-dropdown relative inline-flex z-10">
                            <button id="hs-dropdown-with-dividers" type="button" class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                <i class="fa-solid fa-user"></i>
                                <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                            </button>
                            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 divide-y divide-gray-200 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-with-dividers">
                                <div class="p-1 space-y-0.5">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="{{ route('admin.dashboard') }}">
                                        Dashboard
                                    </a>
                                </div>
                                <div class="p-1 space-y-0.5">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="{{ route('logout') }}">
                                        Cerrar sesion
                                    </a>
                                </div>
                            </div>
                        </div>
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
