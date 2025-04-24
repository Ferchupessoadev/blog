@extends('layouts.app')

@section('title')
    Articulos - Ferchudev
@endsection

@section('content')
    <main class="flex flex-col items-center min-h-[calc(100vh-64px)]">
        <section class="flex flex-col items-center py-5">
            <h2 class="text-2xl text-primary-light dark:text-primary-dark px-5">Articulos</h2>
            <p class="px-5 dark:text-white text-black">Articulos más recientes</p>
            <div class="flex gap-3 flex-wrap w-3/4 mt-5">
                @if (isset($posts) && count($posts) > 0)
                    @foreach ($posts as $post)
                        <div class="flex justify-center bg-slate-800 rounded-md w-full p-3 h-56">
                            <img class="w-1/5 h-48 object-cover" src="{{ $post->image }}" alt="{{ $post->title }}">
                            <div class="flex flex-col gap-4 overflow-x-hidden w-10/12">
                                <h3 class="text-xl text-primary-light dark:text-primary-dark px-5">{{ $post->title }}</h3>
                                <p class="text-gray-400 text-sm px-5 flex gap-2 items-center">
                                    <i class="fa-regular fa-calendar text-sm"></i>
                                    {{ $post->published_at->diffForHumans() }}
                                </p>
                                <a class="px-5" href={{ route('articulos.show', $post) }}>Ver</a>
                            </div>
                        </div>
                    @endforeach
                @endif
                {{ $posts->links()  }}
            </div>
        </section>
    </main>
@endsection
