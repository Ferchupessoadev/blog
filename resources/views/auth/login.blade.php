@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <main class="w-full min-h-screen h-full flex justify-center items-center">
        <div class="min-h-screen w-full bg-slate-950 flex items-center justify-center p-6">
            <div class="w-full max-w-2xl bg-slate-900 border border-slate-800 rounded-xl p-8 shadow-2xl">
                <div class="mb-10 text-center">
                    <h1 class="text-2xl font-bold text-white tracking-tight">Bienvenido de nuevo</h1>
                    <p class="text-slate-400 mt-2 text-sm">Ingresa tus credenciales para acceder.</p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full bg-slate-950 border border-slate-700 rounded-lg px-4 py-2.5 text-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all"
                            placeholder="usuario@ejemplo.com">
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <label for="password" class="block text-sm font-medium text-slate-300">Contraseña</label>
                            <a href="#" class="text-xs text-indigo-400 hover:text-indigo-300">¿Olvidaste tu contraseña?</a>
                        </div>
                        <input type="password" id="password" name="password" required
                            class="w-full bg-slate-950 border border-slate-700 rounded-lg px-4 py-2.5 text-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all"
                            placeholder="••••••••">
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-max text-center m-auto px-10 py-3 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold rounded-lg shadow-lg shadow-indigo-500/20 transition-all active:scale-[0.98]">
                            Iniciar Sesión
                        </button>
                    </div>
                </form>

                <div class="mt-4 pt-6 border-t border-slate-800 text-center">
                    <p class="text-center text-slate-400 text-sm mt-8">
                        ¿No tienes cuenta? <a href={{ route('register.index') }} class="text-indigo-400 hover:underline font-medium">Regístrate aquí</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
