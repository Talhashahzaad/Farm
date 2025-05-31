@extends('frontend.layouts.master')
@section('content')
    <!-- Search Section -->
    <section class="search-section">
        <img src="{{ asset('frontend/images/icons/heading-icon.svg') }}" alt="Logo" class="mb-3">
        <h2 class="search-title">Explore The Marketplace</h2>

        <!-- Search Box -->
        <div class="search-box d-flex align-items-center justify-content-between">
            <input type="text" class="form-control form-control-custom me-2" placeholder="Search For Crops Or Buyers...">
            <div class="form-divider"></div>
            <select class="form-control form-control-custom me-2">
                <option selected disabled>Crop Type</option>
                <option>Fruits</option>
                <option>Vegetables</option>
                <option>Grains</option>
            </select>
            <div class="form-divider"></div>
            <input type="text" class="form-control form-control-custom me-2" placeholder="Location">
            <button class="btn search-btn">
                <i class="fas fa-search"></i> <span class="d-md-none">Search</span>
            </button>
        </div>
    </section>

    <!-- Farming Listing Section -->
    <section class="farmer-listing-section">
        <div class="container-fluid">
            <h2 class="text-center mb-5">Farmer Listing</h2>

            <!-- Owl Carousel Wrapper -->
            <div class="owl-carousel owl-theme farmer-carousel">

                <!-- Card 1 -->
                <div class="item">
                    <div class="card">
                        <div class="card-img"><img src="{{ asset('frontend/images/farmer-carousel-img/Figure-01.png') }}"
                                class="card-img-top" alt="Potato"></div>
                        <div class="card-body">
                            <h5 class="card-title">Potato</h5>
                            <ul>
                                <li>
                                    <p class="card-text"><strong>Qty:</strong> 50 Tons</p>
                                </li>
                                <li>
                                    <p class="card-text"><strong>Price:</strong> $2/kg</p>
                                </li>
                            </ul>
                            <p class="map-text"><i class="fas fa-map-marker-alt"></i> New York</p>
                            <a href="#" class="text-more">More <img
                                    src="{{ asset('frontend/images/icons/green-aerow.svg') }}" alt="black-aerow">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="item">
                    <div class="card">
                        <div class="card-img"><img src="{{ asset('frontend/images/farmer-carousel-img/Figure-02.png') }}"
                                class="card-img-top" alt="Vegetables"></div>
                        <div class="card-body">
                            <h5 class="card-title">Vegetables</h5>
                            <ul>
                                <li>
                                    <p class="card-text"><strong>Qty:</strong> 50 Tons</p>
                                </li>
                                <li>
                                    <p class="card-text"><strong>Price:</strong> $2/kg</p>
                                </li>
                            </ul>
                            <p class="map-text"><i class="fas fa-map-marker-alt"></i> New York</p>
                            <a href="#" class="text-more">More <img
                                    src="{{ asset('frontend/images/icons/green-aerow.svg') }}" alt="black-aerow">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="item">
                    <div class="card">
                        <div class="card-img"><img src="{{ asset('frontend/images/farmer-carousel-img/Figure-03.png') }}"
                                class="card-img-top" alt="Cucumber"></div>
                        <div class="card-body">
                            <h5 class="card-title">Cucumber</h5>
                            <ul>
                                <li>
                                    <p class="card-text"><strong>Qty:</strong> 50 Tons</p>
                                </li>
                                <li>
                                    <p class="card-text"><strong>Price:</strong> $2/kg</p>
                                </li>
                            </ul>
                            <p class="map-text"><i class="fas fa-map-marker-alt"></i> New York</p>
                            <a href="#" class="text-more">More <img
                                    src="{{ asset('frontend/images/icons/green-aerow.svg') }}" alt="black-aerow">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="item">
                    <div class="card">
                        <div class="card-img"><img src="{{ asset('frontend/images/farmer-carousel-img/Figure-04.png') }}"
                                class="card-img-top" alt="Wheat"></div>
                        <div class="card-body">
                            <h5 class="card-title">Wheat</h5>
                            <ul>
                                <li>
                                    <p class="card-text"><strong>Qty:</strong> 50 Tons</p>
                                </li>
                                <li>
                                    <p class="card-text"><strong>Price:</strong> $2/kg</p>
                                </li>
                            </ul>
                            <p class="map-text"><i class="fas fa-map-marker-alt"></i> New York</p>
                            <a href="#" class="text-more">More <img
                                    src="{{ asset('frontend/images/icons/green-aerow.svg') }}" alt="black-aerow">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="item">
                    <div class="card">
                        <div class="card-img"><img src="{{ asset('frontend/images/farmer-carousel-img/Figure-05.png') }}"
                                class="card-img-top" alt="Wheat"></div>
                        <div class="card-body">
                            <h5 class="card-title">Wheat</h5>
                            <ul>
                                <li>
                                    <p class="card-text"><strong>Qty:</strong> 50 Tons</p>
                                </li>
                                <li>
                                    <p class="card-text"><strong>Price:</strong> $2/kg</p>
                                </li>
                            </ul>
                            <p class="map-text"><i class="fas fa-map-marker-alt"></i> New York</p>
                            <a href="#" class="text-more">More <img
                                    src="{{ asset('frontend/images/icons/green-aerow.svg') }}" alt="black-aerow">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Why choose us -->
    <section class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6">
                    <div class="section-title mb-4">
                        <img src="{{ asset('frontend/images/icons/heading-icon.svg') }}" alt="heading-icon"
                            class="section-logo mb-2">
                        <h2 class="fw-bold">Why Choose Us</h2>
                        <p class="text-muted">
                            Choose Our Platform For Verified Profiles, Real-Time Pricing, Secure Payments, And
                            Efficient Logistics.
                            We Connect Farmers And Buyers Seamlessly, Ensuring Trust, Transparency, And Success In
                            Every Transaction.
                        </p>
                    </div>

                    <!-- Feature List -->
                    <div class="row g-4 mt-4">
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-start">
                                <div class="feature-icon me-3">
                                    <img src="{{ asset('frontend/images/icons/varify.svg') }}" alt="Verified Profiles" />
                                </div>
                                <div>
                                    <h5 class="fw-bold">Verified Profiles</h5>
                                    <p class="text-muted">Trusted Farmers And Buyers With Verified Credentials.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-start">
                                <div class="feature-icon me-3">
                                    <img src="{{ asset('frontend/images/icons/price-tag.svg') }}"
                                        alt="Real-Time Pricing" />
                                </div>
                                <div>
                                    <h5 class="fw-bold">Real-Time Pricing</h5>
                                    <p class="text-muted">Access Real-Time Market Prices And Trends.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-start">
                                <div class="feature-icon me-3">
                                    <img src="{{ asset('frontend/images/icons/search-icon.svg') }}"
                                        alt="Secure Payments" />
                                </div>
                                <div>
                                    <h5 class="fw-bold">Secure Payments</h5>
                                    <p class="text-muted">Safe And Timely Payments With Escrow Protection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-start">
                                <div class="feature-icon me-3">
                                    <img src="{{ asset('frontend/images/icons/logistic.svg') }}"
                                        alt="Logistics Support" />
                                </div>
                                <div>
                                    <h5 class="fw-bold">Logistics Support</h5>
                                    <p class="text-muted">Efficient Delivery And Cold Storage Solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Images Section -->
                <div class="col-lg-6 position-relative">
                    <div class="images-stack">
                        <img src="{{ asset('frontend/images/farm-img.png') }}" class="img-fluid top-image"
                            alt="Farm 1" />
                        <img src="{{ asset('frontend/images/wheat-farm-img.png') }}" class="img-fluid bottom-image"
                            alt="Farm 2" />
                        <div class="growth-box">
                            <h3 class="growth-value">50+</h3>
                            <p class="text-muted">Growth</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works Section -->
    <section class="how-it-works">
        <div class="container-fluid no-padding">
            <div class="row align-items-center">
                <!-- Left Side - Image -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('frontend/images/how-it-works.webp') }}" alt="Farmer"
                        class="img-fluid rounded how-it-works-img" />
                </div>

                <!-- Right Side - Content -->
                <div class="col-lg-6">
                    <div class="section-title mb-4">
                        <img src="{{ asset('frontend/images/icons/heading-icon.svg') }}" alt="Logo"
                            class="section-logo mb-2">
                        <h2 class="fw-bold">How It Works</h2>
                        <p class="text-muted">
                            Join as a farmer or buyer, list or search for produce, and let our smart algorithm
                            match you. Negotiate prices securely, finalize deals with escrow payments, and enjoy
                            reliable logistics for timely delivery. Our platform simplifies agricultural trade,
                            ensuring trust, transparency, and efficiency for all users.
                        </p>
                    </div>

                    <!-- Process Steps -->
                    <div class="row g-4 how-it-works-card">
                        <!-- Step 1 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="process-step text-center p-4">
                                <div class="step-number">01</div>
                                <img src="{{ asset('frontend/images/icons/register-icon.svg') }}" alt="Register"
                                    class="step-icon mb-3" />
                                <h5 class="fw-bold">Register</h5>
                                <p class="text-muted">Farmers and buyers create verified profiles.</p>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="process-step text-center p-4">
                                <div class="step-number">02</div>
                                <img src="{{ asset('frontend/images/icons/search-icon-2.svg') }}" alt="List or Search"
                                    class="step-icon mb-3" />
                                <h5 class="fw-bold">List Or Search</h5>
                                <p class="text-muted">Farmers list produce; buyers post requirements.</p>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="process-step text-center p-4">
                                <div class="step-number">03</div>
                                <img src="{{ asset('frontend/images/icons/hand-icon.svg') }}" alt="Match & Negotiate"
                                    class="step-icon mb-3" />
                                <h5 class="fw-bold">Match & Negotiate</h5>
                                <p class="text-muted">Smart matching and secure negotiation tools.</p>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="process-step text-center p-4">
                                <div class="step-number">04</div>
                                <img src="{{ asset('frontend/images/icons/transfer-icon.svg') }}"
                                    alt="Transact & Deliver" class="step-icon mb-3" />
                                <h5 class="fw-bold">Transact & Deliver</h5>
                                <p class="text-muted">Secure payments and logistics support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonical Section -->
    <section class="user-testimonials">
        <div class="container-fluid no-padding">
            <div class="row align-items-center">
                <!-- Left Section -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="section-title">
                        <img src="{{ asset('frontend/images/icons/heading-icon.svg') }}" alt="Logo"
                            class="section-logo mb-2">
                        <h2 class="fw-bold">What Our Users Say</h2>
                        <p class="text-muted">Success Stories from Our Community</p>
                        <a href="#" class="btn custom-btn-color btn-lg mt-3">Get Started Now</a>

                        <div class="curved-aerow">
                            <img src="{{ asset('frontend/images/icons/curved-arrow.svg') }}" alt="curved-aerow">
                        </div>
                    </div>
                </div>

                <!-- Right Section - Testimonial Carousel -->
                <div class="col-lg-6">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-item">
                            <div class="testimonial-content shadow-sm">
                                <div class="testimonial-rating mb-2">
                                    <span class="rating-icon"><img src="{{ asset('frontend/images/icons/quote.svg') }}">
                                    </span>
                                </div>
                                <div class="tastimonial-quote">
                                    <p class="testimonial-text">
                                    <div class="rating-star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                    </div>
                                    Our platform changed everything! I sold my harvest faster and at better prices.
                                    </p>
                                    <p class="testimonial-author">
                                        — <strong>Farmer Kofi</strong>, <span class="text-muted">USA</span>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-item">
                            <div class="testimonial-content shadow-sm">
                                <div class="testimonial-rating mb-2">
                                    <span class="rating-icon"><img src="{{ asset('frontend/images/icons/quote.svg') }}">
                                    </span>
                                </div>
                                <div class="tastimonial-quote">
                                    <p class="testimonial-text">
                                    <div class="rating-star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                    </div>
                                    I was able to negotiate better deals and get reliable buyers quickly.
                                    </p>
                                    <p class="testimonial-author">
                                        — <strong>Farmer Amara</strong>, <span class="text-muted">Ghana</span>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-item">
                            <div class="testimonial-content shadow-sm">
                                <div class="testimonial-rating mb-2">
                                    <span class="rating-icon"><img src="{{ asset('frontend/images/icons/quote.svg') }}">
                                    </span>
                                </div>
                                <div class="tastimonial-quote">
                                    <p class="testimonial-text">
                                    <div class="rating-star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                        <img src="{{ asset('frontend/images/icons/Star 5.svg') }}" alt="star">
                                    </div>
                                    Secure payments and timely delivery have made my business smoother.
                                    </p>
                                    <p class="testimonial-author">
                                        — <strong>Farmer John</strong>, <span class="text-muted">Kenya</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Navigation Arrows -->
                    <!-- <div class="custom-nav">
                            <button class="prev-btn"><</button>
                            <button class="next-btn">></button>
                        </div> -->
                </div>
            </div>
        </div>
    </section>


    <!-- Blog Section -->
    <section class="latest-news">
        <div class="container">
            <div class="text-center mb-5">
                <img src="{{ asset('frontend/images/icons/heading-icon.svg') }}" alt="Logo"
                    class="section-logo mb-2">
                <h2 class="fw-bold">Latest News & Tips</h2>
                <p class="text-muted">Success Stories from Our Community</p>
            </div>

            <div class="row">
                <!-- Blog 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card blog-card">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/blog-img-01.webp') }}" alt="Farmer Tips"
                                class="card-img-top">
                            <div class="date-badge">MAR, 5, 2025</div>
                        </div>
                        <div class="card-body">
                            <div class="blog-meta mb-2">
                                <span><i class="fas fa-user me-1"></i> Admin</span>
                                <span class="ms-3"><i class="fas fa-comment-alt me-1"></i> 3 Comments</span>
                            </div>
                            <h5 class="card-title">5 Tips for Farmers to Maximize Harvest Yields</h5>
                            <a href="#" class="read-more-link">Read More <img
                                    src="{{ asset('frontend/images/icons/green-aerow.svg') }}" alt="more"></a>
                        </div>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card blog-card">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/blog-img-02.webp') }}" alt="Market Trends"
                                class="card-img-top">
                            <div class="date-badge">FEB, 5, 2025</div>
                        </div>
                        <div class="card-body">
                            <div class="blog-meta mb-2">
                                <span><i class="fas fa-user me-1"></i> Admin</span>
                                <span class="ms-3"><i class="fas fa-comment-alt me-1"></i> 3 Comments</span>
                            </div>
                            <h5 class="card-title">Market Trends: Why Maize Prices Are Rising</h5>
                            <a href="#" class="read-more-link">Read More <img
                                    src="{{ asset('frontend/images/icons/green-aerow.svg') }}" alt="more">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card blog-card">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/blog-img-03.webp') }}" alt="Quality Produce"
                                class="card-img-top">
                            <div class="date-badge">JAN, 4, 2025</div>
                        </div>
                        <div class="card-body">
                            <div class="blog-meta mb-2">
                                <span><i class="fas fa-user me-1"></i> Admin</span>
                                <span class="ms-3"><i class="fas fa-comment-alt me-1"></i> 3 Comments</span>
                            </div>
                            <h5 class="card-title">How Buyers Can Source Quality Produce Faster</h5>
                            <a href="#" class="read-more-link">Read More <img
                                    src="{{ asset('frontend/images/icons/green-aerow.svg') }}" alt="more"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipment on Rent Section -->
    <section class="equipment-section">
        <div class="container-fluid">
            <div class="text-center mb-5">
                <img src="{{ asset('frontend/images/icons/heading-icon.svg') }}" alt="Logo"
                    class="section-logo mb-2">
                <h2 class="fw-bold">Equipment On Rent</h2>
                <p class="text-muted">Affordable Solutions for Your Farming Needs</p>
            </div>

            <div class="row">
                <!-- Equipment 1: Heavy-Duty Tractor -->
                <div class="col-xxl-3 col-md-6 col-xl-6 mb-4">
                    <div class="card equipment-card shadow-sm">
                        <div class="status-tag available">● Available</div>
                        <img src="{{ asset('frontend/images/equip-01.webp') }}" alt="Heavy-Duty Tractor"
                            class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Heavy-Duty Tractor</h5>
                            <p class="card-text">Perfect for large-scale farming, ensuring efficiency and power for
                                all your plowing and tilling needs.</p>
                            <h5 class="card-feat-title">Features :</h5>
                            <ul class="features-list">
                                <li>120 HP engine.</li>
                                <li>GPS-enabled for precision farming.</li>
                                <li>Fuel-efficient and eco-friendly.</li>
                            </ul>
                            <p class="price">Price: <strong>$150/day</strong> | <strong>$1000/week</strong></p>
                            <p class="default-note"><span class="note">* Free </span> delivery within 50 miles.
                            </p>
                            <a href="#" class="btn rent-btn">Rent Now</a>
                        </div>
                    </div>
                </div>

                <!-- Equipment 2: Combine Harvester -->
                <div class="col-xxl-3 col-md-6 col-xl-6 mb-4">
                    <div class="card equipment-card shadow-sm">
                        <div class="status-tag booked">● Booked Until Oct 15</div>
                        <img src="{{ asset('frontend/images/equip-02.webp') }}" alt="Combine Harvester"
                            class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Combine Harvester</h5>
                            <p class="card-text">Designed for quick and efficient harvesting of wheat, rice, and
                                other crops.</p>
                            <h5 class="card-feat-title">Features :</h5>
                            <ul class="features-list">
                                <li>Cuts, threshes, and cleans in one go.</li>
                                <li>Adjustable settings for different crops.</li>
                                <li>Low maintenance and high durability.</li>
                            </ul>
                            <p class="price"><strong>Price:</strong> $300/day | $2000/week</p>
                            <p class="default-note">* Includes operator training.</p>
                            <a href="#" class="btn rent-btn">Rent Now</a>
                        </div>
                    </div>
                </div>

                <!-- Equipment 3: Irrigation System -->
                <div class="col-xxl-3 col-md-6 col-xl-6 mb-4">
                    <div class="card equipment-card shadow-sm">
                        <div class="status-tag available">● Available</div>
                        <img src="{{ asset('frontend/images/equip-03.webp') }}" alt="Irrigation System"
                            class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Irrigation System</h5>
                            <p class="card-text">Automate your watering process with this state-of-the-art
                                irrigation system.</p>
                            <h5 class="card-feat-title">Features :</h5>
                            <ul class="features-list">
                                <li>Covers up to 5 acres.</li>
                                <li>Saves water with smart sensors.</li>
                                <li>Easy to install and operate.</li>
                            </ul>
                            <p class="price"><strong>Price:</strong> $50/day | $300/week</p>
                            <p class="default-note"><span class="note">* Free </span> setup assistance.</p>
                            <a href="#" class="btn rent-btn">Rent Now</a>
                        </div>
                    </div>
                </div>

                <!-- Equipment 4: Seed Drill Machine -->
                <div class="col-xxl-3 col-md-6 col-xl-6 mb-4">
                    <div class="card equipment-card shadow-sm">
                        <div class="status-tag available">● Available</div>
                        <img src="{{ asset('frontend/images/equip-04.webp') }}" alt="Seed Drill Machine"
                            class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Seed Drill Machine</h5>
                            <p class="card-text">Ensure precise seed placement and optimal crop growth with this
                                advanced seed drill.</p>

                            <h5 class="card-feat-title">Features :</h5>
                            <ul class="features-list">
                                <li>Suitable for wheat, maize, and soybeans.</li>
                                <li>Adjustable seed rate and depth.</li>
                                <li>Durable and easy to maintain.</li>
                            </ul>
                            <p class="price"><strong>Price:</strong> $80/day | $500/week</p>
                            <p class="default-note">* Includes free maintenance.</p>
                            <a href="#" class="btn rent-btn">Rent Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Button -->
            <div class="text-center mt-4">
                <a href="#" class="btn custom-btn-color btn-lg mt-3">View All</a>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="inclusivity-section">
        <div class="container text-center">
            <!-- Section Title -->
            <img src="{{ asset('frontend/images/icons/heading-icon.svg') }}" alt="Logo" class="section-logo mb-3">
            <h2 class="fw-bold">Our Commitment To Inclusivity</h2>
            <p class="text-muted mb-5">Celebrating inclusivity, quality, and the beauty of what we grow.</p>

            <!-- Inclusivity Cards -->
            <div class="row">
                <!-- Card 1: Natural Beauty -->
                <div class="col-md-4 mb-4">
                    <div class="card inclusivity-card">
                        <img src="{{ asset('frontend/images/produce-01.webp') }}" alt="Natural Beauty"
                            class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                Celebrating the natural beauty of what we grow.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Sustainable Practices -->
                <div class="col-md-4 mb-4">
                    <div class="card inclusivity-card">
                        <img src="{{ asset('frontend/images/produce-02.webp') }}" alt="Sustainable Practices"
                            class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                Stories of our farm—sustainable practices, quality, and care.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Welcoming Space -->
                <div class="col-md-4 mb-4">
                    <div class="card inclusivity-card">
                        <img src="{{ asset('frontend/images/produce-03.webp') }}" alt="Welcoming Space"
                            class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                A welcoming space for all—where everyone feels valued.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Explore Button -->
            <div class="mt-4">
                <a href="#" class="btn custom-btn-color btn-lg mt-3 explore-btn">Explore Our Produce</a>
            </div>

            <!-- Bottom Note -->
            <p class="text-muted mt-5">
                At our farm, we’re proud to serve a diverse community. Together, we grow.
            </p>
        </div>
    </section>

    <!-- Trusted partners -->
    <section class="trusted-section">
        <div class="container text-center">
            <!-- Section Title -->
            <img src="{{ asset('frontend/images/icons/heading-icon.svg') }}" alt="Logo" class="section-logo mb-3">
            <h2 class="fw-bold">Trusted By</h2>

            <!-- Trusted Brands Row -->
            <div class="row justify-content-center align-items-center mt-4 partner-block">
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('frontend/images/icons/partner-01.svg') }}" alt="Logo 1"
                        class="trusted-logo grayscale">
                    <img src="{{ asset('frontend/images/shadow.png') }}" alt="shadow" class="image-fluid shadow-img">
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('frontend/images/icons/partner-02.svg') }}" alt="Logo 2"
                        class="trusted-logo grayscale">
                    <img src="{{ asset('frontend/images/shadow.png') }}" alt="shadow" class="image-fluid shadow-img">
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('frontend/images/icons/partner-03.svg') }}" alt="Logo 3" class="trusted-logo">
                    <img src="{{ asset('frontend/images/shadow.png') }}" alt="shadow" class="image-fluid shadow-img">
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('frontend/images/icons/partner-04.svg') }}" alt="Logo 4"
                        class="trusted-logo grayscale">
                    <img src="{{ asset('frontend/images/shadow.png') }}" alt="shadow" class="image-fluid shadow-img">
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('frontend/images/icons/partner-05.svg') }}" alt="PayPal"
                        class="trusted-logo grayscale">
                    <img src="{{ asset('frontend/images/shadow.png') }}" alt="shadow" class="image-fluid shadow-img">
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('frontend/images/icons/partner-06.svg') }}" alt="Apple Pay"
                        class="trusted-logo grayscale">
                    <img src="{{ asset('frontend/images/shadow.png') }}" alt="shadow" class="image-fluid shadow-img">
                </div>
            </div>
        </div>
    </section>

    <!--Call to Action Section-->
    <section class="cta-section">
        <div class="container py-5">
            <div class="cta-section-inner">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Main Heading -->
                        <h2 class="cta-title">A Subtle Background Image Of Crops Or A Marketplace.</h2>
                        <!-- Subheading -->
                        <p class="cta-subtitle mt-3">Ready to Join? Start Your Journey Today!</p>
                    </div>

                    <div class="col-lg-4">
                        <!-- CTA Buttons -->
                        <div class="cta-buttons mt-4">
                            <a href="#" class="btn custom-btn-color btn-lg">Register As Farmer</a>
                            <a href="#" class="btn custom-trans-btn btn-lg">Register As Buyer</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
