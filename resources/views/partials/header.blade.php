<header class="flex flex-col">
    <div class="header-bg py-5 h-[60px]">
        <div class="container mx-auto px-6 sm:px-0 flex items-center justify-between h-full">
            <div class="flex items-center gap-[5px]">
                <div x-data="{ open: false, selected: 'RU' }" class="relative inline-block">
                    <button @click="open = !open" class="w-full h-full bg-white border border-gray-300 px-[10px] py-[5px] text-left rounded-[12px] flex items-center justify-between">
                        <span x-text="selected" class="text-xs font-medium"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 9l6 6 6-6"></path>
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute left-0 right-0 mt-1 bg-white border border-gray-300 rounded-md shadow-lg z-10">
                        <ul>
                            <li @click="selected = 'RU'; open = false" class="p-2 text-black cursor-pointer text-xs hover:bg-gray-100 border-b border-gray-300">RU</li>
                            <li @click="selected = 'KG'; open = false" class="p-2 text-black cursor-pointer text-xs hover:bg-gray-100 border-b border-gray-300">KG</li>
                            <li @click="selected = 'ENG'; open = false" class="p-2  text-black cursor-pointer text-xs hover:bg-gray-100">ENG</li>
                        </ul>
                    </div>
                </div>
                <div class="w-[1px] h-[23px] bg-white hidden lg:block"></div>
                <div x-data="{ open: false, selected: 'USD' }" class="relative hidden lg:inline-block">
                    <button @click="open = !open" class="w-full h-full bg-white border border-gray-300 px-[10px] py-[5px] text-left rounded-[12px] flex items-center justify-between">
                        <span x-text="selected" class="text-xs font-medium"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 9l6 6 6-6"></path>
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute left-0 right-0 mt-1 bg-white border border-gray-300 rounded-md shadow-lg z-10">
                        <ul>
                            <li @click="selected = 'USD'; open = false" class="p-2 text-black cursor-pointer text-xs hover:bg-gray-100 border-b border-gray-300">USD</li>
                            <li @click="selected = 'RUB'; open = false" class="p-2 text-black cursor-pointer text-xs hover:bg-gray-100 border-b border-gray-300">RUB</li>
                            <li @click="selected = 'SOM'; open = false" class="p-2 text-black cursor-pointer text-xs hover:bg-gray-100 border-b border-gray-300">SOM</li>
                            <li @click="selected = 'EUR'; open = false" class="p-2 text-black cursor-pointer text-xs hover:bg-gray-100">EUR</li>
                        </ul>
                    </div>
                </div>
            </div>

            <a href="/">
                <img src="{{ asset('images/logo-3.svg') }}" alt="Logo" class="w-[100px] h-[40px] block lg:hidden">
            </a>

            <ul class="hidden lg:flex gap-[40px]">
{{--                <li class="text-white text-sm cursor-pointer font-normal flex items-center gap-3 relative transition-transform duration-300 transform hover:scale-95">--}}
{{--                    <img class="w-6 h-6" src="{{ asset('images/icons/bell.svg') }}" alt="Bell">--}}
{{--                    <span class="absolute top-[-10px] left-[12px] w-5 h-5 bg-red-500 text-white text-xs flex items-center justify-center rounded-full">3</span>--}}
{{--                    <a href="#">Уведомления</a>--}}
{{--                </li>--}}
{{--                <li class="text-white text-sm cursor-pointer font-normal flex items-center gap-3 relative transition-transform duration-300 transform hover:scale-95">--}}
{{--                    <img src="{{ asset('images/icons/chat.svg') }}" alt="Bell">--}}
{{--                    <span class="absolute top-[-10px] left-[13px] w-5 h-5 bg-red-500 text-white text-xs flex items-center justify-center rounded-full">3</span>--}}
{{--                    <a href="#">Сообщения</a>--}}
{{--                </li>--}}
                <li class="text-white text-sm cursor-pointer font-normal flex items-center gap-3 relative transition-transform duration-300 transform hover:scale-95">
                    <img src="{{ asset('images/icons/heart.svg') }}" alt="Bell">
                    <span class="absolute top-[-10px] left-[14px] w-5 h-5 bg-red-500 text-white text-xs flex items-center justify-center rounded-full">3</span>
                    <a href="#">Избранные автомобили</a>
                </li>
                <li class="text-white text-sm cursor-pointer font-normal flex items-center gap-3 transition-transform duration-300 transform hover:scale-95">
                    <img src="{{ asset('images/icons/user.svg') }}" alt="Bell">
                    <a href="#">Войти/Регистрация</a>
                </li>
            </ul>

            <div x-data="{open: false}" class="lg:hidden flex items-center">
                <button @click="open = !open" class="text-white flex flex-col justify-center items-center space-y-1">
                    <div :class="{'rotate-45 translate-y-2': open}" class="w-6 h-1 bg-white rounded transition-all duration-300"></div>
                    <div :class="{'opacity-0': open}" class="w-6 h-1 bg-white rounded transition-all duration-300"></div>
                    <div :class="{'-rotate-45 -translate-y-2': open}" class="w-6 h-1 bg-white rounded transition-all duration-300"></div>
                </button>

                <div x-show="open" @click.away="open = false" class="absolute top-[60px] left-0 w-full h-full bg-black bg-opacity-50 z-20">
                    <div class="bg-white flex flex-col gap-10 top-0 left-0 w-full h-screen pt-16">
                        <ul class="flex flex-col sm:items-center items-start space-y-5 px-5">
                            <li>
                                <img src="{{ asset('images/burger-menu-thumbnail.png') }}" alt="Thumbnail">
                            </li>
{{--                            <li class="transition-transform duration-300 transform hover:scale-95">--}}
{{--                                <a href="#" class="text-2xl font-medium">Уведомления</a>--}}
{{--                            </li>--}}
{{--                            <li class="transition-transform duration-300 transform hover:scale-95">--}}
{{--                                <a href="#" class="text-2xl font-medium">Сообщения</a>--}}
{{--                            </li>--}}
                            <li class="transition-transform duration-300 transform hover:scale-95">
                                <a href="#" class="text-2xl font-medium">Избранные автомобили</a>
                            </li>
                            <li class="transition-transform duration-300 transform hover:scale-95">
                                <a href="#" class="text-2xl font-medium">Войти/Регистрация</a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="flex flex-col sm:items-center items-start space-y-5 px-5">
                            <li class="transition-transform duration-300 transform hover:scale-95">
                                <a href="#" class="text-2xl font-medium">Мой профиль</a>
                            </li>
                            <li class="transition-transform duration-300 transform hover:scale-95">
                                <a href="#" class="text-2xl font-medium">Мои заявки</a>
                            </li>
                            <li class="transition-transform duration-300 transform hover:scale-95">
                                <a href="#" class="text-2xl font-medium">Мои настройки</a>
                            </li>
                            <li class="transition-transform duration-300 transform hover:scale-95">
                                <a href="#" class="text-2xl font-medium">Избранное авто</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white container mx-auto hidden lg:flex justify-between items-center py-5">
        <a href="/">
            <img src="{{ asset('images/logo-2.svg') }}" alt="Logo">
        </a>
        <div class="search-bg rounded-[15px] w-[450px] h-[50px] px-5 py-3 items-center gap-3 border hidden xl:flex">
            <img src="{{ asset('images/icons/search.svg') }}" alt="Search" class="w-5 h-5">
            <input type="text" class="bg-transparent outline-none h-full flex-1 placeholder-gray-500 text-sm" placeholder="Поиск">
        </div>
        <ul class="flex items-center gap-[30px]">
            <li>
                <a href="#" class="text-primary-color font-medium duration-300 transform hover:underline">Главная</a>
            </li>
            <li>
                <a href="#" class="text-primary-color font-medium duration-300 transform hover:underline">Все автомобили</a>
            </li>
            <li>
                <a href="#" class="text-primary-color font-medium duration-300 transform hover:underline">Электромобили</a>
            </li>
            <li>
                <a href="#" class="text-primary-color font-medium duration-300 transform hover:underline">Статьи</a>
            </li>
            <li>
                <a href="#" class="text-primary-color font-medium duration-300 transform hover:underline">О нас</a>
            </li>
            <li>
                <a href="#" class="text-primary-color font-medium duration-300 transform hover:underline">FAQ</a>
            </li>
        </ul>
    </div>
</header>
