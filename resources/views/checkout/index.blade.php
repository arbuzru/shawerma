@extends('layouts.app')

@section('content')

    <main>
        <!-- banner  -->
        <div class="inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-banner-head">
                            <h1>Shopping Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner  -->

        <!-- Shopping Cart start -->
        <section class="shopping-cart-two">
            <div class="container">
                <div class="row">
                    <!-- Delivery Info -->
                    <div class="col-lg-8 col-md-6">
                        <div class="delivery-time">
                            <div class="delivery-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.095111337159!2d90.36396657592897!3d23.81521668628379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1cad41818e3%3A0x1dea3ec2f7a32054!2sQuomodoSoft!5e0!3m2!1sen!2sbd!4v1695898211446!5m2!1sen!2sbd"
                                    width="380" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>

                            <div class="delivery-from">
                                <div class="delivery-text">
                                    <h4>Delivery Information</h4>
                                </div>

                                <!-- Select Delivery Type -->
                                <div class="delivery-from-item">
                                    <label for="deliveryType" class="form-label">Delivery Type</label>
                                    <select class="form-select" name="delivery_type" id="deliveryType">
                                        <option value="delivery" selected>Delivery</option>
                                        <option value="pickup">Pickup</option>
                                    </select>
                                </div>

                                <!-- If Pickup, specify location -->
                                <div class="delivery-from-item" id="pickupLocation" style="display: none;">
                                    <label for="pickupAddress" class="form-label">Pickup Location</label>
                                    <input type="text" id="pickupAddress" class="form-control" placeholder="Enter Pickup Location">
                                </div>

                                <!-- Delivery Date -->
                                <div class="delivery-from-item">
                                    <label for="deliveryDate" class="form-label">Delivery Date</label>
                                    <select class="form-select" id="deliveryDate">
                                        <option value="today" selected>Today</option>
                                        <option value="tomorrow">Tomorrow</option>
                                        <option value="next_week">Next Week</option>
                                    </select>
                                </div>

                                <!-- Time Schedule -->
                                <div class="delivery-from-item">
                                    <label for="timeSchedule" class="form-label">Time Schedule</label>
                                    <select class="form-select" id="timeSchedule">
                                        <option value="03:30-04:00" selected>03:30 PM - 04:00 PM</option>
                                        <option value="04:30-05:00">04:30 PM - 05:00 PM</option>
                                        <option value="05:30-06:00">05:30 PM - 06:00 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Summary -->
                    <div class="col-lg-4 col-md-6">
                        <div class="cart-summary-box">
                            <div class="cart-summary-box-text">
                                <h3>Cart Summary</h3>
                            </div>

                            <!-- Shopping Cart Items -->
                            <div class="cart-summary-box-item-top">
                                @foreach($cart as $item)
                                    <div class="cart-summary-box-item">
                                        <a href="#">
                                            <div class="cart-summary-box-inner">
                                                <div class="cart-summary-box-img">
                                                    <img src="{{ $item['image'] ?? '/images/default.png' }}" alt="item">
                                                </div>
                                                <div class="cart-summary-box-text-two">
                                                    <h4>{{ $item['name'] }}</h4>
                                                    <h5><span>Size :</span> {{ $item['size'] ?? 'Default' }}</h5>
                                                    <p>${{ number_format($item['price'], 2) }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Coupon and Pricing -->
                            <div class="apply-coupon">
                                <div class="apply-coupon-taitel">
                                    <h4>Apply Coupon</h4>
                                </div>

                                <div class="apply-coupon-btn">
                                    <div class="apply-coupon-form">
                                        <input type="text" class="form-control" placeholder="Coupon Code">
                                    </div>
                                    <div class="apply-coupon-btn-two">
                                        <a href="#">Apply</a>
                                    </div>
                                </div>

                                <!-- Pricing Details -->
                                <div class="apply-coupon-box">
                                    <div class="shopping-cart-list-text">
                                        <h4>Subtotal</h4>
                                        <a href="#">${{ number_format($subtotal, 2) }}</a>
                                    </div>
                                    <div class="shopping-cart-list-text">
                                        <h4>Discount</h4>
                                        <a href="#">-${{ number_format($discount, 2) }}</a>
                                    </div>
                                    <div class="shopping-cart-list-text">
                                        <h4>Delivery Charges</h4>
                                        <a href="#">+${{ number_format($delivery_charges, 2) }}</a>
                                    </div>
                                    <div class="shopping-cart-list shopping-cart-list-btm">
                                        <div class="shopping-cart-list-text">
                                            <h4>Total</h4>
                                            <a href="#">${{ number_format($total, 2) }}</a>
                                        </div>
                                    </div>
                                    <div class="shopping-cart-list-btn">
                                        <a href="{{ route('shopping-cart-address.index') }}" class="main-btn-six">
                                            Place Order
                                            <span>
                                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 9L13 5M13 5L9 1M13 5L1 5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shopping Cart end -->
    </main>

    <script>
        document.getElementById('deliveryType').addEventListener('change', function () {
            const pickupLocation = document.getElementById('pickupLocation');
            if (this.value === 'pickup') {
                pickupLocation.style.display = 'block';
            } else {
                pickupLocation.style.display = 'none';
            }
        });
    </script>

@endsection
