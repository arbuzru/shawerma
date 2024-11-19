@extends('layouts.app')

@section('content')


<main>

    <!-- banner  -->

    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>All Food Menu</h1>
                    </div>

                    <div class="inner-banner-item">
                        <div class="left">
                            <li><a href="{{ route('home') }}">Home</a></li>
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
                            <span>Food Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner  -->



    <!-- Food Details part start  -->


    <section class="food-details   ">
        <div class="container">


            <div class="row">
                <div class="col-lg-12">
                    <div class="food-details-btn-box">
                        <div class="food-details-btn-box-item">
                            <div class="food-details-btn-item">
                                <div class="food-details-btn-btn">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                           id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false">
                                            All Category <span class="pl-8px"><svg width="16" height="16"
                                                                                   viewBox="0 0 16 16" fill="none"
                                                                                   xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_304_36234)">
                                                            <path d="M3.33398 5.66797L8.00065 10.3346L12.6673 5.66797"
                                                                  stroke="#6C727F" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                    </svg></span>
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="food-details-btn-btn">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                           id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="p-r-6px"><svg width="16" height="16" viewBox="0 0 16 16"
                                                                           fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_304_36238)">
                                                            <path
                                                                d="M6.68919 2.17964C7.22565 1.0495 8.77565 1.04949 9.31211 2.17964L10.2392 4.13282C10.4523 4.5816 10.8641 4.89266 11.3404 4.96462L13.4135 5.27783C14.6131 5.45905 15.0921 6.99173 14.2241 7.87142L12.7239 9.39176C12.3792 9.74109 12.222 10.2444 12.3033 10.7376L12.6575 12.8844C12.8624 14.1265 11.6084 15.0738 10.5355 14.4873L8.6812 13.4738C8.25515 13.2409 7.74615 13.2409 7.3201 13.4738L5.46583 14.4873C4.39291 15.0738 3.13893 14.1265 3.34384 12.8844L3.69798 10.7376C3.77935 10.2444 3.62206 9.74109 3.27737 9.39176L1.77723 7.87142C0.909228 6.99173 1.3882 5.45905 2.58776 5.27783L4.6609 4.96462C5.13724 4.89266 5.54903 4.5816 5.76206 4.13282L6.68919 2.17964Z"
                                                                stroke="#28303F" stroke-width="1.5"
                                                                stroke-linejoin="round" />
                                                        </g>
                                                    </svg></span> Star Rating <span class="pl-8px"><svg width="16"
                                                                                                        height="16" viewBox="0 0 16 16" fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_304_36234)">
                                                            <path d="M3.33398 5.66797L8.00065 10.3346L12.6673 5.66797"
                                                                  stroke="#6C727F" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                    </svg></span>
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="food-details-btn-btn">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                           id="dropdownMenuLink3" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="p-r-6px"><svg width="16" height="16" viewBox="0 0 16 16"
                                                                           fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_304_36238)">
                                                            <path
                                                                d="M6.68919 2.17964C7.22565 1.0495 8.77565 1.04949 9.31211 2.17964L10.2392 4.13282C10.4523 4.5816 10.8641 4.89266 11.3404 4.96462L13.4135 5.27783C14.6131 5.45905 15.0921 6.99173 14.2241 7.87142L12.7239 9.39176C12.3792 9.74109 12.222 10.2444 12.3033 10.7376L12.6575 12.8844C12.8624 14.1265 11.6084 15.0738 10.5355 14.4873L8.6812 13.4738C8.25515 13.2409 7.74615 13.2409 7.3201 13.4738L5.46583 14.4873C4.39291 15.0738 3.13893 14.1265 3.34384 12.8844L3.69798 10.7376C3.77935 10.2444 3.62206 9.74109 3.27737 9.39176L1.77723 7.87142C0.909228 6.99173 1.3882 5.45905 2.58776 5.27783L4.6609 4.96462C5.13724 4.89266 5.54903 4.5816 5.76206 4.13282L6.68919 2.17964Z"
                                                                stroke="#28303F" stroke-width="1.5"
                                                                stroke-linejoin="round" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            Price Range
                                            <span class="pl-8px">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_304_36234)">
                                                            <path d="M3.33398 5.66797L8.00065 10.3346L12.6673 5.66797"
                                                                  stroke="#6C727F" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                    </svg></span>
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="food-details-btn-btn">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                           id="dropdownMenuLink4" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="p-r-6px"><svg width="18" height="18" viewBox="0 0 18 18"
                                                                           fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3.75" y="3.75" width="10.5" height="10.5" rx="4"
                                                              stroke="#28303F" />
                                                        <path d="M9 6.75V9L7.5 9.75" stroke="#28303F"
                                                              stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M12.75 14.25L12.75 14.5C12.75 15.6046 11.8546 16.5 10.75 16.5L7.25 16.5C6.14543 16.5 5.25 15.6046 5.25 14.5L5.25 14.25"
                                                            stroke="#28303F" stroke-linecap="square" />
                                                        <path
                                                            d="M12.75 3.75L12.75 3.5C12.75 2.39543 11.8546 1.5 10.75 1.5L7.25 1.5C6.14543 1.5 5.25 2.39543 5.25 3.5L5.25 3.75"
                                                            stroke="#28303F" stroke-linecap="square" />
                                                    </svg>
                                                </span>
                                            Meal Type
                                            <span class="pl-8px">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_304_36234)">
                                                            <path d="M3.33398 5.66797L8.00065 10.3346L12.6673 5.66797"
                                                                  stroke="#6C727F" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                    </svg></span>
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="food-details-btn-search-box">
                                <input type="email" class="form-control" id="exampleFormControlInput7"
                                       placeholder="Enter keyword here">

                                <div class="food-details-btn-search-btn">
                                    <a href="#" class="icon">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18.5 18.5L22 22M21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21C16.7467 21 21 16.7467 21 11.5Z"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                    </a>
                                </div>

                            </div>
                        </div>


                        <div class="food-details-btn-box-right-btn">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true">
                                            <span>
                                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.34857 0H2.96329C1.32953 0 0 1.32953 0 2.96329V8.34791C0 9.98167 1.32953 11.3112 2.96329 11.3112H8.34791C9.98167 11.3112 11.3112 9.98167 11.3112 8.34791V2.96329C11.3119 1.32953 9.98233 0 8.34857 0ZM9.33633 8.34857C9.33633 8.89316 8.89316 9.33633 8.34857 9.33633H2.96329C2.4187 9.33633 1.97553 8.89316 1.97553 8.34857V2.96395C1.97553 2.41936 2.4187 1.97618 2.96329 1.97618H8.34791C8.8925 1.97618 9.33567 2.41936 9.33567 2.96395L9.33633 8.34857ZM21.6715 0H16.2862C14.6525 0 13.3229 1.32953 13.3229 2.96329V8.34791C13.3229 9.98167 14.6525 11.3112 16.2862 11.3112H21.6715C23.3053 11.3112 24.6348 9.98167 24.6348 8.34791V2.96329C24.6348 1.32953 23.3059 0 21.6715 0ZM22.6593 8.34857C22.6593 8.89316 22.2161 9.33633 21.6715 9.33633H16.2862C15.7416 9.33633 15.2985 8.89316 15.2985 8.34857V2.96395C15.2985 2.41936 15.7416 1.97618 16.2862 1.97618H21.6715C22.2161 1.97618 22.6593 2.41936 22.6593 2.96395V8.34857ZM8.34857 12.6888H2.96329C1.32953 12.6888 0 14.0183 0 15.6521V21.0367C0 22.6705 1.32953 24 2.96329 24H8.34791C9.98167 24 11.3112 22.6705 11.3112 21.0367V15.6521C11.3119 14.0177 9.98233 12.6888 8.34857 12.6888ZM9.33633 21.0367C9.33633 21.5813 8.89316 22.0245 8.34857 22.0245H2.96329C2.4187 22.0245 1.97553 21.5813 1.97553 21.0367V15.6521C1.97553 15.1075 2.4187 14.6643 2.96329 14.6643H8.34791C8.8925 14.6643 9.33567 15.1075 9.33567 15.6521L9.33633 21.0367ZM21.6715 12.6888H16.2862C14.6525 12.6888 13.3229 14.0183 13.3229 15.6521V21.0367C13.3229 22.6705 14.6525 24 16.2862 24H20.3097C20.855 24 21.2975 23.5575 21.2975 23.0122C21.2975 22.467 20.855 22.0245 20.3097 22.0245H16.2862C15.7416 22.0245 15.2985 21.5813 15.2985 21.0367V15.6521C15.2985 15.1075 15.7416 14.6643 16.2862 14.6643H21.6715C22.2161 14.6643 22.6593 15.1075 22.6593 15.6521V20.1655C22.6593 20.7108 23.1018 21.1533 23.647 21.1533C24.1923 21.1533 24.6348 20.7108 24.6348 20.1655V15.6521C24.6348 14.0177 23.3059 12.6888 21.6715 12.6888Z" />
                                                </svg>
                                            </span></button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false"><span>
                                                <i class="fa-solid fa-bars"></i>
                                            </span></button>
                                </li>
                            </ul>


                        </div>



                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col-lg-4 col-md-6 res-popular-item-mt-30px">
                                        <div class="featured-item">
                                            <div class="featured-item-img">
                                                <!-- Используем путь изображения из базы данных -->
                                                <img src="{{ asset('storage/images/thumb/' . $product->image) }}" class="w-100" alt="{{ $product->name }}">
                                                <div class="featured-item-img-overlay">
                                                    <div class="featured-item-img-over-text">
                                                        <div class="left-text">
                                                            <a href="#" class="icon">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                            </a>
                                                        </div>
                                                        <div class="right-text">
                                                            <h5>20% Off</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="featured-item-text">
                                                <div class="text-item">
                                                    <div class="left">
                                                        <h3>${{ number_format($product->price, 2) }}</h3>
                                                    </div>
                                                    <div class="right">
                                                        <h5>4.7 (2.5K)</h5>
                                                    </div>
                                                </div>

                                                <div class="text-item-center">
                                                    <h3><a href="{{ route('menu.food-details', $product->id) }}">{{ $product->name }}</a></h3>
                                                </div>

                                                <div class="text-item-center-item-box">
                                                    @php
                                                        $cartItem = $cart[$product->id] ?? null;
                                                    @endphp

                                                    @if($cartItem)
                                                        <div class="together-box-inner-btn-btm">
                                                            <form action="{{ route('cart.update', $product->id) }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="quantity" value="{{ $cartItem['quantity'] + 1 }}">
                                                                <button type="submit" class="main-btn-six btn btn-success" tabindex="-1">
                                                                    <span>Добавить еще ({{ $cartItem['quantity'] }})</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    @else
                                                        <div class="together-box-inner-btn-btm">
                                                            <form action="{{ route('cart.add') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                                <button type="submit" class="main-btn-six btn btn-primary" tabindex="-1">
                                                                    <span>Добавить в корзину</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">

                            <div class="row">
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="featured-item  ">
                                        <div class="featured-item-img-populer">
                                            <img src="./images/victor/populer.png" alt="img">
                                        </div>
                                        <div class="featured-item-img">
                                            <img src="./images/thumb/featured-1-real.png" class="w-100"
                                                 alt="featured-thumb">

                                            <div class="featured-item-img-overlay">
                                                <div class="featured-item-img-over-text">
                                                    <div class="left-text">
                                                        <a href="./dashboard-wishlist.html" class="icon">
                                                                <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-text">
                                                        <h5>20% Off </h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="featured-item-text">
                                            <div class="text-item">
                                                <div class="left">
                                                    <h3>{{ $product->price }}</h3>
                                                </div>
                                                <div class="right">
                                                    <div class="icon">
                                                            <span><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                                        fill="#FFB23E" />
                                                                </svg></span>
                                                    </div>
                                                    <h5> 4.7(2.5K)</h5>
                                                </div>
                                            </div>

                                            <div class="text-item-center">
                                                <h3><a href="{{ route('menu.food-details', $product->id) }}">{{ $product->name }}</a>
                                                </h3>
                                            </div>

                                            <div class="text-item-center-item-box">
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>4 Piece Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>

                                                <div class="together-box-inner-btn-btm">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                        <button type="submit" class="main-btn-six btn btn-success mt-3" tabindex="-1">
                                                            <!-- Иконка с добавлением в корзину -->
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 res-popular-item-mt-30px res-popular-item-mt-0px ">
                                    <div class="featured-item">
                                        <div class="featured-item-img">
                                            <img src="./images/thumb/traditional-2-real.png" class="w-100"
                                                 alt="featured-thumb">

                                            <div class="featured-item-img-overlay">
                                                <div class="featured-item-img-over-text">
                                                    <div class="left-text">
                                                        <a href="./dashboard-wishlist.html" class="icon">
                                                                <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-text">
                                                        <h5>20% Off </h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="featured-item-text">
                                            <div class="text-item">
                                                <div class="left">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>
                                                <div class="right">
                                                    <div class="icon">
                                                            <span><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                                        fill="#FFB23E" />
                                                                </svg></span>
                                                    </div>
                                                    <h5> 4.7(2.5K)</h5>
                                                </div>
                                            </div>

                                            <div class="text-item-center">
                                                <h3><a href="{{ route('menu.food-details', $product->id)  }}">{{ $product->name }}</a></h3>
                                            </div>

                                            <div class="text-item-center-item-box">
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>4 Piece Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>

                                                <div class="together-box-inner-btn-btm">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                        <button type="submit" class="main-btn-six btn btn-success mt-3" tabindex="-1">
                                                            <!-- Иконка с добавлением в корзину -->
                                                            <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
                                                                        <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
                                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 res-popular-item-mt-30px">
                                    <div class="featured-item">
                                        <div class="featured-item-img">
                                            <img src="./images/thumb/traditional-3-real.png" class="w-100"
                                                 alt="featured-thumb">

                                            <div class="featured-item-img-overlay">
                                                <div class="featured-item-img-over-text">
                                                    <div class="left-text">
                                                        <a href="./dashboard-wishlist.html" class="icon">
                                                                <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-text">
                                                        <h5>20% Off </h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="featured-item-text">
                                            <div class="text-item">
                                                <div class="left">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>
                                                <div class="right">
                                                    <div class="icon">
                                                            <span><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                                        fill="#FFB23E" />
                                                                </svg></span>
                                                    </div>
                                                    <h5> 4.7(2.5K)</h5>
                                                </div>
                                            </div>

                                            <div class="text-item-center">
                                                <h3><a href="{{ route('menu.food-details', $product->id) }}">{{ $product->name }}</a>
                                                </h3>
                                            </div>

                                            <div class="text-item-center-item-box">
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>4 Piece Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>

                                                <div class="together-box-inner-btn-btm">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                        <button type="submit" class="main-btn-six btn btn-success mt-3" tabindex="-1">
                                                            <!-- Иконка с добавлением в корзину -->
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 featured-item-mt " data-aos="fade-up">
                                    <div class="featured-item">
                                        <div class="featured-item-img">
                                            <img src="./images/thumb/traditional-3-real.png" class="w-100"
                                                 alt="featured-thumb">

                                            <div class="featured-item-img-overlay">
                                                <div class="featured-item-img-over-text">
                                                    <div class="left-text">
                                                        <a href="./dashboard-wishlist.html" class="icon">
                                                                <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-text">
                                                        <h5>20% Off </h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="featured-item-text">
                                            <div class="text-item">
                                                <div class="left">
                                                    <h3>{{ $product->price }}</h3>
                                                </div>
                                                <div class="right">
                                                    <div class="icon">
                                                            <span><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                                        fill="#FFB23E" />
                                                                </svg></span>
                                                    </div>
                                                    <h5> 4.7(2.5K)</h5>
                                                </div>
                                            </div>

                                            <div class="text-item-center">
                                                <h3><a href="{{ route('menu.food-details', $product->id)  }}">{{ $product->name }}</a>
                                                </h3>
                                            </div>

                                            <div class="text-item-center-item-box">
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>4 Piece Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>

                                                <div class="together-box-inner-btn-btm">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                        <button type="submit" class="main-btn-six btn btn-success mt-3" tabindex="-1">
                                                            <!-- Иконка с добавлением в корзину -->
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 featured-item-mt" data-aos="fade-up">
                                    <div class="featured-item">
                                        <div class="featured-item-img">
                                            <img src="./images/thumb/traditional-4-real.png" class="w-100"
                                                 alt="featured-thumb">

                                            <div class="featured-item-img-overlay">
                                                <div class="featured-item-img-over-text">
                                                    <div class="left-text">
                                                        <a href="./dashboard-wishlist.html" class="icon">
                                                                <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-text">
                                                        <h5>20% Off </h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="featured-item-text">
                                            <div class="text-item">
                                                <div class="left">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>
                                                <div class="right">
                                                    <div class="icon">
                                                            <span><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                                        fill="#FFB23E" />
                                                                </svg></span>
                                                    </div>
                                                    <h5> 4.7(2.5K)</h5>
                                                </div>
                                            </div>

                                            <div class="text-item-center">
                                                <h3><a href="{{ route('menu.food-details', $product->id)  }}">{{ $product->name }}</a>
                                                </h3>
                                            </div>

                                            <div class="text-item-center-item-box">
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>4 Piece Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>

                                                <div class="together-box-inner-btn-btm">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                        <button type="submit" class="main-btn-six btn btn-success mt-3" tabindex="-1">
                                                            <!-- Иконка с добавлением в корзину -->
                                                            <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
                                                                        <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
                                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 featured-item-mt" data-aos="fade-up">
                                    <div class="featured-item">
                                        <div class="featured-item-img">
                                            <img src="./images/thumb/traditional-5-real.png" class="w-100"
                                                 alt="featured-thumb">

                                            <div class="featured-item-img-overlay">
                                                <div class="featured-item-img-over-text">
                                                    <div class="left-text">
                                                        <a href="./dashboard-wishlist.html" class="icon">
                                                                <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-text">
                                                        <h5>20% Off </h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="featured-item-text">
                                            <div class="text-item">
                                                <div class="left">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>
                                                <div class="right">
                                                    <div class="icon">
                                                            <span><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                                        fill="#FFB23E" />
                                                                </svg></span>
                                                    </div>
                                                    <h5> 4.7(2.5K)</h5>
                                                </div>
                                            </div>

                                            <div class="text-item-center">
                                                <h3><a href="{{ route('menu.food-details', $product->id)  }}">{{ $product->name }}</a>
                                                </h3>
                                            </div>

                                            <div class="text-item-center-item-box">
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>4 Piece Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>

                                                <div class="together-box-inner-btn-btm">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                        <button type="submit" class="main-btn-six btn btn-success mt-3" tabindex="-1">
                                                            <!-- Иконка с добавлением в корзину -->
                                                            <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
                                                                        <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
                                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 featured-item-mt" data-aos="fade-up">
                                    <div class="featured-item">
                                        <div class="featured-item-img">
                                            <img src="./images/thumb/traditional-6-real.png" class="w-100"
                                                 alt="featured-thumb">

                                            <div class="featured-item-img-overlay">
                                                <div class="featured-item-img-over-text">
                                                    <div class="left-text">
                                                        <a href="./dashboard-wishlist.html" class="icon">
                                                                <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-text">
                                                        <h5>20% Off </h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="featured-item-text">
                                            <div class="text-item">
                                                <div class="left">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>
                                                <div class="right">
                                                    <div class="icon">
                                                            <span><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                                        fill="#FFB23E" />
                                                                </svg></span>
                                                    </div>
                                                    <h5> 4.7(2.5K)</h5>
                                                </div>
                                            </div>

                                            <div class="text-item-center">
                                                <h3><a href="{{ route('menu.food-details', $product->id)  }}">{{ $product->name }}</a></h3>
                                            </div>

                                            <div class="text-item-center-item-box">
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>4 Piece Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>

                                                <div class="together-box-inner-btn-btm">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                        <button type="submit" class="main-btn-six btn btn-success mt-3" tabindex="-1">
                                                            <!-- Иконка с добавлением в корзину -->
                                                            <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
                                                                        <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
                                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 featured-item-mt" data-aos="fade-up">
                                    <div class="featured-item  ">

                                        <div class="featured-item-img">
                                            <img src="./images/thumb/featured-1-real.png" class="w-100"
                                                 alt="featured-thumb">

                                            <div class="featured-item-img-overlay">
                                                <div class="featured-item-img-over-text">
                                                    <div class="left-text">
                                                        <a href="./dashboard-wishlist.html" class="icon">
                                                                <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-text">
                                                        <h5>20% Off </h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="featured-item-text">
                                            <div class="text-item">
                                                <div class="left">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>
                                                <div class="right">
                                                    <div class="icon">
                                                            <span><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                                        fill="#FFB23E" />
                                                                </svg></span>
                                                    </div>
                                                    <h5> 4.7(2.5K)</h5>
                                                </div>
                                            </div>

                                            <div class="text-item-center">
                                                <h3><a href="{{ route('menu.food-details', $product->id)  }}">{{ $product->name }}</a>
                                                </h3>
                                            </div>

                                            <div class="text-item-center-item-box">
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>4 Piece Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>

                                                <div class="together-box-inner-btn-btm">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                        <button type="submit" class="main-btn-six btn btn-success mt-3" tabindex="-1">
                                                            <!-- Иконка с добавлением в корзину -->
                                                            <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
                                                                        <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
                                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 featured-item-mt" data-aos="fade-up">
                                    <div class="featured-item">
                                        <div class="featured-item-img">
                                            <img src="./images/thumb/traditional-5-real.png" class="w-100"
                                                 alt="featured-thumb">

                                            <div class="featured-item-img-overlay">
                                                <div class="featured-item-img-over-text">
                                                    <div class="left-text">
                                                        <a href="./dashboard-wishlist.html" class="icon">
                                                                <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-text">
                                                        <h5>20% Off </h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="featured-item-text">
                                            <div class="text-item">
                                                <div class="left">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>
                                                <div class="right">
                                                    <div class="icon">
                                                            <span><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                                        fill="#FFB23E" />
                                                                </svg></span>
                                                    </div>
                                                    <h5> 4.7(2.5K)</h5>
                                                </div>
                                            </div>

                                            <div class="text-item-center">
                                                <h3><a href="{{ route('menu.food-details', $product->id)  }}">{{ $product->name }}</a>
                                                </h3>
                                            </div>

                                            <div class="text-item-center-item-box">
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>4 Piece Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="text-item-center-item">
                                                    <div class="icon">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>

                                                <div class="together-box-inner-btn-btm">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                        <button type="submit" class="main-btn-six btn btn-success mt-3" tabindex="-1">
                                                            <!-- Иконка с добавлением в корзину -->
                                                            <span>
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
                                                                        <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
                                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>





                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab">



                            <div class="row popular-item-box-mt">
                                <div class="col-lg-6">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./images/thumb/popular-1-real.png" alt="thumb">

                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E" />
                                                            </svg>
                                                        </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Quinoa-Stuffed Bell Pepper</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                        <button type="submit" class="main-btn-five btn btn-success mt-3" tabindex="-1">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 res-popular-item-mt-30px">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./images/thumb/popular-2-real.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E" />
                                                            </svg>
                                                        </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Grilled Pork Chop Chutney</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                         <button type="submit" class="main-btn-five btn btn-success mt-3" tabindex="-1">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 popular-item-mt-30px">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./images/thumb/popular-3-real.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E" />
                                                            </svg>
                                                        </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Fish Tacos Chipotle Crema</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <button type="submit" class="main-btn-five btn btn-success mt-3" tabindex="-1">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 popular-item-mt-30px">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./images/thumb/popular-4-real.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E" />
                                                            </svg>
                                                        </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>BBQ Pulled Pork Sandwich</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <button type="submit" class="main-btn-five btn btn-success mt-3" tabindex="-1">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 popular-item-mt-30px">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./images/thumb/popular-5-real.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E" />
                                                            </svg>
                                                        </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Greens Salad Vinaigrette</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <button type="submit" class="main-btn-five btn btn-success mt-3" tabindex="-1">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 popular-item-mt-30px">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./images/thumb/popular-6-real.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E" />
                                                            </svg>
                                                        </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Bruschetta Tomato & Basil</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <button type="submit" class="main-btn-five btn btn-success mt-3" tabindex="-1">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 popular-item-mt-30px res-popular-item-mt-30px">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./images/thumb/popular-2-real.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E" />
                                                            </svg>
                                                        </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Grilled Pork Chop Chutney</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <button type="submit" class="main-btn-five btn btn-success mt-3" tabindex="-1">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 popular-item-mt-30px">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./images/thumb/popular-3-real.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E" />
                                                            </svg>
                                                        </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Fish Tacos Chipotle Crema</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <button type="submit" class="main-btn-five btn btn-success mt-3" tabindex="-1">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 popular-item-mt-30px">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./images/thumb/popular-4-real.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E" />
                                                            </svg>
                                                        </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>BBQ Pulled Pork Sandwich</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <button type="submit" class="main-btn-five btn btn-success mt-3" tabindex="-1">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 popular-item-mt-30px">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./images/thumb/popular-5-real.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E" />
                                                            </svg>
                                                        </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Greens Salad Vinaigrette</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <button type="submit" class="main-btn-five btn btn-success mt-3" tabindex="-1">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 popular-item-mt-30px">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./images/thumb/popular-6-real.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E" />
                                                            </svg>
                                                        </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Bruschetta Tomato & Basil</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <button type="submit" class="main-btn-five btn btn-success mt-3" tabindex="-1">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 popular-item-mt-30px">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./images/thumb/popular-6-real.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E" />
                                                            </svg>
                                                        </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Bruschetta Tomato & Basil</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>${{ $product->price }}</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <button type="submit" class="main-btn-five btn btn-success mt-3" tabindex="-1">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                          stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

            <div class="row blog-mt-48px">
                <div class="col-lg-7 col-md-6 ">
                    <div class="next-prev-btn">
                        <ul>
                            <li><a href="#"> <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 8L6 12M6 12L10 16M6 12L18 12" stroke="#F01543"
                                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg></span> </a></li>
                            <li><a href="#" class="active"> Next Page <span><svg width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 16L18 12M18 12L14 8M18 12L6 12" stroke="white"
                                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg></span> </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Page</a></li>
                            <li class="page-item active " aria-current="page">
                                <span class="page-link">2</span>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">of 10</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>




        </div>
    </section>



    <!-- Food Details part end  -->










    <!-- faq part-star -->


    <section class="faq s-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12" data-aos="fade-left">
                    <div class="faq-head">
                        <h2>Foodie FAQ: Your Culinary Queries Answered</h2>
                    </div>


                    <div class="faq-main">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        What type of cuisine does your restaurant offer?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We offer [insert type of cuisine, e.g., Italian, Asian fusion,
                                        Mediterranean] cuisine that combines traditional flavors with modern twists.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                        Can I make a reservation online?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                     aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We offer [insert type of cuisine, e.g., Italian, Asian fusion,
                                        Mediterranean] cuisine that combines traditional flavors with modern twists.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                        Is there a dress code for dining at your restaurant?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We offer [insert type of cuisine, e.g., Italian, Asian fusion,
                                        Mediterranean] cuisine that combines traditional flavors with modern twists.
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfour">
                                    <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                            aria-expanded="false" aria-controls="collapsefour">
                                        Is there a dress code for dining at your restaurant?
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse"
                                     aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We offer [insert type of cuisine, e.g., Italian, Asian fusion,
                                        Mediterranean] cuisine that combines traditional flavors with modern twists.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>


                <div class="col-lg-6 ">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="faq-img  ">
                                <img src="./images/thumb/faq-1-real.png" class="w-100" alt="thumb">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="faq-img">
                                <div class="faq-img-two">
                                    <img src="./images/thumb/faq-2-real.png" alt="thumb">
                                    <div class="faq-img-overlay">
                                        <div class="faq-img-overlay-text">
                                            <h2>
                                                    <span>
                                                        <svg width="24" height="32" viewBox="0 0 24 32" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 26.1844C10.3275 26.1844 8.9625 27.4919 8.9625 29.0922C8.9625 30.6926 10.3275 32 12 32C13.6725 32 15.0375 30.6926 15.0375 29.0922C15.0375 27.499 13.6725 26.1844 12 26.1844ZM3.0375 0C1.365 0 0 1.30743 0 2.90779C0 4.50815 1.365 5.81558 3.0375 5.81558C4.71 5.81558 6.075 4.50815 6.075 2.90779C6.075 1.30743 4.71 0 3.0375 0ZM3.0375 8.73052C1.365 8.73052 0 10.038 0 11.6383C0 13.2387 1.365 14.5461 3.0375 14.5461C4.71 14.5461 6.075 13.2387 6.075 11.6383C6.075 10.038 4.71 8.73052 3.0375 8.73052ZM3.0375 17.461C1.365 17.461 0 18.7685 0 20.3688C0 21.9692 1.365 23.2766 3.0375 23.2766C4.71 23.2766 6.075 21.9692 6.075 20.3688C6.075 18.7685 4.71 17.461 3.0375 17.461ZM20.9625 5.82273C22.635 5.82273 24 4.51529 24 2.91494C24 1.31458 22.635 0 20.9625 0C19.29 0 17.925 1.30743 17.925 2.90779C17.925 4.50815 19.29 5.82273 20.9625 5.82273ZM12 17.461C10.3275 17.461 8.9625 18.7685 8.9625 20.3688C8.9625 21.9692 10.3275 23.2766 12 23.2766C13.6725 23.2766 15.0375 21.9692 15.0375 20.3688C15.0375 18.7685 13.6725 17.461 12 17.461ZM20.9625 17.461C19.29 17.461 17.925 18.7685 17.925 20.3688C17.925 21.9692 19.29 23.2766 20.9625 23.2766C22.635 23.2766 24 21.9692 24 20.3688C24 18.7685 22.635 17.461 20.9625 17.461ZM20.9625 8.73052C19.29 8.73052 17.925 10.038 17.925 11.6383C17.925 13.2387 19.29 14.5461 20.9625 14.5461C22.635 14.5461 24 13.2387 24 11.6383C24 10.038 22.635 8.73052 20.9625 8.73052ZM12 8.73052C10.3275 8.73052 8.9625 10.038 8.9625 11.6383C8.9625 13.2387 10.3275 14.5461 12 14.5461C13.6725 14.5461 15.0375 13.2387 15.0375 11.6383C15.0375 10.038 13.6725 8.73052 12 8.73052ZM12 0C10.3275 0 8.9625 1.30743 8.9625 2.90779C8.9625 4.50815 10.3275 5.81558 12 5.81558C13.6725 5.81558 15.0375 4.50815 15.0375 2.90779C15.0375 1.30743 13.6725 0 12 0Z"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                235+
                                            </h2>

                                            <h4>Success
                                                <br> Event
                                            </h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="faq-img img-mt">
                                <div class="faq-img-two">
                                    <img src="./images/thumb/faq-3-real.png" alt="thumb">
                                    <div class="faq-img-overlay faq-img-overlay-two ">
                                        <div class="faq-img-overlay-text">
                                            <h2>
                                                    <span>
                                                        <svg width="24" height="32" viewBox="0 0 24 32" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 26.1844C10.3275 26.1844 8.9625 27.4919 8.9625 29.0922C8.9625 30.6926 10.3275 32 12 32C13.6725 32 15.0375 30.6926 15.0375 29.0922C15.0375 27.499 13.6725 26.1844 12 26.1844ZM3.0375 0C1.365 0 0 1.30743 0 2.90779C0 4.50815 1.365 5.81558 3.0375 5.81558C4.71 5.81558 6.075 4.50815 6.075 2.90779C6.075 1.30743 4.71 0 3.0375 0ZM3.0375 8.73052C1.365 8.73052 0 10.038 0 11.6383C0 13.2387 1.365 14.5461 3.0375 14.5461C4.71 14.5461 6.075 13.2387 6.075 11.6383C6.075 10.038 4.71 8.73052 3.0375 8.73052ZM3.0375 17.461C1.365 17.461 0 18.7685 0 20.3688C0 21.9692 1.365 23.2766 3.0375 23.2766C4.71 23.2766 6.075 21.9692 6.075 20.3688C6.075 18.7685 4.71 17.461 3.0375 17.461ZM20.9625 5.82273C22.635 5.82273 24 4.51529 24 2.91494C24 1.31458 22.635 0 20.9625 0C19.29 0 17.925 1.30743 17.925 2.90779C17.925 4.50815 19.29 5.82273 20.9625 5.82273ZM12 17.461C10.3275 17.461 8.9625 18.7685 8.9625 20.3688C8.9625 21.9692 10.3275 23.2766 12 23.2766C13.6725 23.2766 15.0375 21.9692 15.0375 20.3688C15.0375 18.7685 13.6725 17.461 12 17.461ZM20.9625 17.461C19.29 17.461 17.925 18.7685 17.925 20.3688C17.925 21.9692 19.29 23.2766 20.9625 23.2766C22.635 23.2766 24 21.9692 24 20.3688C24 18.7685 22.635 17.461 20.9625 17.461ZM20.9625 8.73052C19.29 8.73052 17.925 10.038 17.925 11.6383C17.925 13.2387 19.29 14.5461 20.9625 14.5461C22.635 14.5461 24 13.2387 24 11.6383C24 10.038 22.635 8.73052 20.9625 8.73052ZM12 8.73052C10.3275 8.73052 8.9625 10.038 8.9625 11.6383C8.9625 13.2387 10.3275 14.5461 12 14.5461C13.6725 14.5461 15.0375 13.2387 15.0375 11.6383C15.0375 10.038 13.6725 8.73052 12 8.73052ZM12 0C10.3275 0 8.9625 1.30743 8.9625 2.90779C8.9625 4.50815 10.3275 5.81558 12 5.81558C13.6725 5.81558 15.0375 4.50815 15.0375 2.90779C15.0375 1.30743 13.6725 0 12 0Z"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                235+
                                            </h2>

                                            <h4>Success
                                                <br> Event
                                            </h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="faq-img  ">

                                <div class="img-animetion">
                                    <img src="./images/thumb/faq-4-real.png" alt="thumb">
                                </div>

                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- faq part-end -->
</main>

@endsection
