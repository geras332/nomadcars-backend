@extends('layouts.default')

@section('title', 'Новости')

@section('content')
    <div class="container mx-auto mt-5 px-5 sm:px-0 relative">
        <!-- Хлебные крошки -->
        <div class="absolute">
            <p class="text-gray-500">Главная > Новости</p>
        </div>
    </div>

    <!-- Заголовок "НОВОСТИ" -->
    <div class="container mx-auto mt-10 px-5 sm:px-0">
        <h1 class="text-3xl font-bold">НОВОСТИ</h1>
    </div>

    <!-- Контент с текстом и изображением -->
    <div class="container mx-auto mt-5 px-5 sm:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Текст -->
            <div>
                <h2 class="text-2xl font-bold">Toyota Camry G 2023: Изысканность Современного Дизайна и Новейшие Технологии в Каждом Километре</h2>
                <p class="mt-4 text-gray-700">Исследуйте Конфорт и Превосходство в Toyota Canny G 2023...</p>
                <a href="#" class="mt-4 inline-block text-blue-500 hover:text-blue-700">Читать далее...</a>
            </div>
            <!-- Изображение -->
            <div>
                <img src="{{ asset("images/articles-car.png") }}" alt="Toyota Canny G 2023" class="w-full h-auto rounded-lg">
            </div>
        </div>
    </div>
@endsection
