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
<style>
    body { margin: 0; padding: 0; font-family: Arial, sans-serif; }
    /* Modern Hero Styles */
.hero-section {
    position: relative;
    overflow: hidden;
    min-height: 600px;
}

.hero-slide-1 { background: #ffffff; }
.hero-slide-2 {  background: #ffffff; }
.hero-slide-3 {  background: #ffffff; }

.hero-content h1 {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 800;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.hero-content p {
    font-size: clamp(1rem, 2vw, 1.2rem);
    line-height: 1.8;
    margin-bottom: 2rem;
}

.theme-btn {
    background: linear-gradient(135deg, #ffb4b4 0%, #f16868 100%);
    padding: 15px 35px;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(255, 255, 255, 0.3);
}

.theme-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 25px rgba(255, 255, 255, 0.5);
}

/* Modern Card Styles */
.car-box-items, .feature-box-items, .news-box-items {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 20px;
    overflow: hidden;
}

.car-box-items:hover, .feature-box-items:hover, .news-box-items:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

/* Glass-morphism Effect */
.about-content, .section-title-area {
    backdrop-filter: blur(10px);
    background: rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    padding: 30px;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-content h1 { font-size: 2rem; }
    .hero-section { min-height: 500px; }
}
    
    .map-section {
        position: relative;
        padding: 0;
        margin: 0;
        height: 600px;
    }
    
    #map { 
        height: 600px;
        width: 100%; 
        position: relative;
    }
    
    .mechanic-popup h3 { margin: 0 0 10px 0; color: #141518; }
    .mechanic-popup p { margin: 5px 0; font-size: 14px; }
    .mechanic-popup img { width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-bottom: 10px; }
    
    /* SOS Button Styles */
    .sos-button {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 999;
        background: linear-gradient(135deg, #ff0844 0%, #ff3b69 100%);
        color: white;
        border: none;
        padding: 18px 40px;
        border-radius: 50px;
        font-size: 18px;
        font-weight: 700;
        cursor: pointer;
        box-shadow: 0 8px 30px rgba(255, 8, 68, 0.4);
        display: flex;
        align-items: center;
        gap: 12px;
        animation: sosPulse 2s infinite;
        transition: all 0.3s ease;
    }

    .sos-button:hover {
        transform: translateX(-50%) translateY(-5px);
        box-shadow: 0 12px 40px rgba(255, 8, 68, 0.6);
    }

    @keyframes sosPulse {
        0%, 100% { box-shadow: 0 8px 30px rgba(255, 8, 68, 0.4); }
        50% { box-shadow: 0 8px 50px rgba(255, 8, 68, 0.8); }
    }

    /* Modal Styles */
    .sos-modal {
        display: none;
        position: fixed;
        z-index: 10000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        animation: fadeIn 0.3s ease;
    }

    .sos-modal-content {
        position: relative;
        background: white;
        margin: 5% auto 5% auto;
        padding: 0;
        width: 90%;
        max-width: 600px;
        max-height: 85vh;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        animation: slideDown 0.3s ease;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideDown {
        from { transform: translateY(-50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .sos-modal-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 25px 30px;
        border-radius: 20px 20px 0 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .sos-modal-header h2 {
        margin: 0;
        font-size: 24px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sos-close {
        background: none;
        border: none;
        color: white;
        font-size: 32px;
        cursor: pointer;
        line-height: 1;
    }

    .sos-modal-body {
        padding: 30px;
        overflow-y: auto;
        overflow-x: hidden;
        flex: 1;
    }

    .sos-step {
        display: none;
    }

    .sos-step.active {
        display: block;
    }

    .problem-types {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 15px;
        margin: 20px 0;
    }

    .problem-option {
        position: relative;
        cursor: pointer;
    }

    .problem-option input[type="radio"] {
        position: absolute;
        opacity: 0;
    }

    .problem-option span {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 15px 20px;
        background: #f8f9fa;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .problem-option input[type="radio"]:checked + span {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-color: #667eea;
    }

    .problem-option:hover span {
        border-color: #667eea;
        transform: translateY(-2px);
    }

    .sos-btn-primary, .sos-btn-secondary {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .sos-btn-primary {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
    }

    .sos-btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(245, 87, 108, 0.4);
    }

    .sos-btn-secondary {
        background: #6c757d;
        color: white;
    }

    .mechanics-list {
        max-height: 400px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .mechanic-card {
        background: #f8f9fa;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .mechanic-card:hover {
        border-color: #667eea;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .mechanic-card h4 {
        margin: 0 0 10px 0;
        color: #2c3e50;
    }

    .mechanic-info {
        display: flex;
        flex-direction: column;
        gap: 8px;
        color: #7f8c8d;
        font-size: 14px;
    }

    .loading {
        text-align: center;
        padding: 40px;
        color: #667eea;
        font-size: 18px;
    }
</style>

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
                  <img src="assets/img/logo/black-logo.svg" alt="fixmyride" />
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

                
              </div>
              @guest
    <!-- Guest users see Login/Register -->
    <li><a href="{{ route('login') }}">Log In</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
@else
    <!-- Logged-in users see role-specific links -->
    @if(Auth::user()->role === 'mechanic')
        <li><a href="{{ route('mechanic.dashboard') }}">My Dashboard</a></li>
        <li><a href="{{ route('mechanic.jobs') }}">View Job Requests</a></li>
    @elseif(Auth::user()->role === 'customer')
        <li><a href="{{ route('customer.jobs') }}">My Requests</a></li>
    @endif
    
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
<!--
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>-->
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
        
        <!-- Slide 1: Find Mechanics -->
        <div class="swiper-slide hero-slide-1">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content text-white">
                        <span class="badge bg-light text-dark mb-3 px-4 py-2 rounded-pill">🚗 Welcome to FixMyRide</span>
                        <h1 class="animate__animated animate__fadeInUp">
                            Find Trusted Mechanics<br/>
                            <span style="color: #292925;">Near You Instantly</span>
                        </h1>
                        <p class="animate__animated animate__fadeInUp animate__delay-1s;" style="color:#565654;">
                            Use our interactive map to locate verified mechanics in your area. Get real-time directions, view ratings, and book services—all in one place.
                        </p>
                        <div class="hero-button animate__animated animate__fadeInUp animate__delay-2s">
                            <a href="#map" class="theme-btn hover-white">
                                Find Mechanics Now
                                <i class="fa-solid fa-location-dot"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-items animate__animated animate__fadeInRight">
                        <img src="assets/img/hero/hero-car-1.png" alt="Find Mechanics" style="max-width: 100%; height: auto;"/>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 2: Emergency SOS -->
        <div class="swiper-slide hero-slide-2">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content text-white">
                        <span class="badge bg-light text-danger mb-3 px-4 py-2 rounded-pill">🚨 Emergency Assistance</span>
                        <h1 class="animate__animated animate__fadeInUp">
                            Stuck on the Road?<br/>
                            <span style="color: #323130;">Help is One Click Away</span>
                        </h1>
                        <p class="animate__animated animate__fadeInUp animate__delay-1s;" style="color:#565654;">
                            Our Emergency SOS feature connects you with the nearest available mechanic instantly. Get help when you need it most—24/7 support.
                        </p>
                        <div class="hero-button animate__animated animate__fadeInUp animate__delay-2s">
                            <a href="#map" class="theme-btn" style="background: #ff0844;">
                                Emergency SOS
                                <i class="fa-solid fa-triangle-exclamation"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-items animate__animated animate__fadeInRight">
                        <img src="assets/img/hero/hero-car-1.png" alt="Emergency SOS" style="max-width: 100%; height: auto; filter: drop-shadow(0 10px 30px rgba(255,8,68,0.5));"/>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 3: Spare Parts -->
        <div class="swiper-slide hero-slide-3">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content text-white">
                        <span class="badge bg-light text-primary mb-3 px-4 py-2 rounded-pill">🔧 Quality Parts</span>
                        <h1 class="animate__animated animate__fadeInUp">
                            Find Spare Parts<br/>
                            <span style="color: #2f3232;">From Trusted Sellers</span>
                        </h1>
                        <p class="animate__animated animate__fadeInUp animate__delay-1s;" style="color:#565654;">
                            Browse genuine spare parts from verified sellers near you. Compare prices, check availability, and order directly—quick and hassle-free.
                        </p>
                        <div class="hero-button animate__animated animate__fadeInUp animate__delay-2s">
                            <a href="#" class="theme-btn" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                                Browse Parts
                                <i class="fa-solid fa-gear"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-items animate__animated animate__fadeInRight">
                        <img src="assets/img/hero/hero-car-1.png" alt="Spare Parts" style="max-width: 100%; height: auto;"/>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <!-- Add Pagination & Navigation -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
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
    <!-- SOS Button and Map Section -->
<section class="map-section">
    <div id="map"></div>
    
    <!-- SOS Button -->
    <button id="sosButton" class="sos-button">
        <i class="fa-solid fa-triangle-exclamation"></i>
        <span>EMERGENCY SOS</span>
    </button>
</section>

<!-- SOS Modal -->
<div id="sosModal" class="sos-modal">
    <div class="sos-modal-content">
        <div class="sos-modal-header">
            <h2><i class="fa-solid fa-car-burst"></i> Emergency Assistance</h2>
            <button class="sos-close">&times;</button>
        </div>
        
        <div class="sos-modal-body">
            <div id="step1" class="sos-step active">
                <h3>What's the problem?</h3>
                <div class="problem-types">
                    <label class="problem-option">
                        <input type="radio" name="problem_type" value="Engine Problem">
                        <span><i class="fa-solid fa-engine"></i> Engine Problem</span>
                    </label>
                    <label class="problem-option">
                        <input type="radio" name="problem_type" value="Flat Tire">
                        <span><i class="fa-solid fa-circle"></i> Flat Tire</span>
                    </label>
                    <label class="problem-option">
                        <input type="radio" name="problem_type" value="Battery Dead">
                        <span><i class="fa-solid fa-car-battery"></i> Battery Dead</span>
                    </label>
                    <label class="problem-option">
                        <input type="radio" name="problem_type" value="Brake Problem">
                        <span><i class="fa-solid fa-brake-warning"></i> Brake Problem</span>
                    </label>
                    <label class="problem-option">
                        <input type="radio" name="problem_type" value="Overheating">
                        <span><i class="fa-solid fa-temperature-high"></i> Overheating</span>
                    </label>
                    <label class="problem-option">
                        <input type="radio" name="problem_type" value="Electrical Issue">
                        <span><i class="fa-solid fa-bolt"></i> Electrical Issue</span>
                    </label>
                    <label class="problem-option">
                        <input type="radio" name="problem_type" value="Transmission Problem">
                        <span><i class="fa-solid fa-gears"></i> Transmission Problem</span>
                    </label>
                    <label class="problem-option">
                        <input type="radio" name="problem_type" value="Accident">
                        <span><i class="fa-solid fa-car-crash"></i> Accident</span>
                    </label>
                    <label class="problem-option">
                        <input type="radio" name="problem_type" value="Other">
                        <span><i class="fa-solid fa-wrench"></i> Other</span>
                    </label>
                </div>
                
                <div class="form-group mt-3">
                    <label>Additional Notes (Optional)</label>
                    <textarea id="additionalNotes" class="form-control" rows="3" placeholder="Describe your situation..."></textarea>
                </div>
                
                <button id="findMechanicsBtn" class="sos-btn-primary">
                    <i class="fa-solid fa-search"></i> Find Nearby Mechanics
                </button>
            </div>
            
            <div id="step2" class="sos-step">
                <h3>Select a Mechanic</h3>
                <div id="mechanicsList" class="mechanics-list">
                    <div class="loading">
                        <i class="fa-solid fa-spinner fa-spin"></i> Finding mechanics near you...
                    </div>
                </div>
                <button id="backToStep1" class="sos-btn-secondary">
                    <i class="fa-solid fa-arrow-left"></i> Back
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Map Initialization Script -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    // Initialize map centered on Sri Lanka
const map = L.map('map').setView([7.8731, 80.7718], 8);

// Add OpenStreetMap tiles
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors',
    maxZoom: 19
}).addTo(map);

// Custom mechanic icon
const mechanicIcon = L.icon({
    iconUrl: 'https://cdn-icons-png.flaticon.com/512/3448/3448339.png',
    iconSize: [40, 40],
    iconAnchor: [20, 40],
    popupAnchor: [0, -40]
});

// Custom seller icon
const sellerIcon = L.icon({
    iconUrl: 'https://cdn-icons-png.flaticon.com/512/2331/2331966.png',
    iconSize: [40, 40],
    iconAnchor: [20, 40],
    popupAnchor: [0, -40]
});

// Fetch and display mechanics
fetch('/api/mechanics')
    .then(response => response.json())
    .then(mechanics => {
        mechanics.forEach(mechanic => {
            const marker = L.marker([mechanic.latitude, mechanic.longitude], {
                icon: mechanicIcon
            }).addTo(map);

            const popupContent = `
                <div class="mechanic-popup">
                    ${mechanic.photo ? `<img src="${mechanic.photo}" alt="${mechanic.full_name}">` : ''}
                    <h3>🔧 ${mechanic.garage_name}</h3>
                    <p><strong>Owner:</strong> ${mechanic.full_name}</p>
                    <p><strong>Specialty:</strong> ${mechanic.specialty}</p>
                    <p><strong>Available:</strong> ${mechanic.available_time}</p>
                    <p><strong>Phone:</strong> <a href="tel:${mechanic.phone_number}">${mechanic.phone_number}</a></p>
                </div>
            `;

            marker.bindPopup(popupContent);
        });

        console.log(`Loaded ${mechanics.length} mechanics on the map`);
    })
    .catch(error => {
        console.error('Error loading mechanics:', error);
    });

// Fetch and display sellers
fetch('/api/sellers')
    .then(response => response.json())
    .then(sellers => {
        sellers.forEach(seller => {
            const marker = L.marker([seller.latitude, seller.longitude], {
                icon: sellerIcon
            }).addTo(map);

            const popupContent = `
                <div class="mechanic-popup">
                    ${seller.photo ? `<img src="${seller.photo}" alt="${seller.full_name}">` : ''}
                    <h3>🛒 ${seller.shop_name}</h3>
                    <p><strong>Owner:</strong> ${seller.full_name}</p>
                    <p><strong>Category:</strong> ${seller.parts_category}</p>
                    <p><strong>Available:</strong> ${seller.available_time}</p>
                    <p><strong>Phone:</strong> <a href="tel:${seller.phone_number}">${seller.phone_number}</a></p>
                </div>
            `;

            marker.bindPopup(popupContent);
        });

        console.log(`Loaded ${sellers.length} sellers on the map`);
    })
    .catch(error => {
        console.error('Error loading sellers:', error);
    });

// Add user's current location
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(position => {
        const userIcon = L.icon({
            iconUrl: 'https://cdn-icons-png.flaticon.com/512/684/684908.png',
            iconSize: [30, 30]
        });

        L.marker([position.coords.latitude, position.coords.longitude], {
            icon: userIcon
        }).addTo(map).bindPopup('📍 You are here');

        map.setView([position.coords.latitude, position.coords.longitude], 12);
    });
}
</script>

<!-- SOS Button Functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const sosButton = document.getElementById('sosButton');
    const sosModal = document.getElementById('sosModal');
    const closeModal = document.querySelector('.sos-close');
    const findMechanicsBtn = document.getElementById('findMechanicsBtn');
    const backToStep1 = document.getElementById('backToStep1');
    
    let userLocation = null;

    // Open SOS Modal
    sosButton.addEventListener('click', function() {
        @guest
            // Redirect to login if not authenticated
            window.location.href = '{{ route('login') }}';
        @else
            // Get user location
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    userLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    sosModal.style.display = 'block';
                }, function(error) {
                    alert('Please enable location services to use emergency assistance.');
                });
            } else {
                alert('Geolocation is not supported by your browser.');
            }
        @endguest
    });

    // Close modal
    closeModal.addEventListener('click', function() {
        sosModal.style.display = 'none';
        resetModal();
    });

    // Close on outside click
    window.addEventListener('click', function(event) {
        if (event.target === sosModal) {
            sosModal.style.display = 'none';
            resetModal();
        }
    });

    // Find mechanics
    findMechanicsBtn.addEventListener('click', function() {
        const problemType = document.querySelector('input[name="problem_type"]:checked');
        
        if (!problemType) {
            alert('Please select a problem type');
            return;
        }

        // Show step 2
        document.getElementById('step1').classList.remove('active');
        document.getElementById('step2').classList.add('active');

        // Fetch nearby mechanics
        fetch(`/jobs/nearby-mechanics?latitude=${userLocation.lat}&longitude=${userLocation.lng}`, {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(mechanics => {
            displayMechanics(mechanics);
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('mechanicsList').innerHTML = '<p class="text-danger">Error loading mechanics. Please try again.</p>';
        });
    });

    // Display mechanics
    function displayMechanics(mechanics) {
        const mechanicsList = document.getElementById('mechanicsList');
        
        if (mechanics.length === 0) {
            mechanicsList.innerHTML = '<p class="text-center">No mechanics found nearby. Try expanding your search radius.</p>';
            return;
        }

        mechanicsList.innerHTML = mechanics.map(mechanic => `
            <div class="mechanic-card" onclick="selectMechanic(${mechanic.id})">
                <h4><i class="fa-solid fa-wrench"></i> ${mechanic.garage_name}</h4>
                <div class="mechanic-info">
                    <span><i class="fa-solid fa-user"></i> ${mechanic.full_name}</span>
                    <span><i class="fa-solid fa-tools"></i> ${mechanic.specialty}</span>
                    <span><i class="fa-solid fa-phone"></i> ${mechanic.phone_number}</span>
                    <span><i class="fa-solid fa-location-dot"></i> ${mechanic.distance} km away</span>
                    <span><i class="fa-solid fa-clock"></i> ${mechanic.available_time}</span>
                </div>
            </div>
        `).join('');
    }

    // Back to step 1
    backToStep1.addEventListener('click', function() {
        document.getElementById('step2').classList.remove('active');
        document.getElementById('step1').classList.add('active');
    });

    // Reset modal
    function resetModal() {
        document.getElementById('step1').classList.add('active');
        document.getElementById('step2').classList.remove('active');
        document.querySelectorAll('input[name="problem_type"]').forEach(input => input.checked = false);
        document.getElementById('additionalNotes').value = '';
    }
});

// Select mechanic and send request
function selectMechanic(mechanicId) {
    const problemType = document.querySelector('input[name="problem_type"]:checked').value;
    const additionalNotes = document.getElementById('additionalNotes').value;
    
    if (!confirm('Send emergency request to this mechanic?')) {
        return;
    }

    // Get user location
    navigator.geolocation.getCurrentPosition(function(position) {
        fetch('/jobs/request', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                mechanic_id: mechanicId,
                problem_type: problemType,
                additional_notes: additionalNotes,
                customer_latitude: position.coords.latitude,
                customer_longitude: position.coords.longitude
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('✅ Emergency request sent successfully! The mechanic will contact you soon.');
                document.getElementById('sosModal').style.display = 'none';
                location.reload();
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to send request. Please try again.');
        });
    });
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
 
<!--chatbot part-->

<!-- Inline CSS jst fn-->
<style>
    #chatbot-container {
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 9998;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }

    .chatbot-toggle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        transition: all 0.3s ease;
        position: relative;
        animation: chatbotPulse 2s infinite;
    }

    @keyframes chatbotPulse {
        0%, 100% { box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4); }
        50% { box-shadow: 0 4px 20px rgba(102, 126, 234, 0.6); }
    }

    .chatbot-toggle:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
    }

    .chatbot-toggle:active {
        transform: scale(0.95);
    }

    .chatbot-toggle.active {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }

    .chatbot-notification {
        position: absolute;
        top: -5px;
        right: -5px;
        background: #ff4444;
        color: white;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        display: none;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: bold;
    }

    .chatbot-notification.show {
        display: flex;
    }
</style>

<!-- Chatbot HTML -->
<div id="chatbot-container">
    <!-- Floating Chat Button -->
    <button id="chatbot-toggle" class="chatbot-toggle" aria-label="Open chat" title="Chat with AI Assistant">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
        </svg>
        <span class="chatbot-notification" id="chatbot-notification"></span>
    </button>

    <!-- Chat Window -->
    <div id="chatbot-window" class="chatbot-window">
        <!-- Header -->
        <div class="chatbot-header">
            <div class="chatbot-header-info">
                <div class="chatbot-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                    </svg>
                </div>
                <div>
                    <h3 class="chatbot-title">FixMyRide Assistant</h3>
                    <p class="chatbot-status">
                        <span class="status-dot"></span>
                        Online
                    </p>
                </div>
            </div>
            <div class="chatbot-actions">
                <button id="chatbot-clear" class="chatbot-action-btn" title="Clear chat history">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    </svg>
                </button>
                <button id="chatbot-minimize" class="chatbot-action-btn" title="Minimize chat">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Messages Container -->
        <div id="chatbot-messages" class="chatbot-messages">
            <!-- Welcome message will be added by JS -->
        </div>

        <!-- Input Area -->
        <div class="chatbot-input-container">
            <form id="chatbot-form" class="chatbot-form">
                <input 
                    type="text" 
                    id="chatbot-input" 
                    class="chatbot-input" 
                    placeholder="Ask me anything about FixMyRide..."
                    autocomplete="off"
                    maxlength="1000"
                >
                <button type="button" id="chatbot-mic" class="chatbot-mic-btn" title="Voice input (coming soon)" disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path>
                        <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                        <line x1="12" y1="19" x2="12" y2="23"></line>
                        <line x1="8" y1="23" x2="16" y2="23"></line>
                    </svg>
                </button>
                <button type="submit" id="chatbot-send" class="chatbot-send-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                </button>
            </form>
            <div class="chatbot-footer-text">
                Powered by Groq AI
            </div>
        </div>
    </div>
</div>

<!-- Load Complete CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/chatbot.css') }}">

<!-- Chatbot Configuration -->
<script>
    window.chatbotConfig = {
        csrfToken: '{{ csrf_token() }}',
        messageRoute: '{{ route('chatbot.message') }}',
        isAuthenticated: {{ auth()->check() ? 'true' : 'false' }},
        userName: '{{ auth()->check() ? auth()->user()->name : "Guest" }}',
        userRole: '{{ auth()->check() ? auth()->user()->role : "guest" }}'
    };
    console.log('✅ Chatbot initialized on home page');
    console.log('Config:', window.chatbotConfig);
</script>

<!-- Load Chatbot JavaScript -->
<script src="{{ asset('assets/js/chatbot.js') }}"></script>

<!-- Debug: Verify chatbot loaded -->
<script>
    setTimeout(function() {
        const container = document.getElementById('chatbot-container');
        if (container) {
            console.log('✅ Chatbot container found!');
        } else {
            console.error('❌ Chatbot container NOT found!');
        }
    }, 1000);
</script>

  </body>
</html>
