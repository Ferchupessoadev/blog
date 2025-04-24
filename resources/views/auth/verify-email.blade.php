@extends('layouts.app')

@section('title')
    Verify Email
@endsection

@section('content')
    <main class="w-full min-h-screen h-full flex justify-center items-center">
        <section class="flex flex-col gap-4 items-center w-full md:w-1/3 mx-4 h-2/3 bg-gray-800 rounded-xl p-5">
            @if ($verified)
                <p class="text-center">Tu correo ha sido verificado</p>
                <a class="text-center text-blue-400 hover:underline" href="{{ route('home') }}">Volver al inicio</a>
            @else
                <p class="text-center">No se ha verificado tu correo</p>
                <p class="text-center">Te hemos enviado un correo para verificar tu cuenta</p>
            @endif
        </section>
    </main>
    <script>
        function getCsrfToken() {
            return document.head.querySelector('meta[name="csrf-token"]').content
        }

        fetch('/email/verification-notification', {
           method: 'POST',
           headers: {
               'X-CSRF-TOKEN': getCsrfToken()
           }
        }).then(response => response.json())
        .then(data => {
            console.log(data)
        }).catch(error => {
            console.log(error)
        })
    </script>
@endsection
