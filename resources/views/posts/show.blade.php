@extends('layouts.posts')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <main class="flex flex-col items-center min-h-[calc(100vh-64px)]">
        <article>
            <h1 class="text-3xl text-primary-light dark:text-primary-dark px-5">{{ $post->title }}</h1>
            <p class="px-5">{{ $post->content }}</p>
            <p class="px-5 text-gray-400 text-sm flex gap-2">
                <span><i class="fa-regular fa-calendar text-sm"></i></span>
                <span>{{ $post->published_at->format('d/m/Y') }}</span>
            </p>
        </article>
    </main>
@endsection
