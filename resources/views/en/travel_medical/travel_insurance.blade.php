@extends('en.layout')
@section('content')
    <!-- page content-->
    <div class="page-content">
        <!-- page title -->
        <div class="page-title category_title travel_insurance">
            <div class="container content">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>travel Insurance</h3>
                        <a href="#quote"><span>get a quote</span> <i class="fa-solid fa-arrow-down"></i></a>
                    </div>
                </div>
            </div>
            <svg class="nectar-shape-divider" aria-hidden="true" fill="white" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 10 100 0 -4 10"></polygon>
            </svg>
        </div>
        <!-- business package info -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 col-12">
                    <div class="subcategory">
                        <div class="img-container">
                            <img src="../../../app/assets/images/icons/travel_medical/Outbound.png" class="img-fluid">
                        </div>
                        <h3>Outbound Travel Insurance</h3>
                        <p>The Travel Insurance Policy covers Medical and Emergency assistance, Personal Assistance
                            Services, Losses and Delay, Trip cancellation, Personal accidents and civil liability
                            benefits
                            subject to certain limits, conditions and exclusions. </p>
                        <a href="#quote" class="more">
                            <button class="btn">learn more</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="subcategory">
                        <div class="img-container">
                            <img src="../../../app/assets/images/icons/travel_medical/Inbound.png" class="img-fluid">
                        </div>
                        <h3>Inbound Travel (Hayya & Visa)</h3>
                        <p>Inbound travel insurance provides cover for travelers coming to Qatar from any part of the
                            world.
                            This product is not applicable for permanent resident of State of Qatar. The product cover
                            is
                            restricted within Qatar only.</p>
                        <a href="#quote" class="more">
                            <button class="btn">learn more</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
