@extends('layouts.app')

@section('title')
    Editar Articulo
@endsection

@section('content')
    <main class="flex flex-col items-center min-h-[calc(100vh-64px)]">
        <section class="flex flex-col items-center py-5 w-1/2">
            <h2 class="text-2xl text-red-400 px-5">Editar Articulo</h2>
            <form class="flex flex-col items-center gap-4 w-full" action={{ route('admin.articulos.update', $post) }} method="POST">
                <div class="flex flex-col w-full">
                    <label for="title">Título</label>
                    <x-inputContact class="w-full" type="text" name="title" placeholder="Título" value="{{ $post->title }}" />
                </div>
                <div class="flex flex-col w-full">
                    <label for="slug">Slug</label>
                    <x-inputContact class="w-full" type="text" name="slug" placeholder="Slug" value="{{ $post->slug }}" />
                </div>
                <div class="flex flex-col w-full">
                    <label for="content">Contenido</label>
                    <textarea
                        class="p-2 w-full h-40 bg-slate-800 rounded-md resize-none focus:outline-none focus:border-slate-400 border-2 border-transparent"
                        min="1"
                        max="255"
                        name="content"
                        placeholder="Contenido"
                    >{{ $post->content }}</textarea>
                </div>
                @csrf
                @method('PUT')
                <x-buttonPost>Editar</x-buttonPost>
            </form>
        </section>
    </main>
@endsection
