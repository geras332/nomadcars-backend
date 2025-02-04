@extends('layouts.default')

@section('title', 'Главная страница')

@section('content')
    <div class="container mx-auto mt-5 px-5 sm:px-0 relative">
        <div class="hidden justify-center sm:flex">
            <img src="{{ asset('images/hero.png') }}" alt="Hero" class="rounded-3xl w-full">
            <div class="absolute top-5 right-10 text-white flex flex-col items-end text-end">
                <h2 class="text-2xl sm:text-4xl lg:text-7xl font-bold mb-4">Соприкоснитесь с <br/> новым!</h2>
                <a href="#"
                   class="bg-[#FCFCFC] text-black px-4 py-2 sm:px-6 sm:py-3 group mt-2 rounded-xl text-sm sm:text-lg font-medium transition transform hover:opacity-95 hover:shadow-lg active:opacity-95 active:shadow-lg flex items-center gap-2 max-w-[240px]">
                    Смотреть все
                    <img src="{{ asset('images/icons/arrow-circle.svg') }}" alt="Arrow"
                         class="transition-transform transform group-hover:translate-x-1 w-auto">
                </a>
            </div>
        </div>
        <div class="flex justify-between items-center hero-block-bg rounded-2xl pl-2 py-5 sm:hidden">
            <h1 class="text-white text-[18px] text-center text-wrap max-w-[140px]">We export new and used cars to any
                country</h1>
            <img src="{{ asset('images/car.png') }}" alt="Car" class="max-w-[200px]">
        </div>
        <div class="swiper mt-5">
            <div class="swiper-wrapper py-2">
                <div class="swiper-slide rounded-2xl" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/BMW.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl"
                     style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/MERCEDES.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl"
                     style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/TESLA.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl"
                     style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/ZEEKR.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl"
                     style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/BYD.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl"
                     style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/GAC.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl"
                     style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/BENTLEY.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl"
                     style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/AUDI.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl"
                     style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/LEXUS.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl"
                     style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/BRABUS.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl"
                     style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/CHANGAN.png') }}" alt="BMW">
                    </a>
                </div>
            </div>
        </div>
        <div class="hidden xl:block mt-[30px] rounded-[30px] p-[30px]"
             style="box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.15);">
            <div class="grid grid-cols-6 gap-5">
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Mazda</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Mercedes</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">BMW</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">KIA</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Honda</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Toyota</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Audi</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Volkswagen</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Ford</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Chevrolet</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Nissan</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Hyundai</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Lexus</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Subaru</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Volvo</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Porsche</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Jeep</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Land Rover</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Tesla</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Fiat</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Renault</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Peugeot</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Skoda</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Mitsubishi</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Suzuki</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Jaguar</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Mini</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Alfa Romeo</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Infiniti</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Cadillac</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Dodge</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Chrysler</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Buick</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Lincoln</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Acura</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Genesis</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Maserati</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Bentley</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Rolls-Royce</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Lamborghini</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Ferrari</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Aston Martin</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">McLaren</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Bugatti</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Lotus</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Koenigsegg</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Pagani</a>
                </div>
                <div>
                    <a href="#"
                       class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-90 inline-block"
                       style="user-select: none;">Maybach</a>
                </div>

            </div>
        </div>
        <div class="flex flex-col gap-7 mt-[30px] rounded-[30px] p-[30px]"
             style="box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.15);">
            <div class="flex flex-col justify-between gap-[20px] md:flex-row">
                <div class="flex flex-col gap-[15px]">
                    <div x-data="{ open: false, selected: 'Топливо' }" class="relative">
                        <button @click="open = !open"
                                class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                            <span x-text="selected"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform"
                                 :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </button>
                        <ul x-show="open" @click.away="open = false"
                            class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                            <li @click="selected = 'Бензин'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Бензин
                            </li>
                            <li @click="selected = 'Дизель'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Дизель
                            </li>
                            <li @click="selected = 'Электро'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Электро
                            </li>
                            <li @click="selected = 'Гибрид'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Гибрид
                            </li>
                        </ul>
                    </div>

                    <div class="flex items-center gap-0">
                        <div class="w-1/2">
                            <input type="number"
                                   class="outline-none text-left border border-[#0000004D] rounded-l-lg bg-[#FCFCFC] py-2 px-4 w-full box-border"
                                   placeholder="Объем от, л">
                        </div>
                        <div class="w-1/2">
                            <input type="number"
                                   class="outline-none text-left border border-[#0000004D] rounded-r-lg bg-[#FCFCFC] py-2 px-4 w-full box-border"
                                   placeholder="До, л">
                        </div>
                    </div>

                    <div x-data="{ open: false, selected: 'Кузов' }" class="relative">
                        <button @click="open = !open"
                                class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                            <span x-text="selected"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform"
                                 :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </button>
                        <ul x-show="open" @click.away="open = false"
                            class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                            <li @click="selected = 'Седан'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Седан
                            </li>
                            <li @click="selected = 'Хэтчбек'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Хэтчбек
                            </li>
                            <li @click="selected = 'Универсал'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Универсал
                            </li>
                            <li @click="selected = 'Кроссовер'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Кроссовер
                            </li>
                            <li @click="selected = 'Внедорожник'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Внедорожник
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col gap-[15px]">
                    <div x-data="{ open: false, selected: 'Привод' }" class="relative">
                        <button @click="open = !open"
                                class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                            <span x-text="selected"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform"
                                 :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </button>
                        <ul x-show="open" @click.away="open = false"
                            class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                            <li @click="selected = 'Передний'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Передний
                            </li>
                            <li @click="selected = 'Задний'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Задний
                            </li>
                            <li @click="selected = 'Полный'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Полный
                            </li>
                        </ul>
                    </div>

                    <div class="flex items-center gap-0">
                        <div class="w-1/2">
                            <input type="number"
                                   class="outline-none text-left border border-[#0000004D] rounded-l-lg bg-[#FCFCFC] py-2 px-4 w-full box-border"
                                   placeholder="Мощность от, л.с.">
                        </div>
                        <div class="w-1/2">
                            <input type="number"
                                   class="outline-none text-left border border-[#0000004D] rounded-r-lg bg-[#FCFCFC] py-2 px-4 w-full box-border"
                                   placeholder="До, л.с.">
                        </div>
                    </div>

                    <div x-data="{ open: false, selected: 'Коробка' }" class="relative">
                        <button @click="open = !open"
                                class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                            <span x-text="selected"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform"
                                 :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </button>
                        <ul x-show="open" @click.away="open = false"
                            class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                            <li @click="selected = 'Механика'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Механика
                            </li>
                            <li @click="selected = 'Автомат'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Автомат
                            </li>
                            <li @click="selected = 'Робот'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Робот
                            </li>
                            <li @click="selected = 'Вариатор'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Вариатор
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col gap-[15px]">
                    <div x-data="{ open: false, selected: 'Руль' }" class="relative">
                        <button @click="open = !open"
                                class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                            <span x-text="selected"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform"
                                 :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </button>
                        <ul x-show="open" @click.away="open = false"
                            class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                            <li @click="selected = 'Левый'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Левый
                            </li>
                            <li @click="selected = 'Правый'; open = false"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Правый
                            </li>
                        </ul>
                    </div>

                    <div class="flex items-center gap-0">
                        <div class="w-1/2">
                            <input type="number"
                                   class="outline-none text-left border border-[#0000004D] rounded-l-lg bg-[#FCFCFC] py-2 px-4 w-full box-border"
                                   placeholder="Год от">
                        </div>
                        <div class="w-1/2">
                            <input type="number"
                                   class="outline-none text-left border border-[#0000004D] rounded-r-lg bg-[#FCFCFC] py-2 px-4 w-full box-border"
                                   placeholder="До">
                        </div>
                    </div>

                    <div class="flex items-center gap-0">
                        <div class="w-1/2">
                            <input type="number"
                                   class="outline-none text-left border border-[#0000004D] rounded-l-lg bg-[#FCFCFC] py-2 px-4 w-full box-border"
                                   placeholder="Цена от">
                        </div>
                        <div class="w-1/2">
                            <input type="number"
                                   class="outline-none text-left border border-[#0000004D] rounded-r-lg bg-[#FCFCFC] py-2 px-4 w-full box-border"
                                   placeholder="До">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row sm:justify-end gap-[20px]">
                <button class="flex justify-center items-center gap-1 danger-text-color danger-btn-border font-medium rounded-xl px-8 py-2 transition-transform duration-300 transform hover:scale-95">
                    Сбросить
                    <span class="text-xl">&times;</span>
                </button>
                <button class="success-btn-bg text-white font-medium rounded-xl px-8 py-2 transition-transform duration-300 transform hover:scale-95">
                    Показать предложения
                </button>
            </div>
        </div>
        <div class="flex justify-between items-center mt-[40px]">
            <div x-data="{ open: false, selected: 'Сортировка' }" class="relative">
                <button @click="open = !open"
                        class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                    <span x-text="selected"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform"
                         :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 9l6 6 6-6"></path>
                    </svg>
                </button>
                <ul x-show="open" @click.away="open = false"
                    class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                    <li @click="selected = 'По цене'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">
                        По цене
                    </li>
                    <li @click="selected = 'По дате'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">
                        По дате
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-[8px]">
                <div class="w-[40px] h-[40px] flex justify-center items-center rounded-[10px] cursor-pointer"
                     style="box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.15);">
                    <img src="{{ asset('images/icons/grid-view.svg') }}" alt="Grid View">
                </div>
                <div class="w-[40px] h-[40px] flex justify-center items-center rounded-[10px] cursor-pointer"
                     style="box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.15);">
                    <img src="{{ asset('images/icons/list-view.svg') }}" alt="List View">
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 gap-6 mt-[35px] w-full">
            <article class="flex flex-col rounded-[20px] gap-3 p-3" style="box-shadow: 0 0 10px 1px #00000014;"
                     itemscope itemtype="http://schema.org/Product">
                <div class="rounded-[20px]">
                    <img src="{{ asset('images/product.png') }}" alt="Product Image - Title"
                         class="overflow-hidden w-full h-full" itemprop="image">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h2 itemprop="name" class="text-primary-color text-xl font-medium">Title</h2>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="description">3,0 л/286 л.с/Дизель</p>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="vehicleTransmission">Автомат</p>
                    <div class="hidden sm:flex justify-between">
                        <span class="text-[#6B6B6B]" itemprop="mileageFromOdometer">Пробег: 308 000 км</span>
                        <span class="text-[#6B6B6B]" itemprop="productionDate">Год: 2022</span>
                    </div>
                    <button class="success-btn-bg text-white font-medium rounded-xl px-8 py-2 transition-transform duration-300 transform hover:scale-95"
                            itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <span itemprop="priceCurrency" content="USD">$</span>
                        <span itemprop="price">60 000</span>
                    </button>
                </div>
            </article>
            <article class="flex flex-col rounded-[20px] gap-3 p-3" style="box-shadow: 0 0 10px 1px #00000014;"
                     itemscope itemtype="http://schema.org/Product">
                <div class="rounded-[20px]">
                    <img src="{{ asset('images/product.png') }}" alt="Product Image - Title"
                         class="overflow-hidden w-full h-full" itemprop="image">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h2 itemprop="name" class="text-primary-color text-xl font-medium">Title</h2>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="description">3,0 л/286 л.с/Дизель</p>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="vehicleTransmission">Автомат</p>
                    <div class="hidden sm:flex justify-between">
                        <span class="text-[#6B6B6B]" itemprop="mileageFromOdometer">Пробег: 308 000 км</span>
                        <span class="text-[#6B6B6B]" itemprop="productionDate">Год: 2022</span>
                    </div>
                    <button class="success-btn-bg text-white font-medium rounded-xl px-8 py-2 transition-transform duration-300 transform hover:scale-95"
                            itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <span itemprop="priceCurrency" content="USD">$</span>
                        <span itemprop="price">60 000</span>
                    </button>
                </div>
            </article>
            <article class="flex flex-col rounded-[20px] gap-3 p-3" style="box-shadow: 0 0 10px 1px #00000014;"
                     itemscope itemtype="http://schema.org/Product">
                <div class="rounded-[20px]">
                    <img src="{{ asset('images/product.png') }}" alt="Product Image - Title"
                         class="overflow-hidden w-full h-full" itemprop="image">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h2 itemprop="name" class="text-primary-color text-xl font-medium">Title</h2>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="description">3,0 л/286 л.с/Дизель</p>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="vehicleTransmission">Автомат</p>
                    <div class="hidden sm:flex justify-between">
                        <span class="text-[#6B6B6B]" itemprop="mileageFromOdometer">Пробег: 308 000 км</span>
                        <span class="text-[#6B6B6B]" itemprop="productionDate">Год: 2022</span>
                    </div>
                    <button class="success-btn-bg text-white font-medium rounded-xl px-8 py-2 transition-transform duration-300 transform hover:scale-95"
                            itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <span itemprop="priceCurrency" content="USD">$</span>
                        <span itemprop="price">60 000</span>
                    </button>
                </div>
            </article>
            <article class="flex flex-col rounded-[20px] gap-3 p-3" style="box-shadow: 0 0 10px 1px #00000014;"
                     itemscope itemtype="http://schema.org/Product">
                <div class="rounded-[20px]">
                    <img src="{{ asset('images/product.png') }}" alt="Product Image - Title"
                         class="overflow-hidden w-full h-full" itemprop="image">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h2 itemprop="name" class="text-primary-color text-xl font-medium">Title</h2>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="description">3,0 л/286 л.с/Дизель</p>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="vehicleTransmission">Автомат</p>
                    <div class="hidden sm:flex justify-between">
                        <span class="text-[#6B6B6B]" itemprop="mileageFromOdometer">Пробег: 308 000 км</span>
                        <span class="text-[#6B6B6B]" itemprop="productionDate">Год: 2022</span>
                    </div>
                    <button class="success-btn-bg text-white font-medium rounded-xl px-8 py-2 transition-transform duration-300 transform hover:scale-95"
                            itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <span itemprop="priceCurrency" content="USD">$</span>
                        <span itemprop="price">60 000</span>
                    </button>
                </div>
            </article>
            <article class="flex flex-col rounded-[20px] gap-3 p-3" style="box-shadow: 0 0 10px 1px #00000014;"
                     itemscope itemtype="http://schema.org/Product">
                <div class="rounded-[20px]">
                    <img src="{{ asset('images/product.png') }}" alt="Product Image - Title"
                         class="overflow-hidden w-full h-full" itemprop="image">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h2 itemprop="name" class="text-primary-color text-xl font-medium">Title</h2>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="description">3,0 л/286 л.с/Дизель</p>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="vehicleTransmission">Автомат</p>
                    <div class="hidden sm:flex justify-between">
                        <span class="text-[#6B6B6B]" itemprop="mileageFromOdometer">Пробег: 308 000 км</span>
                        <span class="text-[#6B6B6B]" itemprop="productionDate">Год: 2022</span>
                    </div>
                    <button class="success-btn-bg text-white font-medium rounded-xl px-8 py-2 transition-transform duration-300 transform hover:scale-95"
                            itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <span itemprop="priceCurrency" content="USD">$</span>
                        <span itemprop="price">60 000</span>
                    </button>
                </div>
            </article>
            <article class="flex flex-col rounded-[20px] gap-3 p-3" style="box-shadow: 0 0 10px 1px #00000014;"
                     itemscope itemtype="http://schema.org/Product">
                <div class="rounded-[20px]">
                    <img src="{{ asset('images/product.png') }}" alt="Product Image - Title"
                         class="overflow-hidden w-full h-full" itemprop="image">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h2 itemprop="name" class="text-primary-color text-xl font-medium">Title</h2>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="description">3,0 л/286 л.с/Дизель</p>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="vehicleTransmission">Автомат</p>
                    <div class="hidden sm:flex justify-between">
                        <span class="text-[#6B6B6B]" itemprop="mileageFromOdometer">Пробег: 308 000 км</span>
                        <span class="text-[#6B6B6B]" itemprop="productionDate">Год: 2022</span>
                    </div>
                    <button class="success-btn-bg text-white font-medium rounded-xl px-8 py-2 transition-transform duration-300 transform hover:scale-95"
                            itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <span itemprop="priceCurrency" content="USD">$</span>
                        <span itemprop="price">60 000</span>
                    </button>
                </div>
            </article>
            <article class="flex flex-col rounded-[20px] gap-3 p-3" style="box-shadow: 0 0 10px 1px #00000014;"
                     itemscope itemtype="http://schema.org/Product">
                <div class="rounded-[20px]">
                    <img src="{{ asset('images/product.png') }}" alt="Product Image - Title"
                         class="overflow-hidden w-full h-full" itemprop="image">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <h2 itemprop="name" class="text-primary-color text-xl font-medium">Title</h2>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="description">3,0 л/286 л.с/Дизель</p>
                    <p class="text-[#6B6B6B] text-xs sm:text-sm" itemprop="vehicleTransmission">Автомат</p>
                    <div class="hidden sm:flex justify-between">
                        <span class="text-[#6B6B6B]" itemprop="mileageFromOdometer">Пробег: 308 000 км</span>
                        <span class="text-[#6B6B6B]" itemprop="productionDate">Год: 2022</span>
                    </div>
                    <button class="success-btn-bg text-white font-medium rounded-xl px-8 py-2 transition-transform duration-300 transform hover:scale-95"
                            itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <span itemprop="priceCurrency" content="USD">$</span>
                        <span itemprop="price">60 000</span>
                    </button>
                </div>
            </article>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 4,
            spaceBetween: 15,
            direction: 'horizontal',
            loop: true,
            breakpoints: {
                450: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 6,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 7,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 10,
                    spaceBetween: 20,
                },
            }
        });
    </script>
@endpush
