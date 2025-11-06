<!DOCTYPE html>
<html lang="en">
  <!--<< Header Area >>-->
  <head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="namespace-it" />
    <meta
      name="description"
      content="FixMyRide"
    />
    <!-- ======== Page title ============ -->
    <title>FixMyRide</title>
    <!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}" />

<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

<!-- All Min Css -->
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />

<!-- Animate -->
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />

<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />

<!-- MeanMenu -->
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />

<!-- Swiper -->
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />

<!-- Nice Select -->
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />

<!-- Color -->
<link rel="stylesheet" href="{{ asset('assets/css/color.css') }}" />

<!-- Main Style -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />


  </head>
  <body>
    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text-preloader="F" class="letters-loading"> F </span>
          <span data-text-preloader="i" class="letters-loading"> i </span>
          <span data-text-preloader="x" class="letters-loading"> x </span>
          <span data-text-preloader="M" class="letters-loading"> M </span>
          <span data-text-preloader="y" class="letters-loading"> y </span>
          <span data-text-preloader="R" class="letters-loading"> R </span>
          <span data-text-preloader="i" class="letters-loading"> i </span>
          <span data-text-preloader="d" class="letters-loading"> d </span>
          <span data-text-preloader="e" class="letters-loading"> e </span>
        </div>
        <p class="text-center">Loading</p>
      </div>
      <div class="loader">
        <div class="row">
          <div class="col-3 loader-section section-left">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-left">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-right">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-right">
            <div class="bg"></div>
          </div>
        </div>
      </div>
    </div>

    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
      <i class="fa-regular fa-arrow-up"></i>
    </button>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
      <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
          <div class="offcanvas__content">
            <div
              class="offcanvas__top mb-5 d-flex justify-content-between align-items-center"
            >
              <div class="offcanvas__logo">
                <a href="index.html">
                  <img src="assets/img/logo/black-logo.svg" alt="logo-img" />
                </a>
              </div>
              <div class="offcanvas__close">
                <button>
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <p class="text d-none d-xl-block">
              Nullam dignissim, ante scelerisque the is euismod fermentum odio
              sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean
              a imperdiet risus.
            </p>
            <div class="mobile-menu fix mb-3"></div>
            <div class="offcanvas__contact">
              <h4>Contact Info</h4>
              <ul>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon">
                    <i class="fal fa-map-marker-alt"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a target="_blank" href="#"
                      >Main Street, Melbourne, Australia</a
                    >
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="fal fa-envelope"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a href="mailto:info@example.com"
                      ><span class="mailto:info@example.com"
                        >info@example.com</span
                      ></a
                    >
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="fal fa-clock"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="far fa-phone"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a href="tel:+11002345909">+11002345909</a>
                  </div>
                </li>
              </ul>
              <div class="header-button mt-4">
                <a href="contact.html" class="theme-btn text-center">
                  Get A Quote
                </a>
              </div>
              <div class="social-icon d-flex align-items-center">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- header  section start -->
    <header id="header-sticky" class="navbar-2">
      

      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-6 col-md-4">
            <div class="navbar-2-left">
              <div class="navbar-2-logo">
                <a href="index-4.html">
                  <img src="assets/img/logo/black-logo.svg" alt="RevAuto" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-7">
            <div class="navbar-2-right">
              <!-- right -->
              <!-- general menu -->
              <div class="mean__menu-wrapper">
                <div class="main-menu">
                  <nav id="mobile-menu">
                    <ul>
                      <li class="has-dropdown active menu-thumb">
                        <a href="index.html"> Home </a>
                        <ul class="submenu has-homemenu">
                          <li>
                            <div class="row g-4 homemenu-items">
                              <div class="col-lg-3">
                                <div class="homemenu">
                                  <div class="homemenu-thumb">
                                    <a href="index.html">
                                      <img
                                        src="assets/img/header/home-1.jpg"
                                        alt="img"
                                      />
                                    </a>
                                  </div>
                                  <h4 class="homemenu-title">
                                    <a href="index.html">Home Page 01</a>
                                  </h4>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="homemenu">
                                  <div class="homemenu-thumb">
                                    <a href="index-2.html">
                                      <img
                                        src="assets/img/header/home-2.jpg"
                                        alt="img"
                                      />
                                    </a>
                                  </div>
                                  <h4 class="homemenu-title">
                                    <a href="index-2.html">Home Page 02</a>
                                  </h4>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="homemenu">
                                  <div class="homemenu-thumb">
                                    <a href="index-3.html">
                                      <img
                                        src="assets/img/header/home-5.png"
                                        alt="img"
                                      />
                                    </a>
                                  </div>
                                  <h4 class="homemenu-title">
                                    <a href="index-3.html">Home Page 03</a>
                                  </h4>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="homemenu">
                                  <div class="homemenu-thumb">
                                    <a href="index-4.html">
                                      <img
                                        src="assets/img/header/home-6.png"
                                        alt="img"
                                      />
                                    </a>
                                  </div>
                                  <h4 class="homemenu-title">
                                    <a href="index-4.html">Home Page 04</a>
                                  </h4>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="homemenu">
                                  <div class="homemenu-thumb">
                                    <a href="home-landing.html">
                                      <img
                                        src="assets/img/header/home-3.jpg"
                                        alt="img"
                                      />
                                    </a>
                                  </div>
                                  <h4 class="homemenu-title">
                                    <a href="home-landing.html"
                                      >Car Accessories 01</a
                                    >
                                  </h4>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="homemenu">
                                  <div class="homemenu-thumb">
                                    <a href="home-landing-2.html">
                                      <img
                                        src="assets/img/header/home-4.jpg"
                                        alt="img"
                                      />
                                    </a>
                                  </div>
                                  <h4 class="homemenu-title">
                                    <a href="home-landing-2.html"
                                      >Car Accessories 02</a
                                    >
                                  </h4>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="has-dropdown active d-xl-none">
                        <a href="team.html" class="border-none"> Home </a>
                        <ul class="submenu">
                          <li><a href="index.html">Home Page 01</a></li>
                          <li><a href="index-2.html">Home Page 02</a></li>
                          <li>
                            <a href="home-landing.html">Car Accessories 01</a>
                          </li>
                          <li>
                            <a href="home-landing-2.html">Car Accessories 02</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="about.html">About</a>
                      </li>
                      <li>
                        <a href="service-details.html"> Services </a>
                        <ul class="submenu">
                          <li><a href="service.html">Services</a></li>
                          <li>
                            <a href="service-details.html">Service Details</a>
                          </li>
                        </ul>
                      </li>
                      <li class="has-dropdown">
                        <a href="news.html"> Pages </a>
                        <ul class="submenu">
                          <li class="has-dropdown">
                            <a href="project-details.html"> Portfolio </a>
                            <ul class="submenu">
                              <li><a href="project.html">Portfolio 01</a></li>
                              <li><a href="project-2.html">Portfolio 02</a></li>
                              <li>
                                <a href="project-details.html"
                                  >Project Details</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li class="has-dropdown">
                            <a href="car-details.html"> Vehicles </a>
                            <ul class="submenu">
                              <li><a href="car.html">Vehicles</a></li>
                              <li>
                                <a href="car-details.html">Vehicles Details</a>
                              </li>
                            </ul>
                          </li>
                          <li class="has-dropdown">
                            <a href="car-details.html">User Dashboard</a>
                            <ul class="submenu">
                              <li>
                                <a href="user-dashboard.html">Dashboard</a>
                              </li>
                              <li>
                                <a href="order-history.html">Order History</a>
                              </li>
                              <li>
                                <a href="order-details.html">Order Details</a>
                              </li>
                              <li><a href="settings.html">Settings</a></li>
                            </ul>
                          </li>
                          <li><a href="faq.html">Faq's</a></li>
<li><a href="contact.html">Contact Us</a></li>

@guest
    <!-- Guest users see Login/Register -->
    <li><a href="{{ route('login') }}">Log In</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
@else
    <!-- Logged-in users see Profile/Logout -->
    <li><a href="{{ route('profile.edit') }}">My Profile</a></li>
    <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" style="background: none; border: none; color: inherit; cursor: pointer;">
                Logout
            </button>
        </form>
    </li>
@endguest

<li><a href="404.html">404 Page</a></li>

                        </ul>
                      </li>
                      <li>
                        <a href="shop-details.html"> Shop </a>
                        <ul class="submenu">
                          <li><a href="shop.html">Shop</a></li>
                          <li>
                            <a href="shop-right-sidebar.html"
                              >Shop Right Sidebar</a
                            >
                          </li>
                          <li>
                            <a href="shop-left-sidebar.html"
                              >Shop Left Sidebar</a
                            >
                          </li>
                          <li><a href="shop-cart.html">Shop Cart</a></li>
                          <li><a href="shop-details.html">Shop Details</a></li>
                          <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                      </li>
                     
                    </ul>
                  </nav>
                </div>
              </div>

              <!-- user options -->
              <div class="navbar-2-user-options">
                <div class="search-wrapper d-none d-md-block">
                  <form>
                    <div class="position-relative">
                      <input
                        type="search"
                        class="form-control search-input"
                        placeholder="Search..."
                        aria-label="Search"
                      />
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-search search-icon"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                        />
                      </svg>
                    </div>
                  </form>
                </div>

                <div class="buttons">
                  <a href="shop-cart.html" class="cart-button" data-count="10">
                    <i class="fa-sharp fa-regular fa-bag-shopping"></i>
                    <span id="cart-count">0</span>
                  </a>
                  

                  <div class="header__hamburger d-xl-none my-auto">
                    <div class="sidebar__toggle">
                      <i class="fas fa-bars"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Hero Section Start -->
    <section
    <main class="container mt-5">
    @if(Auth::check())
        <h2>Welcome, {{ Auth::user()->name }}!</h2>

        @if(Auth::user()->role === 'customer')
            
        @elseif(Auth::user()->role === 'mechanic')
            <p>View incoming service requests here.</p>
        @elseif(Auth::user()->role === 'seller')
            <p>Manage your spare parts listings here.</p>
        @endif

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    @else
        {{-- Breeze login form --}}
        

        {{-- Breeze register form --}}
        
    @endif
</main>

     <!-- class="hero-section hero-1 bg-cover"
      style="background-image: url('assets/img/hero/hero-bg.jpg')"
    >-->
      <div class="swiper-dot">
        <div class="dot"></div>
      </div>
      <div class="container">
        <div class="swiper hero-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                  <div class="hero-content">
                    
                    <h1>
                      Need help on the road?
                    </h1>
                    <p>
                      Easily locate trusted mechanics in your area using our interactive map. Get real-time directions, view garage details, and request services — all in one place.
                    </p>
                    <div class="hero-button">
                      <a href="car-details.html" class="theme-btn hover-white"
                        >Explore More
                        <i class="fa-sharp fa-regular fa-arrow-right"></i
                      ></a>
                      
                    </div>
                    <div class="review-items">
                      
                    <!--  <div class="content">
                        <h2><span class="count">1.5</span>k</h2>
                        <p>Good Reviews</p>
                      </div>-->
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="hero-image-items">
                    <div class="hero-image">
                      <img src="assets/img/hero/hero-car-1.png" alt="img" />
                    </div>
                   <!-- <div class="bg-shape">
                      <img src="assets/img/hero/car-shape.png" alt="img" />
                    </div>-->
                  </div>
                </div>
              </div>
            </div>
         <!--   <div class="swiper-slide">
              <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                  <div class="hero-content">
                    
                    <h1>
                      Explore The Next Generation <br />
                      Of Cars 2
                    </h1>
                    <p>
                      Discover cutting-edge innovation and exceptional
                      performance the latest models crafted for tomorrow’s
                      roadways.
                    </p>
                    <div class="hero-button">
                      <a href="car-details.html" class="theme-btn hover-white"
                        >Buy This Car
                        <i class="fa-sharp fa-regular fa-arrow-right"></i
                      ></a>
                      <a href="about.html" class="link-btn">Explore More</a>
                    </div>
                    <div class="review-items">
                      <img src="assets/img/hero/client.png" alt="img" />
                      <div class="content">
                        <h2><span class="count">1.5</span>k</h2>
                        <p>Good Reviews</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="hero-image-items">
                    <div class="hero-image">
                      <img src="assets/img/hero/hero-car-1.png" alt="img" />
                    </div>
                    <div class="bg-shape">
                      <img src="assets/img/hero/car-shape.png" alt="img" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                  <div class="hero-content">
                    
                    <h1>
                      Explore The Next Generation <br />
                      Of Cars 3
                    </h1>
                    <p>
                      Discover cutting-edge innovation and exceptional
                      performance the latest models crafted for tomorrow’s
                      roadways.
                    </p>
                    <div class="hero-button">
                      <a href="car-details.html" class="theme-btn hover-white"
                        >Buy This Car
                        <i class="fa-sharp fa-regular fa-arrow-right"></i
                      ></a>
                      <a href="about.html" class="link-btn">Explore More</a>
                    </div>
                    <div class="review-items">
                      <img src="assets/img/hero/client.png" alt="img" />
                      <div class="content">
                        <h2><span class="count">1.5</span>k</h2>
                        <p>Good Reviews</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="hero-image-items">
                    <div class="hero-image">
                      <img src="assets/img/hero/hero-car-1.png" alt="img" />
                    </div>
                    <div class="bg-shape">
                      <img src="assets/img/hero/car-shape.png" alt="img" />
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section fix section-padding">
      <div class="shape-img float-bob-x">
        <img src="assets/img/about/taiyer.png" alt="img" />
      </div>
      <div class="container">
        <div class="about-wrapper">
          <div class="row g-4 align-items-center">
            <div class="col-lg-6">
              <div class="about-image-items">
                <div class="about-img">
                  <img
                    src="assets/img/about/01.jpg"
                    alt="img"
                    class="img-custom-anim-left wow fadeInUp"
                    data-wow-delay=".3s"
                  />
                  <div
                    class="about-image-2 img-custom-anim-top wow fadeInUp"
                    data-wow-delay=".5s"
                  >
                    <img src="assets/img/about/02.jpg" alt="img" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-content">
                <div class="section-title">
                  <h6 class="wow fadeInUp">About Us</h6>
                  <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Need help on the road? Anywere? Anytime?
                  </h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                  No Worries! Now you can find trusted mechanics and garages near you instantly with FixMyRide!!!
                </p>
                <div class="list-area">
                  <ul class="wow fadeInUp" data-wow-delay=".3s">
                    <li>
                      <i class="fa-solid fa-circle-check"></i>
                      24/7 Service
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>
                      Find mechanics nearby
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>
                      See the ratings of mechanics
                    </li>
                  </ul>
                  <ul class="wow fadeInUp" data-wow-delay=".5s">
                    <li>
                      <i class="fa-solid fa-circle-check"></i>
                      Find spare part shops nearby
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>
                      Platform to mechanics
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>
                      Platform to Spare parts sellers
                    </li>
                  </ul>
                </div>
                <div class="about-author">
                  <div class="about-button wow fadeInUp" data-wow-delay=".3s">
                    <a href="about.html" class="theme-btn">
                      About FixMyRide <i class="fa-regular fa-car"></i>
                    </a>
                  </div>
                  <div class="author-icon wow fadeInUp" data-wow-delay=".5s">
                    <div class="icon">
                      <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="content">
                      <span>Our HotLine</span>
                      <h5>
                        <a href="tel:+7045550127">+(70) 330-1442</a>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Car Section Start -->
    <section class="car-section fix section-padding section-bg">
      <div class="container">
        <div class="section-title-area">
          <div class="section-title">
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Top Picks</h2>
          </div>
        </div>
        <div class="car-section-3-short">
          <div class="left-section">
            <button class="car-section-3-active">All</button>
            
          </div>
          
        </div>
        <div class="tab-content">
          <div id="All" class="tab-pane fade show active">
            <div class="row">
              <div class="col-xl-4 col-lg-6 col-md-6">
  <div class="car-box-items">
    <div class="car-titile">
      <h4><a href="#">Speedy Auto Repairs</a></h4>
      <p>Mechanic</p>
    </div>
    <a href="#" class="icon"><i class="fa-solid fa-heart"></i></a>
    <div class="car-image">
      <img src="assets/img/car/03.png" alt="Mechanic" />
    </div>
    <div class="car-list-items">
      <ul>
        <li><i class="fa-solid fa-star"></i> 4.9 Rating</li>
        <li><i class="fa-solid fa-tools"></i> Engine, Tires</li>
        <li><i class="fa-solid fa-user-tie"></i> 3 Mechanics</li>
        <li><i class="fa-solid fa-comment-dots"></i> 120 Reviews</li>
      </ul>
      <div class="price-items">
        
        <div class="d-flex align-items-lg-center gap-2">
          <a href="#" class="theme-btn">View More</a>
        </div>
      </div>
    </div>
  </div>
</div>

              <div class="col-xl-4 col-lg-6 col-md-6">
  <div class="car-box-items">
    <div class="car-titile">
      <h4><a href="#">Auto Repair Hub</a></h4>
      <p>Spare Part Seller</p>
    </div>
    <a href="#" class="icon"><i class="fa-solid fa-heart"></i></a>
    <div class="car-image">
      <img src="assets/img/car/15.png" alt="Seller" />
    </div>
    <div class="car-list-items">
      <ul>
        <li><i class="fa-solid fa-star"></i> 4.8 Rating</li>
        <li><i class="fa-solid fa-cogs"></i> Engine, Brakes</li>
        <li><i class="fa-solid fa-box"></i> 200+ Products</li>
        <li><i class="fa-solid fa-comment-dots"></i> 95 Reviews</li>
      </ul>
      <div class="price-items">
        
        <div class="d-flex align-items-lg-center gap-2">
          <a href="#" class="theme-btn">View More</a>
        </div>
      </div>
    </div>
  </div>
</div>

              <div class="col-xl-4 col-lg-6 col-md-6">
  <div class="car-box-items">
    <div class="car-titile">
      <h4><a href="#">Auto part Hub</a></h4>
      <p>Mechanic</p>
    </div>
    <a href="#" class="icon"><i class="fa-solid fa-heart"></i></a>
    <div class="car-image">
      <img src="assets/img/car/11.png" alt="Mechanic" />
    </div>
    <div class="car-list-items">
      <ul>
        <li><i class="fa-solid fa-star"></i> 4.9 Rating</li>
        <li><i class="fa-solid fa-tools"></i> Engine, Tires</li>
        <li><i class="fa-solid fa-user-tie"></i> 3 Mechanics</li>
        <li><i class="fa-solid fa-comment-dots"></i> 120 Reviews</li>
      </ul>
      <div class="price-items">
        
        <div class="d-flex align-items-lg-center gap-2">
          <a href="#" class="theme-btn">View More</a>
        </div>
      </div>
    </div>
  </div>
</div>

              <div class="col-xl-4 col-lg-6 col-md-6">
  <div class="car-box-items">
    <div class="car-titile">
      <h4><a href="#">Priority Auto repairs</a></h4>
      <p>Mechanic</p>
    </div>
    <a href="#" class="icon"><i class="fa-solid fa-heart"></i></a>
    <div class="car-image">
      <img src="assets/img/car/12.png" alt="Mechanic" />
    </div>
    <div class="car-list-items">
      <ul>
        <li><i class="fa-solid fa-star"></i> 4.9 Rating</li>
        <li><i class="fa-solid fa-tools"></i> Engine, Tires</li>
        <li><i class="fa-solid fa-user-tie"></i> 3 Mechanics</li>
        <li><i class="fa-solid fa-comment-dots"></i> 120 Reviews</li>
      </ul>
      <div class="price-items">
        
        <div class="d-flex align-items-lg-center gap-2">
          <a href="#" class="theme-btn">View More</a>
        </div>
      </div>
    </div>
  </div>
</div>

              <div class="col-xl-4 col-lg-6 col-md-6">
  <div class="car-box-items">
    <div class="car-titile">
      <h4><a href="#">Dave's Auto repair</a></h4>
      <p>Mechanic</p>
    </div>
    <a href="#" class="icon"><i class="fa-solid fa-heart"></i></a>
    <div class="car-image">
      <img src="assets/img/car/13.png" alt="Mechanic" />
    </div>
    <div class="car-list-items">
      <ul>
        <li><i class="fa-solid fa-star"></i> 4.9 Rating</li>
        <li><i class="fa-solid fa-tools"></i> Engine, Tires</li>
        <li><i class="fa-solid fa-user-tie"></i> 3 Mechanics</li>
        <li><i class="fa-solid fa-comment-dots"></i> 120 Reviews</li>
      </ul>
      <div class="price-items">
       
        <div class="d-flex align-items-lg-center gap-2">
          <a href="#" class="theme-btn">View More</a>
        </div>
      </div>
    </div>
  </div>
</div>

              <div class="col-xl-4 col-lg-6 col-md-6">
  <div class="car-box-items">
    <div class="car-titile">
      <h4><a href="#">Meave auotmative Repairs</a></h4>
      <p>Mechanic</p>
    </div>
    <a href="#" class="icon"><i class="fa-solid fa-heart"></i></a>
    <div class="car-image">
      <img src="assets/img/car/14.png" alt="Mechanic" />
    </div>
    <div class="car-list-items">
      <ul>
        <li><i class="fa-solid fa-star"></i> 4.9 Rating</li>
        <li><i class="fa-solid fa-tools"></i> Engine, Tires</li>
        <li><i class="fa-solid fa-user-tie"></i> 3 Mechanics</li>
        <li><i class="fa-solid fa-comment-dots"></i> 120 Reviews</li>
      </ul>
      <div class="price-items">
       
        <div class="d-flex align-items-lg-center gap-2">
          <a href="#" class="theme-btn">View More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="Jeep" class="tab-pane fade">
            <div class="row">
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="car-box-items">
                  <div class="car-titile">
                    <h4><a href="car-details.html">Ford Mustang</a></h4>
                    <p>Sport</p>
                  </div>
                  <a href="wishlist.html" class="icon"
                    ><i class="fa-solid fa-heart"></i
                  ></a>
                  <div class="car-image">
                    <img src="assets/img/car/01.png" alt="img" />
                  </div>
                  <div class="car-list-items">
                    <ul>
                      <li>
                        <i class="fa-regular fa-gas-pump"></i>
                        Diesel
                      </li>
                      <li>
                        <i class="fa-solid fa-steering-wheel"></i>
                        Manual
                      </li>
                      <li>
                        <i class="fa-light fa-users"></i>
                        4 People
                      </li>
                      <li>
                        <i class="fa-sharp fa-light fa-gauge"></i>
                        1270 km
                      </li>
                    </ul>
                    <div class="price-items">
                      <h3>$175,270</h3>
                      <div class="d-flex align-items-lg-center gap-2">
                        <a href="car-details.html" class="theme-btn"
                          >View More</a
                        >
                        <button class="add-to-cart">
                          <i class="fa-solid fa-cart-circle-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6">
  <div class="car-box-items">
    <div class="car-titile">
      <h4><a href="#">Speedy Auto Repairs</a></h4>
      <p>Mechanic</p>
    </div>
    <a href="#" class="icon"><i class="fa-solid fa-heart"></i></a>
    <div class="car-image">
      <img src="assets/img/car/15.png" alt="Mechanic" />
    </div>
    <div class="car-list-items">
      <ul>
        <li><i class="fa-solid fa-star"></i> 4.9 Rating</li>
        <li><i class="fa-solid fa-tools"></i> Engine, Tires</li>
        <li><i class="fa-solid fa-user-tie"></i> 3 Mechanics</li>
        <li><i class="fa-solid fa-comment-dots"></i> 120 Reviews</li>
      </ul>
      <div class="price-items">
        
        <div class="d-flex align-items-lg-center gap-2">
          <a href="#" class="theme-btn">View More</a>
        </div>
      </div>
    </div>
  </div>
</div>

              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="car-box-items">
                  <div class="car-titile">
                    <h4><a href="car-details.html">Porsche 911</a></h4>
                    <p>Sport</p>
                  </div>
                  <a href="wishlist.html" class="icon"
                    ><i class="fa-solid fa-heart"></i
                  ></a>
                  <div class="car-image">
                    <img src="assets/img/car/03.png" alt="img" />
                  </div>
                  <div class="car-list-items">
                    <ul>
                      <li>
                        <i class="fa-regular fa-gas-pump"></i>
                        Diesel
                      </li>
                      <li>
                        <i class="fa-solid fa-steering-wheel"></i>
                        Manual
                      </li>
                      <li>
                        <i class="fa-light fa-users"></i>
                        4 People
                      </li>
                      <li>
                        <i class="fa-sharp fa-light fa-gauge"></i>
                        1270 km
                      </li>
                    </ul>
                    <div class="price-items">
                      <h3>$245,500</h3>
                      <div class="d-flex align-items-lg-center gap-2">
                        <a href="car-details.html" class="theme-btn"
                          >View More</a
                        >
                        <button class="add-to-cart">
                          <i class="fa-solid fa-cart-circle-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6">
  <div class="car-box-items">
    <div class="car-titile">
      <h4><a href="#">Speedy Auto Repairs</a></h4>
      <p>Mechanic</p>
    </div>
    <a href="#" class="icon"><i class="fa-solid fa-heart"></i></a>
    <div class="car-image">
      <img src="assets/img/car/16.png" alt="Mechanic" />
    </div>
    <div class="car-list-items">
      <ul>
        <li><i class="fa-solid fa-star"></i> 4.9 Rating</li>
        <li><i class="fa-solid fa-tools"></i> Engine, Tires</li>
        <li><i class="fa-solid fa-user-tie"></i> 3 Mechanics</li>
        <li><i class="fa-solid fa-comment-dots"></i> 120 Reviews</li>
      </ul>
      <div class="price-items">
        
        <div class="d-flex align-items-lg-center gap-2">
          <a href="#" class="theme-btn">View More</a>
        </div>
      </div>
    </div>
  </div>
</div>

              <div class="col-xl-4 col-lg-6 col-md-6">
  <div class="car-box-items">
    <div class="car-titile">
      <h4><a href="#">Speedy Auto Repairs</a></h4>
      <p>Mechanic</p>
    </div>
    <a href="#" class="icon"><i class="fa-solid fa-heart"></i></a>
    <div class="car-image">
      <img src="assets/img/car/17.png" alt="Mechanic" />
    </div>
    <div class="car-list-items">
      <ul>
        <li><i class="fa-solid fa-star"></i> 4.9 Rating</li>
        <li><i class="fa-solid fa-tools"></i> Engine, Tires</li>
        <li><i class="fa-solid fa-user-tie"></i> 3 Mechanics</li>
        <li><i class="fa-solid fa-comment-dots"></i> 120 Reviews</li>
      </ul>
      <div class="price-items">
      
        <div class="d-flex align-items-lg-center gap-2">
          <a href="#" class="theme-btn">View More</a>
        </div>
      </div>
    </div>
  </div>
</div>

              
    </section>

    <!-- Feature Section Start -->
    <section class="feature-section fix section-padding">
      <div class="container">
        <div class="row g-4">
          <div
            class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
            data-wow-delay=".3s"
          >
            <div class="feature-box-items">
              <div class="number">01</div>
              <div class="content">
                <h3>Find Nearby Mechanics</h3>
                <p>
                  Easily locate trusted mechanics in your area using our interactive map. Get real-time directions, view garage details, and request services — all in one place.
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
            data-wow-delay=".5s"
          >
            <div class="feature-box-items">
              <div class="number">02</div>
              <div class="content">
                <h3>Order Spare Parts Quickly</h3>
                <p>
                  Need a replacement part? Browse nearby sellers and find exactly what your vehicle needs. Compare prices, contact sellers, and save time on every repair.
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
            data-wow-delay=".7s"
          >
            <div class="feature-box-items">
              <div class="number">03</div>
              <div class="content">
                <h3>24/7 support</h3>
                <p>
                  Request repairs or assistance directly from your dashboard. Mechanics and sellers receive instant notifications — ensuring fast, reliable responses 24/7.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Feature Car Section Start -->
    <section class="feature-car-section fix section-padding section-bg-black">
      <div class="car-shape float-bob-x">
        <img src="assets/img/car-shape.png" alt="img" />
      </div>
      <div class="container">
        <div class="feature-car-wrapper">
          <div class="row g-4 align-items-center">
            <div class="col-lg-6">
              <div class="feature-car-content">
                <div class="section-title">
                  <h6 class="wow fadeInUp">Features Car</h6>
                  <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                    Sign Up and Never Miss a Deal Again
                  </h2>
                </div>
                <p
                  class="mt-3 mt-md-0 text-white wow fadeInUp"
                  data-wow-delay=".5s"
                >
                  We are committed to providing our customers with exceptional
                  service, competitive pricing, and a wide range of vehicle parts to
                  choose from.
                </p>
                <div class="feature-button">
                  <a
                    href="contact.html"
                    class="theme-btn hover-white wow fadeInUp"
                    data-wow-delay=".3s"
                    >Get Started <i class="fa-regular fa-car"></i
                  ></a>
                  <div class="review-items wow fadeInUp" data-wow-delay=".5s">
                    <img src="assets/img/hero/client.png" alt="img" />
                    <div class="content">
                      <h2><span class="count">1.5</span>k</h2>
                      <p>Good Reviews</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
  <div class="car-list-box">
    <h3>Find Spare Parts</h3>
    <div class="row g-4">
      <div class="col-md-12">
        <div class="form-clt">
          <span>Category</span>
          <div class="nice-select" tabindex="0">
            <span class="current"> All Categories </span>
            <ul class="list">
              <li class="option selected focus">All Categories</li>
              <li class="option">Engine Parts</li>
              <li class="option">Body Parts</li>
              <li class="option">Electrical</li>
              <li class="option">Tires & Wheels</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-clt">
          <span>Vehicle Type</span>
          <div class="nice-select" tabindex="0">
            <span class="current"> All Vehicles </span>
            <ul class="list">
              <li class="option selected focus">All Vehicles</li>
              <li class="option">Car</li>
              <li class="option">Bike</li>
              <li class="option">Truck</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-clt">
          <span>Search by Keyword</span>
          <input type="text" class="form-control" placeholder="e.g. Brake Pads" />
        </div>
      </div>
      <div class="col-md-12">
        <button type="submit" class="theme-btn">SEARCH</button>
      </div>
    </div>
  </div>
</div>

          </div>
        </div>
      </div>
    </section>

    <!-- Counter Section Start -->
    <section class="counter-section fix section-padding">
      <div class="container">
        <div class="counter-wrapper">
          <div class="counter-box wow fadeInUp" data-wow-delay=".2s">
            <div class="content">
              <h2><span class="count">25</span>+</h2>
              <p>Years Experience</p>
            </div>
          </div>
          <div class="counter-box active wow fadeInUp" data-wow-delay=".4s">
            <div class="content">
              <h2><span class="count">155</span>+</h2>
              <p>Vehicle Brands</p>
            </div>
          </div>
          <div class="counter-box wow fadeInUp" data-wow-delay=".6s">
            <div class="content">
              <h2><span class="count">150</span>+</h2>
              <p>Vehicle Brands</p>
            </div>
          </div>
          <div class="counter-box wow fadeInUp" data-wow-delay=".8s">
            <div class="content">
              <h2><span class="count">25</span>+</h2>
              <p>Years Experience</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-padding section-bg">
      <div class="container">
        <div class="section-title-area">
          <div class="section-title">
            <h6 class="wow fadeInUp">Testimonials</h6>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
              What Our Clients Say
            </h2>
          </div>
          <p class="wow fadeInUp" data-wow-delay=".5s">
            These testimonials reflect positive customer <br />
            process, helping build trust.
          </p>
        </div>
        <div class="swiper testimonial-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-box-items">
                <div class="testimonial-image">
                  <img src="assets/img/testimonial/01.jpg" alt="img" />
                </div>
                <div class="testimonial-content">
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                  </div>
                  <p>
                    FixMyRide made getting my car fixed so simple! I found a reliable mechanic just a few blocks away, and the booking process was seamless. Highly recommend!
                  </p>
                  <div class="client-info">
                    <img src="assets/img/testimonial/client-1.png" alt="img" />
                    <div class="content">
                      <h4>Herath Silva</h4>
                      <span>Nursing Assistant</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-box-items">
                <div class="testimonial-image">
                  <img src="assets/img/testimonial/02.jpg" alt="img" />
                </div>
                <div class="testimonial-content">
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                  </div>
                  <p>
                    I needed a rare spare part for my car, and FixMyRide connected me with a local seller in minutes. Saved me so much time and hassle!
                  </p>
                  <div class="client-info">
                    <img src="assets/img/testimonial/client-2.png" alt="img" />
                    <div class="content">
                      <h4>Anura Kumara</h4>
                      <span>Doctor</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-box-items">
                <div class="testimonial-image">
                  <img src="assets/img/testimonial/01.jpg" alt="img" />
                </div>
                <div class="testimonial-content">
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                  </div>
                  <p>
                    The map feature is amazing! I could see all nearby garages and choose the one with the best reviews. FixMyRide really makes car maintenance stress-free.
                  </p>
                  <div class="client-info">
                    <img src="assets/img/testimonial/client-1.png" alt="img" />
                    <div class="content">
                      <h4>Ajantha siva</h4>
                      <span>Teacher</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-box-items">
                <div class="testimonial-image">
                  <img src="assets/img/testimonial/02.jpg" alt="img" />
                </div>
                <div class="testimonial-content">
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                  </div>
                  <p>
                    From start to finish, my experience at FixMyRide patient,
                    answered all my questions, and helped me drive away in my
                    dream car. Highly recommend!
                  </p>
                  <div class="client-info">
                    <img src="assets/img/testimonial/client-2.png" alt="img" />
                    <div class="content">
                      <h4>Darlene Robertson</h4>
                      <span>Medical Assistant</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-box-items">
                <div class="testimonial-image">
                  <img src="assets/img/testimonial/01.jpg" alt="img" />
                </div>
                <div class="testimonial-content">
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                  </div>
                  <p>
                    As a mechanic, FixMyRide has helped me manage service requests efficiently. I love how customers can directly reach me, and it’s improved my business!
                  </p>
                  <div class="client-info">
                    <img src="assets/img/testimonial/client-1.png" alt="img" />
                    <div class="content">
                      <h4>Sandeepa </h4>
                      <span>Mechanic</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-dot-2 text-center pt-5">
            <div class="dots"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- News Section Start -->
    <section class="news-section section-padding fix">
      <div class="container">
        <div class="section-title-area">
          <div class="section-title">
            <h6 class="wow fadeInUp">Latest News</h6>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
              Check out our blog <br />
              posts
            </h2>
          </div>
          <a
            href="news.html"
            class="theme-btn wow fadeInUp"
            data-wow-delay=".5s"
            >View More <i class="fa-regular fa-car"></i
          ></a>
        </div>
        <div class="row">
          <div
            class="col-xl-4 col-lg-6 col-md-6 img-custom-anim-top wow"
            data-wow-delay=".3s"
          >
            <div class="news-box-items">
              <div class="news-image">
                <img src="assets/img/news/01.jpg" alt="img" />
              </div>
              <div class="news-content">
                <h3>
                  <a href="news-details.html"
                    >Top 10 Car Maintenance Tips Every Owner Should Know</a
                  >
                </h3>
                <p>
                  Learn simple yet effective ways to keep your car in top condition and avoid costly repairs. From checking oil levels to tire care, this guide has it all.
                </p>
                <div class="link-btn-area">
                  <a href="news-details.html" class="link">Read More</a>
                  <a href="news-details.html" class="arrow-icon">
                    <i class="fa-sharp fa-regular fa-arrow-up-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 img-custom-anim-top wow"
            data-wow-delay=".5s"
          >
            <div class="news-box-items">
              <div class="news-image">
                <img src="assets/img/news/02.jpg" alt="img" />
              </div>
              <div class="news-content">
                <h3>
                  <a href="news-details.html"
                    >How to Choose the Right Mechanic Near You</a
                  >
                </h3>
                <p>
                  Finding a reliable mechanic doesn’t have to be hard. Discover key tips for selecting trustworthy garages, reading reviews, and getting fair pricing.
                </p>
                <div class="link-btn-area">
                  <a href="news-details.html" class="link">Read More</a>
                  <a href="news-details.html" class="arrow-icon">
                    <i class="fa-sharp fa-regular fa-arrow-up-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 img-custom-anim-top wow"
            data-wow-delay=".7s"
          >
            <div class="news-box-items">
              <div class="news-image">
                <img src="assets/img/news/03.jpg" alt="img" />
              </div>
              <div class="news-content">
                <h3>
                  <a href="news-details.html"
                    >Essential Spare Parts You Should Always Have on Hand</a
                  >
                </h3>
                <p>
                  Never get stranded again! This post covers must-have spare parts for emergencies and routine maintenance.
                </p>
                <div class="link-btn-area">
                  <a href="news-details.html" class="link">Read More</a>
                  <a href="news-details.html" class="arrow-icon">
                    <i class="fa-sharp fa-regular fa-arrow-up-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="map" style="height: 500px;"></div>
<script>
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var userLat = position.coords.latitude;
            var userLng = position.coords.longitude;

            // Initialize map
            var map = L.map('map').setView([userLat, userLng], 13);

            // Add OpenStreetMap layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Add user location marker
            L.marker([userLat, userLng]).addTo(map)
                .bindPopup("You are here")
                .openPopup();

            // ✅ Add mechanic markers from Laravel
            const mechanics = @json($mechanics);

            mechanics.forEach(function(mechanic) {
                L.marker([mechanic.latitude, mechanic.longitude]).addTo(map)
                    .bindPopup(mechanic.name);
            });

        });
    } else {
        alert("Geolocation is not supported by this browser.");
    }
</script>


    </section>

    <!-- Footer section started -->
    <footer class="footer-3">
      <!-- contact info -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="footer-3-contact">
              <div class="icon">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <div class="content">
                <span>Contact Us</span>
                <p>contact@FixMyRide.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="footer-3-contact">
              <div class="icon">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="content">
                <span>Call Us</span>
                <p>+94 70 3620 719</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="footer-3-contact">
              <div class="icon">
                <i class="fa-solid fa-comments"></i>
              </div>
              <div class="content">
                <span>Live Chat</span>
                <p>Sunday - Friday 24/7</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="footer-3-contact">
              <div class="icon">
                <i class="fa-solid fa-location-crosshairs"></i>
              </div>
              <div class="content">
                <span>Location</span>
                <p>Matale - Sri Lanka</p>
              </div>
            </div>
          </div>
        </div>

        <hr />
      </div>

      <div class="container">
        <div class="footer-widgets-wrapper">
          <div class="row">
            <div
              class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
              data-wow-delay=".2s"
            >
              <div class="single-footer-widget">
                <img src="assets/img/logo/white-logo.svg" alt="RevAuto" >
                <p class="my-3 fs-6">
                  Fix Your ride anywere anytime.
                </p>

                <div class="footer-3-social-wrapper">
                  <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>

                  <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>

                  <a href="#">
                    <i class="fa-brands fa-linkedin-in"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-youtube"></i>
                  </a>
                </div>
              </div>
            </div>
            <div
              class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
              data-wow-delay=".4s"
            >
              <div class="single-footer-widget">
                <div class="widget-head">
                  <h3>Explore</h3>
                </div>
                <ul class="list-items">
                  <li>
                    <a href="service.html"> Services </a>
                  </li>
                  <li>
                    <a href="project.html"> Portfolio </a>
                  </li>
                  <li>
                    <a href="faq.html"> Faq </a>
                  </li>
                  <li>
                    <a href="news.html"> Our Blog </a>
                  </li>
                </ul>
              </div>
            </div>
            <div
              class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
              data-wow-delay=".6s"
            >
              <div class="single-footer-widget">
                <div class="widget-head">
                  <h3>Find a car</h3>
                </div>
                <ul class="list-items">
                  <li>
                    <a href="shop.html"> Our Shop </a>
                  </li>
                  <li>
                    <a href="car.html"> Cart </a>
                  </li>
                  <li>
                    <a href="checkout.html"> Checkout </a>
                  </li>
                  <li>
                    <a href="contact.html"> Contact Us </a>
                  </li>
                </ul>
              </div>
            </div>
            <div
              class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
              data-wow-delay=".8s"
            >
              <div class="single-footer-widget">
                <div class="widget-head">
                  <h3>Get In Touch</h3>
                </div>
                <ul class="contact-list">
                  <li>No 21, Matale, Sri Lanka</li>
                  <li>
                    <a href="tel:2395550108">066 222 4423</a>
                  </li>
                  <li>
                    <a href="mailto:info@example.com">info@FixMyRide.com</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom-wrapper">
          <p class="wow fadeInUp" data-wow-delay=".5s">
            © 2025 FixMyRide. All rights reserved.
          </p>
          <div class="d-flex align-items-center gap-2">
            <p>
              <a href="contact.html" class="wow fadeInUp" data-wow-delay=".7s"
                >Privacy Policy</a
              >
            </p>
            <p>
              <a href="contact.html" class="wow fadeInUp" data-wow-delay=".3s"
                >Terms of Use</a
              >
            </p>
          </div>

          <div class="d-flex gap-2 align-items-center">
            <p>We Accept:</p>
            <div>
              <i class="fa-brands fa-cc-mastercard fs-3"></i>
            </div>
            <div>
              <i class="fa-brands fa-cc-visa fs-3"></i>
            </div>
            <div>
              <i class="fa-brands fa-cc-stripe fs-3"></i>
            </div>
            <div>
              <i class="fa-brands fa-cc-paypal fs-3"></i>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!--<< All JS Plugins >>-->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
    <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

  </body>
</html>
