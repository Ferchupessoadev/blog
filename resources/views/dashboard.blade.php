@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <main class="flex flex-col items-center min-h-[calc(100vh-64px)] px-10">
        <div class="flex flex-col items-center py-5 w-full bg-slate-800 gap-4">
            <p class="text-red-400">Hola {{ Auth::user()->name }}</p>
        </div>
    </main>
@endsection
