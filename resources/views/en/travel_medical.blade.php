@extends('en.layout')
@section('content')
    <!-- page content-->
    <div class="page-content">
        <!-- page title -->
        <div class="page-title category_title travel_bg">
            <div class="container content">
                <div class="row">
                    <div class="col-12">
                        <h3>travel and medical Insurance</h3>
                    </div>
                </div>
            </div>
            <svg class="nectar-shape-divider" aria-hidden="true" fill="white" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 10 100 0 -4 10"></polygon>
            </svg>
        </div>
        <!-- travel & medical insurance categories -->
        <div class="categories mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory mb-5">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/travel insurance.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>Travel Insurance</h3>
                            <ul>
                                <li>Outbound Travel Insurance</li>
                                <li>Inbound Travel (Hayya & Visa) </li>
                            </ul>
                            <a href="{{ '../../'.App::getLocale() .'/travel_medical/travel_insurance'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory mb-5">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/medical insurance.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>Medical Insurance</h3>
                            <ul>
                                <li>+60 Years Mandatory Medical Insurance</li>
                                <li>Residents Mandatory Medical Insurance</li>
                                <li>Group Health Insurance (corporate & families) </li>
                            </ul>
                            <a href="{{ '../../'.App::getLocale() .'/travel_medical/medical_insurance'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
