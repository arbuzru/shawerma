@extends('layouts.app')

@section('content')
    <!-- ===== Loader Start ===== -->
    <div class="preloader-wrap">
        <div class="loader">
            <img src="{{ asset('images/thumb/loader-2.gif') }}" alt="loader">
        </div>
    </div>
    <!-- ===== Loader End ===== -->

    <!-- header part start  -->

    <header class="header  header-two  ">

        <div class="container">
            <div class="header-main">
                <div class="header-left">
                    <div class="header-left-btn">
                        <div class="icon">
                            <span>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 7C12 8.10457 11.1046 9 10 9C8.89543 9 8 8.10457 8 7C8 5.89543 8.89543 5 10 5C11.1046 5 12 5.89543 12 7Z"
                                        stroke-width="1.5" />
                                    <path
                                        d="M16 7C16 10.3137 12 15 10 15C8 15 4 10.3137 4 7C4 3.68629 6.68629 1 10 1C13.3137 1 16 3.68629 16 7Z"
                                        stroke-width="1.5" />
                                    <path
                                        d="M13.0003 13H14.1268C15.314 13 16.4397 13.5273 17.1997 14.4393L18.2667 15.7196C19.3522 17.0223 18.4259 19 16.7303 19H3.27042C1.57475 19 0.648436 17.0223 1.73398 15.7196L2.80096 14.4393C3.56093 13.5273 4.68672 13 5.87384 13H7.00034"
                                        stroke-width="1.5" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>

                        <div class="location-btn">
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                   id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown link
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>

                            <div class="location-btn-icon">
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.83301 8.33203L9.99967 11.6654L14.1663 8.33203" stroke="white"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="header-left-center">
                    <p>It's the last day to save. The skills for now — <span>
                            <a href="#">now on sale.</a>
                        </span></p>
                </div>


                <div class="header-right">
                    <div class="header-right-item">
                        <div class="header-right-inner">
                            <div class="icon">
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.75 14.25V13.0155C15.75 12.4022 15.3766 11.8506 14.8071 11.6228L13.2815 11.0126C12.5571 10.7229 11.7316 11.0367 11.3828 11.7345L11.25 12C11.25 12 9.375 11.625 7.875 10.125C6.375 8.625 6 6.75 6 6.75L6.26551 6.61724C6.96328 6.26836 7.27714 5.44285 6.98741 4.71852L6.37717 3.19291C6.14937 2.62343 5.59781 2.25 4.98445 2.25H3.75C2.92157 2.25 2.25 2.92157 2.25 3.75C2.25 10.3774 7.62258 15.75 14.25 15.75C15.0784 15.75 15.75 15.0784 15.75 14.25Z"
                                            stroke-width="1.5" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>


                            <div class="text">
                                <a href="tel:+17077970462">+1 707 797 0462</a>
                            </div>
                        </div>
                        <div class="header-right-inner">
                            <div class="icon">
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.66699 10V5.83333C1.66699 3.99238 3.15938 2.5 5.00033 2.5H15.0003C16.8413 2.5 18.3337 3.99238 18.3337 5.83333V14.1667C18.3337 16.0076 16.8413 17.5 15.0003 17.5H6.66699M5.00033 6.66667L8.15133 8.76733C9.27099 9.51378 10.7297 9.51378 11.8493 8.76733L15.0003 6.66667M1.66699 12.5H6.66699M1.66699 15H6.66699"
                                            stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </span>
                            </div>


                            <div class="text">
                                <a href="mailto:Quomodosoft@gmail.com">Quomodosoft@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>





        <!-- menu part start -->


        <nav class="menu-bg ">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="nav-main">

                            <div class="nav-main">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{ asset('images/logo/footer-logo.svg') }}" alt="logo">
                                    </a>
                                </div>

                                <div class="menu">
                                    <ul>
                                        <li><a href="#">Home
                                                <span><i class="fa-solid fa-angle-down"></i></span>
                                            </a>

                                            <ul>
                                                <li>
                                                    <a href="index.html">Home-01</a>
                                                </li>
                                                <li>
                                                    <a href="index-2.html">Home-02</a>
                                                </li>
                                            </ul>


                                        </li>
                                        <li><a href="all-food.html">Menu</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="blog.html">Blog <span><i class="fa-solid fa-angle-down"></i></span>
                                            </a>


                                            <ul>
                                                <li><a href="blog.html"> Blog</a></li>
                                                <li><a href="blog-details.html"> Blog-Details</a></li>
                                            </ul>



                                        </li>
                                    </ul>
                                </div>
                            </div>



                            <div class="nav-btn-main">
                                <div class="nav-btn-one">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                           placeholder="Search food">

                                    <div class="nav-search">
                                        <button type="submit">
                                            <span>
                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M19.25 10.5C19.25 15.3325 15.3325 19.25 10.5 19.25C5.66751 19.25 1.75 15.3325 1.75 10.5C1.75 5.66751 5.66751 1.75 10.5 1.75C15.3325 1.75 19.25 5.66751 19.25 10.5ZM10.5 20.75C16.1609 20.75 20.75 16.1609 20.75 10.5C20.75 4.83908 16.1609 0.25 10.5 0.25C4.83908 0.25 0.25 4.83908 0.25 10.5C0.25 16.1609 4.83908 20.75 10.5 20.75ZM19.5303 18.4697C19.2374 18.1768 18.7626 18.1768 18.4697 18.4697C18.1768 18.7626 18.1768 19.2374 18.4697 19.5303L20.4696 21.5303C20.7625 21.8232 21.2374 21.8232 21.5303 21.5303C21.8232 21.2374 21.8232 20.7625 21.5303 20.4696L19.5303 18.4697Z"
                                                          fill="#4D5461" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>

                                </div>

                                <div class="nav-btn-two">
                                    <a href="dashboard-wishlist.html">
                                        <div class="love">
                                            <span>
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.833 7.584C21.1216 7.584 22.1663 8.62867 22.1663 9.91733M13.9997 6.65363L14.7989 5.834C17.285 3.2845 21.3157 3.2845 23.8018 5.834C26.2211 8.31503 26.2954 12.3134 23.9701 14.8872L17.2893 22.2819C15.5145 24.2463 12.4848 24.2463 10.71 22.2819L4.02926 14.8873C1.70392 12.3135 1.77826 8.31506 4.19757 5.83402C6.68365 3.28451 10.7144 3.28452 13.2005 5.83402L13.9997 6.65363Z"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>
                                    </a>


                                    <div class="love cart">
                                        <div class="click" data-name="cart-dropdown">

                                        </div>
                                        <span>
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.99967 4.66536H20.9997C23.577 4.66536 25.6663 6.7547 25.6663 9.33203V15.1654C25.6663 17.7427 23.577 19.832 20.9997 19.832H11.6663C9.08901 19.832 6.99967 17.7427 6.99967 15.1654V4.66536ZM6.99967 4.66536C6.99967 3.3767 5.95501 2.33203 4.66634 2.33203H2.33301"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M12.833 23.918C12.833 24.8845 12.0495 25.668 11.083 25.668C10.1165 25.668 9.33301 24.8845 9.33301 23.918C9.33301 22.9515 10.1165 22.168 11.083 22.168C12.0495 22.168 12.833 22.9515 12.833 23.918Z"
                                                    stroke-width="1.5" />
                                                <path
                                                    d="M23.333 23.918C23.333 24.8845 22.5495 25.668 21.583 25.668C20.6165 25.668 19.833 24.8845 19.833 23.918C19.833 22.9515 20.6165 22.168 21.583 22.168C22.5495 22.168 23.333 22.9515 23.333 23.918Z"
                                                    stroke-width="1.5" />
                                                <path d="M16.333 9.33203L16.333 15.1654" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M19.2503 12.25L13.417 12.25" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>


                                        <div class="cart-dropdown header-dropdown" id="cart-dropdown">


                                            <div class="cart-dropdown-text">
                                                <div class="text">
                                                    <h3>My Cart</h3>
                                                </div>

                                                <div class="cart-dropdown-btn">
                                                    <button type="button" class="close-btn" aria-label="Close">
                                                        <span>
                                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.24309 0.757865L0.757812 9.24315M9.24309 9.24309L0.757812 0.757812"
                                                                    stroke="#9EA3AE" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>

                                                    </button>
                                                </div>
                                            </div>



                                            <div class="cart-dropdown-btn-two">
                                                <a href="#" class=" cart-btn-two ">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6665 15.8333V5.83333M11.6665 15.8333H13.3332M11.6665 15.8333H7.49984M11.6665 5.83333C11.6665 3.99238 10.1741 2.5 8.33317 2.5H4.99984C3.15889 2.5 1.6665 3.99238 1.6665 5.83333V12.5C1.6665 14.0544 2.73039 15.3602 4.16971 15.7291M11.6665 5.83333H14.3408C14.7642 5.83333 15.1718 5.9945 15.4807 6.2841L17.8064 8.46449C18.1425 8.77957 18.3332 9.2197 18.3332 9.68039V14.1667C18.3332 15.0871 17.587 15.8333 16.6665 15.8333M16.6665 15.8333C16.6665 16.7538 15.9203 17.5 14.9998 17.5C14.0794 17.5 13.3332 16.7538 13.3332 15.8333M16.6665 15.8333C16.6665 14.9129 15.9203 14.1667 14.9998 14.1667C14.0794 14.1667 13.3332 14.9129 13.3332 15.8333M7.49984 15.8333C7.49984 16.7538 6.75365 17.5 5.83317 17.5C4.9127 17.5 4.1665 16.7538 4.1665 15.8333C4.1665 15.7983 4.16758 15.7636 4.16971 15.7291M7.49984 15.8333C7.49984 14.9129 6.75365 14.1667 5.83317 14.1667C4.94769 14.1667 4.22349 14.8572 4.16971 15.7291"
                                                                stroke-width="1.5" />
                                                            <path d="M8.33317 6.66797L6.6665 6.66797" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8.33333 10L5 10" stroke="white" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>

                                                    Delivery
                                                </a>
                                                <a href="#" class=" cart-btn ">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6665 15.8333V5.83333M11.6665 15.8333H13.3332M11.6665 15.8333H7.49984M11.6665 5.83333C11.6665 3.99238 10.1741 2.5 8.33317 2.5H4.99984C3.15889 2.5 1.6665 3.99238 1.6665 5.83333V12.5C1.6665 14.0544 2.73039 15.3602 4.16971 15.7291M11.6665 5.83333H14.3408C14.7642 5.83333 15.1718 5.9945 15.4807 6.2841L17.8064 8.46449C18.1425 8.77957 18.3332 9.2197 18.3332 9.68039V14.1667C18.3332 15.0871 17.587 15.8333 16.6665 15.8333M16.6665 15.8333C16.6665 16.7538 15.9203 17.5 14.9998 17.5C14.0794 17.5 13.3332 16.7538 13.3332 15.8333M16.6665 15.8333C16.6665 14.9129 15.9203 14.1667 14.9998 14.1667C14.0794 14.1667 13.3332 14.9129 13.3332 15.8333M7.49984 15.8333C7.49984 16.7538 6.75365 17.5 5.83317 17.5C4.9127 17.5 4.1665 16.7538 4.1665 15.8333C4.1665 15.7983 4.16758 15.7636 4.16971 15.7291M7.49984 15.8333C7.49984 14.9129 6.75365 14.1667 5.83317 14.1667C4.94769 14.1667 4.22349 14.8572 4.16971 15.7291"
                                                                stroke-width="1.5" />
                                                            <path d="M8.33317 6.66797L6.6665 6.66797" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8.33333 10L5 10" stroke="white" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>

                                                    Delivery
                                                </a>
                                                <a href="#" class=" cart-btn ">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6665 15.8333V5.83333M11.6665 15.8333H13.3332M11.6665 15.8333H7.49984M11.6665 5.83333C11.6665 3.99238 10.1741 2.5 8.33317 2.5H4.99984C3.15889 2.5 1.6665 3.99238 1.6665 5.83333V12.5C1.6665 14.0544 2.73039 15.3602 4.16971 15.7291M11.6665 5.83333H14.3408C14.7642 5.83333 15.1718 5.9945 15.4807 6.2841L17.8064 8.46449C18.1425 8.77957 18.3332 9.2197 18.3332 9.68039V14.1667C18.3332 15.0871 17.587 15.8333 16.6665 15.8333M16.6665 15.8333C16.6665 16.7538 15.9203 17.5 14.9998 17.5C14.0794 17.5 13.3332 16.7538 13.3332 15.8333M16.6665 15.8333C16.6665 14.9129 15.9203 14.1667 14.9998 14.1667C14.0794 14.1667 13.3332 14.9129 13.3332 15.8333M7.49984 15.8333C7.49984 16.7538 6.75365 17.5 5.83317 17.5C4.9127 17.5 4.1665 16.7538 4.1665 15.8333C4.1665 15.7983 4.16758 15.7636 4.16971 15.7291M7.49984 15.8333C7.49984 14.9129 6.75365 14.1667 5.83317 14.1667C4.94769 14.1667 4.22349 14.8572 4.16971 15.7291"
                                                                stroke-width="1.5" />
                                                            <path d="M8.33317 6.66797L6.6665 6.66797" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8.33333 10L5 10" stroke="white" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>

                                                    Delivery
                                                </a>
                                            </div>

                                            <div class="cart-dropdown-item-box">
                                                <div class="cart-dropdown-item">
                                                    <div class="cart-dropdown-item-img">
                                                        <img src="{{ asset('images/small/my-cart.png') }}" alt="img">
                                                    </div>
                                                    <div class="cart-dropdown-item-text">
                                                        <h3>Baked Chicken Wings & Legs</h3>
                                                        <p>$30.00</p>
                                                    </div>
                                                </div>

                                                <div class="cart-dropdown-inner">
                                                    <div class="cart-dropdown-inner-btn">
                                                        <a href="#">
                                                            <span>
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M3.75 6V13.5C3.75 15.1569 5.09315 16.5 6.75 16.5H11.25C12.9069 16.5 14.25 15.1569 14.25 13.5V6M10.5 8.25V12.75M7.5 8.25L7.5 12.75M12 3.75L10.9453 2.16795C10.6671 1.75065 10.1988 1.5 9.69722 1.5H8.30278C7.80125 1.5 7.3329 1.75065 7.0547 2.16795L6 3.75M12 3.75H6M12 3.75H15.75M6 3.75H2.25"
                                                                        stroke="#F01543" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="cart-dropdown-inner-btn cart-dropdown-inner-btn-two ">
                                                        <input type="email" class="form-control"
                                                               id="exampleFormControlInput2" value="100">
                                                    </div>

                                                    <div class="cart-dropdown-inner-btn">
                                                        <a href="#">
                                                            <span>
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9 4.5V13.5M13.5 9L4.5 9" stroke="#28303F"
                                                                          stroke-width="1.5" stroke-linecap="round"
                                                                          stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="cart-dropdown-item-box">
                                                <div class="cart-dropdown-item">
                                                    <div class="cart-dropdown-item-img">
                                                        <img src="{{ asset('images/small/my-cart.png') }}" alt="img">
                                                    </div>
                                                    <div class="cart-dropdown-item-text">
                                                        <h3>Baked Chicken Wings & Legs</h3>
                                                        <p>$30.00</p>
                                                    </div>
                                                </div>

                                                <div class="cart-dropdown-inner">
                                                    <div class="cart-dropdown-inner-btn">
                                                        <a href="#">
                                                            <span>
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M3.75 6V13.5C3.75 15.1569 5.09315 16.5 6.75 16.5H11.25C12.9069 16.5 14.25 15.1569 14.25 13.5V6M10.5 8.25V12.75M7.5 8.25L7.5 12.75M12 3.75L10.9453 2.16795C10.6671 1.75065 10.1988 1.5 9.69722 1.5H8.30278C7.80125 1.5 7.3329 1.75065 7.0547 2.16795L6 3.75M12 3.75H6M12 3.75H15.75M6 3.75H2.25"
                                                                        stroke="#F01543" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="cart-dropdown-inner-btn cart-dropdown-inner-btn-two ">
                                                        <input type="email" class="form-control"
                                                               id="exampleFormControlInput3" value="100">
                                                    </div>

                                                    <div class="cart-dropdown-inner-btn">
                                                        <a href="#">
                                                            <span>
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9 4.5V13.5M13.5 9L4.5 9" stroke="#28303F"
                                                                          stroke-width="1.5" stroke-linecap="round"
                                                                          stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="cart-dropdown-item-box">
                                                <div class="cart-dropdown-item">
                                                    <div class="cart-dropdown-item-img">
                                                        <img src="{{ asset('images/small/my-cart.png') }}" alt="img">
                                                    </div>
                                                    <div class="cart-dropdown-item-text">
                                                        <h3>Baked Chicken Wings & Legs</h3>
                                                        <p>$30.00</p>
                                                    </div>
                                                </div>

                                                <div class="cart-dropdown-inner">
                                                    <div class="cart-dropdown-inner-btn">
                                                        <a href="#">
                                                            <span>
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M3.75 6V13.5C3.75 15.1569 5.09315 16.5 6.75 16.5H11.25C12.9069 16.5 14.25 15.1569 14.25 13.5V6M10.5 8.25V12.75M7.5 8.25L7.5 12.75M12 3.75L10.9453 2.16795C10.6671 1.75065 10.1988 1.5 9.69722 1.5H8.30278C7.80125 1.5 7.3329 1.75065 7.0547 2.16795L6 3.75M12 3.75H6M12 3.75H15.75M6 3.75H2.25"
                                                                        stroke="#F01543" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="cart-dropdown-inner-btn cart-dropdown-inner-btn-two ">
                                                        <input type="email" class="form-control"
                                                               id="exampleFormControlInput4" value="100">
                                                    </div>

                                                    <div class="cart-dropdown-inner-btn">
                                                        <a href="#">
                                                            <span>
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9 4.5V13.5M13.5 9L4.5 9" stroke="#28303F"
                                                                          stroke-width="1.5" stroke-linecap="round"
                                                                          stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="cart-dropdown-item-box">
                                                <div class="cart-dropdown-item">
                                                    <div class="cart-dropdown-item-img">
                                                        <img src="{{ asset('images/small/my-cart.png') }}" alt="img">
                                                    </div>
                                                    <div class="cart-dropdown-item-text">
                                                        <h3>Baked Chicken Wings & Legs</h3>
                                                        <p>$30.00</p>
                                                    </div>
                                                </div>

                                                <div class="cart-dropdown-inner">
                                                    <div class="cart-dropdown-inner-btn">
                                                        <a href="#">
                                                            <span>
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M3.75 6V13.5C3.75 15.1569 5.09315 16.5 6.75 16.5H11.25C12.9069 16.5 14.25 15.1569 14.25 13.5V6M10.5 8.25V12.75M7.5 8.25L7.5 12.75M12 3.75L10.9453 2.16795C10.6671 1.75065 10.1988 1.5 9.69722 1.5H8.30278C7.80125 1.5 7.3329 1.75065 7.0547 2.16795L6 3.75M12 3.75H6M12 3.75H15.75M6 3.75H2.25"
                                                                        stroke="#F01543" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="cart-dropdown-inner-btn cart-dropdown-inner-btn-two ">
                                                        <input type="email" class="form-control"
                                                               id="exampleFormControlInput5" value="100">
                                                    </div>

                                                    <div class="cart-dropdown-inner-btn">
                                                        <a href="#">
                                                            <span>
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9 4.5V13.5M13.5 9L4.5 9" stroke="#28303F"
                                                                          stroke-width="1.5" stroke-linecap="round"
                                                                          stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="cart-dropdown-sub-total">
                                                <div class="cart-dropdown-sub-total-item">
                                                    <div class="text">
                                                        <h3>Subtotal</h3>
                                                    </div>
                                                    <div class="text">
                                                        <h3><a href="#">$30</a></h3>
                                                    </div>
                                                </div>

                                                <div class="cart-dropdown-sub-total-btn">
                                                    <a href="shopping-cart.html" class="main-btn-four">Proceed to
                                                        Checkout</a>
                                                </div>

                                            </div>


                                        </div>
                                    </div>





                                    <!-- login korar por aita show hobe  -->

                                    <!-- <div class="love user">
                                        <div class="click" data-name="profile-dropdown">

                                        </div>
                                        <span>
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="13.9997" cy="20.4154" rx="8.16667" ry="4.08333"
                                                    stroke-width="1.5" stroke-linejoin="round" />
                                                <circle cx="13.9997" cy="8.16667" r="4.66667" stroke-width="1.5"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>


                                        <div class="profile-dropdown header-dropdown" id="profile-dropdown">
                                            <div class="profile-dropdown-img">
                                                <img src="./assets/images/small/profile-dropdown.png" alt="img">
                                            </div>

                                            <div class="profile-dropdown-text">
                                                <a href="#">AJOY Sarker</a>
                                                <p>user id #054501</p>
                                            </div>



                                            <div class="profile-dropdown-menu">
                                                <ul>
                                                    <li>
                                                        <a href="dashboard-edit-profile.html">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <ellipse cx="12" cy="17.5" rx="7" ry="3.5"
                                                                        stroke-width="1.5" stroke-linejoin="round" />
                                                                    <circle cx="12" cy="7" r="4" stroke-width="1.5"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                            Edit Profile

                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard-address-reordering.html">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17 7L7 7" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M17 11L7 11" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M12 15L7 15" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M19 2H5C3.89543 2 3 2.89543 3 4V19.1543C3 20.5396 4.37412 21.5053 5.67744 21.0361L7.2392 20.4739C7.72721 20.2982 8.26439 20.319 8.73737 20.5318L11.1793 21.6307C11.7012 21.8655 12.2988 21.8655 12.8207 21.6307L15.2626 20.5318C15.7356 20.319 16.2728 20.2982 16.7608 20.4739L18.3226 21.0361C19.6259 21.5053 21 20.5396 21 19.1543V4C21 2.89543 20.1046 2 19 2Z"
                                                                        stroke-width="1.5" stroke-linecap="round" />
                                                                </svg>
                                                            </span>

                                                            Order & Reordering
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M17.3726 8.17276C20.0986 9.39695 22 12.1611 22 15.375V18.75C22 19.9926 21.0051 21 19.7778 21H13.1111C10.2084 21 7.73898 19.1217 6.82379 16.5M17.3726 8.17276C16.6711 5.20566 14.0344 3 10.8889 3H9.77778C5.48223 3 2 6.52576 2 10.875V14.25C2 15.4926 2.99492 16.5 4.22222 16.5H6.82379M17.3726 8.17276C17.4922 8.67875 17.5556 9.20688 17.5556 9.75C17.5556 13.4779 14.5708 16.5 10.8889 16.5H6.82379"
                                                                        stroke-width="1.5" stroke-linejoin="round" />
                                                                </svg>
                                                            </span>

                                                            Chat
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard-address.html">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="12" cy="11" r="3" stroke-width="1.5" />
                                                                    <path
                                                                        d="M21 10.8889C21 15.7981 15.375 22 12 22C8.625 22 3 15.7981 3 10.8889C3 5.97969 7.02944 2 12 2C16.9706 2 21 5.97969 21 10.8889Z"
                                                                        stroke-width="1.5" />
                                                                </svg>
                                                            </span>

                                                            Address
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="4" y="7" width="16" height="14" rx="4"
                                                                        stroke-width="1.5" />
                                                                    <circle cx="12" cy="14" r="2" stroke-width="1.5" />
                                                                    <path
                                                                        d="M16.0003 7C16.0003 4.79086 14.2095 3 12.0003 3C10.9859 3 10.0596 3.37764 9.35449 4"
                                                                        stroke-width="1.5" stroke-linecap="round" />
                                                                </svg>
                                                            </span>

                                                            Change Password
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="profile-dropdown-menu profile-dropdown-menu-two ">
                                                <ul>
                                                    <li>
                                                        <a href="dashboard-edit-profile.html">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M13.6831 10.0808L14.3138 10.4866L13.6831 10.0808ZM9.25 9C9.25 9.41421 9.58579 9.75 10 9.75C10.4142 9.75 10.75 9.41421 10.75 9H9.25ZM11.25 13.5C11.25 13.9142 11.5858 14.25 12 14.25C12.4142 14.25 12.75 13.9142 12.75 13.5H11.25ZM12.75 16C12.75 15.5858 12.4142 15.25 12 15.25C11.5858 15.25 11.25 15.5858 11.25 16H12.75ZM11.25 17C11.25 17.4142 11.5858 17.75 12 17.75C12.4142 17.75 12.75 17.4142 12.75 17H11.25ZM21.25 12C21.25 17.1086 17.1086 21.25 12 21.25V22.75C17.9371 22.75 22.75 17.9371 22.75 12H21.25ZM12 21.25C6.89137 21.25 2.75 17.1086 2.75 12H1.25C1.25 17.9371 6.06294 22.75 12 22.75V21.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75V1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75ZM12 2.75C17.1086 2.75 21.25 6.89137 21.25 12H22.75C22.75 6.06294 17.9371 1.25 12 1.25V2.75ZM13.25 9C13.25 9.24996 13.1774 9.48068 13.0524 9.67495L14.3138 10.4866C14.5899 10.0576 14.75 9.54634 14.75 9H13.25ZM10.75 9C10.75 8.30964 11.3096 7.75 12 7.75V6.25C10.4812 6.25 9.25 7.48122 9.25 9H10.75ZM12 7.75C12.6904 7.75 13.25 8.30964 13.25 9H14.75C14.75 7.48122 13.5188 6.25 12 6.25V7.75ZM11.25 13V13.5H12.75V13H11.25ZM13.0524 9.67495C12.9265 9.87065 12.7688 10.0731 12.5836 10.3033C12.4063 10.5237 12.1979 10.7764 12.011 11.0333C11.6424 11.5398 11.25 12.2007 11.25 13H12.75C12.75 12.6947 12.9003 12.3605 13.2239 11.9158C13.383 11.697 13.558 11.4851 13.7523 11.2436C13.9387 11.0119 14.1409 10.7554 14.3138 10.4866L13.0524 9.67495ZM11.25 16V17H12.75V16H11.25Z"
                                                                        fill="#000929" />
                                                                </svg>
                                                            </span>
                                                            Edit Profile

                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard-address-reordering.html">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M20 14L21.2929 12.7071C21.6834 12.3166 21.6834 11.6834 21.2929 11.2929L20 10"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M21 12H13M6 20C3.79086 20 2 18.2091 2 16V8C2 5.79086 3.79086 4 6 4M6 20C8.20914 20 10 18.2091 10 16V8C10 5.79086 8.20914 4 6 4M6 20H14C16.2091 20 18 18.2091 18 16M6 4H14C16.2091 4 18 5.79086 18 8"
                                                                        stroke-width="1.5" stroke-linecap="round" />
                                                                </svg>
                                                            </span>

                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>





                                        </div>




                                    </div> -->
                                </div>


                            </div>




                            <div class="nav-login-btn-main">
                                <a href="login.html" class="main-btn-four">Log In</a>
                                <a href="sign-up.html" class="main-btn">Sign Up</a>
                            </div>




                        </div>
                    </div>
                </div>
            </div>




        </nav>
    </header>

    <!-- mobile navigation start -->
    <header class="mobile-header">
        <div class="container-full">
            <div class="mobile-header__container">
                <div class="p-left">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('images/logo/logo-header.svg') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="p-right">
                    <button id="nav-opn-btn">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- offcanvas -->
    <aside id="offcanvas-nav">
        <nav class="m-nav">
            <button id="nav-cls-btn"><i class="fa-solid fa-xmark"></i></button>
            <div class="logo">
                <a href="">
                    <img src="{{ asset('images/logo/logo-header.svg') }}" alt="logo">
                </a>
            </div>
            <ul class="nav-links">
                <li class="dropdown">
                    <a href="#">Home <span><i class="fa-solid fa-angle-down"></i></span> </a>

                    <ul class="d-menu">
                        <li><a href="index.html">Home-01 </a> </li>
                        <li><a href="index-2.html">Home-02</a></li>
                    </ul>


                </li>
                <li><a href="all-food.html">Menu</a></li>
                <li>
                    <a href="about.html">About Us</a>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li class="dropdown"><a href="#">Blog</a>

                    <ul class="d-menu">
                        <li><a href="blog.html">Blog </a> </li>
                        <li><a href="blog-details.html">Blog-Details</a></li>
                    </ul>
                </li>
            </ul>

        </nav>
    </aside>





    <!-- header part end  -->


    <main>

        <!-- .banner-part-start -->

        <section class="banner-two">

            <div class="container">

                <div class="row">
                    <div class="col-lg-6">

                        <div class="banner-two-taitel">
                            <h1>Crafting your Exceptional Dining <span>
                                    Reservations
                                </span></h1>

                            <p>Reservation is a step into a world of gastronomic wonder. Reserve your table today and
                                let us paint your culinary dreams into reality.</p>
                        </div>

                        <div class="banner-taiteL-btn">

                            <a href="#" class="main-btn main-btn-two ">
                                <span>
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.333 22.1667V8.16667M16.333 22.1667H18.6663M16.333 22.1667H10.4997M16.333 8.16667C16.333 5.58934 14.2437 3.5 11.6663 3.5H6.99967C4.42235 3.5 2.33301 5.58934 2.33301 8.16667V17.5C2.33301 19.6761 3.82245 21.5043 5.83749 22.0208M16.333 8.16667H20.077C20.6698 8.16667 21.2404 8.3923 21.6728 8.79775L24.9289 11.8503C25.3994 12.2914 25.6663 12.9076 25.6663 13.5525V19.8333C25.6663 21.122 24.6217 22.1667 23.333 22.1667M23.333 22.1667C23.333 23.4553 22.2883 24.5 20.9997 24.5C19.711 24.5 18.6663 23.4553 18.6663 22.1667M23.333 22.1667C23.333 20.878 22.2883 19.8333 20.9997 19.8333C19.711 19.8333 18.6663 20.878 18.6663 22.1667M10.4997 22.1667C10.4997 23.4553 9.45501 24.5 8.16634 24.5C6.87768 24.5 5.83301 23.4553 5.83301 22.1667C5.83301 22.1177 5.83452 22.069 5.83749 22.0208M10.4997 22.1667C10.4997 20.878 9.45501 19.8333 8.16634 19.8333C6.92667 19.8333 5.91279 20.8001 5.83749 22.0208"
                                            stroke-width="1.5" />
                                        <path d="M11.6663 9.33203H9.33301" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                        <path d="M11.6667 14L7 14" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                    </svg>
                                </span>
                                Delivery</a>

                            <a href="#" class=" main-btn-two-banner ">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.1186 8.33333C14.1186 9.68336 13.0242 10.7778 11.6742 10.7778C10.3241 10.7778 9.22971 9.68336 9.22971 8.33333C9.22971 6.9833 10.3241 5.88889 11.6742 5.88889C13.0242 5.88889 14.1186 6.9833 14.1186 8.33333Z"
                                            stroke-width="1.5" />
                                        <path
                                            d="M19.0075 8.33333C19.0075 12.3834 14.1186 18.1111 11.6742 18.1111C9.22971 18.1111 4.34082 12.3834 4.34082 8.33333C4.34082 4.28325 7.62407 1 11.6742 1C15.7242 1 19.0075 4.28325 19.0075 8.33333Z"
                                            stroke-width="1.5" />
                                        <path
                                            d="M15.3412 15.668H16.7181C18.169 15.668 19.545 16.3124 20.4738 17.4271L21.7779 18.992C23.1047 20.5841 21.9725 23.0013 19.9 23.0013H3.44912C1.37662 23.0013 0.244465 20.5841 1.57124 18.992L2.87532 17.4271C3.80418 16.3124 5.18015 15.668 6.63107 15.668H8.0079"
                                            stroke-width="1.5" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                Pick Up</a>

                            <a href="#" class=" main-btn-two-banner">
                                <span>
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.1226 25.6654H18.8768C21.5703 25.6654 23.7538 23.5817 23.7538 21.0113V15.3206C23.7538 14.4943 24.0978 13.7019 24.71 13.1176C26.1286 11.764 25.9442 9.52109 24.3218 8.3951L16.8682 3.22219C15.1581 2.03531 12.8413 2.03531 11.1311 3.22219L3.6776 8.3951C2.05519 9.52109 1.87078 11.764 3.28931 13.1176C3.90156 13.7019 4.24552 14.4943 4.24552 15.3206V21.0113C4.24552 23.5817 6.42906 25.6654 9.1226 25.6654Z"
                                            stroke-width="1.5" stroke-linejoin="round" />
                                        <path
                                            d="M19.0218 18.2041C19.0218 20.8668 16.5108 25.436 13.9997 25.436C11.4886 25.436 8.97754 20.8668 8.97754 18.2041C8.97754 15.5414 11.226 13.3828 13.9997 13.3828C16.7734 13.3828 19.0218 15.5414 19.0218 18.2041Z"
                                            stroke-width="1.5" />
                                        <path
                                            d="M15.5063 17.9028C15.5063 18.7348 14.8318 19.4094 13.9997 19.4094C13.1676 19.4094 12.493 18.7348 12.493 17.9028C12.493 17.0707 13.1676 16.3961 13.9997 16.3961C14.8318 16.3961 15.5063 17.0707 15.5063 17.9028Z"
                                            stroke-width="1.5" />
                                    </svg>
                                </span>
                                In Restaurant</a>

                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- .banner-part-end -->



        <!-- .Categories-part-start -->


        <section class="categories categories-two s-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6  ">
                        <div class="categories-head">
                            <h2>Our Categories</h2>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="categories-head-btn">
                            <a href="all-food.html" class="main-btn">See more</a>
                        </div>
                    </div>
                </div>

                <div class="row categories-mt-48px  ">
                    <div class="col-lg-3 col-md-6 res-mb-20px" data-aos="fade-right">
                        <div class="categories-item  ">
                            <div class="categories-icon">
                                <div class="icon">
                                    <span>
                                        <svg width="52" height="52" viewBox="0 0 60 60" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_304_14569)">
                                                <path
                                                    d="M58.2413 42.421H55.5378C56.0779 41.4894 56.4121 40.4238 56.473 39.2862C57.0104 39.2464 57.6215 39.0615 58.2986 38.6426C59.1147 38.1381 59.665 37.3435 59.8893 36.3446C60.4043 34.0517 59.0232 30.7315 57.7799 28.3585H58.2413C59.2123 28.3585 59.9992 27.5716 59.9992 26.6011C59.9992 14.0007 49.6958 3.75 37.0313 3.75H22.9688C10.3043 3.75 0.000937866 14.0007 0.000937866 26.6011C0.000937866 27.5716 0.787834 28.3585 1.75875 28.3585H2.22018C0.976891 30.7315 -0.404641 34.0517 0.110801 36.3446C0.335106 37.3435 0.885338 38.1381 1.70153 38.6426C2.37856 39.0615 2.98968 39.2459 3.52709 39.2858C3.58798 40.4233 3.92214 41.489 4.46231 42.421H1.75875C0.787834 42.421 0.000937866 43.2079 0.000937866 44.1788C0.000937866 50.9633 5.52066 56.483 12.3052 56.483H47.6949C54.4794 56.483 59.9992 50.9633 59.9992 44.1788C59.9992 43.2079 59.2123 42.421 58.2413 42.421ZM22.9688 7.26563H37.0313C47.1616 7.26563 55.508 15.0018 56.4039 24.8433H3.59622C4.49206 15.0018 12.8385 7.26563 22.9688 7.26563ZM4.13546 34.9741C3.98806 35.1998 3.78573 35.5106 3.63192 35.7006C3.61178 35.6896 3.58981 35.6767 3.56646 35.6626C3.44149 35.4085 3.39251 34.157 4.6596 31.3893C5.21075 30.185 5.83651 29.0717 6.25857 28.3585H53.742C54.1595 29.0634 54.7761 30.1602 55.3258 31.3573C56.6076 34.146 56.5595 35.4071 56.4336 35.6626C56.4103 35.6767 56.3883 35.6896 56.3682 35.7006C56.2144 35.5106 56.0116 35.1998 55.8646 34.9741C55.1084 33.8146 53.8427 31.8741 51.2105 31.8741C48.7244 31.8741 47.4111 33.1879 46.4521 34.1469C45.5901 35.0089 45.1676 35.3897 44.1793 35.3897C43.1772 35.3897 42.7089 34.9796 41.8278 34.1268C40.8454 33.176 39.5 31.8741 37.0313 31.8741C34.5452 31.8741 33.2319 33.1879 32.2728 34.1469C31.4109 35.0089 30.9884 35.3897 30 35.3897C29.0117 35.3897 28.5892 35.0089 27.7272 34.1469C26.7682 33.1879 25.4549 31.8741 22.9688 31.8741C20.5001 31.8741 19.1547 33.176 18.1723 34.1268C17.2911 34.9796 16.8228 35.3897 15.8208 35.3897C14.8325 35.3897 14.41 35.0089 13.548 34.1469C12.589 33.1879 11.2757 31.8741 8.78955 31.8741C6.15741 31.8746 4.89169 33.815 4.13546 34.9741ZM52.9684 38.9054C52.9684 40.844 51.3909 42.421 49.4527 42.421H10.5474C8.60919 42.421 7.03174 40.844 7.03174 38.9054C7.03174 37.3046 8.09787 35.9294 9.61032 35.5156C10.0997 35.6905 10.4814 36.0521 11.0623 36.6326C12.0214 37.5916 13.3347 38.9054 15.8208 38.9054C18.29 38.9054 19.6349 37.6035 20.6173 36.6527C21.4985 35.7999 21.9667 35.3897 22.9688 35.3897C23.9571 35.3897 24.3796 35.771 25.2416 36.6326C26.2006 37.5916 27.5144 38.9054 30 38.9054C32.4857 38.9054 33.7995 37.5916 34.7585 36.6326C35.6205 35.771 36.043 35.3897 37.0313 35.3897C38.0333 35.3897 38.5012 35.7999 39.3828 36.6527C40.3652 37.6035 41.7101 38.9054 44.1793 38.9054C46.6654 38.9054 47.9787 37.5916 48.9377 36.6326C49.5186 36.0521 49.9004 35.6905 50.3898 35.5156C51.9022 35.9294 52.9684 37.3046 52.9684 38.9054ZM12.3052 52.9674C8.06079 52.9674 4.50946 49.943 3.6928 45.9366H22.3829L31.7579 52.9674H12.3052ZM28.2422 45.9366H45.9019L37.0354 52.5312L28.2422 45.9366ZM47.6949 52.9674H42.3395L51.7924 45.9128H56.3073C55.4906 49.9196 51.9393 52.9674 47.6949 52.9674Z" />
                                                <path
                                                    d="M24.7261 12.5391C24.7261 13.5095 23.9392 14.2969 22.9683 14.2969C21.9978 14.2969 21.2109 13.5095 21.2109 12.5391C21.2109 11.5681 21.9978 10.7812 22.9683 10.7812C23.9392 10.7812 24.7261 11.5681 24.7261 12.5391Z" />
                                                <path
                                                    d="M42.4219 16.0542C42.4219 17.0251 41.635 17.812 40.6641 17.812C39.6936 17.812 38.9062 17.0251 38.9062 16.0542C38.9062 15.0838 39.6936 14.2969 40.6641 14.2969C41.635 14.2969 42.4219 15.0838 42.4219 16.0542Z" />
                                                <path
                                                    d="M17.5781 16.0542C17.5781 17.0251 16.7912 17.812 15.8203 17.812C14.8494 17.812 14.0625 17.0251 14.0625 16.0542C14.0625 15.0838 14.8494 14.2969 15.8203 14.2969C16.7912 14.2969 17.5781 15.0838 17.5781 16.0542Z" />
                                                <path
                                                    d="M35.2734 12.5391C35.2734 13.5095 34.4861 14.2969 33.5156 14.2969C32.5447 14.2969 31.7578 13.5095 31.7578 12.5391C31.7578 11.5681 32.5447 10.7812 33.5156 10.7812C34.4861 10.7812 35.2734 11.5681 35.2734 12.5391Z" />
                                                <path
                                                    d="M31.7578 19.5703C31.7578 20.5412 30.9709 21.3281 30 21.3281C29.0291 21.3281 28.2422 20.5412 28.2422 19.5703C28.2422 18.5999 29.0291 17.8125 30 17.8125C30.9709 17.8125 31.7578 18.5999 31.7578 19.5703Z" />
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="categories-item-text">
                                <h3>Delish Burger</h3>
                                <h4> 25 items</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 res-mb-20px" data-aos="fade-right">
                        <div class="categories-item  ">
                            <div class="categories-icon">
                                <div class="icon">
                                    <span>
                                        <svg width="52" height="52" viewBox="0 0 60 60" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_304_14585)">
                                                <path
                                                    d="M58.8988 5.97714C58.7822 5.92169 58.6541 5.89476 58.525 5.89845H45.7377C45.4763 5.89697 45.225 5.99964 45.0394 6.1837L43.5737 7.64932L28.4749 0.10483C27.9913 -0.138005 27.4024 0.0552792 27.1568 0.53763L20.596 13.6495C19.1452 14.0775 18.0252 15.2349 17.6451 16.6988C17.4604 17.465 16.8903 18.0798 16.1401 18.3218L15.0975 18.6857C12.8625 19.4333 11.6561 21.8505 12.4023 24.0859L13.0712 26.0532L12.2547 26.2597C9.45679 26.9616 7.75755 29.7987 8.45938 32.5967C8.55135 32.9631 8.68266 33.3186 8.85136 33.6567C9.15518 34.2435 9.26547 34.9116 9.16612 35.5649L8.97923 36.8732C8.7557 38.264 9.11116 39.6858 9.96287 40.8077C10.0219 40.8864 10.1006 40.9553 10.1596 41.0241L0.775699 50.4474C0.496592 50.7302 0.415073 51.1532 0.569135 51.5195C0.72 51.8868 1.07694 52.1274 1.47408 52.1294H11.5564L11.9301 53.4573C12.8378 56.6501 16.1619 58.5025 19.3545 57.5948C19.3618 57.5927 19.369 57.5907 19.3763 57.5886C20.4283 57.2937 21.5547 57.4318 22.5042 57.9722L24.4715 59.1132C26.6524 60.3589 29.3773 60.1197 31.3078 58.5132L31.534 58.3263C32.9448 57.165 34.9573 57.0885 36.4522 58.1394L37.544 58.9263C38.5951 59.6515 39.848 60.0266 41.1245 59.9985C42.1599 59.9974 43.177 59.7261 44.0754 59.2116L47.0263 57.5394C47.6266 57.1989 48.3034 57.0161 48.9936 57.0082H49.7215C51.8403 56.9952 53.7986 55.8763 54.8856 54.0573L56.0856 52.09H58.525C59.0682 52.09 59.5087 51.6496 59.5087 51.1064V6.88209C59.5067 6.48494 59.2662 6.12801 58.8988 5.97714ZM46.141 7.86572H49.269L47.5083 9.6166L45.4328 8.63296L46.141 7.86572ZM46.0132 11.0625L45.0295 12.0462L44.2721 10.6002C44.1722 10.4194 44.0605 10.2451 43.9377 10.0789L46.0132 11.0625ZM28.4356 2.29834L40.3966 8.25918C39.642 8.26151 38.9018 8.46525 38.2523 8.84936L37.8195 9.10511C37.1845 9.48553 36.4062 9.54024 35.7243 9.25265L33.2357 8.18049C31.1707 7.28919 28.7682 8.14876 27.7372 10.1478L26.9601 11.8003C26.6144 12.4912 25.9464 12.9635 25.1797 13.0593L22.9764 13.3347L28.4356 2.29834ZM15.727 20.5448H15.6483L16.7205 20.1907C18.1055 19.7291 19.1566 18.5888 19.5041 17.1709C19.7438 16.2474 20.5242 15.5645 21.4714 15.4496L25.406 14.9577C26.8212 14.7841 28.055 13.9124 28.6913 12.6364L29.4782 11.0724C30.0241 9.99173 31.3141 9.51885 32.4291 9.99038L34.9177 11.0625C36.1923 11.6189 37.6569 11.5274 38.8523 10.8166L39.2851 10.5511C40.3793 9.90394 41.7908 10.2664 42.4379 11.3606C42.4714 11.4173 42.5024 11.4754 42.5311 11.5347L43.5737 13.6298L41.8032 15.3709C38.0242 11.8722 32.1243 12.0994 28.6257 15.8784C27.4296 17.1704 26.6236 18.7746 26.3011 20.5055C21.9764 18.6941 16.9794 20.3794 14.6351 24.44L14.3105 23.4564C13.9107 22.262 14.5405 20.9673 15.727 20.5448ZM34.9177 16.8267V20.3579L32.6652 18.1054L31.2684 19.4923L33.5308 21.7448H29.9995V23.3875C29.4405 22.6701 28.7774 22.0402 28.0323 21.5186C28.4257 17.4687 32.0277 14.5045 36.0774 14.898C37.6517 15.0509 39.1351 15.7064 40.3081 16.7676L36.885 20.23V16.8267H34.9177ZM33.4128 23.7121L31.357 25.7679C31.0855 25.0393 30.7219 24.3484 30.275 23.7121H33.4128ZM25.5437 28.5811L27.7765 26.3876L26.3994 24.981L24.0977 27.204V23.7121H22.1305V27.2434L19.8779 24.9908L18.4812 26.3778L20.7435 28.6303H17.2123V30.5976H20.6452L18.491 32.7419L19.8681 34.1387L22.1305 31.9058V34.4239H22.7108L20.8517 36.283C17.5506 35.4816 15.2311 32.5191 15.245 29.1221C15.2568 28.589 15.3227 28.0583 15.4417 27.5385V27.4696C16.3688 23.5021 20.3365 21.0374 24.304 21.9643C26.9979 22.5937 29.1132 24.6773 29.7831 27.3614L28.0323 29.1123V28.5221L25.5437 28.5811ZM26.6158 30.5484L26.065 31.0795L25.5142 30.5484H26.6158ZM24.6584 32.4566L24.1076 33.0173V31.9255L24.6584 32.4566ZM10.494 29.9877C10.9042 29.0919 11.7012 28.4325 12.658 28.1975L13.2876 28.0401C13.2448 28.3993 13.2218 28.7605 13.2187 29.1221C13.2062 32.9933 15.5917 36.4679 19.2091 37.847L15.904 41.152L13.6613 40.8667C11.887 40.6518 10.6229 39.0391 10.8379 37.2649C10.841 37.2392 10.8444 37.2136 10.8481 37.1881L11.035 35.87C11.1865 34.8197 11.0113 33.7484 10.5334 32.801C10.1183 31.9061 10.1328 30.8709 10.5727 29.9878L10.494 29.9877ZM3.84465 50.1621L11.7531 42.293C12.2961 42.5805 12.8854 42.7702 13.4941 42.8537L14.222 42.9422L6.97261 50.1621H3.84465ZM9.74647 50.1621L16.6909 43.2176L17.0942 43.2668L17.1533 42.7553L36.2653 23.6039C36.5152 23.4994 36.7108 23.2966 36.8063 23.0432L52.0429 7.86572H56.1544L13.8581 50.1621H9.74647ZM53.2429 53.113C52.5081 54.3298 51.1921 55.0755 49.7706 55.0803H49.0428C48.0071 55.0889 46.991 55.3632 46.0918 55.877L43.1409 57.5394C41.7672 58.3237 40.0631 58.2392 38.7736 57.323L37.6818 56.5459C35.4536 54.953 32.4317 55.0621 30.3241 56.8115L30.0979 56.9984C28.7989 58.0806 26.9654 58.2451 25.4945 57.4115L23.5272 56.2607C22.1167 55.4611 20.4447 55.2592 18.8845 55.7C16.7309 56.3132 14.4871 55.0681 13.8679 52.9163L13.6515 52.1294H53.8823L53.2429 53.113ZM57.5414 50.1621H16.6319L57.5414 9.25265V50.1621Z">
                                                </path>
                                                <path d="M54.5923 23.6055H52.625V25.5727H54.5923V23.6055Z"></path>
                                                <path d="M46.7173 28.5234H44.75V30.4907H46.7173V28.5234Z"></path>
                                                <path d="M51.6391 33.4414H49.6719V35.4087H51.6391V33.4414Z"></path>
                                                <path d="M36.8891 36.3906H34.9219V38.3579H36.8891V36.3906Z"></path>
                                                <path d="M44.7563 43.2773H42.7891V45.2446H44.7563V43.2773Z"></path>
                                                <path d="M53.6079 46.2266H51.6406V48.1938H53.6079V46.2266Z"></path>
                                                <path d="M26.061 45.2422H24.0938V47.2095H26.061V45.2422Z"></path>
                                                <path d="M33.936 46.2266H31.9688V48.1938H33.936V46.2266Z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="categories-item-text">
                                <h3>Sandwiches</h3>
                                <h4> 25 items</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 res-mb-20px" data-aos="fade-right">
                        <div class="categories-item  ">
                            <div class="categories-icon">
                                <div class="icon">
                                    <span>
                                        <svg width="52" height="52" viewBox="0 0 60 60" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_304_14643)">
                                                <path
                                                    d="M58.6929 40.2216H56.9193C57.1833 39.0355 56.8572 37.7433 55.9361 36.8222C55.5157 36.4019 55.0178 36.1054 54.488 35.9321C56.4998 33.5364 57.7148 30.4504 57.7148 27.0844C57.7148 25.5718 56.4843 24.3412 54.9716 24.3412C53.4589 24.3412 52.2284 25.5718 52.2284 27.0844C52.2284 27.5554 52.1857 28.0379 52.1014 28.5186C52.0177 28.9967 52.3375 29.4522 52.8156 29.536C53.2937 29.6199 53.7493 29.3 53.833 28.8218C53.9346 28.2413 53.9863 27.6568 53.9863 27.0844C53.9863 26.541 54.4283 26.099 54.9717 26.099C55.5151 26.099 55.9571 26.541 55.9571 27.0844C55.9571 32.1843 52.7645 36.5509 48.2735 38.295C48.1366 37.7096 48.1306 37.0995 48.2618 36.5098L48.3523 36.1033C49.7834 35.4004 51.0502 34.3602 52.02 33.0488C52.3086 32.6584 52.2262 32.1081 51.8359 31.8195C51.4459 31.531 50.8954 31.6132 50.6067 32.0036C50.1156 32.6678 49.5308 33.2454 48.8807 33.7285L49.4886 30.9957C50.043 28.5033 49.557 25.8509 48.1548 23.7183C46.8016 21.6603 44.7553 20.2595 42.3777 19.752C42.0943 19.1433 41.6521 18.6107 41.0825 18.2188C40.0481 17.507 38.7299 17.3501 37.5572 17.7989C37.5523 17.8008 37.5475 17.8027 37.5425 17.8047L34.7107 18.9468C34.1259 18.3855 33.3072 18.1402 32.5086 18.2916C31.693 18.4462 31.0083 18.9927 30.6769 19.7537L30.2435 20.7486L26.2209 22.3709C25.8505 21.8936 25.3155 21.5603 24.7077 21.4451C23.8927 21.2905 23.0549 21.5486 22.468 22.1356L22.1182 22.4855C21.628 22.9756 21.3683 23.6403 21.3855 24.3211L19.9607 24.8958C17.8597 25.7029 16.3184 27.5211 15.8114 29.6601C14.445 30.5423 13.3425 31.7527 12.591 33.1595C11.442 32.8052 10.1531 33.0265 9.18 33.8233C7.82227 33.1957 6.15773 33.4395 5.03988 34.5572C4.34531 35.2519 3.98941 36.1578 3.96902 37.0701C3.70254 37.2269 3.4541 37.418 3.22969 37.6424C2.51824 38.3539 2.16152 39.287 2.15707 40.2215H1.30746C0.586406 40.2216 0 40.808 0 41.5288V42.0031C0 45.6018 2.85832 48.5439 6.42375 48.6821V50.8159C6.42375 52.0877 7.4584 53.1223 8.73023 53.1223H19.4531C19.9386 53.1223 20.332 52.7288 20.332 52.2434C20.332 51.758 19.9386 51.3645 19.4531 51.3645H8.73023C8.42777 51.3645 8.18156 51.1184 8.18156 50.8159V48.6888H51.8183V50.8159C51.8183 51.1184 51.5721 51.3645 51.2696 51.3645H23.5547C23.0692 51.3645 22.6758 51.758 22.6758 52.2434C22.6758 52.7288 23.0692 53.1223 23.5547 53.1223H51.2698C52.5416 53.1223 53.5762 52.0877 53.5762 50.8159V48.6821C57.1417 48.5439 60 45.6018 60 42.0031V41.5288C60 40.808 59.4136 40.2216 58.6929 40.2216ZM55.0752 40.2216H52.646C52.732 39.4887 52.5981 38.7357 52.2443 38.0686C52.457 37.9074 52.6642 37.7393 52.867 37.5664C53.5 37.4062 54.199 37.5711 54.6933 38.0652C55.2755 38.6475 55.4013 39.514 55.0752 40.2216ZM48.8951 40.2216L48.8114 39.9704C49.4903 39.7125 50.1434 39.4028 50.7663 39.0456C50.9232 39.4188 50.955 39.8314 50.8649 40.2216H48.8951ZM41.4545 26.4324L42.1622 28.0574L41.7435 28.4761L40.1184 27.7684C39.8876 27.6679 39.7284 27.4684 39.6814 27.2212C39.6346 26.9738 39.7097 26.7298 39.8877 26.5519L40.2379 26.2019C40.3812 26.0586 40.5672 25.9819 40.7632 25.9819C40.8107 25.9819 40.8587 25.9865 40.907 25.9955C41.1545 26.0423 41.3539 26.2015 41.4545 26.4324ZM32.2881 20.4558C32.3886 20.225 32.5882 20.0657 32.8356 20.0188C33.0829 19.9722 33.3268 20.0472 33.5048 20.2252L33.8548 20.5751C34.0329 20.7532 34.108 20.9972 34.0611 21.2445C34.0143 21.4918 33.855 21.6912 33.6241 21.7918L31.9991 22.4995L31.5804 22.0807L32.2881 20.4558ZM23.3609 23.7288L23.7107 23.3788C23.8541 23.2355 24.0401 23.1589 24.2361 23.1589C24.2837 23.1589 24.3318 23.1634 24.3802 23.1726C24.6274 23.2195 24.8269 23.3787 24.9275 23.6095L25.6351 25.2345L25.2165 25.6532L23.5915 24.9455C23.3606 24.845 23.2014 24.6454 23.1545 24.3981C23.1076 24.1507 23.1827 23.9068 23.3609 23.7288ZM17.3889 31.1968C17.3889 29.1426 18.6778 27.2691 20.5962 26.5349C20.6011 26.533 20.6059 26.5312 20.6108 26.5292L22.0421 25.9519C22.2758 26.2069 22.5627 26.4147 22.8894 26.5571L24.8265 27.4007C24.9901 27.472 25.1617 27.5066 25.3316 27.5066C25.6574 27.5066 25.9765 27.3789 26.2187 27.1369L27.1186 26.2369C27.487 25.8687 27.5906 25.3221 27.3826 24.8446L26.995 23.9543L29.8789 22.7911C29.9361 22.8964 30.0087 22.9949 30.0968 23.0832L30.9968 23.983C31.2388 24.2253 31.558 24.353 31.8839 24.353C32.0537 24.353 32.2254 24.3183 32.3891 24.2471L34.3262 23.4034C35.087 23.072 35.6336 22.3874 35.7882 21.572C35.8615 21.1859 35.8411 20.7951 35.7381 20.428L38.1919 19.4384C38.8318 19.1959 39.5218 19.279 40.086 19.6673C40.6522 20.0568 40.977 20.6744 40.977 21.3616V24.2343C40.2462 24.1728 39.5201 24.4338 38.9951 24.9589L38.6449 25.309C38.058 25.8959 37.8 26.7332 37.9546 27.5487C38.1091 28.3641 38.6557 29.0487 39.4166 29.3801L40.977 30.0597V34.2513C40.977 34.7219 40.7727 35.173 40.4164 35.489C40.0569 35.808 39.5951 35.952 39.1171 35.8946C38.2895 35.7952 37.6656 35.0598 37.6656 34.1842V30.5804C37.6656 28.6981 36.1297 27.1669 34.2418 27.1669H34.1857C32.605 27.1669 31.2315 28.45 31.1242 30.0271L30.8407 34.1915C30.8393 34.2113 30.8386 34.2312 30.8386 34.2511C30.8386 34.7218 30.6343 35.1729 30.2781 35.4889C29.9186 35.8078 29.4565 35.9519 28.9787 35.8945C28.1511 35.7951 27.5272 35.0597 27.5272 34.1841V31.7557C27.5272 30.7427 27.0784 29.7872 26.2957 29.1345C25.5157 28.484 24.4917 28.2156 23.486 28.3995C21.8719 28.6941 20.7002 30.1337 20.7002 31.8228V33.154C20.7002 34.067 19.9575 34.8096 19.0446 34.8096C18.1316 34.8096 17.3889 34.0669 17.3889 33.154V31.1968ZM9.14684 38.6745C9.84738 38.1817 10.8054 38.2129 11.4722 38.7694V40.2215H9.49535C9.49289 39.6919 9.37641 39.1633 9.14684 38.6745ZM11.9057 34.7948C11.7042 35.4382 11.5703 36.1073 11.51 36.7925C10.8947 36.5679 10.2312 36.5134 9.59215 36.628C9.60059 36.1503 9.78574 35.6752 10.1497 35.3112C10.6257 34.8353 11.2918 34.6638 11.9057 34.7948ZM6.28242 35.8005C6.77355 35.3095 7.4666 35.1425 8.0959 35.298C7.85531 35.9007 7.78137 36.5543 7.87242 37.189C7.27231 36.7846 6.5659 36.567 5.82609 36.567C5.82258 36.567 5.81918 36.5672 5.81566 36.5672C5.90508 36.2867 6.06023 36.0228 6.28242 35.8005ZM4.47234 38.8855C4.83387 38.5239 5.31469 38.3248 5.82609 38.3248C6.33738 38.3248 6.81832 38.524 7.17984 38.8855C7.54863 39.2543 7.73414 39.7374 7.73812 40.2216H3.91406C3.91805 39.7373 4.10355 39.2543 4.47234 38.8855ZM58.2422 42.0031C58.2422 44.7203 56.0316 46.9309 53.3143 46.9309H6.68566C3.96844 46.9309 1.75781 44.7203 1.75781 42.0031V41.9794H37.5C37.9855 41.9794 38.3789 41.5859 38.3789 41.1005C38.3789 40.6151 37.9855 40.2216 37.5 40.2216H13.23V37.623C13.23 35.4712 14.1258 33.4612 15.6311 32.0284V33.1539C15.6311 35.0362 17.1623 36.5673 19.0446 36.5673C20.9269 36.5673 22.458 35.0361 22.458 33.1539V31.8227C22.458 30.9967 23.0358 30.2684 23.8017 30.1286C24.3001 30.0379 24.7857 30.1641 25.1699 30.4844C25.5509 30.8022 25.7694 31.2655 25.7694 31.7557V34.1842C25.7694 35.9488 27.0589 37.4344 28.7692 37.6398C29.7393 37.7567 30.7145 37.4518 31.4446 36.8039C32.1686 36.1618 32.5871 35.2445 32.5963 34.2834L32.8778 30.1465C32.9229 29.4843 33.5218 28.9247 34.1856 28.9247H34.2417C35.1604 28.9247 35.9077 29.6675 35.9077 30.5804V34.1841C35.9077 35.9487 37.1972 37.4343 38.9074 37.6397C39.0434 37.6561 39.1792 37.6641 39.3148 37.6641C40.146 37.6641 40.955 37.3608 41.5828 36.8038C42.3148 36.1544 42.7346 35.224 42.7346 34.251V29.9696C42.7382 29.9661 42.7421 29.9631 42.7457 29.9596L43.6461 29.0593C44.0142 28.6911 44.1176 28.1447 43.9099 27.6674C43.9098 27.6674 43.9098 27.6673 43.9098 27.6673L43.0662 25.7303C42.979 25.5302 42.8668 25.3452 42.7348 25.178V21.6634C44.3475 22.1808 45.7296 23.2294 46.6859 24.6839C47.8283 26.4216 48.2244 28.5829 47.7725 30.6139L46.5458 36.128C46.3187 37.1489 46.3733 38.2131 46.704 39.2057L47.0425 40.2215H41.6016C41.1161 40.2215 40.7227 40.615 40.7227 41.1004C40.7227 41.5858 41.1161 41.9793 41.6016 41.9793H58.2422V42.0031Z">
                                                </path>
                                                <path
                                                    d="M15.2699 15.1809C15.5119 15.4229 15.831 15.5505 16.1568 15.5505C16.3266 15.5505 16.4984 15.5158 16.662 15.4445L18.599 14.6009C19.3599 14.2695 19.9065 13.5848 20.0611 12.7693C20.2156 11.9537 19.9575 11.1166 19.3707 10.5298L19.0206 10.1796C18.4338 9.59289 17.597 9.33473 16.7811 9.4893C15.9657 9.64387 15.2809 10.1904 14.9495 10.9514L14.1059 12.8886C13.898 13.3659 14.0015 13.9122 14.3697 14.2806L15.2699 15.1809ZM16.5611 11.6532C16.6616 11.4223 16.8612 11.263 17.1085 11.2162C17.3562 11.1696 17.5997 11.2446 17.7777 11.4224L18.1278 11.7726C18.3058 11.9506 18.3809 12.1945 18.334 12.4418C18.2873 12.6891 18.1279 12.8887 17.897 12.9892L16.2721 13.697L15.8534 13.2782L16.5611 11.6532Z">
                                                </path>
                                                <path
                                                    d="M25.3653 15.6674L27.3023 16.511C27.4659 16.5823 27.6375 16.617 27.8074 16.617C28.1332 16.617 28.4524 16.4893 28.6946 16.2472L29.5945 15.3472C29.963 14.979 30.0664 14.4326 29.8587 13.955C29.8585 13.955 29.8585 13.9549 29.8585 13.9549L29.0149 12.0179C28.6836 11.2569 27.999 10.7104 27.1835 10.5557C26.368 10.4012 25.5307 10.6591 24.9437 11.2461L24.5938 11.5961C24.0069 12.1829 23.7489 13.0202 23.9033 13.8356C24.0579 14.6513 24.6044 15.336 25.3653 15.6674ZM25.8368 12.8391L26.1866 12.4891C26.33 12.3458 26.516 12.2692 26.7121 12.2692C26.7595 12.2692 26.8077 12.2738 26.8561 12.2829C27.1034 12.3298 27.3028 12.489 27.4034 12.7199L28.111 14.3449L27.6923 14.7638L26.0674 14.0559C25.8366 13.9554 25.6773 13.7558 25.6304 13.5086C25.5835 13.2611 25.6587 13.0171 25.8368 12.8391Z">
                                                </path>
                                                <path
                                                    d="M35.5353 12.6141C35.7773 12.8563 36.0965 12.984 36.4224 12.984C36.5922 12.984 36.7639 12.9493 36.9276 12.8781L38.8647 12.0344C39.6255 11.703 40.1721 11.0184 40.3267 10.203C40.4813 9.38753 40.2233 8.55023 39.6363 7.96324L39.2863 7.61331C38.6995 7.02644 37.8622 6.76839 37.0469 6.92285C36.2313 7.07742 35.5465 7.62398 35.2151 8.38499L34.3714 10.3221C34.1637 10.7994 34.2671 11.3457 34.6354 11.7142L35.5353 12.6141ZM36.8267 9.08683C36.9272 8.85597 37.1268 8.69671 37.3742 8.64984C37.6214 8.60331 37.8655 8.6782 38.0435 8.8562L38.3934 9.20613C38.5715 9.38425 38.6466 9.62824 38.5997 9.8755C38.5529 10.1228 38.3936 10.3222 38.1628 10.4228L36.5377 11.1305L36.119 10.7118L36.8267 9.08683Z">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="categories-item-text">
                                <h3>Mexcan Cuisine</h3>
                                <h4> 25 items</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 res-mb-20px" data-aos="fade-right">
                        <div class="categories-item  ">
                            <div class="categories-icon">
                                <div class="icon">
                                    <span>
                                        <svg width="52" height="52" viewBox="0 0 60 60" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_304_14658)">
                                                <path
                                                    d="M59.1211 41.2469H57.2081C56.9713 36.8175 54.9512 32.7025 51.5722 29.7968C51.4331 28.4661 50.6446 27.2868 49.4409 26.6552C46.8485 25.2951 43.9201 24.5762 40.9723 24.5762C39.6738 24.5762 38.3779 24.7132 37.1208 24.9835C36.2818 25.1639 35.5487 25.6085 34.9997 26.2175C33.4881 24.6234 31.571 23.4712 29.4785 22.8746V10.8898C29.4785 10.4045 29.085 10.0109 28.5996 10.0109C28.1142 10.0109 27.7207 10.4045 27.7207 10.8898V22.5116C27.3725 22.4663 27.0214 22.4362 26.6684 22.4217V17.7676C26.6684 17.767 26.6685 17.7664 26.6685 17.7658V5.29063C26.6691 5.00105 26.9047 4.76563 27.1945 4.76563C27.4847 4.76563 27.7207 5.00164 27.7207 5.2918V7.37422C27.7207 7.85961 28.1142 8.25313 28.5996 8.25313C29.085 8.25313 29.4785 7.85961 29.4785 7.37422V5.2918C29.4785 4.03238 28.4539 3.00781 27.1945 3.00781C26.5273 3.00781 25.9279 3.29715 25.51 3.75488C22.8086 2.65379 20.2007 3.57125 17.6723 4.46258C15.178 5.34184 12.8221 6.17234 10.5558 4.95324C10.2836 4.80676 9.95414 4.81402 9.68859 4.97281C9.42305 5.13148 9.26051 5.41801 9.26051 5.72727V18.6375C9.26051 18.9609 9.43816 19.2582 9.72305 19.4115C10.8434 20.0142 11.9474 20.2439 13.0363 20.2439C14.8153 20.2439 16.5541 19.631 18.2566 19.0306C20.5819 18.211 22.7865 17.4346 24.9104 18.3204V22.4784C20.3955 22.9491 16.495 25.9085 14.8444 30.1842C11.8325 30.747 9.09246 32.4438 7.24922 34.9586C6.96223 35.3502 7.04707 35.9001 7.43859 36.1871C7.82988 36.474 8.38008 36.3893 8.66707 35.9977C10.6227 33.3294 13.7569 31.7364 17.0508 31.7364C20.5352 31.7364 23.8252 33.5274 25.7386 36.4365C25.2986 37.6176 24.9934 38.8573 24.8371 40.1352C23.9491 36.6639 20.7953 34.0899 17.0513 34.0899C12.9173 34.0899 9.50367 37.228 9.06434 41.2469H6.69832C6.76828 40.415 6.93715 39.5976 7.2041 38.8075C7.35949 38.3477 7.11258 37.8489 6.65273 37.6936C6.19313 37.5384 5.69414 37.785 5.53875 38.2449C5.21051 39.2165 5.00988 40.223 4.93629 41.2469H0.878906C0.393516 41.2469 0 41.6404 0 42.1258C0 46.9704 3.94137 50.9118 8.78602 50.9118H10.5616C10.9954 54.3338 13.9226 56.9891 17.4604 56.9891H43.8046C47.3423 56.9891 50.2696 54.3337 50.7033 50.9118H51.2141C56.0588 50.9118 60.0001 46.9705 60.0001 42.1258C60 41.6404 59.6066 41.2469 59.1211 41.2469ZM55.4471 41.2469H53.0851C52.9166 38.9309 52.0861 36.7112 50.6919 34.8505C51.2766 34.2013 51.5966 33.371 51.5966 32.4921V32.2543C53.8826 34.7101 55.2448 37.8737 55.4471 41.2469ZM44.7964 41.2469C44.3961 39.505 42.8344 38.2016 40.9727 38.2016C39.1111 38.2016 37.5492 39.505 37.1489 41.2469H34.7556C35.1159 38.6691 37.0395 36.573 39.5886 36.0025C40.1393 37.1817 41.305 38.0244 42.6509 38.0716C42.6936 38.0731 42.7363 38.0738 42.7788 38.0738C43.5884 38.0738 44.3559 37.8029 44.9809 37.3002C46.1871 38.3006 46.97 39.7044 47.1874 41.2468H44.7964V41.2469ZM42.951 41.2469H38.9943C39.3321 40.4894 40.091 39.9594 40.9726 39.9594C41.8542 39.9594 42.6131 40.4894 42.951 41.2469ZM33.9933 29.4117C34.1099 30.232 34.5094 30.962 35.0898 31.4997C31.5326 33.4786 29.1587 37.1527 28.8591 41.2469H26.5003C26.8001 36.2566 29.6351 31.802 33.9933 29.4117ZM23.4015 31.7868C22.7085 31.361 21.9738 31.0044 21.2094 30.7234C22.3879 29.1947 24.2107 28.2792 26.1773 28.2792C27.7105 28.2792 29.1752 28.8414 30.3143 29.8426C29.7173 30.3602 29.1612 30.9186 28.6493 31.5131C27.9581 30.9514 27.0894 30.6335 26.1775 30.6335C25.1161 30.6334 24.1283 31.0542 23.4015 31.7868ZM37.2404 32.4302C37.3205 32.4356 37.401 32.4395 37.4823 32.4395C38.1136 32.4395 38.7195 32.2749 39.2507 31.9661V34.277C35.8821 35.0091 33.3585 37.8194 32.9861 41.247H30.6223C30.9587 37.3207 33.5264 33.8663 37.2404 32.4302ZM48.9601 41.2469C48.7304 39.1467 47.6844 37.2283 46.0385 35.8925C46.0955 35.7543 46.1441 35.6128 46.183 35.4678C46.7292 35.8155 47.3773 36.0172 48.0715 36.0172C48.47 36.0172 48.8583 35.9507 49.2247 35.8243C50.4278 37.3979 51.1561 39.2792 51.3237 41.2469H48.9601ZM37.4902 26.7021C38.6262 26.4579 39.7977 26.334 40.9723 26.334C43.6366 26.334 46.2826 26.9833 48.6243 28.2118C49.3734 28.6048 49.8387 29.3739 49.8387 30.2186V32.4921C49.8387 32.9638 49.6548 33.408 49.3222 33.7413C48.9874 34.0753 48.5433 34.2593 48.0715 34.2593C47.0965 34.2593 46.3031 33.4665 46.3031 32.4921C46.3031 32.0067 45.9097 31.6132 45.4242 31.6132C44.9387 31.6132 44.5453 32.0067 44.5453 32.4921V34.5475C44.5453 35.0316 44.3534 35.4835 44.005 35.82C43.6568 36.1562 43.1979 36.3331 42.7125 36.3147C41.7729 36.2818 41.0086 35.4606 41.0086 34.484V28.9133C41.0086 28.4279 40.6152 28.0344 40.1297 28.0344C39.6442 28.0344 39.2508 28.4279 39.2508 28.9133C39.2508 29.3859 39.0668 29.8303 38.7325 30.1645C38.3989 30.498 37.955 30.6816 37.4824 30.6816C36.508 30.6816 35.7152 29.8883 35.7152 28.9133C35.7152 27.8531 36.4617 26.9232 37.4902 26.7021ZM11.0183 18.0839V7.04223C12.1684 7.39004 13.3016 7.39531 14.4189 7.2193V18.3411C13.2596 18.5551 12.128 18.5466 11.0183 18.0839ZM17.6723 17.3728C17.1682 17.5504 16.6699 17.7261 16.1767 17.8832V6.81207C16.8761 6.60688 17.5693 6.36277 18.2568 6.12043C18.7608 5.94277 19.2592 5.76711 19.7523 5.60996V16.6813C19.0529 16.8864 18.3596 17.1304 17.6723 17.3728ZM21.5101 16.2739V5.15211C22.6695 4.93813 23.801 4.94656 24.9105 5.40934V16.4509C23.7606 16.1032 22.6274 16.0979 21.5101 16.2739ZM16.8506 29.9816C18.5794 26.4564 22.1741 24.1682 26.1773 24.1682C29.077 24.1682 31.8582 25.4067 33.8152 27.5252C33.0819 27.8846 32.3838 28.2944 31.7242 28.7499C30.2346 27.3255 28.255 26.5214 26.1773 26.5214C23.4247 26.5214 20.8935 27.9216 19.4195 30.2161C18.6457 30.06 17.8527 29.9786 17.0508 29.9786C16.984 29.9785 16.9173 29.9804 16.8506 29.9816ZM24.8606 32.8385C25.2322 32.5521 25.6908 32.3913 26.1773 32.3913C26.6952 32.3913 27.1881 32.5779 27.5753 32.906C27.2053 33.4438 26.8669 34.0029 26.5639 34.582C26.0537 33.9416 25.4816 33.3588 24.8606 32.8385ZM17.0511 35.8477C20.2144 35.8477 22.8374 38.1999 23.2663 41.2469H20.8748C20.4746 39.505 18.9128 38.2016 17.0511 38.2016C15.1895 38.2016 13.6275 39.505 13.2273 41.2469H10.8359C11.2648 38.1999 13.8878 35.8477 17.0511 35.8477ZM19.0295 41.2469H15.0728C15.4106 40.4894 16.1695 39.9594 17.0513 39.9594C17.9327 39.9594 18.6915 40.4894 19.0295 41.2469ZM43.8046 55.2313H17.4604C14.8935 55.2313 12.7552 53.3611 12.3363 50.9118H48.9287C48.5098 53.3611 46.3714 55.2313 43.8046 55.2313ZM51.214 49.1539H8.78602C5.20828 49.1539 2.24625 46.4668 1.81254 43.0046H58.1875C57.7537 46.4668 54.7918 49.1539 51.214 49.1539Z">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="categories-item-text">
                                <h3>Italian Cuisine</h3>
                                <h4> 25 items</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!-- .Categories-part-end -->





        <!-- Promotions part-start -->


        <div class="promotions promotions-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="promotions-img promotions-img-two">
                            <a href="foods-details.html">
                                <img src="{{ asset('images/thumb/PromoBanner-2.png') }}" class="w-100" alt="thumb">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="promotions-img">

                            <a href="foods-details.html">
                                <img src="{{asset('images/thumb/PromoBanner-1.png')}}"
                                     class="w-100" alt="thumb"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!-- Promotions part-end -->








        <!-- Traditional part-start -->


        <section class="traditional s-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="traditional-head">
                            <h2>Some Traditional Food
                                Based on Location</h2>
                        </div>
                    </div>
                </div>

                <!-- Grid Tab -->
                <div class="tab-pane fade show in active" id="grid" role="tabpanel">
                    <!-- Filter Title -->
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <ul class="shaf-filter course-filter j ">
                                <li class="active" data-group="all">All Category</li>
                                <li data-group="development">Thai Cuisine</li>
                                <li data-group="architecture">Mexican</li>
                                <li data-group="engineering">Italian</li>
                                <li data-group="science">Vegetarian</li>
                                <li data-group="Vegetarian">Junk Food</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Filter Title -->

                    <!-- Filter Content -->
                    <div class="row shafull-container">
                        <div class="col-lg-4 col-md-6 shaf-item res-mb-20px  "
                             data-groups='["all", "science", "development", "architecture","engineering", "Vegetarian" ]'>

                            <div class="featured-item  " data-aos="fade-up">
                                <div class="featured-item-img-populer">

                                    <img src="{{ asset('images/victor/populer.png')}}" alt="img">
                                </div>
                                <div class="featured-item-img">
                                    <img src="{{ asset('images/thumb/featured-1.png')}}" class="w-100" alt="featured-thumb">

                                    <div class="featured-item-img-overlay">
                                        <div class="featured-item-img-over-text">
                                            <div class="left-text">
                                                <a href="./dashboard-wishlist.html" class="icon">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
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
                                            <h3>$30.00</h3>
                                        </div>
                                        <div class="right">
                                            <div class="icon">
                                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                            fill="#FFB23E" />
                                                    </svg></span>
                                            </div>
                                            <h5> 4.7(2.5K)</h5>
                                        </div>
                                    </div>

                                    <div class="text-item-center">
                                        <h3><a href="all-food.html">Baked Chicken Wings and Legs</a></h3>
                                    </div>

                                    <div class="text-item-center-item-box">
                                        <div class="text-item-center-item">
                                            <div class="icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>

                                            <div class="text">
                                                <h5>Spicy Sauce</h5>
                                            </div>
                                        </div>

                                        <div class="featured-item-btn">
                                            <a href="shopping-cart.html" class="main-btn-three">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path
                                                            d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="col-lg-4 col-md-6 shaf-item res-mb-20px  " data-groups='["engineering"]'>

                            <div class="featured-item" data-aos="fade-up">
                                <div class="featured-item-img">
                                    <img src="{{asset('images/thumb/traditional-2.pnggit')}}" class="w-100" alt="featured-thumb">


                                    <div class="featured-item-img-overlay">
                                        <div class="featured-item-img-over-text">
                                            <div class="left-text">
                                                <a href="./dashboard-wishlist.html" class="icon">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
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
                                            <h3>$20.00</h3>
                                        </div>
                                        <div class="right">
                                            <div class="icon">
                                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                            fill="#FFB23E" />
                                                    </svg></span>
                                            </div>
                                            <h5> 4.7(2.5K)</h5>
                                        </div>
                                    </div>

                                    <div class="text-item-center">
                                        <h3><a href="all-food.html">BBQ Pulled Pork Sandwich</a></h3>
                                    </div>

                                    <div class="text-item-center-item-box">
                                        <div class="text-item-center-item">
                                            <div class="icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>

                                            <div class="text">
                                                <h5>Spicy Sauce</h5>
                                            </div>
                                        </div>

                                        <div class="featured-item-btn">
                                            <a href="shopping-cart.html" class="main-btn-three">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path
                                                            d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                        <div class="col-lg-4 col-md-6 shaf-item res-mb-20px  " data-groups='[ "development"]'>
                            <div class="featured-item" data-aos="fade-up">
                                <div class="featured-item-img">
                                    <img src="./assets/images/thumb/traditional-3.png" class="w-100"
                                         alt="featured-thumb">

                                    <div class="featured-item-img-overlay">
                                        <div class="featured-item-img-over-text">
                                            <div class="left-text">
                                                <a href="./dashboard-wishlist.html" class="icon">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
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
                                            <h3>$18.00</h3>
                                        </div>
                                        <div class="right">
                                            <div class="icon">
                                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                            fill="#FFB23E" />
                                                    </svg></span>
                                            </div>
                                            <h5> 4.7(2.5K)</h5>
                                        </div>
                                    </div>

                                    <div class="text-item-center">
                                        <h3><a href="all-food.html">Pork Chop with Apple Chutney</a></h3>
                                    </div>

                                    <div class="text-item-center-item-box">
                                        <div class="text-item-center-item">
                                            <div class="icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>

                                            <div class="text">
                                                <h5>Spicy Sauce</h5>
                                            </div>
                                        </div>

                                        <div class="featured-item-btn">
                                            <a href="shopping-cart.html" class="main-btn-three">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path
                                                            d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 shaf-item res-mb-20px " data-groups='["architecture" ]'>

                            <div class="featured-item" data-aos="fade-up">
                                <div class="featured-item-img">
                                    <img src="./assets/images/thumb/traditional-4.png" class="w-100"
                                         alt="featured-thumb">

                                    <div class="featured-item-img-overlay">
                                        <div class="featured-item-img-over-text">
                                            <div class="left-text">
                                                <a href="./dashboard-wishlist.html" class="icon">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
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
                                            <h3>$40.00</h3>
                                        </div>
                                        <div class="right">
                                            <div class="icon">
                                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                            fill="#FFB23E" />
                                                    </svg></span>
                                            </div>
                                            <h5> 4.7(2.5K)</h5>
                                        </div>
                                    </div>

                                    <div class="text-item-center">
                                        <h3><a href="all-food.html">Eggplant Parmesan & Linguine</a></h3>
                                    </div>

                                    <div class="text-item-center-item-box">
                                        <div class="text-item-center-item">
                                            <div class="icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>

                                            <div class="text">
                                                <h5>Spicy Sauce</h5>
                                            </div>
                                        </div>

                                        <div class="featured-item-btn">
                                            <a href="shopping-cart.html" class="main-btn-three">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path
                                                            d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 shaf-item  res-mb-20px  " data-groups='[ "science" ]'>

                            <div class="featured-item" data-aos="fade-up">
                                <div class="featured-item-img">
                                    <img src="./assets/images/thumb/traditional-5.png" class="w-100"
                                         alt="featured-thumb">

                                    <div class="featured-item-img-overlay">
                                        <div class="featured-item-img-over-text">
                                            <div class="left-text">
                                                <a href="./dashboard-wishlist.html" class="icon">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
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
                                            <h3>$30.00</h3>
                                        </div>
                                        <div class="right">
                                            <div class="icon">
                                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                            fill="#FFB23E" />
                                                    </svg></span>
                                            </div>
                                            <h5> 4.7(2.5K)</h5>
                                        </div>
                                    </div>

                                    <div class="text-item-center">
                                        <h3><a href="all-food.html">Fish Tacos with Chipotle Crema</a></h3>
                                    </div>

                                    <div class="text-item-center-item-box">
                                        <div class="text-item-center-item">
                                            <div class="icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>

                                            <div class="text">
                                                <h5>Spicy Sauce</h5>
                                            </div>
                                        </div>

                                        <div class="featured-item-btn">
                                            <a href="shopping-cart.html" class="main-btn-three">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path
                                                            d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 shaf-item   " data-groups='[ "Vegetarian" ]'>

                            <div class="featured-item" data-aos="fade-up">
                                <div class="featured-item-img">
                                    <img src="./assets/images/thumb/traditional-6.png" class="w-100"
                                         alt="featured-thumb">

                                    <div class="featured-item-img-overlay">
                                        <div class="featured-item-img-over-text">
                                            <div class="left-text">
                                                <a href="./dashboard-wishlist.html" class="icon">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
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
                                            <h3>$30.00</h3>
                                        </div>
                                        <div class="right">
                                            <div class="icon">
                                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                            fill="#FFB23E" />
                                                    </svg></span>
                                            </div>
                                            <h5> 4.7(2.5K)</h5>
                                        </div>
                                    </div>

                                    <div class="text-item-center">
                                        <h3><a href="all-food.html">Quinoa-Stuffed Bell Pepper</a></h3>
                                    </div>

                                    <div class="text-item-center-item-box">
                                        <div class="text-item-center-item">
                                            <div class="icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>

                                            <div class="text">
                                                <h5>Spicy Sauce</h5>
                                            </div>
                                        </div>

                                        <div class="featured-item-btn">
                                            <a href="shopping-cart.html" class="main-btn-three">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path
                                                            d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round" />
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

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="traditional-btn">
                                <a href="all-food.html" class="main-btn-four">Browser All</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>


        <!-- Traditional part-end -->


        <!-- Process part-start -->


        <section class="process s-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 " data-aos="fade-right">
                        <div class="process-img-box">
                            <div class="process-img">
                                <img src="./assets/images/thumb/process-themb.png" alt="thumb">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="process-head" data-aos="fade-up">
                            <h2>The Process of Crafting your Dining Experience</h2>
                        </div>

                        <div class="process-item-box">
                            <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                                <div class="process-item-icon">
                                    <div class="icon">
                                        <span>
                                            <svg width="30" height="34" viewBox="0 0 30 34" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M20.7371 23.5034C23.8364 20.3264 26.6663 15.5679 26.6663 11.7606C26.6663 5.44878 21.443 0.332031 14.9997 0.332031C8.55635 0.332031 3.33301 5.44878 3.33301 11.7606C3.33301 15.5679 6.16294 20.3264 9.26228 23.5034C11.3011 25.5932 13.4566 26.9987 14.9997 26.9987C16.5428 26.9987 18.6982 25.5932 20.7371 23.5034ZM14.9997 15.332C16.8406 15.332 18.333 13.8396 18.333 11.9987C18.333 10.1577 16.8406 8.66536 14.9997 8.66536C13.1587 8.66536 11.6663 10.1577 11.6663 11.9987C11.6663 13.8396 13.1587 15.332 14.9997 15.332Z"
                                                      fill="white" />
                                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M6.75902 24.4883C2.6873 25.3824 0 26.9199 0 28.6668C0 31.4282 6.71573 33.6668 15 33.6668C23.2843 33.6668 30 31.4282 30 28.6668C30 26.9199 27.3127 25.3824 23.241 24.4883C23.0051 24.7502 22.7668 25.0045 22.5269 25.2504C21.4064 26.399 20.2024 27.4143 19.0016 28.1599C17.8569 28.8707 16.455 29.5 15 29.5C13.545 29.5 12.1431 28.8707 10.9984 28.1599C9.7976 27.4143 8.59362 26.399 7.47312 25.2504C7.23321 25.0045 6.99487 24.7502 6.75902 24.4883Z"
                                                      fill="white" />
                                            </svg>
                                        </span>
                                    </div>


                                </div>

                                <div class="text">
                                    <h3>Set your location</h3>
                                    <p>A high quality solution beautifully food for customers</p>
                                </div>

                                <div class="process-item-right-img">
                                    <img src="./assets/images/icon/1.png" alt="img">
                                </div>
                            </div>
                            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="process-item-icon">
                                    <div class="icon">
                                        <span>
                                            <svg width="34" height="30" viewBox="0 0 34 30" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                      d="M3.66634 10H0.333008V25L7.51773 28.5924C9.36914 29.5181 11.4106 30 13.4806 30H26.9997C28.8406 30 30.333 28.5076 30.333 26.6667C30.333 24.8257 28.8406 23.3333 26.9997 23.3333H24.3604C22.8079 23.3333 21.2768 22.9719 19.8882 22.2776L14.9863 19.8267C15.3068 19.5315 15.5716 19.1655 15.7544 18.739C16.4436 17.1307 15.7065 15.2676 14.1034 14.5662L3.66634 10Z"
                                                      fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M20.666 0C19.5614 0 18.666 0.89543 18.666 2V13C18.666 14.1046 19.5614 15 20.666 15H31.666C32.7706 15 33.666 14.1046 33.666 13V2C33.666 0.895431 32.7706 0 31.666 0H20.666ZM27.8327 6.25C28.523 6.25 29.0827 5.69036 29.0827 5C29.0827 4.30964 28.523 3.75 27.8327 3.75H24.4993C23.809 3.75 23.2493 4.30964 23.2493 5C23.2493 5.69036 23.809 6.25 24.4993 6.25H27.8327Z"
                                                      fill="white" />
                                            </svg>
                                        </span>
                                    </div>


                                </div>

                                <div class="text">
                                    <h3>Select Food</h3>
                                    <p>A high quality solution beautifully food for customers</p>
                                </div>

                                <div class="process-item-right-img">
                                    <img src="./assets/images/icon/2.png" alt="img">
                                </div>
                            </div>
                            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="process-item-icon">
                                    <div class="icon">
                                        <span>
                                            <svg width="24" height="34" viewBox="0 0 24 34" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                      d="M16.6667 0.332031H3.33333C1.49238 0.332031 0 1.82442 0 3.66537V30.332C0 32.173 1.49238 33.6654 3.33333 33.6654H16.6667C18.5076 33.6654 20 32.173 20 30.332V3.66536C20 1.82442 18.5076 0.332031 16.6667 0.332031Z"
                                                      fill="white" />
                                                <path
                                                    d="M10 8.66406H20C21.8409 8.66406 23.3333 10.1564 23.3333 11.9974V18.6641C23.3333 20.505 21.8409 21.9974 20 21.9974H10V8.66406Z"
                                                    fill="white" />
                                                <path
                                                    d="M11.6663 28.6667C11.6663 29.5871 10.9201 30.3333 9.99967 30.3333C9.0792 30.3333 8.33301 29.5871 8.33301 28.6667C8.33301 27.7462 9.0792 27 9.99967 27C10.9201 27 11.6663 27.7462 11.6663 28.6667Z"
                                                    fill="white" />
                                                <path opacity="0.4"
                                                      d="M9.99968 14.5L23.333 14.5L23.333 12L9.99968 12L9.99968 14.5Z"
                                                      fill="white" />
                                            </svg>
                                        </span>
                                    </div>


                                </div>

                                <div class="text">
                                    <h3>Pay Cash or Online</h3>
                                    <p>Providing an upscale and elegant ambiance for ..</p>
                                </div>

                                <div class="process-item-right-img">
                                    <img src="./assets/images/icon/3.png" alt="img">
                                </div>
                            </div>
                            <div class="process-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="process-item-icon">
                                    <div class="icon">
                                        <span>
                                            <svg width="34" height="31" viewBox="0 0 34 31" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                      d="M13.6663 0H6.99967C3.31778 0 0.333008 2.98477 0.333008 6.66667V20C0.333008 23.1087 2.46079 25.7204 5.33942 26.4583C5.44698 24.7144 6.89538 23.3333 8.66634 23.3333C10.5073 23.3333 11.9997 24.8257 11.9997 26.6667H20.333V6.66667C20.333 2.98477 17.3482 0 13.6663 0Z"
                                                      fill="white" />
                                                <path
                                                    d="M20.333 26.668V6.66797H25.6815C26.5284 6.66797 27.3435 6.9903 27.9613 7.56951L32.6128 11.9303C33.285 12.5604 33.6663 13.4407 33.6663 14.3621V23.3346C33.6663 25.1756 32.174 26.668 30.333 26.668H20.333Z"
                                                    fill="white" />
                                                <path
                                                    d="M12.8333 26.6667C12.8333 28.9679 10.9679 30.8333 8.66667 30.8333C6.36548 30.8333 4.5 28.9679 4.5 26.6667C4.5 26.5792 4.5027 26.4923 4.50801 26.4062C4.64247 24.2263 6.45296 22.5 8.66667 22.5C10.9679 22.5 12.8333 24.3655 12.8333 26.6667Z"
                                                    fill="white" />
                                                <path opacity="0.4"
                                                      d="M31.1587 26.6667C31.1587 28.9679 29.2932 30.8333 26.992 30.8333C24.6908 30.8333 22.8253 28.9679 22.8253 26.6667C22.8253 26.5792 22.828 26.4923 22.8333 26.4062C22.9678 24.2263 24.7783 22.5 26.992 22.5C29.2932 22.5 31.1587 24.3655 31.1587 26.6667Z"
                                                      fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M9.08301 8.33203C9.08301 7.64168 9.64265 7.08203 10.333 7.08203L13.6663 7.08203C14.3567 7.08203 14.9163 7.64168 14.9163 8.33203C14.9163 9.02239 14.3567 9.58203 13.6663 9.58203L10.333 9.58203C9.64265 9.58203 9.08301 9.02239 9.08301 8.33203Z"
                                                      fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M5.75 15C5.75 14.3096 6.30964 13.75 7 13.75L13.6667 13.75C14.357 13.75 14.9167 14.3096 14.9167 15C14.9167 15.6904 14.357 16.25 13.6667 16.25H7C6.30964 16.25 5.75 15.6904 5.75 15Z"
                                                      fill="white" />
                                            </svg>
                                        </span>
                                    </div>


                                </div>

                                <div class="text">
                                    <h3>Delivery or Pickup</h3>
                                    <p>Allowing customers to easily book tables through</p>
                                </div>

                                <div class="process-item-right-img">
                                    <img src="./assets/images/icon/4.png" alt="img">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Process part-end -->




        <!-- Popular part-start -->



        <section class="popular s-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="popular-head">
                            <h2>Most Popular Items</h2>
                        </div>
                    </div>
                </div>

                <div class="row popular-item-box-mt">
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="popular-item-box">
                            <div class="popular-item-box-img">
                                <img src="./assets/images/thumb/popular-1.png" alt="thumb">

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
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_304_21999)">
                                                    <path
                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                        stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_304_21999)">
                                                    <path
                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                        stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                        <h3>$20.00</h3>
                                    </div>

                                    <div class="popular-inner-item-btn">
                                        <a href="shopping-cart.html" class="main-btn-five">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path
                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 res-popular-item-mt-30px" data-aos="fade-up">
                        <div class="popular-item-box">
                            <div class="popular-item-box-img">
                                <img src="./assets/images/thumb/popular-2.png" alt="thumb">
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
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_304_21999)">
                                                    <path
                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                        stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_304_21999)">
                                                    <path
                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                        stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                        <h3>$30.00</h3>
                                    </div>

                                    <div class="popular-inner-item-btn">
                                        <a href="shopping-cart.html" class="main-btn-five">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path
                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 popular-item-mt-30px" data-aos="fade-up">
                        <div class="popular-item-box">
                            <div class="popular-item-box-img">
                                <img src="./assets/images/thumb/popular-3.png" alt="thumb">
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
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_304_21999)">
                                                    <path
                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                        stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_304_21999)">
                                                    <path
                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                        stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                        <h3>$30.00</h3>
                                    </div>

                                    <div class="popular-inner-item-btn">
                                        <a href="shopping-cart.html" class="main-btn-five">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path
                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 popular-item-mt-30px" data-aos="fade-up">
                        <div class="popular-item-box">
                            <div class="popular-item-box-img">
                                <img src="./assets/images/thumb/popular-4.png" alt="thumb">
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
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_304_21999)">
                                                    <path
                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                        stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_304_21999)">
                                                    <path
                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                        stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                        <h3>$30.00</h3>
                                    </div>

                                    <div class="popular-inner-item-btn">
                                        <a href="shopping-cart.html" class="main-btn-five">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path
                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 popular-item-mt-30px" data-aos="fade-up">
                        <div class="popular-item-box">
                            <div class="popular-item-box-img">
                                <img src="./assets/images/thumb/popular-5.png" alt="thumb">
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
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_304_21999)">
                                                    <path
                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                        stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_304_21999)">
                                                    <path
                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                        stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                        <h3>$30.00</h3>
                                    </div>

                                    <div class="popular-inner-item-btn">
                                        <a href="shopping-cart.html" class="main-btn-five">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path
                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 popular-item-mt-30px" data-aos="fade-up">
                        <div class="popular-item-box">
                            <div class="popular-item-box-img">
                                <img src="./assets/images/thumb/popular-6.png" alt="thumb">
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
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_304_21999)">
                                                    <path
                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                        stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                        <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_304_21999)">
                                                    <path
                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                        stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
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
                                        <h3>$30.00</h3>
                                    </div>

                                    <div class="popular-inner-item-btn">
                                        <a href="shopping-cart.html" class="main-btn-five">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path
                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
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
        </section>




        <!-- Popular part-end -->

        <!-- Customer part-start -->


        <section class="customer s-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="customer-head mb-48px">
                            <h2>What’s Our Customer Say</h2>
                        </div>
                    </div>
                </div>

                <div class="row customer_slick">
                    <div class="col-lg-4 ">
                        <div class="customer-item">

                            <div class="customer-img">
                                <img src="./assets/images/icon/customer-icon.png" alt="icon">
                            </div>
                            <div class="customer-item-text">
                                <p>"An absolute foodie's paradise! The flavors at
                                    ReservQ are a symphony of delight. Every bite tells a story of passion and skill. A
                                    must-visit for anyone seeking beyond compare."</p>
                            </div>
                        </div>

                        <div class="customer-inner">
                            <div class="customer-inner-img">
                                <img src="./assets/images/small/customer-1.png" alt="img">
                            </div>

                            <div class="customer-inner-text">
                                <div class="icon">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                </div>

                                <h3>Jonson Roy</h3>
                                <h5>Job Holder</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="customer-item ">

                            <div class="customer-img">
                                <img src="./assets/images/icon/customer-icon.png" alt="icon">
                            </div>
                            <div class="customer-item-text">
                                <p>"An absolute foodie's paradise! The flavors at
                                    ReservQ are a symphony of delight. Every bite tells a story of passion and skill. A
                                    must-visit for anyone seeking beyond compare."</p>
                            </div>
                        </div>

                        <div class="customer-inner">
                            <div class="customer-inner-img">
                                <img src="./assets/images/small/customer-2.png" alt="img">
                            </div>

                            <div class="customer-inner-text">
                                <div class="icon">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                </div>

                                <h3>David Ethic</h3>
                                <h5>Dog Trainer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="customer-item">

                            <div class="customer-img">
                                <img src="./assets/images/icon/customer-icon.png" alt="icon">
                            </div>
                            <div class="customer-item-text">
                                <p>"An absolute foodie's paradise! The flavors at
                                    ReservQ are a symphony of delight. Every bite tells a story of passion and skill. A
                                    must-visit for anyone seeking beyond compare."</p>
                            </div>
                        </div>

                        <div class="customer-inner">
                            <div class="customer-inner-img">
                                <img src="./assets/images/small/customer-3.png" alt="img">
                            </div>

                            <div class="customer-inner-text">
                                <div class="icon">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                </div>

                                <h3>Robert Fox</h3>
                                <h5>Bike Trainer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="customer-item">

                            <div class="customer-img">
                                <img src="./assets/images/icon/customer-icon.png" alt="icon">
                            </div>
                            <div class="customer-item-text">
                                <p>"An absolute foodie's paradise! The flavors at
                                    ReservQ are a symphony of delight. Every bite tells a story of passion and skill. A
                                    must-visit for anyone seeking beyond compare."</p>
                            </div>
                        </div>

                        <div class="customer-inner">
                            <div class="customer-inner-img">
                                <img src="./assets/images/small/customer-1.png" alt="img">
                            </div>

                            <div class="customer-inner-text">
                                <div class="icon">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                </div>

                                <h3>Jonson Roy</h3>
                                <h5>Job Holder</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="customer-item ">

                            <div class="customer-img">
                                <img src="./assets/images/icon/customer-icon.png" alt="icon">
                            </div>
                            <div class="customer-item-text">
                                <p>"An absolute foodie's paradise! The flavors at
                                    ReservQ are a symphony of delight. Every bite tells a story of passion and skill. A
                                    must-visit for anyone seeking beyond compare."</p>
                            </div>
                        </div>

                        <div class="customer-inner">
                            <div class="customer-inner-img">
                                <img src="./assets/images/small/customer-2.png" alt="img">
                            </div>

                            <div class="customer-inner-text">
                                <div class="icon">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                </div>

                                <h3>David Ethic</h3>
                                <h5>Dog Trainer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="customer-item">

                            <div class="customer-img">
                                <img src="./assets/images/icon/customer-icon.png" alt="icon">
                            </div>
                            <div class="customer-item-text">
                                <p>"An absolute foodie's paradise! The flavors at
                                    ReservQ are a symphony of delight. Every bite tells a story of passion and skill. A
                                    must-visit for anyone seeking beyond compare."</p>
                            </div>
                        </div>

                        <div class="customer-inner">
                            <div class="customer-inner-img">
                                <img src="./assets/images/small/customer-3.png" alt="img">
                            </div>

                            <div class="customer-inner-text">
                                <div class="icon">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                    <img src="./assets/images/icon/star.svg" alt="img">
                                </div>

                                <h3>Robert Fox</h3>
                                <h5>Bike Trainer</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Customer part-end -->


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
                                    <img src="./assets/images/thumb/faq-1.png" class="w-100" alt="thumb">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="faq-img">
                                    <div class="faq-img-two">
                                        <img src="./assets/images/thumb/faq-2.png" alt="thumb">
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
                                        <img src="./assets/images/thumb/faq-3.png" alt="thumb">
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
                                        <img src="./assets/images/thumb/faq-4.png" alt="thumb">
                                    </div>

                                </div>
                            </div>





                        </div>
                    </div>
                </div>
            </div>
        </section>






        <!-- faq part-end -->




        <!-- Restaurant part-start -->

        <section class="restaurant">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="restaurant-taitel">
                            <h2>Find out Better Restaurant Food Experience</h2>

                            <h4>We've done it carefully and simply. Combined with the ingredients makes for beautiful
                                landings.</h4>
                        </div>

                        <div class="restaurant-taitel-btn">
                            <a href="#"> <span>
                                    <img src="./assets/images/icon/Google_Play.png" alt="icon">
                                </span> Google Play</a>
                            <a href="#" class=" restaurant-taitel-btn-two"> <span>
                                    <img src="./assets/images/icon/apple.png" alt="icon">
                                </span> Google Play</a>
                        </div>
                    </div>


                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="restaurant-img-main">
                            <div class="restaurant-img">
                                <img src="./assets/images/thumb/restaurant.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Restaurant part-end -->





    </main>




    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12" data-aos="fade-right">
                    <div class="footer-logo">
                        <div class="logo">
                            <img src="./assets/images/logo/footer-logo.svg" alt="logo">
                        </div>
                    </div>

                    <div class="footer-text">
                        <h4>At ReservQ, we invite you to embark on a journey of taste and delight.Our tables are more
                            than just places.</h4>
                    </div>

                    <div class="footer-icon">
                        <div class="icon">
                            <a href="https://www.facebook.com/" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-8 mol-md-12 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3" data-aos="fade-right" data-aos-delay="100">
                            <div class="quick-line-item">
                                <div class="quick-line-item-head">
                                    <h3>Quick Link</h3>
                                </div>


                                <div class="quick-line-menu">
                                    <ul>
                                        <li>
                                            <a href="dashboard.html">My Account</a>
                                        </li>
                                        <li>
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Store Locator</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Delivery</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Pickup</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3" data-aos="fade-right" data-aos-delay="200">
                            <div class="quick-line-item">
                                <div class="quick-line-item-head">
                                    <h3>Terms & Privacy</h3>
                                </div>

                                <div class="quick-line-menu">
                                    <ul>
                                        <li>
                                            <a href="trust-safety.html">Trust & Safety</a>
                                        </li>
                                        <li>
                                            <a href="terms-service.html">Terms of Service</a>
                                        </li>
                                        <li>
                                            <a href="privacy-policy.html">Privacy Policy</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-delay="300">
                            <div class="quick-line-item">
                                <div class="quick-line-item-head">
                                    <h3>Subscribe our Newsletter</h3>
                                </div>

                                <div class="quick-line-btn">
                                    <div class="icon">
                                        <img src="./assets/images/icon/sms.png" alt="icon">
                                    </div>
                                    <input type="email" class="form-control" id="exampleFormControlInput6"
                                           placeholder="Your email">
                                    <a href="#" class="main-btn-four">Subscribe</a>
                                </div>


                                <div class="quick-line-btn-text">
                                    <h6>We accept Payment methods:</h6>
                                </div>

                                <div class="quick-line-btn-img">
                                    <a href="#">
                                        <img src="./assets/images/small/Visa.png" alt="img">
                                    </a>
                                    <a href="#">
                                        <img src="./assets/images/small/Amex.png" alt="img">
                                    </a>
                                    <a href="#">
                                        <img src="./assets/images/small/PayPal.png" alt="img">
                                    </a>
                                    <a href="#">
                                        <img src="./assets/images/small/Mastercard.png" alt="img">
                                    </a>
                                    <a href="#">
                                        <img src="./assets/images/small/GooglePay.png" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </footer>


    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <h4>©2023 <span>ReservQ</span>. All rights reserved</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection