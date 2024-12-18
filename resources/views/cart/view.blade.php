@extends('layouts.app')

@section('content')

    @foreach ($cart as $productId => $item)
    @endforeach
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
                                <a href="{{ route('home') }}">Home</a>
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




        <section class="shopping-cart">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="tabel-main">
                            <table class="table  ">
                                <thead>
                                <tr class="tabel-main-top">
                                    <td class="details-control">
                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel"
                                               value="" aria-label="...">
                                    </td>
                                    <th>
                                        Food Image
                                        <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.332 2.31567V14.3157" stroke="#718096"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M6.66602 12.3157L4.66602 14.3157L2.66602 12.3157"
                                                          stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M4.66602 14.3157V2.31567" stroke="#718096"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M13.332 4.31567L11.332 2.31567L9.33203 4.31567"
                                                          stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                    </th>
                                    <th>
                                        Details
                                        <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.332 2.31567V14.3157" stroke="#718096"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M6.66602 12.3157L4.66602 14.3157L2.66602 12.3157"
                                                          stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M4.66602 14.3157V2.31567" stroke="#718096"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M13.332 4.31567L11.332 2.31567L9.33203 4.31567"
                                                          stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                    </th>
                                    <th>
                                        Price
                                        <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.332 2.31567V14.3157" stroke="#718096"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M6.66602 12.3157L4.66602 14.3157L2.66602 12.3157"
                                                          stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M4.66602 14.3157V2.31567" stroke="#718096"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M13.332 4.31567L11.332 2.31567L9.33203 4.31567"
                                                          stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                    </th>
                                    <th>
                                        Quantity
                                        <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.332 2.31567V14.3157" stroke="#718096"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M6.66602 12.3157L4.66602 14.3157L2.66602 12.3157"
                                                          stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M4.66602 14.3157V2.31567" stroke="#718096"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M13.332 4.31567L11.332 2.31567L9.33203 4.31567"
                                                          stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                    </th>
                                    <th>
                                        Total
                                        <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.332 2.31567V14.3157" stroke="#718096"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M6.66602 12.3157L4.66602 14.3157L2.66602 12.3157"
                                                          stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M4.66602 14.3157V2.31567" stroke="#718096"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M13.332 4.31567L11.332 2.31567L9.33203 4.31567"
                                                          stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                    </th>
                                    <th class="details-control-two">
                                        Action
                                        <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.332 2.31567V14.3157" stroke="#718096"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M6.66602 12.3157L4.66602 14.3157L2.66602 12.3157"
                                                          stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M4.66602 14.3157V2.31567" stroke="#718096"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M13.332 4.31567L11.332 2.31567L9.33203 4.31567"
                                                          stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                    </th>

                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="details-control">
                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel-0"
                                               value="" aria-label="...">
                                    </td>
                                    <td>
                                        <div class="tabel-item">
                                            <div class="tabel-img">
                                                <img src="/images/small/tabel-1-real.png" alt="img">
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text">
                                            <h5>{{ $item['name'] }}</h5>
                                            <a href="#"><span>Size :</span> Small</a>
                                            <p><span>Addon :</span>Soft Drinks (+$30)</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text">
                                            <h6>${{ number_format($item['price'], 2) }}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text-btn">
                                            <div class="grid d-flex align-items-center">
                                                <!-- Кнопка уменьшения количества -->
                                                <form action="{{ route('cart.update', $productId) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="hidden" name="quantity" value="{{ $item['quantity'] - 1 }}">
                                                    <button type="submit" class="btn btn-minus" @if($item['quantity'] <= 1) disabled @endif>
                                                        <i class="fa-solid fa-minus"></i>
                                                    </button>
                                                </form>

                                                <!-- Текущее количество товара -->
                                                <div class="column product-qty mx-2">{{ $item['quantity'] }}</div>

                                                <!-- Кнопка увеличения количества -->
                                                <form action="{{ route('cart.update', $productId) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="hidden" name="quantity" value="{{ $item['quantity'] + 1 }}">
                                                    <button type="submit" class="btn btn-plus">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="tabel-text">
                                            <h6>${{ number_format($total, 2) }}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-modal-btn">
                                            <button type="button" class="view-btn" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M21.1303 14.1469C22.2899 12.9268 22.2899 11.0732 21.1303 9.8531C19.1745 7.79533 15.8155 5 12 5C8.18448 5 4.82549 7.79533 2.86971 9.8531C1.7101 11.0732 1.7101 12.9268 2.86971 14.1469C4.82549 16.2047 8.18448 19 12 19C15.8155 19 19.1745 16.2047 21.1303 14.1469ZM12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                                                  fill="white" />
                                                        </svg></span> View
                                            </button>
                                            <a href="{{ route('cart.remove', $productId) }}">
                                                    <span>
                                                        <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M5.834 0.890599C6.20493 0.334202 6.8294 0 7.4981 0H9.35737C10.0261 0 10.6505 0.334202 11.0215 0.8906L11.9277 2.25H15.6777C16.0919 2.25 16.4277 2.58579 16.4277 3C16.4277 3.41421 16.0919 3.75 15.6777 3.75H1.17773C0.763521 3.75 0.427734 3.41421 0.427734 3C0.427734 2.58579 0.763521 2.25 1.17773 2.25H4.92773L5.834 0.890599ZM11.4277 20H5.42773C3.2186 20 1.42773 18.2091 1.42773 16V5H15.4277V16C15.4277 18.2091 13.6369 20 11.4277 20ZM6.42773 8.25C6.84195 8.25 7.17773 8.58579 7.17773 9V16C7.17773 16.4142 6.84195 16.75 6.42773 16.75C6.01352 16.75 5.67773 16.4142 5.67773 16L5.67773 9C5.67773 8.58579 6.01352 8.25 6.42773 8.25ZM10.4277 8.25C10.8419 8.25 11.1777 8.58579 11.1777 9V16C11.1777 16.4142 10.8419 16.75 10.4277 16.75C10.0135 16.75 9.67774 16.4142 9.67773 16V9C9.67773 8.58579 10.0135 8.25 10.4277 8.25Z"
                                                                  fill="white" />
                                                        </svg>
                                                    </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="details-control">

                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel1"
                                               value="" aria-label="...">
                                    </td>
                                    <td>
                                        <div class="tabel-item">
                                            <div class="tabel-img">
                                                <img src="/images/small/tabel-3-real.png" alt="img">
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text">
                                            <h5>{{ $item['name'] }}</h5>
                                            <a href="#"><span>Size :</span> Small</a>
                                            <p><span>Addon :</span>Soft Drinks (+$30)</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text">
                                            <h6>${{ number_format($item['price'], 2) }}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text-btn">
                                            <div class="grid d-flex align-items-center">
                                                <!-- Кнопка уменьшения количества -->
                                                <form action="{{ route('cart.update', $productId) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="hidden" name="quantity" value="{{ $item['quantity'] - 1 }}">
                                                    <button type="submit" class="btn btn-minus" @if($item['quantity'] <= 1) disabled @endif>
                                                        <i class="fa-solid fa-minus"></i>
                                                    </button>
                                                </form>

                                                <!-- Текущее количество товара -->
                                                <div class="column product-qty mx-2">{{ $item['quantity'] }}</div>

                                                <!-- Кнопка увеличения количества -->
                                                <form action="{{ route('cart.update', $productId) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="hidden" name="quantity" value="{{ $item['quantity'] + 1 }}">
                                                    <button type="submit" class="btn btn-plus">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text">
                                            <h6>${{ number_format($total, 2) }}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-modal-btn">
                                            <button type="button" class="view-btn" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M21.1303 14.1469C22.2899 12.9268 22.2899 11.0732 21.1303 9.8531C19.1745 7.79533 15.8155 5 12 5C8.18448 5 4.82549 7.79533 2.86971 9.8531C1.7101 11.0732 1.7101 12.9268 2.86971 14.1469C4.82549 16.2047 8.18448 19 12 19C15.8155 19 19.1745 16.2047 21.1303 14.1469ZM12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                                                  fill="white" />
                                                        </svg></span> View
                                            </button>
                                            <a href="#">
                                                    <span>
                                                        <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M5.834 0.890599C6.20493 0.334202 6.8294 0 7.4981 0H9.35737C10.0261 0 10.6505 0.334202 11.0215 0.8906L11.9277 2.25H15.6777C16.0919 2.25 16.4277 2.58579 16.4277 3C16.4277 3.41421 16.0919 3.75 15.6777 3.75H1.17773C0.763521 3.75 0.427734 3.41421 0.427734 3C0.427734 2.58579 0.763521 2.25 1.17773 2.25H4.92773L5.834 0.890599ZM11.4277 20H5.42773C3.2186 20 1.42773 18.2091 1.42773 16V5H15.4277V16C15.4277 18.2091 13.6369 20 11.4277 20ZM6.42773 8.25C6.84195 8.25 7.17773 8.58579 7.17773 9V16C7.17773 16.4142 6.84195 16.75 6.42773 16.75C6.01352 16.75 5.67773 16.4142 5.67773 16L5.67773 9C5.67773 8.58579 6.01352 8.25 6.42773 8.25ZM10.4277 8.25C10.8419 8.25 11.1777 8.58579 11.1777 9V16C11.1777 16.4142 10.8419 16.75 10.4277 16.75C10.0135 16.75 9.67774 16.4142 9.67773 16V9C9.67773 8.58579 10.0135 8.25 10.4277 8.25Z"
                                                                  fill="white" />
                                                        </svg>
                                                    </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="details-control">
                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel2"
                                               value="" aria-label="...">
                                    </td>
                                    <td>
                                        <div class="tabel-item">
                                            <div class="tabel-img">
                                                <img src="/images/small/tabel-4-real.png" alt="img">
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text">
                                            <h5>{{ $item['name'] }}</h5>
                                            <a href="#"><span>Size :</span> Small</a>
                                            <p><span>Addon :</span>Soft Drinks (+$30)</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text">
                                            <h6>${{ number_format($item['price'], 2) }}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text-btn">
                                            <div class="grid d-flex align-items-center">
                                                <!-- Кнопка уменьшения количества -->
                                                <form action="{{ route('cart.update', $productId) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="hidden" name="quantity" value="{{ $item['quantity'] - 1 }}">
                                                    <button type="submit" class="btn btn-minus" @if($item['quantity'] <= 1) disabled @endif>
                                                        <i class="fa-solid fa-minus"></i>
                                                    </button>
                                                </form>

                                                <!-- Текущее количество товара -->
                                                <div class="column product-qty mx-2">{{ $item['quantity'] }}</div>

                                                <!-- Кнопка увеличения количества -->
                                                <form action="{{ route('cart.update', $productId) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="hidden" name="quantity" value="{{ $item['quantity'] + 1 }}">
                                                    <button type="submit" class="btn btn-plus">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="tabel-text">
                                            <h6>${{ number_format($total, 2) }}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-modal-btn">
                                            <button type="button" class="view-btn" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M21.1303 14.1469C22.2899 12.9268 22.2899 11.0732 21.1303 9.8531C19.1745 7.79533 15.8155 5 12 5C8.18448 5 4.82549 7.79533 2.86971 9.8531C1.7101 11.0732 1.7101 12.9268 2.86971 14.1469C4.82549 16.2047 8.18448 19 12 19C15.8155 19 19.1745 16.2047 21.1303 14.1469ZM12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                                                  fill="white" />
                                                        </svg></span> View
                                            </button>
                                            <a href="#">
                                                    <span>
                                                        <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M5.834 0.890599C6.20493 0.334202 6.8294 0 7.4981 0H9.35737C10.0261 0 10.6505 0.334202 11.0215 0.8906L11.9277 2.25H15.6777C16.0919 2.25 16.4277 2.58579 16.4277 3C16.4277 3.41421 16.0919 3.75 15.6777 3.75H1.17773C0.763521 3.75 0.427734 3.41421 0.427734 3C0.427734 2.58579 0.763521 2.25 1.17773 2.25H4.92773L5.834 0.890599ZM11.4277 20H5.42773C3.2186 20 1.42773 18.2091 1.42773 16V5H15.4277V16C15.4277 18.2091 13.6369 20 11.4277 20ZM6.42773 8.25C6.84195 8.25 7.17773 8.58579 7.17773 9V16C7.17773 16.4142 6.84195 16.75 6.42773 16.75C6.01352 16.75 5.67773 16.4142 5.67773 16L5.67773 9C5.67773 8.58579 6.01352 8.25 6.42773 8.25ZM10.4277 8.25C10.8419 8.25 11.1777 8.58579 11.1777 9V16C11.1777 16.4142 10.8419 16.75 10.4277 16.75C10.0135 16.75 9.67774 16.4142 9.67773 16V9C9.67773 8.58579 10.0135 8.25 10.4277 8.25Z"
                                                                  fill="white" />
                                                        </svg>
                                                    </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                @foreach($cart as $productId => $item)
                                    <tr>
                                        <!-- Столбец с чекбоксом -->
                                        <td class="details-control">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
                                        </td>

                                        <!-- Столбец с изображением товара -->
                                        <td>
                                            <div class="tabel-item">
                                                <div class="tabel-img">
                                                    <img src="/images/small/tabel-4-real.png" alt="img">
                                                </div>
                                            </div>
                                        </td>

                                        <!-- Столбец с названием и дополнительной информацией -->
                                        <td>
                                            <div class="tabel-text">
                                                <h5>{{ $item['name'] }}</h5>
                                                <a href="#"><span>Size :</span> Small</a>
                                                <p><span>Addon :</span> Soft Drinks (+$30)</p>
                                            </div>
                                        </td>

                                        <!-- Столбец с ценой -->
                                        <td>
                                            <div class="tabel-text">
                                                <h6>${{ number_format($item['price'], 2) }}</h6>
                                            </div>
                                        </td>

                                        <!-- Столбец с кнопками для изменения количества товара -->
                                        <td>
                                            <div class="tabel-text-btn">
                                                <div class="grid d-flex align-items-center">
                                                    <!-- Кнопка уменьшения количества -->
                                                    <form action="{{ route('cart.update', $productId) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('POST')
                                                        <input type="hidden" name="quantity" value="{{ $item['quantity'] - 1 }}">
                                                        <button type="submit" class="btn btn-minus" @if($item['quantity'] <= 1) disabled @endif>
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                    </form>

                                                    <!-- Текущее количество товара -->
                                                    <div class="column product-qty mx-2">{{ $item['quantity'] }}</div>

                                                    <!-- Кнопка увеличения количества -->
                                                    <form action="{{ route('cart.update', $productId) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('POST')
                                                        <input type="hidden" name="quantity" value="{{ $item['quantity'] + 1 }}">
                                                        <button type="submit" class="btn btn-plus">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>


                                        <!-- Столбец с общей стоимостью товара (цена * количество) -->
                                        <td>
                                            <div class="tabel-text">
                                                <h6>${{ number_format($item['price'] * $item['quantity'], 2) }}</h6>
                                            </div>
                                        </td>

                                        <!-- Столбец с кнопкой удаления товара -->
                                        <td>
                                            <div class="tabel-modal-btn">
                                                <button type="button" class="view-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.1303 14.1469C22.2899 12.9268 22.2899 11.0732 21.1303 9.8531C19.1745 7.79533 15.8155 5 12 5C8.18448 5 4.82549 7.79533 2.86971 9.8531C1.7101 11.0732 1.7101 12.9268 2.86971 14.1469C4.82549 16.2047 8.18448 19 12 19C15.8155 19 19.1745 16.2047 21.1303 14.1469ZM12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" fill="white" />
                                                        </svg>
                                                    </span> View
                                                </button>
                                                <a href="">
                                                    <span>
                                                        <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.834 0.890599C6.20493 0.334202 6.8294 0 7.4981 0H9.35737C10.0261 0 10.6505 0.334202 11.0215 0.8906L11.9277 2.25H15.6777C16.0919 2.25 16.4277 2.58579 16.4277 3C16.4277 3.41421 16.0919 3.75 15.6777 3.75H1.17773C0.763521 3.75 0.427734 3.41421 0.427734 3C0.427734 2.58579 0.763521 2.25 1.17773 2.25H4.92773L5.834 0.890599ZM11.4277 20H5.42773C3.2186 20 1.42773 18.2091 1.42773 16V5H15.4277V16C15.4277 18.2091 13.6369 20 11.4277 20ZM6.42773 8.25C6.84195 8.25 7.17773 8.58579 7.17773 9V16C7.17773 16.4142 6.84195 16.75 6.42773 16.75C6.01352 16.75 5.67773 16.4142 5.67773 16L5.67773 9C5.67773 8.58579 6.01352 8.25 6.42773 8.25ZM10.4277 8.25C10.8419 8.25 11.1777 8.58579 11.1777 9V16C11.1777 16.4142 10.8419 16.75 10.4277 16.75C10.0135 16.75 9.67774 16.4142 9.67773 16V9C9.67773 8.58579 10.0135 8.25 10.4277 8.25Z" fill="white" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>

                                        <!-- Форма для удаления товара из корзины -->
                                        <td>
                                            <form action="{{ route('cart.remove', $productId) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" style="border: none; background: transparent; padding: 0;">
                                                    <span>
                                                        <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.834 0.890599C6.20493 0.334202 6.8294 0 7.4981 0H9.35737C10.0261 0 10.6505 0.334202 11.0215 0.8906L11.9277 2.25H15.6777C16.0919 2.25 16.4277 2.58579 16.4277 3C16.4277 3.41421 16.0919 3.75 15.6777 3.75H1.17773C0.763521 3.75 0.427734 3.41421 0.427734 3C0.427734 2.58579 0.763521 2.25 1.17773 2.25H4.92773L5.834 0.890599ZM11.4277 20H5.42773C3.2186 20 1.42773 18.2091 1.42773 16V5H15.4277V16C15.4277 18.2091 13.6369 20 11.4277 20ZM6.42773 8.25C6.84195 8.25 7.17773 8.58579 7.17773 9V16C7.17773 16.4142 6.84195 16.75 6.42773 16.75C6.01352 16.75 5.67773 16.4142 5.67773 16L5.67773 9C5.67773 8.58579 6.01352 8.25 6.42773 8.25ZM10.4277 8.25C10.8419 8.25 11.1777 8.58579 11.1777 9V16C11.1777 16.4142 10.8419 16.75 10.4277 16.75C10.0135 16.75 9.67774 16.4142 9.67773 16V9C9.67773 8.58579 10.0135 8.25 10.4277 8.25Z" fill="white" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                 <tr>
                                    <td class="details-control">
                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel-0"
                                               value="" aria-label="...">
                                    </td>
                                    <td>
                                        <div class="tabel-item">
                                            <div class="tabel-img">
                                                <img src="/images/small/tabel-1-real.png" alt="img">
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text">
                                            <h5>{{ $item['name'] }}</h5>
                                            <a href="#"><span>Size :</span> Small</a>
                                            <p><span>Addon :</span>Soft Drinks (+$30)</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text">
                                            <h6>${{ number_format($item['price'], 2) }}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-text-btn">
                                            <div class="grid d-flex align-items-center">
                                                <!-- Кнопка уменьшения количества -->
                                                <form action="{{ route('cart.update', $productId) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="hidden" name="quantity" value="{{ $item['quantity'] - 1 }}">
                                                    <button type="submit" class="btn btn-minus" @if($item['quantity'] <= 1) disabled @endif>
                                                        <i class="fa-solid fa-minus"></i>
                                                    </button>
                                                </form>

                                                <!-- Текущее количество товара -->
                                                <div class="column product-qty mx-2">{{ $item['quantity'] }}</div>

                                                <!-- Кнопка увеличения количества -->
                                                <form action="{{ route('cart.update', $productId) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="hidden" name="quantity" value="{{ $item['quantity'] + 1 }}">
                                                    <button type="submit" class="btn btn-plus">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="tabel-text">
                                            <h6>${{ number_format($total, 2) }}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabel-modal-btn">
                                            <button type="button" class="view-btn" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M21.1303 14.1469C22.2899 12.9268 22.2899 11.0732 21.1303 9.8531C19.1745 7.79533 15.8155 5 12 5C8.18448 5 4.82549 7.79533 2.86971 9.8531C1.7101 11.0732 1.7101 12.9268 2.86971 14.1469C4.82549 16.2047 8.18448 19 12 19C15.8155 19 19.1745 16.2047 21.1303 14.1469ZM12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                                                  fill="white" />
                                                        </svg></span> View
                                            </button>
                                            <a href="{{ route('cart.remove', $productId) }}">
                                                    <span>
                                                        <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M5.834 0.890599C6.20493 0.334202 6.8294 0 7.4981 0H9.35737C10.0261 0 10.6505 0.334202 11.0215 0.8906L11.9277 2.25H15.6777C16.0919 2.25 16.4277 2.58579 16.4277 3C16.4277 3.41421 16.0919 3.75 15.6777 3.75H1.17773C0.763521 3.75 0.427734 3.41421 0.427734 3C0.427734 2.58579 0.763521 2.25 1.17773 2.25H4.92773L5.834 0.890599ZM11.4277 20H5.42773C3.2186 20 1.42773 18.2091 1.42773 16V5H15.4277V16C15.4277 18.2091 13.6369 20 11.4277 20ZM6.42773 8.25C6.84195 8.25 7.17773 8.58579 7.17773 9V16C7.17773 16.4142 6.84195 16.75 6.42773 16.75C6.01352 16.75 5.67773 16.4142 5.67773 16L5.67773 9C5.67773 8.58579 6.01352 8.25 6.42773 8.25ZM10.4277 8.25C10.8419 8.25 11.1777 8.58579 11.1777 9V16C11.1777 16.4142 10.8419 16.75 10.4277 16.75C10.0135 16.75 9.67774 16.4142 9.67773 16V9C9.67773 8.58579 10.0135 8.25 10.4277 8.25Z"
                                                                  fill="white" />
                                                        </svg>
                                                    </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>





                            <!-- modal  -->

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"> </button>
                                        <div class="modal-body">
                                            <div class="featured-item  ">
                                                <div class="featured-item-img">
                                                    <img src="./images/thumb/featured-3-real.png"
                                                         alt="featured-thumb">

                                                    <div class="featured-item-img-overlay">
                                                        <div class="featured-item-img-over-text">
                                                            <div class="right-text">
                                                                <h5> 4.7(2.5K) </h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="modal-body-text">
                                                <h3>{{ $item['name'] }}</h3>
                                                <h5>${{ number_format($item['price'], 2) }}</h5>
                                            </div>


                                            <div class="modal-body-item-box">


                                                <div class="modal-body-item-box-text">
                                                    <p>Select Addon <span>(Optional)</span></p>
                                                </div>

                                                <div class="together-box-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Chicken Leg ($30.00)
                                                        </label>
                                                    </div>



                                                    <div class="form-check-btn">
                                                        <div class="form-check-btn">

                                                            <div class="grid">
                                                                <button class="btn btn-minus "><i
                                                                        class="fa-solid fa-minus"></i></button>
                                                                <div class="column product-qty">0</div>
                                                                <button class="btn btn-plus "><i
                                                                        class="fa-solid fa-plus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="together-box-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="flexCheckDefault1">
                                                        <label class="form-check-label" for="flexCheckDefault1">
                                                            Drinks ($25.00)
                                                        </label>
                                                    </div>



                                                    <div class="form-check-btn">
                                                        <div class="form-check-btn">

                                                            <div class="grid">
                                                                <button class="btn btn-minus "><i
                                                                        class="fa-solid fa-minus"></i></button>
                                                                <div class="column product-qty">0</div>
                                                                <button class="btn btn-plus "><i
                                                                        class="fa-solid fa-plus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="together-box-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="flexCheckDefault2">
                                                        <label class="form-check-label" for="flexCheckDefault2">
                                                            {{ $item['name'] }}

                                                        </label>
                                                    </div>



                                                    <div class="form-check-btn">
                                                        <div class="form-check-btn">

                                                            <div class="grid">
                                                                <button class="btn btn-minus "><i
                                                                        class="fa-solid fa-minus"></i></button>
                                                                <div class="column product-qty">0</div>
                                                                <button class="btn btn-plus "><i
                                                                        class="fa-solid fa-plus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="together-box-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="flexCheckDefault3">
                                                        <label class="form-check-label" for="flexCheckDefault3">
                                                            ${{ number_format($item['price'], 2) }}
                                                        </label>
                                                    </div>



                                                    <div class="form-check-btn">
                                                        <div class="form-check-btn">

                                                            <div class="grid">
                                                                <button class="btn btn-minus "><i
                                                                        class="fa-solid fa-minus"></i></button>
                                                                <div class="column product-qty">0</div>
                                                                <button class="btn btn-plus "><i
                                                                        class="fa-solid fa-plus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="together-box-inner-btn">

                                                    <div class="modal-main">
                                                        <div class="grid-text">
                                                            <p>Select Quantity</p>
                                                        </div>
                                                        <div class="grid">
                                                            <button class="btn btn-minus "><i
                                                                    class="fa-solid fa-minus"></i></button>
                                                            <div class="column product-qty">2</div>
                                                            <button class="btn btn-plus "><i
                                                                    class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </div>

                                                    <div class="modal-main modal-main-two ">

                                                        <div class="grid-text">
                                                            <p>Select Size</p>
                                                        </div>
                                                        <div class="together-box-inner-btn-dropdown">
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton1"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Small <span> $40
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M7 10L12 14L17 10" stroke="white"
                                                                                  stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li><a class="dropdown-item" href="#">xl</a></li>
                                                                    <li><a class="dropdown-item" href="#">xxl</a></li>
                                                                    <li><a class="dropdown-item" href="#">xxxl</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>




                                                    </div>



                                                </div>

                                                <div class="together-box-inner-btn-btm">
                                                    <a href="#" class="main-btn-six" tabindex="-1">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                </path>
                                                                <path
                                                                    d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path
                                                                    d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path d="M14 8L14 13" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                      stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        Add to Cart
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>







                        </div>


                        <div class="tabel-main-btn">
                            <a href="{{ route('checkout') }}" class="main-btn-six">
                                Process to Checkout
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 16L18 12M18 12L14 8M18 12L6 12" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </section>


@endsection
