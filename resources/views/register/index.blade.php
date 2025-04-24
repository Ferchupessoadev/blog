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
        <div class="w-full flex flex-col items-center">
            <form method="POST" action="{{ route('register.store') }}" class="bg-slate-800 shadow-md rounded px-10 py-8 w-1/2">
                <h1 class="text-3xl font-bold text-center text-white">Registrate</h1>
                <div class="flex flex-col gap-4 mt-8">
                    @csrf
                    @method('POST')
                    <input type="text"
                        name="name"
                        id="name"
                        placeholder="Nombre"
                        class="w-full bg-slate-700 text-white px-4 py-2 focus:outline-gray-500 rounded border-none"
                    >
                    <input type="text"
                        name="surname"
                        id="surname"
                        placeholder="Apellido"
                        class="w-full bg-slate-700 text-white px-4 py-2 focus:outline-gray-500 rounded border-none"
                    >
                    <input type="email"
                        name="email"
                        id="email"
                        placeholder="Correo"
                        class="w-full bg-slate-700 text-white px-4 py-2 focus:outline-gray-500 rounded border-none"
                    >
                    <input type="password"
                        name="password"
                        id="password"
                        placeholder="Contraseña"
                        class="w-full bg-slate-700 text-white px-4 py-2 focus:outline-gray-500 rounded border-none"
                    >
                    <input type="password"
                        name="repeat_password"
                        id="repeat_password"
                        placeholder="Repetir contraseña"
                        class="w-full bg-slate-700 text-white px-4 py-2 focus:outline-gray-500 rounded border-none"
                    >
                    <div class="flex flex-col items-center px-8 w-full gap-4">
                        <input type="submit" value="Registrarme" class="bg-slate-700 w-max text-white px-8 py-2 border border-gray-400 rounded">
                        <p class="text-white">
                            <span>¿Ya tienes cuenta?,</span>
                            <a href="{{ route('login') }}" class="w-max text-blue-600 underline"> Inicia sesión</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
