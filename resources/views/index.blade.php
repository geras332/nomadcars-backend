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
            <div class="grid grid-cols-6 gap-5">
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Mazda</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Mercedes</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">BMW</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">KIA</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Honda</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Toyota</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Audi</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Volkswagen</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Ford</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Chevrolet</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Nissan</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Hyundai</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Lexus</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Subaru</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Volvo</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Porsche</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Jeep</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Land Rover</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Tesla</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Fiat</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Renault</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Peugeot</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Skoda</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Mitsubishi</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Suzuki</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Jaguar</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Mini</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Alfa Romeo</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Infiniti</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Cadillac</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Dodge</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Chrysler</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Buick</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Lincoln</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Acura</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Genesis</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Maserati</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Bentley</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Rolls-Royce</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Lamborghini</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Ferrari</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Aston Martin</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">McLaren</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Bugatti</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Lotus</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Koenigsegg</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Pagani</a>
                <a href="#" class="text-primary-color text-xl transition-transform duration-300 transform hover:scale-95">Maybach</a>
            </div>
        </div>
        <div class="flex flex-col gap-7 mt-[30px] rounded-[30px] p-[30px]" style="box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.15);">
            <div class="flex justify-between gap-[20px]">
                <div class="flex flex-col gap-[15px]">
                    <div x-data="{ open: false, selected: 'Топливо' }" class="relative">
                        <button @click="open = !open" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                            <span x-text="selected"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </button>
                        <ul x-show="open" @click.away="open = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                            <li @click="selected = 'Бензин'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Бензин</li>
                            <li @click="selected = 'Дизель'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Дизель</li>
                            <li @click="selected = 'Электро'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Электро</li>
                            <li @click="selected = 'Гибрид'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Гибрид</li>
                        </ul>
                    </div>

                    <div class="flex items-center gap-0">
                        <div class="w-1/2">
                            <input type="number" class="outline-none text-left border border-[#0000004D] rounded-l-lg bg-[#FCFCFC] py-2 px-4 w-full box-border" placeholder="Объем от, л">
                        </div>
                        <div class="w-1/2">
                            <input type="number" class="outline-none text-left border border-[#0000004D] rounded-r-lg bg-[#FCFCFC] py-2 px-4 w-full box-border" placeholder="До, л">
                        </div>
                    </div>

                    <div x-data="{ open: false, selected: 'Кузов' }" class="relative">
                        <button @click="open = !open" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                            <span x-text="selected"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </button>
                        <ul x-show="open" @click.away="open = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                            <li @click="selected = 'Седан'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Седан</li>
                            <li @click="selected = 'Хэтчбек'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Хэтчбек</li>
                            <li @click="selected = 'Универсал'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Универсал</li>
                            <li @click="selected = 'Кроссовер'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Кроссовер</li>
                            <li @click="selected = 'Внедорожник'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Внедорожник</li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col gap-[15px]">
                    <div x-data="{ open: false, selected: 'Привод' }" class="relative">
                        <button @click="open = !open" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                            <span x-text="selected"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </button>
                        <ul x-show="open" @click.away="open = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                            <li @click="selected = 'Передний'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Передний</li>
                            <li @click="selected = 'Задний'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Задний</li>
                            <li @click="selected = 'Полный'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Полный</li>
                        </ul>
                    </div>

                    <div class="flex items-center gap-0">
                        <div class="w-1/2">
                            <input type="number" class="outline-none text-left border border-[#0000004D] rounded-l-lg bg-[#FCFCFC] py-2 px-4 w-full box-border" placeholder="Мощность от, л.с.">
                        </div>
                        <div class="w-1/2">
                            <input type="number" class="outline-none text-left border border-[#0000004D] rounded-r-lg bg-[#FCFCFC] py-2 px-4 w-full box-border" placeholder="До, л.с.">
                        </div>
                    </div>

                    <div x-data="{ open: false, selected: 'Коробка' }" class="relative">
                        <button @click="open = !open" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                            <span x-text="selected"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </button>
                        <ul x-show="open" @click.away="open = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                            <li @click="selected = 'Механика'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Механика</li>
                            <li @click="selected = 'Автомат'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Автомат</li>
                            <li @click="selected = 'Робот'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Робот</li>
                            <li @click="selected = 'Вариатор'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Вариатор</li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col gap-[15px]">
                    <div x-data="{ open: false, selected: 'Руль' }" class="relative">
                        <button @click="open = !open" class="w-full px-[15px] py-[10px] text-left border border-[#0000004D] rounded-[10px] bg-[#FCFCFC] shadow-sm focus:outline-none flex items-center justify-between">
                            <span x-text="selected"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 transform transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </button>
                        <ul x-show="open" @click.away="open = false" class="absolute left-0 mt-1 w-full bg-[#FCFCFC] border rounded-xl shadow-lg z-10">
                            <li @click="selected = 'Левый'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Левый</li>
                            <li @click="selected = 'Правый'; open = false" class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Правый</li>
                        </ul>
                    </div>

                    <div class="flex items-center gap-0">
                        <div class="w-1/2">
                            <input type="number" class="outline-none text-left border border-[#0000004D] rounded-l-lg bg-[#FCFCFC] py-2 px-4 w-full box-border" placeholder="Год от">
                        </div>
                        <div class="w-1/2">
                            <input type="number" class="outline-none text-left border border-[#0000004D] rounded-r-lg bg-[#FCFCFC] py-2 px-4 w-full box-border" placeholder="До">
                        </div>
                    </div>

                    <div class="flex items-center gap-0">
                        <div class="w-1/2">
                            <input type="number" class="outline-none text-left border border-[#0000004D] rounded-l-lg bg-[#FCFCFC] py-2 px-4 w-full box-border" placeholder="Цена от">
                        </div>
                        <div class="w-1/2">
                            <input type="number" class="outline-none text-left border border-[#0000004D] rounded-r-lg bg-[#FCFCFC] py-2 px-4 w-full box-border" placeholder="До">
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
