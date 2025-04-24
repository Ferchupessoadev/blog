@extends('layouts.app')

@section('title')
    FerchuDev - Contactame
@endsection

@section('content')
    <div class="flex flex-col items-center justify-center h-[calc(100vh-64px)] my-16">
        <h1 class="text-3xl text-primary-light dark:text-primary-dark px-5">Contactame</h1>
        <form class="flex flex-col gap-4 mt-4 items-center w-1/2 py-2 px-4" method="post" action="{{ route('contact.store') }}">
            @method('POST')
            <div class="flex flex-col w-full">
                <x-input-contact name="name" placeholder="Nombre" value="{{ old('name') }}"></x-input-contact>
                @error('name')
                    <p class="text-red-400 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col w-full">
                <x-input-contact name="email" placeholder="Email" value="{{ old('email') }}"></x-input-contact>
                @error('email')
                    <p class="text-red-400 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col w-full">
                <textarea
                    class="p-2 w-full h-40 bg-slate-800 rounded-md resize-none focus:outline-none focus:border-slate-400 border-2 border-transparent"
                    min="1"
                    max="255"
                    name="message"
                    placeholder="Mensaje"
                >{{ old('message') }}</textarea>
                @error('message')
                    <p class="text-red-400 text-sm">{{ $message }}</p>
                @enderror
            </div>
            @csrf
            <x-buttonPost>Enviar</x-buttonPost>
        </form>
        <div class="flex w-1/2 justify-center items-center gap-3">
            <hr class="w-1/4">
            <p>o</p>
            <hr class="w-1/4">
        </div>
        <div class="flex gap-3 mt-5">
            <a class="px-5" href="https://www.linkedin.com/in/ferchudev/" target="_blank">
                <x-linkedin class="size-8"></x-linkedin>
            </a>
            <a class="px-5" href="https://github.com/Ferchupessoadev" target="_blank">
                <x-github class="size-8 dark:text-white text-black"></x-github>
            </a>
        </div>
    </div>
@endsection
