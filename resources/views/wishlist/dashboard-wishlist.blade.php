@extends('layouts.app')

@section('content')
    <!-- ===== Loader Start ===== -->
    <div class="preloader-wrap">
        <div class="loader">
            <img src="{{ asset('images/thumb/loader-2.gif') }}" alt="loader">
        </div>
    </div>

    <main>

    <!-- banner  -->

    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>Wishlist</h1>
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
                            <span>Wishlist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner  -->



    <!-- dashboard  start -->


    <section class="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="dashboard-menu">
                        <div class="dashboard-menu-profile-main">
                            <div class="dashboard-menu-profile">
                                <div class="dashboard-menu-profile-img">
                                    <img src="./images/small/dashboard-menu-profile-img.png" alt="img">
                                </div>
                                <div class="dashboard-menu-profile-text">
                                    <h4>David Warrior</h4>
                                    <p>user id #054501</p>
                                </div>
                            </div>
                        </div>


                        <div class="dashboard-menu-main">
                            <ul>
                                <li>
                                    <a href="dashboard-edit-profile.html">
                                            <span>
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse opacity="0.4" cx="6.00033" cy="12.1654" rx="5.83333"
                                                             ry="3.33333" />
                                                    <circle cx="6.00033" cy="3.83333" r="3.33333" />
                                                </svg>
                                            </span>

                                        Edit Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard-address.html">
                                            <span>
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M7 12.1667C8.66667 12.1667 12 8.26142 12 5.5C12 2.73858 9.76142 0.5 7 0.5C4.23858 0.5 2 2.73858 2 5.5C2 8.26142 5.33333 12.1667 7 12.1667ZM7 7.16667C7.92047 7.16667 8.66667 6.42047 8.66667 5.5C8.66667 4.57953 7.92047 3.83333 7 3.83333C6.07953 3.83333 5.33333 4.57953 5.33333 5.5C5.33333 6.42047 6.07953 7.16667 7 7.16667Z" />
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M2.87972 10.625C2.07393 10.8317 1.34383 11.287 0.80063 11.9389L0.566988 12.2192C-0.518557 13.5219 0.407759 15.4996 2.10343 15.4996H11.8966C13.5923 15.4996 14.5186 13.5219 13.433 12.2192L13.1994 11.9389C12.6562 11.287 11.9261 10.8317 11.1203 10.625C11.1158 10.6308 11.1112 10.6365 11.1067 10.6423C10.5336 11.3694 9.88488 12.0261 9.23335 12.5137C8.63104 12.9645 7.83517 13.4163 7.00001 13.4163C6.16486 13.4163 5.36899 12.9645 4.76669 12.5137C4.11515 12.0261 3.46647 11.3694 2.89333 10.6423C2.88879 10.6365 2.88426 10.6308 2.87972 10.625Z" />
                                                </svg>
                                            </span>

                                        Address
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard-address-reordering.html">
                                            <span>
                                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                          d="M13.8333 0.667969H2.16667C1.24619 0.667969 0.5 1.41416 0.5 2.33464V14.9633C0.5 16.1176 1.6451 16.9224 2.7312 16.5314L4.03267 16.0629C4.43934 15.9165 4.88699 15.9338 5.28115 16.1111L7.31606 17.0269C7.75101 17.2226 8.24899 17.2226 8.68394 17.0269L10.7189 16.1111C11.113 15.9338 11.5607 15.9165 11.9673 16.0629L13.2688 16.5314C14.3549 16.9224 15.5 16.1176 15.5 14.9633V2.33464C15.5 1.41416 14.7538 0.667969 13.8333 0.667969Z" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M12.792 4.83594C12.792 5.18112 12.5122 5.46094 12.167 5.46094L3.83366 5.46094C3.48848 5.46094 3.20866 5.18111 3.20866 4.83594C3.20866 4.49076 3.48848 4.21094 3.83366 4.21094L12.167 4.21094C12.5122 4.21094 12.792 4.49076 12.792 4.83594Z" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M12.792 8.16797C12.792 8.51315 12.5122 8.79297 12.167 8.79297L3.83366 8.79297C3.48848 8.79297 3.20866 8.51315 3.20866 8.16797C3.20866 7.82279 3.48848 7.54297 3.83366 7.54297L12.167 7.54297C12.5122 7.54297 12.792 7.82279 12.792 8.16797Z" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M8.625 11.5C8.625 11.8452 8.34518 12.125 8 12.125L3.83333 12.125C3.48816 12.125 3.20833 11.8452 3.20833 11.5C3.20833 11.1548 3.48816 10.875 3.83333 10.875L8 10.875C8.34518 10.875 8.625 11.1548 8.625 11.5Z" />
                                                </svg>
                                            </span>

                                        Order & Reordering
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard-wishlist.html" class="active">
                                            <span>
                                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                          d="M9.57121 2.1666L9.00033 2.75204L8.42946 2.16661C6.65369 0.345536 3.7746 0.345534 1.99882 2.16661C0.270742 3.93878 0.217645 6.79479 1.8786 8.63322L6.65054 13.9151C7.91827 15.3183 10.0824 15.3183 11.3501 13.9151L16.1221 8.6332C17.783 6.79476 17.7299 3.93876 16.0018 2.1666C14.2261 0.345523 11.347 0.345525 9.57121 2.1666Z" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M12.542 3.41797C12.542 3.07279 12.8218 2.79297 13.167 2.79297C14.4326 2.79297 15.4587 3.81898 15.4587 5.08464C15.4587 5.42981 15.1788 5.70964 14.8337 5.70964C14.4885 5.70964 14.2087 5.42981 14.2087 5.08464C14.2087 4.50934 13.7423 4.04297 13.167 4.04297C12.8218 4.04297 12.542 3.76315 12.542 3.41797Z" />
                                                </svg>
                                            </span>

                                        Wishlist
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard-reviewlist.html">
                                            <span>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                          d="M7.361 1.72748C8.03157 0.314801 9.96907 0.314798 10.6396 1.72748L11.7986 4.16895C12.0649 4.72993 12.5796 5.11875 13.175 5.2087L15.7664 5.60021C17.2659 5.82675 17.8646 7.74259 16.7796 8.8422L14.9044 10.7426C14.4736 11.1793 14.277 11.8084 14.3787 12.425L14.8213 15.1084C15.0775 16.6611 13.51 17.8452 12.1689 17.1121L9.85101 15.8451C9.31845 15.554 8.6822 15.554 8.14963 15.8451L5.83179 17.1121C4.49065 17.8452 2.92318 16.6611 3.17931 15.1084L3.62198 12.425C3.72369 11.8084 3.52708 11.1793 3.09623 10.7426L1.22105 8.84221C0.136047 7.74259 0.734766 5.82675 2.23421 5.60021L4.82564 5.2087C5.42107 5.11875 5.9358 4.72993 6.20208 4.16895L7.361 1.72748Z" />
                                                </svg>
                                            </span>

                                        Reviews
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard-change-password.html">
                                            <span>
                                                <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M4.65341 2.64759C5.12264 1.83644 5.99812 1.29297 6.9998 1.29297C8.49557 1.29297 9.70813 2.50553 9.70813 4.0013V5.66797H10.333C10.5467 5.66797 10.7556 5.68807 10.9581 5.72649V4.0013C10.9581 1.81518 9.18593 0.0429688 6.9998 0.0429688C5.53387 0.0429688 4.25488 0.840164 3.5714 2.02168C3.39857 2.32047 3.50067 2.7028 3.79945 2.87564C4.09824 3.04848 4.48057 2.94638 4.65341 2.64759Z" />
                                                    <path opacity="0.4"
                                                          d="M0.333008 9.0013C0.333008 7.16035 1.82539 5.66797 3.66634 5.66797H10.333C12.174 5.66797 13.6663 7.16035 13.6663 9.0013V14.0013C13.6663 15.8423 12.174 17.3346 10.333 17.3346H3.66634C1.82539 17.3346 0.333008 15.8423 0.333008 14.0013V9.0013Z" />
                                                    <circle cx="6.99967" cy="11.5026" r="1.66667" />
                                                </svg>
                                            </span>

                                        Change Password
                                    </a>
                                </li>
                                <li>
                                    <button type="button" class="logout-btn " data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <span>
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                          d="M3.83333 0.5H7.16667C9.00762 0.5 10.5 1.99238 10.5 3.83333V12.1667C10.5 14.0076 9.00762 15.5 7.16667 15.5H3.83333C1.99238 15.5 0.5 14.0076 0.5 12.1667V3.83333C0.5 1.99238 1.99238 0.5 3.83333 0.5Z" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M12.5581 5.05806C12.8021 4.81398 13.1979 4.81398 13.4419 5.05806L15.9419 7.55806C16.186 7.80214 16.186 8.19786 15.9419 8.44194L13.4419 10.9419C13.1979 11.186 12.8021 11.186 12.5581 10.9419C12.314 10.6979 12.314 10.3021 12.5581 10.0581L13.9911 8.625H5.5C5.15482 8.625 4.875 8.34518 4.875 8C4.875 7.65482 5.15482 7.375 5.5 7.375H13.9911L12.5581 5.94194C12.314 5.69786 12.314 5.30214 12.5581 5.05806Z" />
                                                </svg>
                                            </span>
                                        Logout
                                    </button>


                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="modal-img">
                                                            <span>
                                                                <svg width="80" height="80" viewBox="0 0 80 80"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_312_69316)">
                                                                        <path
                                                                            d="M77.4976 37.4998H45.8317C44.4517 37.4998 43.3318 36.3799 43.3318 34.9999C43.3318 33.62 44.4517 32.5 45.8317 32.5H77.4976C78.8776 32.5 79.9975 33.62 79.9975 34.9999C79.9975 36.3799 78.8776 37.4998 77.4976 37.4998Z"
                                                                            fill="#F01543" />
                                                                        <path
                                                                            d="M64.9978 50.0011C64.3576 50.0011 63.718 49.7576 63.2309 49.2681C62.2544 48.291 62.2544 46.7078 63.2309 45.7312L73.9642 34.9985L63.2309 24.2652C62.2544 23.2887 62.2544 21.7055 63.2309 20.729C64.2081 19.7518 65.7913 19.7518 66.7678 20.729L79.2674 33.2286C80.2439 34.2051 80.2439 35.7883 79.2674 36.7648L66.7678 49.2644C66.2777 49.7576 65.6381 50.0011 64.9978 50.0011Z"
                                                                            fill="#F01543" />
                                                                        <path
                                                                            d="M26.666 80.0014C25.9526 80.0014 25.2757 79.9013 24.5995 79.6914L4.53965 73.0082C1.81025 72.0549 0 69.5116 0 66.6687V6.67057C0 2.99393 2.99002 0.00390625 6.66666 0.00390625C7.37953 0.00390625 8.05639 0.104001 8.73325 0.313955L28.7924 6.9971C31.5225 7.95044 33.3321 10.4937 33.3321 13.3366V73.3347C33.3321 77.0114 30.3427 80.0014 26.666 80.0014ZM6.66666 5.00375C5.74994 5.00375 4.99984 5.75385 4.99984 6.67057V66.6687C4.99984 67.3785 5.47651 68.0383 6.15642 68.2751L26.1222 74.9283C26.2657 74.9747 26.4524 75.0016 26.666 75.0016C27.5828 75.0016 28.3322 74.2515 28.3322 73.3347V13.3366C28.3322 12.6268 27.8556 11.967 27.1757 11.7302L7.20986 5.07699C7.06643 5.0306 6.87967 5.00375 6.66666 5.00375Z"
                                                                            fill="#F01543" />
                                                                        <path
                                                                            d="M50.8315 26.6699C49.4516 26.6699 48.3316 25.55 48.3316 24.17V9.17049C48.3316 6.87381 46.4622 5.00375 44.1655 5.00375H6.66667C5.28671 5.00375 4.16675 3.88379 4.16675 2.50383C4.16675 1.12387 5.28671 0.00390625 6.66667 0.00390625H44.1655C49.2221 0.00390625 53.3315 4.11388 53.3315 9.17049V24.17C53.3315 25.55 52.2115 26.6699 50.8315 26.6699Z"
                                                                            fill="#F01543" />
                                                                        <path
                                                                            d="M44.1655 70.002H30.8322C29.4522 70.002 28.3323 68.882 28.3323 67.5021C28.3323 66.1221 29.4522 65.0021 30.8322 65.0021H44.1655C46.4622 65.0021 48.3316 63.1321 48.3316 60.8354V45.8359C48.3316 44.4559 49.4516 43.3359 50.8316 43.3359C52.2115 43.3359 53.3315 44.4559 53.3315 45.8359V60.8354C53.3315 65.892 49.2221 70.002 44.1655 70.002Z"
                                                                            fill="#F01543" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                    </div>

                                                    <div class="modal-img-text">
                                                        <h3>Are you sure? Logout</h3>
                                                    </div>

                                                    <div class="modal-btn">
                                                        <button type="button" class="no-btn"
                                                                data-bs-dismiss="modal">No! </button>
                                                        <button type="button" class="no-btn yes-btn">Yes! </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>


                    </div>
                </div>


                <div class="col-lg-9 col-md-8 ">


                    <div class="dashboard-item-taitel">
                        <h4>Dashboard</h4>
                        <p>Let’s check your today</p>
                    </div>


                    <div class="row">
                        <div class="col-lg-6 col-md-12  popular-item-mt-30px" data-aos="fade-up">
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
                                                            fill="#FFB23E"></path>
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
                                                                stroke="#FE724C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
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
                                                                stroke="#FE724C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
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
                        <div class="col-lg-6 col-md-12  popular-item-mt-30px" data-aos="fade-up">
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
                                                            fill="#FFB23E"></path>
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
                                                                stroke="#FE724C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
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
                                                                stroke="#FE724C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
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
                        <div class="col-lg-6 col-md-12  popular-item-mt-30px" data-aos="fade-up">
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
                                                            fill="#FFB23E"></path>
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
                                                                stroke="#FE724C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
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
                                                                stroke="#FE724C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
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
                        <div class="col-lg-6 col-md-12  popular-item-mt-30px" data-aos="fade-up">
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
                                                            fill="#FFB23E"></path>
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
                                                                stroke="#FE724C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
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
                                                                stroke="#FE724C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
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
                        <div class="col-lg-6 col-md-12  popular-item-mt-30px" data-aos="fade-up">
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
                                                            fill="#FFB23E"></path>
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
                                                                stroke="#FE724C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
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
                                                                stroke="#FE724C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
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
                        <div class="col-lg-6 col-md-12  popular-item-mt-30px" data-aos="fade-up">
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
                                                            fill="#FFB23E"></path>
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
                                                                stroke="#FE724C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
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
                                                                stroke="#FE724C" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
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




            </div>
        </div>
    </section>



    <!-- dashboard end  -->














@endsection
