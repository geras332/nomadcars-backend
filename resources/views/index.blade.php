@extends('layouts.default')

@section('title', 'Главная страница')

@section('content')
    <main class="container mx-auto mt-5 px-6 sm:px-0 relative">
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
        <div class="flex justify-between items-center hero-block-bg rounded-2xl pl-2 py-5 sm:hidden">
            <h1 class="text-white text-[18px] text-center text-wrap max-w-[140px]">We export new and used cars to any country</h1>
            <img src="{{ asset('images/car.png') }}" alt="Car" class="max-w-[200px]">
        </div>
        <div class="mt-5">
            <div class="swiper">
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
    </main>
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
