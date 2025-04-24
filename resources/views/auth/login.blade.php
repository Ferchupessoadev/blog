@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <main class="w-full min-h-screen h-full flex justify-center items-center">
        <section class="w-full md:w-1/3 mx-4 h-2/3 bg-slate-800 rounded-xl">
            <form class="flex flex-col gap-4 w-full px-4 py-10" action="{{ route('login.store') }}" method="POST">
                <div class="flex justify-center items-center">
                    <h1 class="text-2xl font-bold text-white">Login</h1>
                </div>
                <div class="flex justify-center items-center">
                    <x-login.input-error></x-login.input-error>
                </div>
                @csrf
                <div class="max-w-sm space-y-3">
                    <x-login.input-email></x-login.input-email>
                    <x-login.input-password></x-login.input-password>
                </div>
                <div class="px-4 flex justify-center">
                    <button class="px-10 font-bold py-2 bg-slate-700" type="submit">Login</button>
                </div>
            </form>
        </section>
    </main>
@endsection
