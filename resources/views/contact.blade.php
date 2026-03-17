@extends('layouts.app')

@section('title')
    Contactame
@endsection

@section('content')
    <section class="mt-20">
        <div class="mx-auto w-max bg-[#0b1220] border border-cyan-500/10 rounded-2xl p-8 relative overflow-hidden">

            <!-- Glow -->
            <div class="absolute inset-0 opacity-20 blur-3xl bg-cyan-500/10"></div>

            <div class="relative z-10 max-w-3xl mx-auto">

                <!-- Title -->
                <h2 class="text-2xl md:text-3xl font-semibold text-white text-center mb-3">
                    Contacto
                </h2>

                <p class="text-gray-400 text-sm md:text-base text-center mb-8">
                    ¿Tenés una idea, proyecto o querés trabajar conmigo? Mandame un mensaje.
                </p>

                <!-- Terminal touch -->
                <div class="text-green-400 text-xs text-center mb-6">
                    $ send-message --contact<span class="animate-pulse">_</span>
                </div>

                <!-- Form -->
                <form action="/contact" method="POST" class="space-y-5">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label class="block text-sm text-gray-400 mb-1">Nombre</label>
                        <input 
                            type="text" 
                            name="name"
                            required
                            placeholder="Tu nombre"
                            class="w-full bg-[#020617] border border-cyan-500/10 rounded-lg px-4 py-2 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-cyan-400 transition"
                        >
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm text-gray-400 mb-1">Email</label>
                        <input 
                            type="email" 
                            name="email"
                            required
                            placeholder="tu@email.com"
                            class="w-full bg-[#020617] border border-cyan-500/10 rounded-lg px-4 py-2 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-cyan-400 transition"
                        >
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-sm text-gray-400 mb-1">Mensaje</label>
                        <textarea 
                            name="message"
                            rows="5"
                            required
                            placeholder="Contame sobre tu proyecto..."
                            class="w-full bg-[#020617] border border-cyan-500/10 rounded-lg px-4 py-2 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-cyan-400 transition resize-none"
                        ></textarea>
                    </div>

                    <!-- Button -->
                    <div class="text-center">
                        <button 
                            type="submit"
                            class="bg-cyan-500 hover:bg-cyan-400 text-black font-medium px-6 py-2 rounded-lg text-sm transition-all duration-200 shadow-lg shadow-cyan-500/20 hover:shadow-cyan-400/30"
                        >
                            Enviar mensaje
                        </button>
                    </div>

                    <!-- Note -->
                    <p class="text-xs text-gray-500 text-center">
                        Respondo generalmente dentro de 24 horas.
                    </p>

                </form>

            </div>
        </div>
    </section>
@endsection
