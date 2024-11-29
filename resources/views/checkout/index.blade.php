@extends('layouts.app')

@section('content')
    <!-- banner -->
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
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 7L14 12L10 17" stroke="#E5E6EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
    <!-- banner -->

    <section class="shopping-cart-two">
        <div class="checkout-container">
            <div class="cart-items">
                @if(session()->has('cart') && count(session('cart')) > 0)
                    @foreach(session('cart') as $id => $item)
                        <div class="cart-item">
                            <div class="cart-item-img">
                                <img src="{{ $item['image'] ?? 'default-image.jpg' }}" alt="{{ $item['name'] }}" class="product-image">
                            </div>
                            <div class="cart-item-info">
                                <h4 class="product-name">{{ $item['name'] }}</h4>
                                <p class="product-size"><span>Size:</span> {{ $item['size'] ?? 'Не задано' }}</p>
                                <p class="product-price">${{ $item['price'] }}</p>
                                <form action="{{ route('cart.remove', $id) }}" method="POST" class="remove-item-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="remove-item-btn">
                                        <i class="fa fa-trash"></i> Удалить
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="empty-cart-message">Корзина пуста.</p>
                @endif
            </div>

            <!-- Форма для выбора типа доставки -->
            <div class="delivery-options">
                <h3>Выберите способ доставки</h3>
                <div class="delivery-type-selector">
                    <label>
                        <input type="radio" name="delivery_type" value="Delivery" checked>
                        Доставка
                    </label>
                    <label>
                        <input type="radio" name="delivery_type" value="Pickup">
                        Самовывоз
                    </label>
                </div>

                <!-- Форма для доставки -->
                <div class="delivery-fields">
                    <div class="field" id="delivery-address">
                        <label for="shipping_address">Адрес доставки:</label>
                        <input type="text" id="shipping_address" name="shipping_address" placeholder="Введите адрес">
                    </div>
                    <div class="field" id="delivery-floor">
                        <label for="floor">Этаж:</label>
                        <input type="number" id="floor" name="floor" placeholder="Введите этаж">
                    </div>
                    <div class="field">
                        <label for="comment">Комментарий к заказу:</label>
                        <textarea id="comment" name="comment" placeholder="Ваши комментарии"></textarea>
                    </div>

                    <!-- Интеграция с картой -->
                    <div class="field">
                        <label for="map-location">Выберите место на карте:</label>
                        <div id="map" style="height: 400px; width: 100%;"></div>
                    </div>

                    <input type="hidden" id="latitude" name="latitude">
                    <input type="hidden" id="longitude" name="longitude">
                </div>

                <!-- Форма для самовывоза -->
                <div class="pickup-fields">
                    <div class="field">
                        <label for="pickup_point">Пункт самовывоза:</label>
                        <input type="text" id="pickup_point" name="pickup_point" placeholder="Укажите пункт самовывоза">
                    </div>
                </div>
            </div>

            <button type="submit" class="checkout-btn">Оформить заказ</button>
        </div>
    </section>

    <!-- Scripts to toggle forms and handle map -->
    <script>
        document.querySelectorAll('input[name="delivery_type"]').forEach((radio) => {
            radio.addEventListener('change', function() {
                if (this.value === 'Delivery') {
                    document.getElementById('shipping_address').style.display = 'block';
                    document.getElementById('delivery-floor').style.display = 'block';
                    document.getElementById('map').style.display = 'block';
                    document.getElementById('pickup_point').style.display = 'none';
                } else if (this.value === 'Pickup') {
                    document.getElementById('shipping_address').style.display = 'none';
                    document.getElementById('delivery-floor').style.display = 'none';
                    document.getElementById('map').style.display = 'none';
                    document.getElementById('pickup_point').style.display = 'block';
                }
            });
        });

        // Инициализация карты
        function initMap() {
            const defaultLocation = { lat: 55.7558, lng: 37.6176 }; // Москва

            const map = new google.maps.Map(document.getElementById("map"), {
                center: defaultLocation,
                zoom: 12,
            });

            const marker = new google.maps.Marker({
                position: defaultLocation,
                map: map,
                title: "Выберите ваш адрес",
            });

            map.addListener("click", function(event) {
                const clickedLocation = event.latLng;
                marker.setPosition(clickedLocation);

                document.getElementById("latitude").value = clickedLocation.lat();
                document.getElementById("longitude").value = clickedLocation.lng();
            });
        }

        // Загрузить карту при загрузке страницы
        window.onload = function() {
            initMap();
        };
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
@endsection
