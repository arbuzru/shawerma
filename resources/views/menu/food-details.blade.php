@extends('layouts.app')

@section('content')


    <!-- ===== Loader Start ===== -->
    <div class="preloader-wrap">
        <div class="loader">
            <img src="./images/thumb/loader-2.gif" alt="loader">
        </div>
    </div>
    <!-- ===== Loader End ===== -->


    <main>

        <!-- banner  -->

        <div class="inner-banner">
            <div class="container">
                <div class="row  ">
                    <div class="col-lg-12">
                        <div class="inner-banner-head">
                            <h1>Food Details</h1>
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
                                <span>Food Details</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- banner  -->




        <!-- Food Details part-start   -->


        <section class="food-details-section s-padding">
            <div class="container">
                <div class="row">
                    <!-- Левая часть: изображение и описание продукта -->
                    <div class="col-md-6">
                        <img src="{{ asset('storage/images/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
                    </div>

                    <!-- Правая часть: название, описание, цена и форма добавления в корзину -->
                    <div class="col-md-6">
                        <h2>{{ $product->name }}</h2>
                        <p>{{ $product->description }}</p>
                        <h4>${{ number_format($product->price, 2) }}</h4>

                        <!-- Форма для добавления в корзину -->
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1">
                            </div>
                            <button type="submit" class="btn btn-success mt-3">Add to Cart</button>
                        </form>
                    </div>
                </div>

                <!-- Блок с "Frequently Bought Together" -->
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="together-box">
                            <div class="together-box-text">
                                <h5>Frequently Bought Together</h5>
                            </div>

                            <!-- Продукт 1 (Chicken Leg) -->
                            @foreach ($relatedProducts as $relatedProduct)
                                <div class="together-box-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $relatedProduct->id }}" id="relatedProduct{{ $relatedProduct->id }}">
                                        <label class="form-check-label" for="relatedProduct{{ $relatedProduct->id }}">
                                            {{ $relatedProduct->name }} (${{ number_format($relatedProduct->price, 2) }})
                                        </label>
                                    </div>
                                    <div class="form-check-btn">
                                        <div class="grid">
                                            <button class="btn btn-minus"><i class="fa-solid fa-minus"></i></button>
                                            <div class="column product-qty">0</div>
                                            <button class="btn btn-plus"><i class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <!-- Дополнительная кнопка "Add to Cart" -->
                            <div class="together-box-inner-btn">
                                <div class="grid">
                                    <button class="btn btn-minus"><i class="fa-solid fa-minus"></i></button>
                                    <div class="column product-qty">2</div>
                                    <button class="btn btn-plus"><i class="fa-solid fa-plus"></i></button>
                                </div>

                                <!-- Выбор вариации продукта (например, размер) -->
                                <div class="together-box-inner-btn-dropdown">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Variation Size <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 10L12 14L17 10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">10</a></li>
                                            <li><a class="dropdown-item" href="#">20</a></li>
                                            <li><a class="dropdown-item" href="#">30</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Кнопка для добавления выбранных продуктов в корзину -->
                            <div class="together-box-inner-btn-btm">
                                <a href="#" class="main-btn-six">
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
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Рекламные баннеры -->
                    <div class="col-lg-8">
                        <div class="blog-details-promobanner-res-df">
                            <div class="blog-details-promobanner">
                                <a href="#"><img src="{{ asset('images/thumb/promobanner-01-real.png') }}" class="w-100" alt="img"></a>
                            </div>
                            <div class="blog-details-promobanner-two">
                                <a href="#"><img src="{{ asset('images/thumb/promobanner-02-real.png') }}" class="w-100" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>










    </main>

@endsection
