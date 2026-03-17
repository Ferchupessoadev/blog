<footer class="mt-20 border-t border-cyan-500/10 pt-10 pb-6">

    <div class="max-w-6xl mx-auto px-4">

        <!-- Top -->
        <div class="grid md:grid-cols-3 gap-8 mb-10">

            <!-- Brand -->
            <div>
                <h3 class="text-white font-semibold text-lg mb-2">
                    ferchudev
                </h3>

                <p class="text-gray-400 text-sm mb-4">
                    Backend developer enfocado en sistemas, APIs e infraestructura.
                </p>

                <div class="text-green-400 text-xs">
                    $ echo "building the backend"<span class="animate-pulse">_</span>
                </div>
            </div>

            <!-- Links -->
            <div>
                <h4 class="text-gray-300 text-sm mb-3">Navegación</h4>

                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href={{ route('home') }} class="hover:text-cyan-400 transition">Inicio</a></li>
                    <li><a href={{ route('articulos.index')}} class="hover:text-cyan-400 transition">Artículos</a></li>
                    <li><a href={{ route('proyects') }} class="hover:text-cyan-400 transition">Proyectos</a></li>
                    <li><a href={{ route('contact') }} class="hover:text-cyan-400 transition">Contacto</a></li>
                </ul>
            </div>

            <!-- Contact / Social -->
            <div>
                <h4 class="text-gray-300 text-sm mb-3">Contacto</h4>

                <ul class="space-y-2 text-sm text-gray-400">
                    <li>
                        <a href="mailto:fernandomatiaspessoa471@gmail.com" class="hover:text-cyan-400 transition">
                            Email
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/Ferchupessoadev" target="_blank" class="hover:text-cyan-400 transition">
                            GitHub
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/ferchupessoadev/" class="hover:text-cyan-400 transition">
                            LinkedIn
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Bottom -->
        <div class="border-t border-cyan-500/10 pt-4 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">

            <p>
                © {{ date('Y') }} ferchudev. Todos los derechos reservados.
            </p>

            <p class="mt-2 md:mt-0">
                Built with Laravel · Tailwind · ❤️
            </p>

        </div>

    </div>

</footer>