@extends('layouts.default')

@section('title', 'Новости')

@section('content')
    <div class="container mx-auto mt-15 px-5 sm:px-0 relative">
        <div class="relative hidden lg:flex text-gray-500 font-Gilroy space-x-2">
            <a href="#" class="hover:text-gray-700">Главная</a>
            <span>/</span>
            <a href="#" class="hover:text-gray-700">Новости</a>
        </div>


        <div class="flex items-start mt-10">
            <div class="flex-1 h-auto md:mr-[10px] md:mt-4">
                <p class="uppercase text-xl font-bold font-Gilroy border-b-2 border-b-gray-500 pb-2">Новости</p>

                <div class="container pt-8 flex flex-col gap-8">
                    <div class="container h-auto w-auto flex lg:flex-row gap-4 flex-col">
                        <div class="lg:w-[250px] w-auto lg:h-[200px] h-[217px] overflow-hidden rounded-[15px]">
                            <img src="{{ asset('images/articles-car.png') }}" alt="articles-car" class="w-full h-full object-cover transform scale-120 lg:scale-150">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-1">
                                <span class="text-[18px] text-gray-800 font-bold leading-relaxed max-w-[550px] ">
                                    Toyota Camry G 2023: Изысканность Современного Дизайна и Новейшие Технологии в Каждом Километре
                                </span>
                                <div class="flex items-center space-x-2 text-gray-700">
                                    <img src="{{ asset('images/user-icon.svg') }}" alt="User Icon" class="w-5 h-5">
                                    <p class="text-[#292929] font-Gilroy">Tesla</p>
                                    <span class="text-gray-400">/</span>
                                    <img src="{{ asset('images/date-icon.svg') }}" alt="Date Icon" class="w-5 h-5">
                                    <p class="text-[#292929] font-Gilroy">24.05.09</p>
                                </div>
                            </div>
                            <div>
                                <span class="font-Gilroy text-[14px] text-[#292929]">
                                    Исследуйте Комфорт и Превосходство в Toyota Camry G 2023...
                                </span>
                            </div>
                            <div class="mt-2">
                                <a class="text-[#2BAD72] font-Gilroy text-[18px]" href="#">Читать далее...</a>
                            </div>
                        </div>
                    </div>




                </div>
                <div class="container pt-8 flex flex-col gap-8">
                    <div class="container h-auto w-auto flex lg:flex-row gap-4 flex-col">
                        <div class="lg:w-[250px] w-auto lg:h-[200px] h-[217px] overflow-hidden rounded-[15px]">
                            <img src="{{ asset('images/articles-car.png') }}" alt="articles-car" class="w-full h-full object-cover transform scale-120 lg:scale-150">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-1">
                                <span class="text-[18px] text-gray-800 font-bold leading-relaxed max-w-[550px] ">
                                    Toyota Camry G 2023: Изысканность Современного Дизайна и Новейшие Технологии в Каждом Километре
                                </span>
                                <div class="flex items-center space-x-2 text-gray-700">
                                    <img src="{{ asset('images/user-icon.svg') }}" alt="User Icon" class="w-5 h-5">
                                    <p class="text-[#292929] font-Gilroy">Tesla</p>
                                    <span class="text-gray-400">/</span>
                                    <img src="{{ asset('images/date-icon.svg') }}" alt="Date Icon" class="w-5 h-5">
                                    <p class="text-[#292929] font-Gilroy">24.05.09</p>
                                </div>
                            </div>
                            <div>
                                <span class="font-Gilroy text-[14px] text-[#292929]">
                                    Исследуйте Комфорт и Превосходство в Toyota Camry G 2023...
                                </span>
                            </div>
                            <div class="mt-2">
                                <a class="text-[#2BAD72] font-Gilroy text-[18px]" href="#">Читать далее...</a>
                            </div>
                        </div>
                    </div>




                </div>
                <div class="container pt-8 flex flex-col gap-8">
                    <div class="container h-auto w-auto flex lg:flex-row gap-4 flex-col">
                        <div class="lg:w-[250px] w-auto lg:h-[200px] h-[217px] overflow-hidden rounded-[15px]">
                            <img src="{{ asset('images/articles-car.png') }}" alt="articles-car" class="w-full h-full object-cover transform scale-120 lg:scale-150">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-1">
                                <span class="text-[18px] text-gray-800 font-bold leading-relaxed max-w-[550px] ">
                                    Toyota Camry G 2023: Изысканность Современного Дизайна и Новейшие Технологии в Каждом Километре
                                </span>
                                <div class="flex items-center space-x-2 text-gray-700">
                                    <img src="{{ asset('images/user-icon.svg') }}" alt="User Icon" class="w-5 h-5">
                                    <p class="text-[#292929] font-Gilroy">Tesla</p>
                                    <span class="text-gray-400">/</span>
                                    <img src="{{ asset('images/date-icon.svg') }}" alt="Date Icon" class="w-5 h-5">
                                    <p class="text-[#292929] font-Gilroy">24.05.09</p>
                                </div>
                            </div>
                            <div>
                                <span class="font-Gilroy text-[14px] text-[#292929]">
                                    Исследуйте Комфорт и Превосходство в Toyota Camry G 2023...
                                </span>
                            </div>
                            <div class="mt-2">
                                <a class="text-[#2BAD72] font-Gilroy text-[18px]" href="#">Читать далее...</a>
                            </div>
                        </div>
                    </div>




                </div>
                <div class="container pt-8 flex flex-col gap-8">
                    <div class="container h-auto w-auto flex lg:flex-row gap-4 flex-col">
                        <div class="lg:w-[250px] w-auto lg:h-[200px] h-[217px] overflow-hidden rounded-[15px]">
                            <img src="{{ asset('images/articles-car.png') }}" alt="articles-car" class="w-full h-full object-cover transform scale-120 lg:scale-150">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-1">
                                <span class="text-[18px] text-gray-800 font-bold leading-relaxed max-w-[550px] ">
                                    Toyota Camry G 2023: Изысканность Современного Дизайна и Новейшие Технологии в Каждом Километре
                                </span>
                                <div class="flex items-center space-x-2 text-gray-700">
                                    <img src="{{ asset('images/user-icon.svg') }}" alt="User Icon" class="w-5 h-5">
                                    <p class="text-[#292929] font-Gilroy">Tesla</p>
                                    <span class="text-gray-400">/</span>
                                    <img src="{{ asset('images/date-icon.svg') }}" alt="Date Icon" class="w-5 h-5">
                                    <p class="text-[#292929] font-Gilroy">24.05.09</p>
                                </div>
                            </div>
                            <div>
                                <span class="font-Gilroy text-[14px] text-[#292929]">
                                    Исследуйте Комфорт и Превосходство в Toyota Camry G 2023...
                                </span>
                            </div>
                            <div class="mt-2">
                                <a class="text-[#2BAD72] font-Gilroy text-[18px]" href="#">Читать далее...</a>
                            </div>
                        </div>
                    </div>




                </div>
                <div class="container pt-8 flex flex-col gap-8">
                    <div class="container h-auto w-auto flex lg:flex-row gap-4 flex-col">
                        <div class="lg:w-[250px] w-auto lg:h-[200px] h-[217px] overflow-hidden rounded-[15px]">
                            <img src="{{ asset('images/articles-car.png') }}" alt="articles-car" class="w-full h-full object-cover transform scale-120 lg:scale-150">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col gap-1">
                                <span class="text-[18px] text-gray-800 font-bold leading-relaxed max-w-[550px] ">
                                    Toyota Camry G 2023: Изысканность Современного Дизайна и Новейшие Технологии в Каждом Километре
                                </span>
                                <div class="flex items-center space-x-2 text-gray-700">
                                    <img src="{{ asset('images/user-icon.svg') }}" alt="User Icon" class="w-5 h-5">
                                    <p class="text-[#292929] font-Gilroy">Tesla</p>
                                    <span class="text-gray-400">/</span>
                                    <img src="{{ asset('images/date-icon.svg') }}" alt="Date Icon" class="w-5 h-5">
                                    <p class="text-[#292929] font-Gilroy">24.05.09</p>
                                </div>
                            </div>
                            <div>
                                <span class="font-Gilroy text-[14px] text-[#292929]">
                                    Исследуйте Комфорт и Превосходство в Toyota Camry G 2023...
                                </span>
                            </div>
                            <div class="mt-2">
                                <a class="text-[#2BAD72] font-Gilroy text-[18px]" href="#">Читать далее...</a>
                            </div>
                        </div>
                    </div>




                </div>
            </div>

            <div class=" w-[306px] h-auto flex-col gap-2 hidden md:flex">
                <div class="bg-white w-[306px] h-[266px] rounded-[20px]"></div>
                <div class="bg-white w-[306px] h-[266px] rounded-[20px]"></div>
                <div class="bg-white w-[306px] h-[266px] rounded-[20px]"></div>
                <div class="bg-white w-[306px] h-[266px] rounded-[20px]"></div>
            </div>
        </div>

    </div>
@endsection
