@extends('layouts.app')

@section('title')
    Articulos
@endsection

@section('content')
 <main class="w-full flex justify-center">
    <section class="w-full max-w-7xl px-4 md:px-6 py-16">
        <div class="mb-10 text-center">
            <h2 class="text-3xl font-bold text-cyan-400">Artículos</h2>
            <p class="text-gray-400">Últimos artículos publicados</p>
        </div>

        <div class="flex flex-col md:flex-row md:items-center gap-6 mb-8">
            
            <div class="relative flex-1 group overflow-hidden">
                <button id="scroll-left" class="absolute left-0 top-1/2 -translate-y-1/2 z-20 bg-gradient-to-r from-[#020617] to-transparent p-2 text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                </button>

                <div id="category-container" class="flex overflow-x-auto gap-2 no-scrollbar whitespace-nowrap pb-2 scroll-smooth">
                    <button class="px-4 py-1.5 text-sm rounded-full bg-cyan-400 text-black font-medium">Todos</button>
                    <button class="px-4 py-1.5 text-sm rounded-full bg-white/5 text-gray-300 hover:bg-cyan-400/10 hover:text-cyan-400 transition">Backend</button>
                    <button class="px-4 py-1.5 text-sm rounded-full bg-white/5 text-gray-300 hover:bg-cyan-400/10 hover:text-cyan-400 transition">DevOps</button>
                    <button class="px-4 py-1.5 text-sm rounded-full bg-white/5 text-gray-300 hover:bg-cyan-400/10 hover:text-cyan-400 transition">Linux</button>
                </div>

                <button id="scroll-right" class="absolute right-0 top-1/2 -translate-y-1/2 z-20 bg-gradient-to-l from-[#020617] to-transparent p-2 text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </button>
            </div>

            <div class="w-full md:w-64">
                <input type="text" placeholder="Buscar artículos..." class="bg-[#0f172a] border border-white/5 rounded-lg px-4 py-2 text-sm text-gray-300 focus:outline-none focus:border-cyan-400 w-full transition-all">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @if (isset($posts) && count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="group bg-[#0f172a] border border-white/5 rounded-xl overflow-hidden hover:border-cyan-400/40 transition">
                        <div class="h-40 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 flex items-center justify-center text-gray-500 text-sm">
                            Imagen
                        </div>
                        <div class="p-5 space-y-3">
                            <span class="text-xs text-cyan-400 bg-cyan-400/10 px-2 py-1 rounded">BACKEND</span>
                            <h3 class="text-lg font-semibold text-white group-hover:text-cyan-400 transition">Aut soluta illum qui</h3>
                            <p class="text-sm text-gray-400 line-clamp-2">Breve descripción del artículo para enganchar al lector...</p>
                            <div class="flex items-center justify-between text-sm text-gray-500 pt-2">
                                <span>Hace 3 meses</span>
                                <a href="#" class="text-cyan-400 hover:underline">Leer →</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="mt-10">
            @if (isset($posts) && count($posts) > 0)
                {{ $posts->links() }}
            @endif
        </div>
    </section>
</main>
@endsection
