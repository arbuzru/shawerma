@extends('layouts.app')

@section('content')
    <h1>Оформление заказа</h1>
    @if(count($cart) > 0)
        <table class="table">
            <thead>
            <tr>
                <th>Продукт</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Итого</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cart as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>${{ number_format($item['price'], 2) }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <p>Общая сумма: ${{ number_format($total, 2) }}</p>
        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <!-- Добавьте необходимые поля формы для оформления заказа -->
            <button type="submit" class="btn btn-primary">Подтвердить заказ</button>
        </form>
    @else
        <p>В вашей корзине нет товаров для оформления.</p>
    @endif



<main>

    <!-- banner  -->

    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
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



    <!-- Shopping Cart  start -->



    <section class="shopping-cart-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 ">
                    <div class="delivery-time">
                        <div class="delivery-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.095111337159!2d90.36396657592897!3d23.81521668628379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1cad41818e3%3A0x1dea3ec2f7a32054!2sQuomodoSoft!5e0!3m2!1sen!2sbd!4v1695898211446!5m2!1sen!2sbd"
                                width="380" height="380" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>


                        <div class="delivery-from">

                            <div class="delivery-text">
                                <h4>{{ $item['name'] }}</h4>
                            </div>
                            <div class="delivery-from-item">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Today</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="delivery-from-item delivery-from-item-two ">
                                <label for="exampleFormControlInput1" class="form-label">Time Schedule</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>03:30 PM - 04:00 PM</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="cart-summary-box">
                        <div class="cart-summary-box-text">
                            <h3>Cart Summary</h3>
                        </div>

                        <div class="cart-summary-box-top-btn">
                            <a href="#">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 19V7M14 19H16M14 19H9M14 7C14 4.79086 12.2091 3 10 3H6C3.79086 3 2 4.79086 2 7V15C2 16.8652 3.27667 18.4323 5.00384 18.875M14 7H17.2091C17.7172 7 18.2063 7.1934 18.577 7.54093L21.3679 10.1574C21.7712 10.5355 22 11.0636 22 11.6165V17C22 18.1046 21.1046 19 20 19M20 19C20 20.1046 19.1046 21 18 21C16.8954 21 16 20.1046 16 19M20 19C20 17.8954 19.1046 17 18 17C16.8954 17 16 17.8954 16 19M9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 18.958 5.00129 18.9163 5.00384 18.875M9 19C9 17.8954 8.10457 17 7 17C5.93742 17 5.06838 17.8286 5.00384 18.875"
                                                stroke="white" stroke-width="1.5" />
                                            <path d="M10 8L8 8" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round" />
                                            <path d="M10 12L6 12" stroke="white" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>

                                Delivery
                            </a>
                            <a href="#" class="top-btn-two">
                                    <span>
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.1176 7.85603C14.1176 9.01319 13.0232 9.95126 11.6732 9.95126C10.3231 9.95126 9.22873 9.01319 9.22873 7.85603C9.22873 6.69886 10.3231 5.76079 11.6732 5.76079C13.0232 5.76079 14.1176 6.69886 14.1176 7.85603Z"
                                                stroke-width="1.5" />
                                            <path
                                                d="M19.0065 7.85603C19.0065 11.3275 14.1176 16.237 11.6732 16.237C9.22873 16.237 4.33984 11.3275 4.33984 7.85603C4.33984 4.38452 7.62309 1.57031 11.6732 1.57031C15.7233 1.57031 19.0065 4.38452 19.0065 7.85603Z"
                                                stroke-width="1.5" />
                                            <path
                                                d="M15.3412 14.1406H16.7181C18.169 14.1406 19.545 14.693 20.4738 15.6484L21.7779 16.9898C23.1047 18.3544 21.9725 20.4263 19.9 20.4263H3.44912C1.37662 20.4263 0.244465 18.3544 1.57124 16.9898L2.87532 15.6484C3.80418 14.693 5.18015 14.1406 6.63107 14.1406H8.0079"
                                                stroke-width="1.5" stroke-linejoin="round" />
                                        </svg>
                                    </span>

                                Pick Up
                            </a>
                            <a href="#" class="top-btn-two">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.81965 22H16.1804C18.4891 22 20.3607 20.214 20.3607 18.0108V13.133C20.3607 12.4248 20.6555 11.7456 21.1803 11.2448C22.3962 10.0845 22.2381 8.16205 20.8475 7.19691L14.4588 2.763C12.9929 1.74567 11.0071 1.74567 9.54124 2.763L3.15251 7.19692C1.76187 8.16205 1.60381 10.0845 2.81969 11.2448C3.34447 11.7456 3.6393 12.4248 3.6393 13.133V18.0108C3.6393 20.214 5.5109 22 7.81965 22Z"
                                                stroke-width="1.5" stroke-linejoin="round" />
                                            <path
                                                d="M16.3047 15.6052C16.3047 17.8875 14.1524 21.8039 12 21.8039C9.84766 21.8039 7.69531 17.8875 7.69531 15.6052C7.69531 13.3228 9.62259 11.4727 12 11.4727C14.3774 11.4727 16.3047 13.3228 16.3047 15.6052Z"
                                                stroke-width="1.5" />
                                            <path
                                                d="M13.2914 15.3469C13.2914 16.0601 12.7132 16.6383 12 16.6383C11.2868 16.6383 10.7086 16.0601 10.7086 15.3469C10.7086 14.6337 11.2868 14.0555 12 14.0555C12.7132 14.0555 13.2914 14.6337 13.2914 15.3469Z"
                                                stroke-width="1.5" />
                                        </svg>
                                    </span>

                                In Restaurant
                            </a>
                        </div>


                        <div class="cart-summary-box-item-top">
                            <div class="cart-summary-box-item">
                                <a href="#">
                                    <div class="cart-summary-box-inner">
                                        <div class="cart-summary-box-img">
                                            <img src="/images/small/cart-1-real.png" alt="img">
                                        </div>
                                        <div class="cart-summary-box-text-two">
                                            <h4>{{ $item['name'] }}</h4>
                                            <h5><span>Size :</span> Small</h5>
                                            <p>${{ number_format($item['price'], 2) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="cart-summary-box-item">
                                <a href="#">
                                    <div class="cart-summary-box-inner">
                                        <div class="cart-summary-box-img">
                                            <img src="/images/small/cart-1-real.png" alt="img">
                                        </div>
                                        <div class="cart-summary-box-text-two">
                                            <h4>{{ $item['name'] }}</h4>
                                            <h5><span>Size :</span> Small</h5>
                                            <p>${{ number_format($item['price'], 2) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="cart-summary-box-item">
                                <a href="#">
                                    <div class="cart-summary-box-inner">
                                        <div class="cart-summary-box-img">
                                            <img src="/images/small/cart-1-real.png" alt="img">
                                        </div>
                                        <div class="cart-summary-box-text-two">
                                            <h4>{{ $item['name'] }}</h4>
                                            <h5><span>Size :</span> Small</h5>
                                            <p>${{ number_format($item['price'], 2) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="cart-summary-box-item">
                                <a href="#">
                                    <div class="cart-summary-box-inner">
                                        <div class="cart-summary-box-img">
                                            <img src="./images/small/cart-1-real.png" alt="img">
                                        </div>
                                        <div class="cart-summary-box-text-two">
                                            <h4>{{ $item['name'] }}</h4>
                                            <h5><span>Size :</span> Small</h5>
                                            <p>${{ number_format($item['price'], 2) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>






                        </div>


                        <div class="apply-coupon">
                            <div class="apply-coupon-taitel">
                                <h4>Apply Coupon</h4>
                            </div>

                            <div class="apply-coupon-btn">
                                <div class="apply-coupon-form">
                                    <input type="email" class="form-control" id="exampleFormControlInput6"
                                           placeholder="Coupon">
                                </div>
                                <div class="apply-coupon-btn-two">
                                    <a href="#">Apply</a>
                                </div>
                            </div>


                            <div class="apply-coupon-box">
                                <div class="shopping-cart-list">
                                    <div class="shopping-cart-list-text">
                                        <h4>Subtotal</h4>
                                        <a href="#">${{ number_format($total, 2) }}</a>
                                    </div>
                                    <div class="shopping-cart-list-text">
                                        <h4>Discount</h4>
                                        <a href="#">-$12.00</a>
                                    </div>
                                    <div class="shopping-cart-list-text">
                                        <h4>Delivery Charges</h4>
                                        <a href="#">+$10.00</a>
                                    </div>
                                </div>
                                <div class="shopping-cart-list shopping-cart-list-btm ">
                                    <div class="shopping-cart-list-text">
                                        <h4>Subtotal</h4>
                                        <a href="#">$120</a>
                                    </div>
                                </div>

                                <div class="shopping-cart-list-btn">
                                    <a href="shopping-cart-address.html" class="main-btn-six">
                                        Place Order

                                        <span>
                                                <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 9L13 5M13 5L9 1M13 5L1 5" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round" />
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




    <!-- Shopping Cart end  -->
















</main>

@endsection
