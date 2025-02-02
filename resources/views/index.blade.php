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
            <h1 class="text-white text-[18px] text-center text-wrap max-w-[140px]">We export new and used cars to any country</h1>
            <img src="{{ asset('images/car.png') }}" alt="Car" class="max-w-[200px]">
        </div>
        <div class="swiper mt-5">
            <div class="swiper-wrapper py-2">
                <div class="swiper-slide rounded-2xl max-w-[88px] max-h-[88px] sm:max-w-[120px] sm:max-h-[120px]" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/BMW.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl max-w-[88px] max-h-[88px] sm:max-w-[120px] sm:max-h-[120px]" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/MERCEDES.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl max-w-[88px] max-h-[88px] sm:max-w-[120px] sm:max-h-[120px]" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/TESLA.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl max-w-[88px] max-h-[88px] sm:max-w-[120px] sm:max-h-[120px]" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/ZEEKR.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl max-w-[88px] max-h-[88px] sm:max-w-[120px] sm:max-h-[120px]" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/BYD.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl max-w-[88px] max-h-[88px] sm:max-w-[120px] sm:max-h-[120px]" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/GAC.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl max-w-[88px] max-h-[88px] sm:max-w-[120px] sm:max-h-[120px]" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/BENTLEY.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl max-w-[88px] max-h-[88px] sm:max-w-[120px] sm:max-h-[120px]" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/AUDI.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl max-w-[88px] max-h-[88px] sm:max-w-[120px] sm:max-h-[120px]" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/LEXUS.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl max-w-[88px] max-h-[88px] sm:max-w-[120px] sm:max-h-[120px]" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/BRABUS.png') }}" alt="BMW">
                    </a>
                </div>
                <div class="swiper-slide rounded-2xl sm:rounded-3xl max-w-[88px] max-h-[88px] sm:max-w-[120px] sm:max-h-[120px]" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.1);">
                    <a href="#">
                        <img src="{{ asset('images/logos/CHANGAN.png') }}" alt="BMW">
                    </a>
                </div>
            </div>
        </div>
        <div class="hidden xl:block mt-[30px] rounded-[30px] p-[30px]" style="box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.15);">
            <div class="flex justify-between items-center">
                <div class="flex flex-col gap-5">
                    <a href="#" class="text-primary-color text-xl">
                        Mazda
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Mercedes
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        BMW
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        KIA
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Honda
                    </a>
                </div>
                <div class="flex flex-col gap-5">
                    <a href="#" class="text-primary-color text-xl">
                        Mazda
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Mercedes
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        BMW
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        KIA
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Honda
                    </a>
                </div>
                <div class="flex flex-col gap-5">
                    <a href="#" class="text-primary-color text-xl">
                        Mazda
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Mercedes
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        BMW
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        KIA
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Honda
                    </a>
                </div>
                <div class="flex flex-col gap-5">
                    <a href="#" class="text-primary-color text-xl">
                        Mazda
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Mercedes
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        BMW
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        KIA
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Honda
                    </a>
                </div>
                <div class="flex flex-col gap-5">
                    <a href="#" class="text-primary-color text-xl">
                        Mazda
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Mercedes
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        BMW
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        KIA
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Honda
                    </a>
                </div>
                <div class="flex flex-col gap-5">
                    <a href="#" class="text-primary-color text-xl">
                        Mazda
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Mercedes
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        BMW
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        KIA
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Honda
                    </a>
                </div>
                <div class="flex flex-col gap-5">
                    <a href="#" class="text-primary-color text-xl">
                        Mazda
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Mercedes
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        BMW
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        KIA
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Honda
                    </a>
                </div>
                <div class="flex flex-col gap-5">
                    <a href="#" class="text-primary-color text-xl">
                        Mazda
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Mercedes
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        BMW
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        KIA
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Honda
                    </a>
                </div>
                <div class="flex flex-col gap-5">
                    <a href="#" class="text-primary-color text-xl">
                        Mazda
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Mercedes
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        BMW
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        KIA
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Honda
                    </a>
                </div>
                <div class="flex flex-col gap-5">
                    <a href="#" class="text-primary-color text-xl">
                        Mazda
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Mercedes
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        BMW
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        KIA
                    </a>
                    <a href="#" class="text-primary-color text-xl">
                        Honda
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-7 mt-[30px] rounded-[30px] p-[30px]" style="box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.15);">
            <div class="flex justify-between items-start">
                <div class="flex flex-col gap-[15px]">
                    <div class="w-[300px] xl:w-[400px]">
                        <div x-data="{ open: false, selected: 'Марка' }" class="relative">
                            <button @click="open = !open" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open" @click.away="open = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                                <li @click="selected = 'BMW'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">BMW</li>
                                <li @click="selected = 'MERCEDES'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">MERCEDES</li>
                                <li @click="selected = 'LEXUS'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">LEXUS</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex items-center gap-5">
                        <div x-data="{ open1: false, selected1: 'Кузов' }" class="relative w-1/2">
                            <button @click="open1 = !open1" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected1"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open1" @click.away="open1 = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-[10px] shadow-lg z-10">
                                <li @click="selected1 = 'Седан'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Седан</li>
                                <li @click="selected1 = 'Хэтчбек'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Хэтчбек</li>
                                <li @click="selected1 = 'Кроссовер'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Кроссовер</li>
                            </ul>
                        </div>

                        <div x-data="{ open2: false, selected2: 'Коробка' }" class="relative w-1/2">
                            <button @click="open2 = !open2" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected2"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open2" @click.away="open2 = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-[10px] shadow-lg z-10">
                                <li @click="selected2 = 'Механика'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Механика</li>
                                <li @click="selected2 = 'Автомат'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Автомат</li>
                                <li @click="selected2 = 'Робот'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Робот</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex items-center gap-0">
                        <div x-data="{ open1: false, selected1: 'Год от' }" class="relative w-1/2">
                            <button @click="open1 = !open1" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-l-lg bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected1"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open1" @click.away="open1 = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-[10px] shadow-lg z-10">
                                <li @click="selected1 = '2010'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2010</li>
                                <li @click="selected1 = '2015'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2015</li>
                                <li @click="selected1 = '2020'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2020</li>
                            </ul>
                        </div>

                        <div x-data="{ open2: false, selected2: 'до' }" class="relative w-1/2">
                            <button @click="open2 = !open2" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-r-lg bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected2"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open2" @click.away="open2 = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-[10px] shadow-lg z-10">
                                <li @click="selected2 = '2022'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2022</li>
                                <li @click="selected2 = '2023'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2023</li>
                                <li @click="selected2 = '2024'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2024</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-[15px]">
                    <div class="w-[300px] xl:w-[400px]">
                        <div x-data="{ open: false, selected: 'Модель' }" class="relative">
                            <button @click="open = !open" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open" @click.away="open = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                                <li @click="selected = 'BMW'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">BMW</li>
                                <li @click="selected = 'MERCEDES'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">MERCEDES</li>
                                <li @click="selected = 'LEXUS'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">LEXUS</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex items-center gap-5">
                        <div x-data="{ open1: false, selected1: 'Двигатель' }" class="relative w-1/2">
                            <button @click="open1 = !open1" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected1"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open1" @click.away="open1 = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-[10px] shadow-lg z-10">
                                <li @click="selected1 = 'Седан'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Седан</li>
                                <li @click="selected1 = 'Хэтчбек'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Хэтчбек</li>
                                <li @click="selected1 = 'Кроссовер'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Кроссовер</li>
                            </ul>
                        </div>

                        <div x-data="{ open2: false, selected2: 'Привод' }" class="relative w-1/2">
                            <button @click="open2 = !open2" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected2"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open2" @click.away="open2 = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-[10px] shadow-lg z-10">
                                <li @click="selected2 = 'Механика'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Механика</li>
                                <li @click="selected2 = 'Автомат'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Автомат</li>
                                <li @click="selected2 = 'Робот'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Робот</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex items-center gap-0">
                        <div x-data="{ open1: false, selected1: 'Пробег от' }" class="relative w-1/2">
                            <button @click="open1 = !open1" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-l-lg bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected1"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open1" @click.away="open1 = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-[10px] shadow-lg z-10">
                                <li @click="selected1 = '2010'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2010</li>
                                <li @click="selected1 = '2015'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2015</li>
                                <li @click="selected1 = '2020'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2020</li>
                            </ul>
                        </div>

                        <div x-data="{ open2: false, selected2: 'до' }" class="relative w-1/2">
                            <button @click="open2 = !open2" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-r-lg bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected2"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open2" @click.away="open2 = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-[10px] shadow-lg z-10">
                                <li @click="selected2 = '2022'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2022</li>
                                <li @click="selected2 = '2023'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2023</li>
                                <li @click="selected2 = '2024'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2024</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-[15px]">
                    <div class="w-[300px] xl:w-[400px]">
                        <div x-data="{ open: false, selected: 'Поколение' }" class="relative">
                            <button @click="open = !open" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open" @click.away="open = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                                <li @click="selected = 'BMW'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">BMW</li>
                                <li @click="selected = 'MERCEDES'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">MERCEDES</li>
                                <li @click="selected = 'LEXUS'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">LEXUS</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex items-center gap-5">
                        <div x-data="{ open1: false, selected1: 'Объем от' }" class="relative w-1/2">
                            <button @click="open1 = !open1" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected1"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open1" @click.away="open1 = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-[10px] shadow-lg z-10">
                                <li @click="selected1 = 'Седан'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Седан</li>
                                <li @click="selected1 = 'Хэтчбек'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Хэтчбек</li>
                                <li @click="selected1 = 'Кроссовер'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Кроссовер</li>
                            </ul>
                        </div>

                        <div x-data="{ open2: false, selected2: 'до' }" class="relative w-1/2">
                            <button @click="open2 = !open2" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected2"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open2" @click.away="open2 = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-[10px] shadow-lg z-10">
                                <li @click="selected2 = 'Механика'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Механика</li>
                                <li @click="selected2 = 'Автомат'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Автомат</li>
                                <li @click="selected2 = 'Робот'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Робот</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex items-center gap-0">
                        <div x-data="{ open1: false, selected1: 'Цена от' }" class="relative w-1/2">
                            <button @click="open1 = !open1" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-l-lg bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected1"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open1" @click.away="open1 = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-[10px] shadow-lg z-10">
                                <li @click="selected1 = '2010'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2010</li>
                                <li @click="selected1 = '2015'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2015</li>
                                <li @click="selected1 = '2020'; open1 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2020</li>
                            </ul>
                        </div>

                        <div x-data="{ open2: false, selected2: 'до' }" class="relative w-1/2">
                            <button @click="open2 = !open2" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-r-lg bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                                <span x-text="selected2"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <ul x-show="open2" @click.away="open2 = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-[10px] shadow-lg z-10">
                                <li @click="selected2 = '2022'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2022</li>
                                <li @click="selected2 = '2023'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2023</li>
                                <li @click="selected2 = '2024'; open2 = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">2024</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end gap-[20px]">
                <button class="danger-text-color danger-btn-border font-medium rounded-xl px-8 py-2 transition-transform duration-300 transform hover:scale-95">Сбросить</button>
                <button class="success-btn-bg text-white font-medium rounded-xl px-8 py-2 transition-transform duration-300 transform hover:scale-95">Показать предложения</button>
            </div>
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
