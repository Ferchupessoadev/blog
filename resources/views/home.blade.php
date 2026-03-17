@extends('layouts.app')

@section('title')
    Inicio
@endsection

@section('content')
    <main class="flex flex-col min-h-[calc(100vh-64px)] p-2 md:p-5">
        <section
            class="fade-up opacity-0 translate-y-4 transition-opacity transition-transform duration-700 flex flex-col lg:flex-row relative h-max rounded-md bg-gradient-to-br from-black via-blue-950/30 to-black py-12 px-2 md:px-8"
        >
            <div class="flex flex-col gap-5 w-full lg:w-1/2 ">
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
                <span class="text-slate-500">02.</span> Articulos recientes
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <article 
                    class="fade-up opacity-0 translate-y-4 transition-opacity transition-transform duration-700 hover:scale-[1.02] hover:transition-transform hover:duration-200 group relative bg-slate-900/40 border border-slate-800 p-5 rounded-xl hover:-translate-y-2 hover:border-cyan-500/50 hover:bg-slate-800/60">
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
        <section class="mt-12">
            <h2 class="text-cyan-400 text-lg mb-6 tracking-widest">
                <span class="text-slate-500">03.</span> Habilidades tecnológicas
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <x-stack-card 
                    title="backend"
                    :items="['Laravel', 'Node.js', 'PHP', 'REST APIs']"
                />

                <x-stack-card 
                    title="web"
                    :items="['Astro', 'ReactJs', 'JavaScript', 'AlpineJs']"
                />

                <x-stack-card 
                    title="infra"
                    :items="['Linux', 'Docker', 'Nginx', 'VPS']"
                />

                <x-stack-card 
                    title="db"
                    :items="['MySQL', 'PostgreSQL', 'MongoDB', 'MariaDB']"
                />

                <x-stack-card 
                    title="network"
                    :items="['TCP/IP', 'DNS', 'NAT', 'Reverse Proxy']"
                />

                <x-stack-card 
                    title="security"
                    :items="['JWT Authentication', 'HTTPS / SSL', 'OWASP Basics', 'Rate Limiting']"
                />

                <x-stack-card 
                    title="systems" 
                    :items="['Bash Scripting', 'Process Management', 'Linux File Systems', 'Automation']"
                />

                <!-- Tools -->
                <x-stack-card  
                    title="tools" 
                    :items="['Git', 'Neovim', 'Bash', 'Postman']"
                />
            </div>
        </section>
        <section class="mt-20">
            <h2 class="text-cyan-400 text-lg mb-6 tracking-widest">
                <span class="text-slate-500">04.</span> Proyectos destacados
            </h2>

            <div class="grid md:grid-cols-2 gap-6">

                <!-- Project 1 -->
                <div class="fade-up opacity-0 translate-y-4 transition-opacity transition-transform duration-700 hover:scale-[1.02] hover:transition-transform hover:duration-200 group bg-[#0b1220] border border-cyan-500/10 rounded-xl p-6 hover:border-cyan-400/40 hover:shadow-lg hover:shadow-cyan-500/10">

                    <!-- Title -->
                    <h3 class="text-white text-lg mb-2">
                        Sistema de socios
                    </h3>

                    <!-- Description -->
                    <p class="text-gray-400 text-sm mb-4">
                        Plataforma para la gestión de socios que permite administrar miembros, cuotas y accesos de forma centralizada, con autenticación segura y backend escalable.
                    </p>

                    <!-- Tech -->
                    <div class="flex flex-wrap gap-2 mb-4 text-xs">
                        <span class="px-2 py-1 border border-cyan-500/20 rounded-md text-cyan-400">Laravel</span>
                        <span class="px-2 py-1 border border-cyan-500/20 rounded-md text-cyan-400">Livewire</span>
                        <span class="px-2 py-1 border border-cyan-500/20 rounded-md text-cyan-400">WebSockets</span>
                        <span class="px-2 py-1 border border-cyan-500/20 rounded-md text-cyan-400">MariaDB</span>
                    </div>

                    <!-- Actions -->
                    <div class="flex gap-4 text-sm">
                        <a href="https://github.com/Ferchupessoadev/cec-partners" target="_blank" class="text-cyan-400 hover:underline">Live Demo →</a>
                        <a href="https://github.com/Ferchupessoadev/cec-partners" target="_blank" class="text-gray-400 hover:text-white">GitHub</a>
                    </div>

                </div>

                <!-- Project 2 -->
                <div class="fade-up opacity-0 translate-y-4 transition-opacity transition-transform duration-700 hover:scale-[1.02] hover:transition-transform hover:duration-200 group bg-[#0b1220] border border-cyan-500/10 rounded-xl p-6 hover:border-cyan-400/40 hover:shadow-lg hover:shadow-cyan-500/10">

                    <h3 class="text-white text-lg mb-2">
                        Pomodoro App
                    </h3>

                    <p class="text-gray-400 text-sm mb-4">
                        Web con cronometros para estudiar con la técnica pomodoro. Además tiene integrado un sistema de lista de tareas.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-4 text-xs">
                        <span class="px-2 py-1 border border-cyan-500/20 rounded-md text-cyan-400">HTML</span>
                        <span class="px-2 py-1 border border-cyan-500/20 rounded-md text-cyan-400">Sass</span>
                        <span class="px-2 py-1 border border-cyan-500/20 rounded-md text-cyan-400">Javascript</span>
                        <span class="px-2 py-1 border border-cyan-500/20 rounded-md text-cyan-400">Github pages</span>
                    </div>

                    <div class="flex gap-4 text-sm">
                        <a href="https://ferchupessoadev.github.io/webpomodoro/" target="_blank" class="text-cyan-400 hover:underline">Live Demo →</a>
                        <a href="https://github.com/Ferchupessoadev/webpomodoro" target="_blank" class="text-gray-400 hover:text-white">GitHub</a>
                    </div>

                </div>

            </div>
        </section>
        <section class="mt-20">
            <h2 class="text-cyan-400 text-lg mb-6 tracking-widest">
                <span class="text-slate-500">05.</span> Newsletter
            </h2>
            <div class="bg-[#0b1220] border border-cyan-500/10 rounded-2xl p-8 text-center relative overflow-hidden">

                <!-- Glow background -->
                <div class="absolute inset-0 opacity-20 blur-3xl bg-cyan-500/10"></div>

                <!-- Content -->
                <div class="relative z-10 max-w-xl mx-auto">
                    
                    <h3 class="text-2xl md:text-3xl font-semibold text-white mb-3">
                        Suscribite a la Newsletter
                    </h3>

                    <p class="text-gray-400 text-sm md:text-base mb-6">
                        Recibí artículos sobre desarrollo backend, infraestructura, seguridad y proyectos reales directamente en tu inbox.
                    </p>

                    <!-- Form -->
                    <form action="/newsletter/subscribe" method="POST" class="flex flex-col sm:flex-row gap-3 justify-center">
                        @csrf

                        <input 
                            type="email" 
                            name="email"
                            required
                            placeholder="tu@email.com"
                            class="w-full sm:w-auto flex-1 bg-[#020617] border border-cyan-500/10 rounded-lg px-4 py-2 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-cyan-400 transition"
                        >

                        <button 
                            type="submit"
                            class="bg-cyan-500 hover:bg-cyan-400 text-black font-medium px-5 py-2 rounded-lg text-sm transition-all duration-200 shadow-lg shadow-cyan-500/20 hover:shadow-cyan-400/30"
                        >
                            Suscribirme
                        </button>
                    </form>

                    <!-- Extra -->
                    <p class="text-xs text-gray-500 mt-4">
                        Sin spam. Podés darte de baja en cualquier momento.
                    </p>

                </div>
            </div>
        </section>
    </main>
@endsection