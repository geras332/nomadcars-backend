<header class="header">
    <div class="header_top_block">
        <div class="container header_top_block_content">
            <div class="header_top_block_left">
                <div>
                    <p>Язык</p>
                    <select>
                        <option>RU</option>
                        <option>KG</option>
                        <option>EN</option>
                    </select>
                </div>
                <hr>
                <div>
                    <p>Валюта</p>
                    <select>
                        <option>USD</option>
                        <option>RUB</option>
                        <option>SOM</option>
                        <option>EUR</option>
                    </select>
                </div>
            </div>
            <ul class="header_top_block_right">
                <li>
                    <img src="icons/NotificationsLogo.svg" alt="Уведомления" />
                    Уведомления
                </li>
                <li>
                    <img src="icons/MessagesLogo.svg" alt="Сообщения" />
                    Сообщения
                </li>
                <li>
                    <img src="icons/FavoritesLogoLogo.svg" alt="Избранные автомобили" />
                    Избранные автомобили
                </li>
                <li x-data="{ isMenuOpen: false }">
                    <p style="cursor: pointer; display: flex; align-items: center ;"
                       @click="isMenuOpen = !isMenuOpen">
                        <img src="icons/UserLogo.svg" alt="Войти/Регистрация" />
                        Войти/Регистрация
                    </p>
                    <ul x-show="isMenuOpen" class="select_modal faq" style="margin-top:220px; margin-left: 5px;">
                        <li><a href="/profile.html">Мой профиль</a></li>
                        <hr>
                        <li><a href="/settings.html">Мои настройки</a></li>
                        <hr>
                        <li><a href="/selected.html">Избранные авто</a></li>
                        <hr>
                        <li><a href="/logout.html">Выход</a></li>
                    </ul>

                </li>
            </ul>

        </div>
        <div x-data="{ isMenuOpen: false, selectedLanguage: 'RU' }">
            <div class="container header_mobile">
                <select x-model="selectedLanguage">
                    <option value="RU">RU</option>
                    <option value="KG">KG</option>
                    <option value="EN">EN</option>
                </select>
                <a href="#">
                    <img src="{{ asset('images/logo-3.svg') }}" alt="Logo" />
                </a>
                <button @click="isMenuOpen = !isMenuOpen">
                    <img src="icons/MenuIsAcc.svg" alt="Меню" />
                </button>
            </div>

            <nav class="nav_mobile" :class="{ 'isMenuOpen': isMenuOpen } ">
                <div class="nav_mobile_content">
                    <div class="nav_mobile_top">
                        <a href="#" class="nav_mobile_top_notification">
                            <img src="icons/Notifications000Icons.svg" alt="Logo" />
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/logo-2.svg') }}" alt="Logo" />
                        </a>
                        <button @click="isMenuOpen = !isMenuOpen">
                            <img src="icons/MenuCloseIcon.svg" alt="Меню" />
                        </button>
                    </div>
                    <div class="nav_mobile_center">

                    </div>
                    <div class="nav_mobile_bottom">
                        <ul class="nav_mobile_bottom_top_list">
                            <li><a href="#"> Главная</a></li>
                            <li x-data="{ isActive: false }">
                                <p x-on:click="isActive = !isActive">
                                    Все Марки
                                    <img :style="{ transform: isActive ? 'rotate(180deg)' : 'rotate(0deg)', transition: 'transform 0.3s ease' }"
                                         src="icons/Chevron-down.svg" alt="Chevron" />
                                </p>
                                <ul x-show="isActive">
                                    <li><a href="#">Audi</a></li>
                                    <li><a href="#">BMW</a></li>
                                    <li><a href="#">Mercedes</a></li>
                                    <li><a href="#">Lamborghini</a></li>
                                    <li><a href="#">Ferrari</a></li>
                                    <li><a href="#">Porsche</a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Электромобили</a></li>
                            <li><a href="#">Новости</a></li>
                            <li x-data="{ isActive: false }">
                                <p x-on:click="isActive = !isActive">
                                    О нас
                                    <img :style="{ transform: isActive ? 'rotate(180deg)' : 'rotate(0deg)', transition: 'transform 0.3s ease' }"
                                         src="icons/Chevron-down.svg" alt="Chevron" />
                                </p>
                                <ul x-show="isActive">
                                    <li><a href="/about.html">О нас</a></li>
                                    <li><a href="/nomad-carss.html">Nomad Cars</a></li>
                                </ul>
                            </li>
                            <li x-data="{ isActive: false }">
                                <p x-on:click="isActive = !isActive">
                                    FAQ
                                    <img :style="{ transform: isActive ? 'rotate(180deg)' : 'rotate(0deg)', transition: 'transform 0.3s ease' }"
                                         src="icons/Chevron-down.svg" alt="Chevron" />
                                </p>
                                <ul x-show="isActive">
                                    <li><a href="#">О нас</a></li>
                                    <li><a href="#">Профиль компаний</a></li>
                                    <li><a href="#">Nomad Cars</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav_mobile_bottom_top_list">
                            <li><a href="/profile.html">Мой профиль</a></li>
                            <li><a href="/profile.html">Мои заявки</a></li>
                            <li><a href="/profile.html">Сообщения</a></li>
                            <li><a href="/settings.html">Мои настройки</a></li>
                            <li><a href="/selected.html">Избранное авто</a></li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>
    <div class="container header_bottom_block">
        <div class="header_bottom_block_left">
            <img src="{{ asset('images/logo-2.svg') }}" alt="Logo" />
        </div>
        <ul class="header_bottom_block_right">
            <li class="header_bottom_block_right_active">
                <a href="#">Главная</a>
            </li>
            <li> <a href="/all-automobile.html">Все автомобили</a> </li>
            <li><a href="/electric-cars.html">Электромобили</a></li>
            <li><a href="/news.html">Статьи</a> </li>
            <li x-data="{ isModal: false }">
                <button @click="isModal=!isModal">О нас <img src="icons/Chevron-down.svg" alt="Chevron" /></button>
                <ul x-show="isModal" class="select_modal">
                    <li><a href="/about.html">О нас</a></li>
                    <hr>
                    <li><a href="/nomad-carss.html">Nomad Cars</a></li>
                </ul>
            </li>
            <li x-data="{ isModal: false }" style="
                display: flex;
                align-items: center;
                ">
                <button @click="isModal=!isModal">FAQ <img src="icons/Chevron-down.svg" alt="Chevron" /></button>
                <ul x-show="isModal" class="select_modal faq">
                    <li><a href="/faq.html">FAQ</a></li>

                    <hr>
                    <li><a href="/vehicles-inventory.html">Vehicles & Inventory</a></li>
                    <hr>
                    <li><a href="/booking-shipping.html">Booking & Shipping</a></li>
                    <hr>
                    <li><a href="/documentation.html">Documentation</a></li>
                    <hr>
                    <li><a href="/receiving-your-cargo.html">Receiving Your Cargo</a></li>
                    <hr>
                    <li><a href="/country-regulations.html">Country Regulations</a></li>
                    <hr>
                    <li><a href="/glossary-of-terms.html">Glossary of Terms</a></li>
                    <hr>
                    <li><a href="/buying-paying.html">Buying & Paying</a></li>
                </ul>
            </li>
        </ul>

    </div>
</header>
