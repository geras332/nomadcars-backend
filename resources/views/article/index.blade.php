@extends('layouts.default')

@section('title', 'Новости')

@section('content')
    <div class="container mx-auto mt-15 px-5 sm:px-0 relative">
        <!-- Хлебные крошки -->
        <nav class="relative hidden lg:flex text-gray-500 font-Gilroy space-x-2">
            <a href="#" class="hover:text-gray-700">Главная</a>
            <span>/</span>
            <a href="#" class="hover:text-gray-700">Новости</a>
        </nav>

        <!-- Основной контент -->
        <div class="flex items-start mt-10">
            <section class="flex-1 h-auto md:mr-[10px] md:mt-4">
                <h1 class="uppercase text-xl font-bold font-Gilroy border-b-2 border-b-gray-500 pb-2">Новости</h1>

                <!-- Список новостей -->
                <div class="container pt-8 flex flex-col gap-8">
                    @for ($i = 0; $i < 5; $i++)
                        <article class="container h-auto w-auto flex lg:flex-row gap-4 flex-col">
                            <figure class="lg:w-[250px] w-auto lg:h-[200px] h-[217px] overflow-hidden rounded-[15px]">
                                <img src="{{ asset('images/articles-car.png') }}" alt="Toyota Camry G 2023" class="w-full h-full object-cover transform scale-120 lg:scale-150">
                            </figure>
                            <div class="flex flex-col gap-4">
                                <div class="flex flex-col gap-1">
                                    <h2 class="text-[18px] text-gray-800 font-bold leading-relaxed max-w-[550px]">
                                        Toyota Camry G 2023: Изысканность Современного Дизайна и Новейшие Технологии в Каждом Километре
                                    </h2>
                                    <div class="flex items-center space-x-2 text-gray-700">
                                        <img src="{{ asset('images/icons/user-icon.svg') }}" alt="Автор статьи" class="w-5 h-5">
                                        <p class="text-[#292929] font-Gilroy">Tesla</p>
                                        <span class="text-gray-400">/</span>
                                        <img src="{{ asset('images/icons/date-icon.svg') }}" alt="Дата публикации" class="w-5 h-5">
                                        <p class="text-[#292929] font-Gilroy">24.05.09</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-Gilroy text-[14px] text-[#292929]">
                                        Исследуйте Комфорт и Превосходство в Toyota Camry G 2023...
                                    </p>
                                </div>
                                <div class="mt-2">
                                    <a class="text-[#2BAD72] font-Gilroy text-[18px]" href="#">Читать далее...</a>
                                </div>
                            </div>
                        </article>
                    @endfor
                </div>
            </section>

            <!-- Боковая панель -->
            <aside class="w-[306px] h-auto flex-col gap-2 hidden md:flex">
                @for ($i = 0; $i < 4; $i++)
                    <div class="bg-white w-[306px] h-[266px] rounded-[20px]"></div>
                @endfor
            </aside>
        </div>
    </div>
@endsection
