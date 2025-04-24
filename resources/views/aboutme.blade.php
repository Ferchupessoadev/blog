@extends('layouts.app')

@section('title')
    Acerca de mi
@endsection

@section('content')
    <main class="flex flex-col items-center min-h-[calc(100vh-64px)] mt-5">
        <div class="flex flex-col items-center w-1/2">
            <h1 class="text-3xl dark:text-primary-dark text-primary-light px-4">Sobre mi</h1>
            <p class="px-5 dark:text-white text-black">¡Hola! Soy Fernando Pessoa, un desarrollador de software con experiencia en crear soluciones innovadoras y eficientes. Mi enfoque se centra en el diseño de código limpio y en la resolución efectiva de problemas.</p>
        </div>
    </main>
@endsection
