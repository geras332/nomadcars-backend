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
        <article class="container relative">
            <div class="flex flex-col gap-8">
                <section class="container flex items-start flex-col mt-10 gap-3">
                    <div class="flex flex-col w-max-[945px] lg:w-[945px]">
                        <h1 class="border-b-2 pb-2 border-b-gray-500 uppercase text-xl font-bold">
                            Toyota Camry G 2023: Изысканность Современного Дизайна и Новейшие Технологии в Каждом Километре
                        </h1>
                        <div class="flex pt-2 flex-col">
                            <div class="flex items-center space-x-2 text-gray-700">
                                <img src="{{ asset('images/icons/user-icon.svg') }}" alt="Автор статьи" class="w-5 h-5">
                                <p class="text-[#292929] font-Gilroy">Tesla</p>
                                <span class="text-gray-400">/</span>
                                <img src="{{ asset('images/icons/date-icon.svg') }}" alt="Дата публикации" class="w-5 h-5">
                                <p class="text-[#292929] font-Gilroy">24.05.09</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <a href="#" aria-label="Поделиться в WhatsApp"><img src="{{ asset('images/icons/whatsApp-icon.svg') }}" alt="WhatsApp"></a>
                        <a href="#" aria-label="Поделиться в Facebook"><img src="{{ asset('images/icons/facebook-icon.svg') }}" alt="Facebook"></a>
                        <a href="#" aria-label="Поделиться в Telegram"><img src="{{ asset('images/icons/telegram-icon.svg') }}" alt="Telegram"></a>
                        <a href="#" aria-label="Поделиться в Instagram"><img src="{{ asset('images/icons/instagram-icon.svg') }}" alt="Instagram"></a>
                    </div>
                </section>

                <section class="flex flex-row w-max-[1218px] h-auto">
                    <h2 class="leading-[50px] text-[45px]">Toyota Camry G 2023: Переплетение Совершенства и Инноваций</h2>
                </section>

                <section class="flex flex-col w-max-[945px] lg:w-[945px] gap-4">
                    <p class="text-center text-lg">Обзор Седана Toyota Camry G 2023</p>
                    <figure>
                        <img class="w-auto h-max-[452px] rounded-[10px]" src="{{ asset('images/articles-show-car.png') }}" alt="Toyota Camry G 2023">
                        <figcaption class="sr-only">Toyota Camry G 2023</figcaption>
                    </figure>
                    <div class="flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-lg text-[20px] font-medium">Дизайн и Экстерьер</h3>
                            <p class="text-[18px]">
                                Toyota Camry G 2023 представляет собой яркий образец стиля и элегантности. От выразительной решетки радиатора до динамичных линий кузова - каждая деталь дополнена вниманием к дизайну.
                            </p>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h3 class="text-lg text-[20px] font-medium">Производительность и Технологии</h3>
                            <p class="text-[18px]">
                                Современные технологии и инновации под капотом гарантируют эффективную производительность. Toyota Camry G 2023 оснащена передовыми системами безопасности, интеллектуальной связью и выдающимися характеристиками на дороге.
                            </p>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h3 class="text-lg text-[20px] font-medium">Интерьер и Комфорт</h3>
                            <p class="text-[18px]">
                                Интерьер седана создан для удовлетворения самых высоких стандартов комфорта. Качественные материалы, современные технологии информационно-развлекательной системы и просторный салон делают вождение приятным и расслабляющим.
                            </p>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h3 class="text-lg text-[20px] font-medium">Экологическая Осведомленность</h3>
                            <p class="text-[18px]">
                                Toyota Camry G 2023 предоставляет варианты с эффективным топливосбережением, придерживаясь лучших стандартов по экологии. Будьте готовы к экономии топлива без потери производительности.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col pt-6 gap-4">
                        <p class="text-[22px] lg:w-[847px] w-max-[847px] text-justify font-medium">
                            Хотите приобрести уникальный автомобиль из Китая? Мы поможем вам в этом.
                            Оставьте заявку сейчас и получите доступ к эксклюзивным моделям прямо от производителя.
                        </p>
                        <p class="text-[22px] font-medium">
                            Воплотите свою мечту в реальность с нашим широким выбором автомобилей из Китая.
                        </p>
                        <a href="#" class="flex items-center justify-center w-[315px] h-[50px] bg-[#363B4D] rounded-[10px] p-[10px] text-white text-[21px] font-medium transition-all duration-300 hover:bg-[#2BAD72] hover:shadow-lg hover:scale-105">
                            <img src="{{ asset('images/icons/leave-request.svg') }}" alt="leave-request" class="mr-2 w-6 h-6">
                            Оставить заявку
                        </a>
                    </div>
                </section>
            </div>
        </article>
    </div>
@endsection
