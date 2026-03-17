<header
    id="header"
    class="flex flex-col justify-between items-center gap-1 w-full text-text-dark py-2 dark:bg-background-dark"
>
    <div class="flex justify-between items-between gap-4 w-full px-10">
        <div class="flex items-center">
            <a href="{{ route('home') }}">
                <x-code-icon></x-code-icon>
            </a>
            <nav class="hidden md:flex items-center gap-4 h-16">
                <ul class="flex items-center gap-4">
                    <x-link-navbar url="{{ route('home') }}" content="Inicio"></x-link-navbar>
                    <x-link-navbar url="{{ route('proyects') }}" content="Proyectos"></x-link-navbar>
                    <x-link-navbar url="{{ route('articulos.index') }}" content="Articulos"></x-link-navbar>
                    <x-link-navbar url="{{ route('contact') }}" content="Contactame"></x-link-navbar>
                </ul>
            </nav>
        </div>
        <nav class="flex items-center py-5">
            <ul class="flex items-center gap-5">
                
                    <li>
                        <x-theme-switch.button-select></x-theme-switch.button-select>
                    </li>
            </ul>
        </nav>
    </div>
    <div class="w-full h-[1px] bg-gray-800"></div>
</header>
