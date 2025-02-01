@extends('layouts.default')

@section('title', 'Главная страница')

@section('content')
    <main class="container mx-auto mt-5 px-6 sm:px-0 relative h-dvh">
        <div class="hidden justify-center sm:flex">
            <img src="{{ asset('images/hero.png') }}" alt="Hero" class="rounded-3xl w-full">
            <div class="absolute top-5 right-10 text-white flex flex-col items-end text-end">
                <h2 class="text-2xl sm:text-4xl lg:text-7xl font-bold mb-4">Соприкоснитесь с <br/> новым!</h2>
                <a href="#"
                   class="bg-white text-black px-4 py-2 sm:px-6 sm:py-3 group mt-2 rounded-xl text-sm sm:text-lg font-medium transition transform hover:opacity-95 hover:shadow-lg flex items-center gap-2 max-w-[240px]">
                    Смотреть все
                    <img src="{{ asset('images/icons/arrow-circle.svg') }}" alt="Arrow"
                         class="transition-transform transform group-hover:translate-x-1 w-auto">
                </a>
            </div>
        </div>
    </main>
@endsection
