<!-- header part start  -->

<header class="header">
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


    <nav class="menu-bg">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="nav-main">

                        <div class="nav-main">
                            <div class="logo">
                                <a href="index.html"> <img src="./assets/images/logo/logo-header.svg"
                                                           alt="logo"></a>
                            </div>

                            <div class="menu">
                                <ul>
                                    <li><a href="#">Home
                                            <span><i class="fa-solid fa-angle-down"></i></span>
                                        </a>

                                        <ul>
                                            <li>
                                                <a href="{{ route('home') }}">Home-01</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">Home-02</a>
                                            </li>
                                        </ul>


                                    </li>
                                    <li><a href="{{ route('menu') }}">Menu</a></li>
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
                                                    <img src="./assets/images/small/my-cart.png" alt="img">
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
                                                    <img src="./assets/images/small/my-cart.png" alt="img">
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
                                                    <img src="./assets/images/small/my-cart.png" alt="img">
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
                                                    <img src="./assets/images/small/my-cart.png" alt="img">
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
                        <img src="./assets/images/logo/logo-header.svg" alt="logo">
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
                <img src="./assets/images/logo/logo-header.svg" alt="logo">
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




