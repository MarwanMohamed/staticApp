@extends('en.layout')
@section('content')
    <!-- page content-->
    <div class="page-content">
        <!-- page title -->
        <div class="page-title category_title motor_bg">
            <div class="container content">
                <div class="row">
                    <div class="col-12">
                        <h3>private motor Insurance</h3>
                        <p>Not all motor vehicle insurance policies are the same? Do you know what your current policy
                            is covering? Motor vehicle insurance can range from having full coverage for both your
                            vehicle and for the third-party vehicle or the coverage that only covering the third party.
                        </p>
                    </div>
                </div>
            </div>
            <svg class="nectar-shape-divider" aria-hidden="true" fill="white" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 10 100 0 -4 10"></polygon>
            </svg>
        </div>
        <!-- motor insurance categories -->
        <div class="categories">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="../../app/assets/images/icons/private_motor/TPL.png" class="img-fluid">
                            </div>
                            <h3>Third Party Insurance (TPL) </h3>
                            <a href="#quote" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="../../app/assets/images/icons/private_motor/Comprehensive.png"
                                     class="img-fluid">
                            </div>
                            <h3>Comprehensive Insurance</h3>
                            <a href="#quote" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
