@extends('frontend.layouts.master')
@section('content')
    <!-- Hero Content -->
    <div class="container text-center hero-content">
        <h1 class="hero-title">About Us</h1>
    </div>

    <main>

        <!--About Us-->
        <div class="container py-4">

            <section id="about-sec">
                <div class="row">
                    <div class="col-md-7">
                        <div class="about-us-sec">
                            <div class="section-heading">
                                <img src="{{ asset('frontend/images/icons/heading-icon.svg') }}" alt="heading">
                                <h2 class="section-title">Our Story</h2>
                                <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola,
                                    est ut clita dolorem, ei est mazim fuisset scribentur. Mel ut decore salutandi
                                    intellegam.</p>
                            </div>

                            <h3>sub-Heading</h3>
                            <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola, est
                                ut clita dolorem, ei est mazim fuisset scribentur. Mel ut decore salutandi intellegam.</p>

                            <ul>
                                <li>Quo ei erant essent scaevola, est ut clita dolorem, ei est mazim fuisset scribentur.
                                </li>
                                <li>Mel ut decore salutandi intellegam. Labitur epicurei vis cu, in mei rationibus
                                    consequuntur.</li>
                                <li>Laudem cetero principes at eam. Ne sit latine appetere erroribus</li>
                                <li>Dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola</li>
                                <li>Decore salutandi intellegam. Labitur epicurei vis cu, in mei rationibus consequuntur.
                                </li>
                                <li>cCnsequuntur duo eu modus periculis, inermis detracto expetendis ius eu.</li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola, est
                                ut clita dolorem, ei est mazim fuisset scribentur. Mel ut decore salutandi intellegam.</p>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="aboutus-img"> <img src="{{ asset('frontend/images/why-choose-Section.png') }}"
                                alt="why-choose-Section" class="img-fluid w-100"> </div>
                    </div>
                </div>
        </div>
        </section>

        <section class="stats-section text-white">
            <div class="container stats-content">
                <div class="row align-items-center">
                    <div class="col-md-4 stat-item">
                        <div class="stat-number">120</div>
                        <div class="stat-label">Our Team</div>
                    </div>
                    <div class="col-md-4 stat-item left-right-border">
                        <div class="stat-number">1,189</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                    <div class="col-md-4 stat-item">
                        <div class="stat-number">1,189</div>
                        <div class="stat-label">All Categories</div>
                    </div>
                </div>
            </div>
        </section>


        <section class="categories">
            <div class="container-fluid">
                <div class="text-center">
                    <img src="{{ asset('frontend/images/icons/heading-icon.svg') }}" alt="icon" style="height: 40px;">
                </div>
                <h2 class="section-title  mb-4">Our Categories</h2>
                <div class="row justify-content-center g-4">
                    <div class="col-6 col-sm-4 col-md-2">
                        <div class="category-card">
                            <img src="{{ asset('frontend/images/icons/categry-icon-bg.svg') }}" alt="Category Icon">
                            <h5>Category</h5>
                            <p>Farmers and buyers create verified profiles.</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2">
                        <div class="category-card">
                            <img src="{{ asset('frontend/images/icons/categry-icon-bg.svg') }}" alt="Category Icon">
                            <h5>Category</h5>
                            <p>Farmers and buyers create verified profiles.</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2">
                        <div class="category-card active">
                            <img src="{{ asset('frontend/images/icons/categry-icon-bg.svg') }}" alt="Category Icon">
                            <h5>Category</h5>
                            <p>Farmers and buyers create verified profiles.</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2">
                        <div class="category-card">
                            <img src="{{ asset('frontend/images/icons/categry-icon-bg.svg') }}" alt="Category Icon">
                            <h5>Category</h5>
                            <p>Farmers and buyers create verified profiles.</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2">
                        <div class="category-card">
                            <img src="{{ asset('frontend/images/icons/categry-icon-bg.svg') }}" alt="Category Icon">
                            <h5>Category</h5>
                            <p>Farmers and buyers create verified profiles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
