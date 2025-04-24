@extends('layouts.app')

@section('title')
    Crear Articulo
@endsection


@section('content')
    @if ($errors->any())
        <ul id="errorsBox" class="flex flex-col px-5 py-2 gap-2 absolute top-5 m-auto bg-red-500 rounded-lg">
            @foreach ($errors->all() as $error)
                <li class="text-sm p-3"><p class="text-white">{{ $error }}</p></li>
            @endforeach
        </ul>
    @endif
    <main class="flex flex-col items-center min-h-[calc(100vh-64px)] w-full">
        <section class="flex flex-col items-center py-5 w-1/2">
            <h2 class="text-2xl text-red-400 px-5">Crear Articulo</h2>
            <form id="form" class="flex flex-col items-center gap-4 w-full" action="{{ route('admin.articulos.store') }}">
                @method('POST')
                <div class="flex flex-col w-full">
                    <label for="title">Título</label>
                    <x-input-contact class="w-full" type="text" name="title" placeholder="Título" />
                </div>
                <div class="flex flex-col w-full">
                    <label for="slug">Slug</label>
                    <x-input-contact class="w-full" type="text" name="slug" placeholder="Slug" />
                </div>
                <div class="flex flex-col w-full">
                    <label for="content">Contenido</label>
                    <textarea
                        class="p-2 w-full h-40 bg-slate-800 rounded-md resize-none focus:outline-none focus:border-slate-400 border-2 border-transparent"
                        min="1"
                        max="255"
                        name="content"
                        placeholder="Contenido"
                    ></textarea>
                </div>
                @csrf
                <x-buttonPost>Crear</x-buttonPost>
            </form>
        </section>
    </main>
    <script>
        function getCsrfToken() {
            return document.querySelector('meta[name="csrf-token"]').content;
        }
        const $form = document.getElementById('form');

        $form.addEventListener('submit', (e) => {
            e.preventDefault();

            const $errorsBox = document.getElementById('errorsBox');
            if ($errorsBox) {
                $errorsBox.remove();
            }

            const formData = new FormData($form);
            fetch($form.action , {
                headers: {
                    'X-CSRF-TOKEN': getCsrfToken(),
                    'Content-Type': 'application/json',
                    'accept': 'application/json'
                },
                method: 'POST',
                body: JSON.stringify(Object.fromEntries(formData))
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.log(error));

        })
    </script>
@endsection

