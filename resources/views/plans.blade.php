
@extends('layout\frontend\app')
 
 
 
@section('title', 'Camer - Home')
 
 
 
@section('content')	
<section class="pricing-section p-all-140">
        <div class="container">
            <div class="sec-title text-center">
                <span class="title">Get plan</span>
                <h2>Choose a Plan</h2>
            </div>

            <div class="outer-box">
                <div class="row">
                    <!-- Pricing Block -->
                    <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
                            </div>
                            <div class="price-box">
                                <div class="title"> 15 Days</div>
                                <h4 class="price mt-3">$35.99</h4>
                            </div>
                            <ul class="features">
                                <li class="true">Conference plans</li>
                                <li class="true">Free Lunch And Coffee</li>
                                <li class="true">Certificate</li>
                                <li class="false">Easy Access</li>
                                <li class="false">Free Contacts</li>
                            </ul>
                            <div class="btn-box">
                                <a href="#" class="theme-btn">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Block -->
                    <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon-outer"><i class="fas fa-gem"></i></div>
                            </div>
                            <div class="price-box">
                                <div class="title">6 Months</div>
                                <h4 class="price mt-3">$99.99</h4>
                            </div>
                            <ul class="features">
                                <li class="true">Conference plans</li>
                                <li class="true">Free Lunch And Coffee</li>
                                <li class="true">Certificate</li>
                                <li class="true">Easy Access</li>
                                <li class="false">Free Contacts</li>
                            </ul>
                            <div class="btn-box">
                                <a href="#" class="theme-btn">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Block -->
                    <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon-outer"><i class="fas fa-rocket"></i></div>
                            </div>
                            <div class="price-box">
                                <div class="title">1 Year</div>
                                <h4 class="price mt-3">$199.99</h4>
                            </div>
                            <ul class="features">
                                <li class="true">Conference plans</li>
                                <li class="true">Free Lunch And Coffee</li>
                                <li class="true">Certificate</li>
                                <li class="true">Easy Access</li>
                                <li class="true">Free Contacts</li>
                            </ul>
                            <div class="btn-box">
                                <a href="#" class="theme-btn">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection