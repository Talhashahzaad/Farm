<header class="hero-section">

    <div class="logo-nav-main">
        <div class="logo-sec">
            <a class="text-white text-decoration-none" href="#" role="button" id="logo-n" aria-expanded="false">
                <img src="{{ asset('frontend/images/farm-ily-logo.svg') }}" alt="Farm Logo" class="me-2">
            </a>
        </div>

        <div class="top-and-nav">
            <!-- Top Bar Section -->
            <div class="top-bar py-2 bg-transparent">
                <div class="container-fluid d-flex justify-content-end align-items-center">
                    <!-- Login Link -->
                    <a href="#" class="text-white me-4 text-decoration-none"><img
                            src="{{ asset('frontend/images/icons/login-icon.svg') }}" alt="login"
                            class="me-1">Login</a>

                    <!-- Register Link -->
                    <a href="#" class="text-white me-4 text-decoration-none"><img
                            src="{{ asset('frontend/images/icons/user-icon.svg') }}" alt="user"
                            class="me-1">Register</a>

                    <!-- Divider -->
                    <span class="text-white me-4">|</span>

                    <!-- Language Dropdown -->
                    <div class="dropdown">
                        <a class="text-white dropdown-toggle text-decoration-none" href="#" role="button"
                            id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('frontend/images/icons/globe-icon.svg') }}" alt="language icon"> EN
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">French</a></li>
                            <li><a class="dropdown-item" href="#">Spanish</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
                <div class="container-fluid">
                    <!-- Logo Section -->
                    <a class="navbar-brand text-white fw-bold" href="#">
                        <!-- <img src="{{ asset('frontend/images/farm-ily-logo.svg') }}" alt="Farm Logo" class="me-2"> -->
                    </a>

                    <!--mobile device view-->
                    <div class="mobile-view">
                        <!-- Search Dropdown -->
                        <div class="nav-item dropdown search-container ms-3 d-md-none">
                            <a class="nav-link" href="#" role="button" id="searchDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('frontend/images/icons/search-icon.svg') }}" alt="search">
                            </a>
                            <!-- Dropdown Menu with Search Box -->
                            <div class="dropdown-menu dropdown-menu-end dropdown-search p-3"
                                aria-labelledby="searchDropdown">
                                <input type="text" id="searchBox" class="form-control" placeholder="Search...">
                            </div>
                        </div>

                        <!-- Navbar Toggler (for mobile view) -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Navbar Links -->
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active text-warning fw-bold" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Listing</a>
                                </li>
                                <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="marketplaceDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Marketplace
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Products</a></li>
                            <li><a class="dropdown-item" href="#">Suppliers</a></li>
                        </ul>
                    </li> -->
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Contact</a>
                                </li>
                            </ul>

                            <!-- Right Side Section -->
                            <div class="d-flex align-items-center">
                                <div class="reach-us text-white me-3 d-flex align-items-center">
                                    <img src="{{ asset('frontend/images/icons/call-icon.svg') }}" alt="call"
                                        class="me-2">
                                    <div>
                                        <small>Reach to us</small><br>
                                        <strong>+2500 25 578 750</strong>
                                    </div>
                                </div>
                                <!-- Search Dropdown -->
                                <div class="nav-item dropdown search-container ms-3 d-none d-md-block">
                                    <a class="nav-link" href="#" role="button" id="searchDropdown"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('frontend/images/icons/search-icon.svg') }}"
                                            alt="search">
                                    </a>
                                    <!-- Dropdown Menu with Search Box -->
                                    <div class="dropdown-menu dropdown-menu-end dropdown-search p-3"
                                        aria-labelledby="searchDropdown">
                                        <input type="text" id="searchBox" class="form-control"
                                            placeholder="Search...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>



    <!-- Hero Content -->
    <div class="container text-center hero-content">
        <h1 class="hero-title">Connecting Farmers<br>and Buyers Seamlessly</h1>
        <div class="d-flex justify-content-center hero-sec-btn mt-4">
            <a href="#" class="btn custom-btn-color btn-lg">Register As Farmer </a>
            <a href="#" class="btn custom-trans-btn btn-lg">Register As Buyer </a>
        </div>
    </div>

    <!-- Hero border -->
    <div class="hero-border">
        <img src="{{ asset('frontend/images/image-divider.webp') }}" alt="image-divider" class="img-fluid">
    </div>
</header>
