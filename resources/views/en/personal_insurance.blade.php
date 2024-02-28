@extends('en.layout')
@section('content')
    <div class="page-content">
        <!-- page title -->
        <div class="page-title category_title personal_bg">
            <div class="container content">
                <div class="row">
                    <div class="col-12">
                        <h3>personal Insurance</h3>
                        <p>We help provide some peace of mind, along with the things you plan for and look forward to,
                            whether you’re at home, working, in vacation or on the road.
                        </p>
                    </div>
                </div>
            </div>
            <svg class="nectar-shape-divider" aria-hidden="true" fill="white" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 10 100 0 -4 10"></polygon>
            </svg>
        </div>
        <!-- personal insurance categories -->
        <div class="categories">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/private motor.png')}}" class="img-fluid">
                            </div>
                            <h3>Private Motor Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/private_motor'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/travel insurance.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>Travel Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/travel_medical/travel_insurance'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/medical insurance.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>Medical Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/travel_medical/medical_insurance'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/motorcycle.png')}}" class="img-fluid">
                            </div>
                            <h3>Motorcycle Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/personal_insurance/motorcycle_insurance'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/watercraft.png')}}" class="img-fluid">
                            </div>
                            <h3>Yacht & Watercraft Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/personal_insurance/yacht_watercraft'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/renters.png')}}" class="img-fluid">
                            </div>
                            <h3>Renters Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/personal_insurance/renters_insurance'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/Landlords.png')}}" class="img-fluid">
                            </div>
                            <h3>Landlords Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/personal_insurance/landlords_insurance'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/pet.png')}}" class="img-fluid">
                            </div>
                            <h3>Pet Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/personal_insurance/pet_insurance'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/flood.png')}}" class="img-fluid">
                            </div>
                            <h3>Flood Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/personal_insurance/flood_insurance'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
