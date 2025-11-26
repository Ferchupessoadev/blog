@extends('layouts.app')

@section('title')
    Home - Ferchudev
@endsection

@section('content')
    <main class="flex flex-col min-h-[calc(100vh-64px)] px-10">
        <section class="flex justify-center items-center relative h-64">
            <img
                class="absolute w-full h-full object-cover z-[-1] brightness-50 rounded-md"
                src="{{ asset('img/banner.jpg') }}" alt="banner"
            >
            <p class="flex flex-col px-5 text-white text-xl font-tektur font-bold">
                <span class="text-5xl">¡Bienvenidos a mi blog!</span>
                <span class="text-md">Aqui encontraras articulos sobre tecnologia, programacion y mas.</span>
            </p>
        </section>
        <section class="flex flex-col py-5 relative">
            <x-boxes-background class="absolute z-[-1] w-full h-full"></x-boxes-background>
            <h2 class="px-2 text-2xl dark:text-primary-dark text-primary-light">Articulos</h2>
            <p class="px-2 dark:text-white text-black">Articulos mas recientes</p>
            <div class="flex gap-3 flex-wrap w-3/4 mt-5 px-2">
                @if (isset($posts) && count($posts) > 0)
                    @foreach ($posts as $post)
                        <article
                            class="flex gap-3 backdrop-blur dark:bg-[rgba(255,255,255,0.04)]
                                    bg-[rgba(0,0,0,0.2)] rounded-md w-full p-3 overflow-x-hidden"
                        >
                            <img class="w-auto h-28 object-cover" src="{{ $post->image }}" alt="{{ $post->title }}">
                            <div class="flex flex-col gap-4">
                                <div class="flex flex-col">
                                    <a
                                        href="{{ route('articulos.show', $post) }}"
                                        class="text-xl text-primary-light dark:text-primary-dark px-5"
                                    >{{ $post->title }}</a>
                                    <p class="dark:text-text-dark text-text-light text-sm px-5 flex gap-2 items-center">
                                        <i class="fa-regular fa-calendar text-sm"></i>
                                        {{ $post->published_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @endif
            </div>
        </section>
    </main>
@endsection
