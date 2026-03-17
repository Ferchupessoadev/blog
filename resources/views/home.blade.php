@extends('layouts.app')

@section('title')
    Inicio
@endsection

@section('content')
    <main class="flex flex-col min-h-[calc(100vh-64px)] p-2 md:p-5">
        <section
            class="flex flex-col lg:flex-row relative h-max rounded-md bg-gradient-to-br from-black via-blue-950/30 to-black py-12 px-2 md:px-8"
        >
            <div class="flex flex-col gap-5 w-full lg:w-1/2">
                <div class="flex flex-col">
                    <h1 class="text-white text-5xl font-tektur font-bold hero_title">
                        FerchuDev
                    </h1>
                    <p class="text-white text-md font-tektur">
                        <span>Backend developer</span>
                    </p>

                </div>
                <div>
                    <p class="text-white text-md flex flex-col">
                        <span class="text-gray-400">Me especializo en desarrollo backend e infraestructura sobre Linux.</span>
                        <span class="text-gray-400">Construyo APIs, sistemas web y arquitecturas de servidor enfocadas en rendimiento, escalabilidad y simplicidad.</span>
                    </p>
                </div>
                <div>
                    <p>
                        3+ años programando
                    </p>
                    <p>
                        15+ proyectos
                    </p>
                </div>
                <div class="flex flex-col flex-wrap gap-4 mt-8">
                    <a href="#" class="group w-max flex items-center gap-3 px-4 py-2 border border-slate-700/50 rounded-full bg-slate-900/40 text-slate-400 font-mono transition-all duration-300 hover:border-cyan-500/50 hover:text-cyan-400 hover:bg-cyan-950/20 hover:scale-105">
                        <x-term-icon class="text-slate-500 group-hover:text-cyan-400 transition-colors"></x-term-icon>
                        <span class="tracking-widest text-sm">[ Ver proyectos ]</span>
                    </a>

                    <a href={{ route('articulos.index') }} class="group w-max flex items-center gap-3 px-4 py-2 border border-slate-700/50 rounded-full bg-slate-900/40 text-slate-400 font-mono transition-all duration-300 hover:border-amber-500/50 hover:text-amber-400 hover:bg-amber-950/20 hover:scale-105">
                        <x-folder-icon class="text-slate-500 group-hover:text-amber-400 transition-colors"></x-folder-icon>
                        <span class="tracking-widest text-sm">[ Ver Artículos ]</span>
                    </a>

                    <a href={{ route('contact') }} class="group w-max flex items-center gap-3 px-4 py-2 border border-slate-700/50 rounded-full bg-slate-900/40 text-slate-400 font-mono transition-all duration-300 hover:border-teal-500/50 hover:text-teal-400 hover:bg-teal-950/20 hover:scale-105">
                        <x-send-icon class="text-slate-500 group-hover:text-teal-400 transition-colors"></x-send-icon>
                        <span class="tracking-widest text-sm">[ Contactame ]</span>
                    </a>
                </div>
            </div>
            <x-terminal></x-terminal>
        </section>
        <section class="mt-12">
            <h2 class="text-cyan-400 font-mono text-xl mb-6 flex items-center gap-2">
                <span class="text-slate-500">02.</span> Latest Articles
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <article class="group relative bg-slate-900/40 border border-slate-800 p-5 rounded-xl transition-all duration-300 hover:-translate-y-2 hover:border-cyan-500/50 hover:bg-slate-800/60">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-[10px] uppercase tracking-widest text-cyan-500 bg-cyan-500/10 px-2 py-1 rounded">Backend</span>
                            <span class="text-xs text-slate-500 font-mono">{{ $post->published_at->diffForHumans() }}</span>
                        </div>

                        <h3 class="text-slate-200 font-semibold group-hover:text-cyan-400 transition-colors mb-2">
                            {{ $post->title }}
                        </h3>

                        <p class="text-slate-400 text-sm line-clamp-2 mb-4">
                            {{ $post->description }}
                        </p>

                        <a href="#" class="flex items-center gap-2 text-xs text-slate-500 font-mono group-hover:text-slate-300">
                            <span>Leer mas</span>
                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                        </a>
                    </article>
                @endforeach
            </div>
        </section>
    </main>
@endsection
