@extends('layouts.default')

@section('content')
    <main class="main">
        <div class="container">
            <div class="main_banner">
                <img src="img/banner.png" alt="">
            </div>
        </div>
        <div class="main_left_filter_mobile">
            <div class="main_left_filter_mobile_top">
                <div class="main_block2_left_filter_top_left">
                    <select>
                        <option>BMW</option>
                        <option>Все</option>
                        <option>Все</option>
                    </select>
                    <select>
                        <option>Кузов</option>
                        <option>Все</option>
                        <option>Все</option>
                    </select>
                    <div>
                        <select>
                            <option>Год от</option>
                            <option>Все</option>
                            <option>Все</option>
                        </select>
                        <hr>
                        <select>
                            <option> до</option>
                            <option>Все</option>
                            <option>Все</option>
                        </select>
                    </div>

                </div>
                <div class="main_left_filter_botto_mobile">
                    <button>
                        Показать предложения
                    </button>
                </div>
            </div>

        </div>
        <div class="container main_block" x-data="{ items: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12], activeItem: null }">
            <template x-for="(item, index) in items" :key="item">
                <div class="main_block_item" :class="{ 'main_block_item_active': activeItem === index }"
                     x-on:click="activeItem = index">
                    <img src="img/BNV.png" alt="">
                </div>
            </template>
        </div>

        <div class="container from" style="width:  -webkit-fill-available;">
            <div class="main_block1"
                 x-data="{ items: Array.from({ length: 20 }, (_, index) => index + 1), activeItem: null }">
                <template x-for="(item, index) in items" :key="item">
                    <div class="main_block1_item" x-on:click="activeItem = index">
                        <p :class="{ 'main_block1_item_active': activeItem === index }">Mazda CX-9</p>
                    </div>
                </template>
                <div class="main_block1_item">
                    <p class="main_block1_item_active">Ещё</p>
                </div>
            </div>
        </div>
        <div class="container main_block2">
            <div class="main_block2_left">
                <div class="main_block2_left_filter">
                    <div class="main_block2_left_filter_top">
                        <div class="main_block2_left_filter_top_left">
                            <select>
                                <option>BMW</option>
                                <option>Все</option>
                                <option>Все</option>
                            </select>
                            <span>
                                <select>
                                    <option>Кузов</option>
                                    <option>Все</option>
                                    <option>Все</option>
                                </select>
                                <select>
                                    <option>Коробка</option>
                                    <option>Все</option>
                                    <option>Все</option>
                                </select>

                            </span>
                            <div>
                                <select>
                                    <option>Год от</option>
                                    <option>Все</option>
                                    <option>Все</option>
                                </select>
                                <hr>
                                <select>
                                    <option> до</option>
                                    <option>Все</option>
                                    <option>Все</option>
                                </select>
                            </div>

                        </div>
                        <div class="main_block2_left_filter_top_left">
                            <select>
                                <option>Модель</option>
                                <option>Все</option>
                                <option>Все</option>
                            </select>
                            <span>
                                <select>
                                    <option>Двигатель</option>
                                    <option>Все</option>
                                    <option>Все</option>
                                </select>
                                <select>
                                    <option>Привод</option>
                                    <option>Все</option>
                                    <option>Все</option>
                                </select>

                            </span>
                            <div>
                                <select>
                                    <option>Пробег от</option>
                                    <option>Все</option>
                                    <option>Все</option>
                                </select>
                                <hr>
                                <select>
                                    <option> до</option>
                                    <option>Все</option>
                                    <option>Все</option>
                                </select>
                            </div>

                        </div>
                        <div class="main_block2_left_filter_top_left">
                            <select>
                                <option>Поколение</option>
                                <option>Все</option>
                                <option>Все</option>
                            </select>
                            <div>
                                <select>
                                    <option>Пробег от</option>
                                    <option>Все</option>
                                    <option>Все</option>
                                </select>
                                <hr>
                                <select>
                                    <option> до</option>
                                    <option>Все</option>
                                    <option>Все</option>
                                </select>
                            </div>
                            <div>
                                <select>
                                    <option>Пробег от</option>
                                    <option>Все</option>
                                    <option>Все</option>
                                </select>
                                <hr>
                                <select>
                                    <option> до</option>
                                    <option>Все</option>
                                    <option>Все</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="main_block2_left_filter_bottom">
                        <button>Сбросить</button>
                        <button>
                            Показать предложения
                        </button>
                    </div>
                </div>
                <div class="main_block2_left_list" x-data="{activeCard: 1}">
                    <div class="main_block2_left_list_nav">
                        <div class="main_block2_left_list_nav_left">
                            <select>
                                <option>Сортировка</option>
                                <option>Все</option>
                                <option>Все</option>
                            </select>
                            <select>
                                <option>Время размещения</option>
                                <option>Все</option>
                                <option>Все</option>
                            </select>
                        </div>
                        <div class="main_block2_left_list_nav_right">
                            <button x-on:click="activeCard = 2"
                                    :class="{ 'main_block2_left_list_nav_right_btn_active': activeCard === 2 }">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M17.5 11H12.5M17.5 15H12.5M17.5 7H12.5M9 3L9 21M7.8 3H16.2C17.8802 3 18.7202 3 19.362 3.32698C19.9265 3.6146 20.3854 4.07354 20.673 4.63803C21 5.27976 21 6.11984 21 7.8V16.2C21 17.8802 21 18.7202 20.673 19.362C20.3854 19.9265 19.9265 20.3854 19.362 20.673C18.7202 21 17.8802 21 16.2 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V7.8C3 6.11984 3 5.27976 3.32698 4.63803C3.6146 4.07354 4.07354 3.6146 4.63803 3.32698C5.27976 3 6.11984 3 7.8 3Z"
                                            stroke="#080808" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </g>
                                </svg>
                            </button>
                            <button x-on:click="activeCard = 1"
                                    :class="{ 'main_block2_left_list_nav_right_btn_active': activeCard === 1 }">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.4 3H4.6C4.03995 3 3.75992 3 3.54601 3.10899C3.35785 3.20487 3.20487 3.35785 3.10899 3.54601C3 3.75992 3 4.03995 3 4.6V8.4C3 8.96005 3 9.24008 3.10899 9.45399C3.20487 9.64215 3.35785 9.79513 3.54601 9.89101C3.75992 10 4.03995 10 4.6 10H8.4C8.96005 10 9.24008 10 9.45399 9.89101C9.64215 9.79513 9.79513 9.64215 9.89101 9.45399C10 9.24008 10 8.96005 10 8.4V4.6C10 4.03995 10 3.75992 9.89101 3.54601C9.79513 3.35785 9.64215 3.20487 9.45399 3.10899C9.24008 3 8.96005 3 8.4 3Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M19.4 3H15.6C15.0399 3 14.7599 3 14.546 3.10899C14.3578 3.20487 14.2049 3.35785 14.109 3.54601C14 3.75992 14 4.03995 14 4.6V8.4C14 8.96005 14 9.24008 14.109 9.45399C14.2049 9.64215 14.3578 9.79513 14.546 9.89101C14.7599 10 15.0399 10 15.6 10H19.4C19.9601 10 20.2401 10 20.454 9.89101C20.6422 9.79513 20.7951 9.64215 20.891 9.45399C21 9.24008 21 8.96005 21 8.4V4.6C21 4.03995 21 3.75992 20.891 3.54601C20.7951 3.35785 20.6422 3.20487 20.454 3.10899C20.2401 3 19.9601 3 19.4 3Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M19.4 14H15.6C15.0399 14 14.7599 14 14.546 14.109C14.3578 14.2049 14.2049 14.3578 14.109 14.546C14 14.7599 14 15.0399 14 15.6V19.4C14 19.9601 14 20.2401 14.109 20.454C14.2049 20.6422 14.3578 20.7951 14.546 20.891C14.7599 21 15.0399 21 15.6 21H19.4C19.9601 21 20.2401 21 20.454 20.891C20.6422 20.7951 20.7951 20.6422 20.891 20.454C21 20.2401 21 19.9601 21 19.4V15.6C21 15.0399 21 14.7599 20.891 14.546C20.7951 14.3578 20.6422 14.2049 20.454 14.109C20.2401 14 19.9601 14 19.4 14Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M8.4 14H4.6C4.03995 14 3.75992 14 3.54601 14.109C3.35785 14.2049 3.20487 14.3578 3.10899 14.546C3 14.7599 3 15.0399 3 15.6V19.4C3 19.9601 3 20.2401 3.10899 20.454C3.20487 20.6422 3.35785 20.7951 3.54601 20.891C3.75992 21 4.03995 21 4.6 21H8.4C8.96005 21 9.24008 21 9.45399 20.891C9.64215 20.7951 9.79513 20.6422 9.89101 20.454C10 20.2401 10 19.9601 10 19.4V15.6C10 15.0399 10 14.7599 9.89101 14.546C9.79513 14.3578 9.64215 14.2049 9.45399 14.109C9.24008 14 8.96005 14 8.4 14Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>

                            </button>
                        </div>
                    </div>
                    <div x-data="{items: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]}"
                         :class="{ 'main_block2_left_list_card': activeCard === 1, 'main_block2_left_list_card_active': activeCard === 2 }">
                        <template x-for="(item, index) in items" :key="item">
                            <div class="card" x-show="activeCard === 1">
                                <div class="card_img">
                                    <button>
                                        <img src="icons/heart-icon.svg" alt="">
                                    </button>
                                    <img src="img/Cards.png" alt="">
                                </div>
                                <div class="card_text">
                                    <h4>Porsche 911 Carrera 4 GTS 11</h4>
                                    <div class="card_text_info">
                                        <p>3,0 л/286 л.с/Дизель</p>
                                        <p>Автомат</p>
                                        <p>Цвет: черный</p>
                                    </div>
                                    <span>
                                        <p>Пробег: 308 000 км</p>
                                        <p>Год:2022</p>
                                    </span>
                                    <button>60 000$</button>
                                </div>
                            </div>
                        </template>

                        <template x-for="(item, index) in items" :key="item">
                            <div class="card_active" x-show="activeCard === 2">
                                <img src="img/Cards.png" alt="">
                                <div class="card_active_text">
                                    <h4>Porsche 911 Carrera 4 GTS</h4>
                                    <div class="card_active_text_info">
                                        <p>3,0 л/286 л.с/Дизель</p>
                                        <p>Цвет: серый</p>
                                        <p>Цвет: черный</p>
                                    </div>
                                    <p>Бишкек, Кыргызстан</p>
                                </div>
                                <div class="card_active_text">
                                    <p>Пробег: <br>
                                        38 000 км</p>
                                    <p>Год: <br>
                                        2022</p>

                                </div>
                                <div class="card_active_button">
                                    <button class="card_active_button_heart">
                                        <img src="icons/heart-icon.svg" alt="">
                                    </button>
                                    <button class="card_active_button_price"> 60 000$</button>
                                </div>
                            </div>
                        </template>
                    </div>

                    <div class="pagination">
                        <button class="pagination_btn">Показать еще</button>
                        <span class="pagination_number">
                            <button class="pagination_number_active">1</button>
                            <button>2</button>
                            <button>3</button>
                            <button>4</button>
                            <button>...</button>
                            <button>10</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="main_block2_right" style="background: #757575; border-radius: 20px; opacity: 0.4;">
                1
            </div>
        </div>
    </main>

@endsection
