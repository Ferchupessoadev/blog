@extends('layouts.app')

@section('title')
    Registrate
@endsection

@section('content')
    <main class="w-full min-h-screen flex justify-center items-center">
        @if ($errors->any())
            <div class="w-full flex flex-col items-center absolute dark:bg-primary-dark bg-primary-light top-0 left-0 p-4 m-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="min-h-screen bg-slate-950 flex items-center justify-center p-4 md:p-6">
            <div class="w-full max-w-2xl bg-slate-900 border border-slate-800 rounded-xl p-6 md:p-10 shadow-2xl">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-white tracking-tight">Crear cuenta</h1>
                    <p class="text-slate-400 text-sm mt-1">Únete a la plataforma y comienza a desarrollar.</p>
                </div>

                <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5">

                    <div class="flex flex-col">
                        <label class="text-sm font-medium text-slate-300 mb-2">Nombre Completo</label>
                        <input type="text" placeholder="Ej: Juan Pérez"
                            class="bg-slate-950 border border-slate-700 rounded-lg px-4 py-2.5 text-slate-200 focus:ring-2 focus:ring-emerald-500 outline-none transition-all">
                    </div>

                    <div class="flex flex-col">
                        <label class="text-sm font-medium text-slate-300 mb-2">Nombre de usuario</label>
                        <input type="text" placeholder="@usuario"
                            class="bg-slate-950 border border-slate-700 rounded-lg px-4 py-2.5 text-slate-200 focus:ring-2 focus:ring-emerald-500 outline-none transition-all">
                    </div>

                    <div class="md:col-span-2 flex flex-col">
                        <label class="text-sm font-medium text-slate-300 mb-2">Correo Electrónico</label>
                        <input type="email" placeholder="dev@ejemplo.com"
                            class="bg-slate-950 border border-slate-700 rounded-lg px-4 py-2.5 text-slate-200 focus:ring-2 focus:ring-emerald-500 outline-none transition-all">
                    </div>

                    <div class="flex flex-col">
                        <label class="text-sm font-medium text-slate-300 mb-2">Contraseña</label>
                        <input type="password" placeholder="••••••••"
                            class="bg-slate-950 border border-slate-700 rounded-lg px-4 py-2.5 text-slate-200 focus:ring-2 focus:ring-emerald-500 outline-none transition-all">
                    </div>

                    <div class="flex flex-col">
                        <label class="text-sm font-medium text-slate-300 mb-2">Confirmar Contraseña</label>
                        <input type="password" placeholder="••••••••"
                            class="bg-slate-950 border border-slate-700 rounded-lg px-4 py-2.5 text-slate-200 focus:ring-2 focus:ring-emerald-500 outline-none transition-all">
                    </div>

                    <div class="md:col-span-2 mt-4">
                        <button type="submit"
                            class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-3 rounded-lg shadow-lg shadow-emerald-500/20 transition-all active:scale-[0.98]">
                            Registrarme ahora
                        </button>
                    </div>
                </form>

                <div class="mt-8 pt-6 border-t border-slate-800 text-center">
                    <p class="text-slate-400 text-sm">
                        ¿Ya tienes una cuenta? <a href={{ route('login') }} class="text-emerald-400 hover:text-emerald-300 font-medium transition-colors">Inicia sesión</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
