@extends('layouts.app')

@section('content')
    <!-- banner  -->
    <div class="inner-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>Shopping Cart</h1>
                    </div>

                    <div class="inner-banner-item">
                        <div class="left">
                            <a href="index.html">Home</a>
                        </div>
                        <div class="icon">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 7L14 12L10 17" stroke="#E5E6EB" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                        <div class="left">
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner  -->
    <section class="checkout-section">
        <div class="container">
            <!-- Выбор типа оформления -->
            <div class="delivery-options">
                <div class="tab-buttons">
                    <button class="tab-button active" data-tab="delivery">Доставка</button>
                    <button class="tab-button" data-tab="pickup">Самовывоз</button>
                </div>

                <!-- Вкладка "Доставка" -->
                <div id="delivery" class="tab-content active">
                    <div class="form-row">
                        <div class="form-group half-width">
                            <label for="name">Ваше имя</label>
                            <input type="text" id="name" placeholder="Введите ваше имя">
                        </div>
                        <div class="form-group half-width">
                            <label for="phone">Ваш телефон</label>
                            <input type="tel" id="phone" placeholder="+7 (___) ___-__-__">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="address">Адрес доставки</label>
                            <div class="address-container">
                                <input type="text" id="address" placeholder="Укажите адрес">
                                <button class="edit-button" onclick="toggleMap()">Изменить</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="checkbox">
                            <input type="checkbox" id="private-house" onchange="toggleHouseFields()">
                            <label for="private-house">Частный дом</label>
                        </div>
                    </div>
                    <div id="apartment-fields">
                        <div class="form-row">
                            <div class="form-group third-width">
                                <label for="apartment">Квартира</label>
                                <input type="text" id="apartment" placeholder="Кв.">
                            </div>
                            <div class="form-group third-width">
                                <label for="entrance">Подъезд</label>
                                <input type="text" id="entrance" placeholder="Подъезд">
                            </div>
                            <div class="form-group third-width">
                                <label for="floor">Этаж</label>
                                <input type="text" id="floor" placeholder="Этаж">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group half-width">
                                <label for="intercom">Домофон</label>
                                <input type="text" id="intercom" placeholder="Код домофона">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group half-width">
                            <label for="persons">Кол-во персон</label>
                            <div class="counter">
                                <button onclick="decrement('persons')">-</button>
                                <input type="number" id="persons" value="1" min="1">
                                <button onclick="increment('persons')">+</button>
                            </div>
                        </div>
                    </div>
                    <div id="map-container" class="hidden">
                        <div id="map"></div>
                    </div>
                </div>

                <!-- Вкладка "Самовывоз" -->
                <div id="pickup" class="tab-content">
                    <div class="form-row">
                        <div class="form-group half-width">
                            <label for="pickup-name">Ваше имя</label>
                            <input type="text" id="pickup-name" placeholder="Введите ваше имя">
                        </div>
                        <div class="form-group half-width">
                            <label for="pickup-phone">Ваш телефон</label>
                            <input type="tel" id="pickup-phone" placeholder="+7 (___) ___-__-__">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="pickup-point">Пункт самовывоза</label>
                            <select id="pickup-point">
                                <option value="1">Фёдора Абрамова 18к1</option>
                                <option value="2">Комендантский пр. 58</option>
                                <option value="3">Пискарёвский 12</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="pickup-comment">Комментарий к заказу</label>
                            <textarea id="pickup-comment" placeholder="Введите ваш комментарий"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group half-width">
                            <label for="pickup-persons">Кол-во персон</label>
                            <div class="counter">
                                <button onclick="decrement('pickup-persons')">-</button>
                                <input type="number" id="pickup-persons" value="1" min="1">
                                <button onclick="increment('pickup-persons')">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="checkout-btn">Далее</button>
        </div>
    </section>
@endsection
