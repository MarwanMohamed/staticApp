@extends('en.layout')
@section('content')
    <!-- page content-->
    <div class="page-content">
        <!-- page title -->
        <div class="page-title category_title business_bg">
            <div class="container content">
                <div class="row">
                    <div class="col-12">
                        <h3>Business Insurance</h3>
                        <p>We Provides insurance for all business sizes, to reduce the chance of a loss, and helping
                            recover faster.
                        </p>
                    </div>
                </div>
            </div>
            <svg class="nectar-shape-divider" aria-hidden="true" fill="white" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 10 100 0 -4 10"></polygon>
            </svg>
        </div>
        <div class="paragraph my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-12 text-center">
                        <p>The only way to protect your business is to choose the right policy, helps to
                            minimize
                            the risks and focus on the future of your business, because you face the unexpected on a
                            daily basis, there are always risks involved. Whether it’s the risk of damage or loss to
                            your property or customers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- business insurance categories -->
        <div class="categories">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Business Package.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>Business Package Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/business_package'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/cyper liability.png')}}" class="img-fluid">
                            </div>
                            <h3>Cyber Liability Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/cyber_liability'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/general liability.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>General Liability Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/general_liability'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/motor fleet.png')}}" class="img-fluid">
                            </div>
                            <h3>Motor Fleet Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/motor_fleet'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Commercial Property.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>Commercial Property Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/commercial_property'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Business Flood.png')}}" class="img-fluid">
                            </div>
                            <h3>Business Flood Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/business_flood'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Contract Works Construction.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>Contract Works/ Construction Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/contract_construction'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Special Event.png')}}" class="img-fluid">
                            </div>
                            <h3>Special Event Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/special_event'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/health.png')}}" class="img-fluid">
                            </div>
                            <h3>Group Health Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/group_health'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Directors and Officers Liability.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>Directors and Officers Liability Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/directors_officers'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/machine.png')}}" class="img-fluid">
                            </div>
                            <h3>Machinery/ Electronic Breakdown Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/machinery_electronic'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/liability.png')}}" class="img-fluid">
                            </div>
                            <h3>Management Liability Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/management_liability'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Marine Cargo.png')}}" class="img-fluid">
                            </div>
                            <h3>Marine Cargo Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/marine_cargo'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/indemnity.png')}}" class="img-fluid">
                            </div>
                            <h3>Professional Indemnity Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/professional_indemnity'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/workerscompansation.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>Workers Compensation Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/workers_compensation'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/school.png')}}" class="img-fluid">
                            </div>
                            <h3>School Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/school_insurance'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/cafe.png')}}" class="img-fluid">
                            </div>
                            <h3>Café & Restaurant Insurance</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/café_restaurant'}}" class="more">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
