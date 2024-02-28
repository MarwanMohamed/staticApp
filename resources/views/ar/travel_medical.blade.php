@extends('ar.layout')
@section('content')
    <!-- page content-->
    <div class="page-content">
        <!-- page title -->
        <div class="page-title category_title travel_bg">
            <div class="container content">
                <div class="row">
                    <div class="col-12">
                        <h3>تأمين السفر والطبى</h3>
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
                            <h3>تأمين السفر للخارج</h3>
                            <ul>
                                <li>السفر للخارج</li>
                                <li>بطاقة هيا</li>
                            </ul>
                            <a href="{{ '../../'.App::getLocale() .'/travel_medical/travel_insurance'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory mb-5">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/medical insurance.png')}}"
                                     class="img-fluid">
                            </div>
                            <h3>الطبي التأمين</h3>
                            <ul>
                                <li>+60 التأمين الطبي</li>
                                <li>التأمين الطبي الإلزامي للمقيمين</li>
                                <li>التأمين الصحي الجماعي</li>
                            </ul>
                            <a href="{{ '../../'.App::getLocale() .'/travel_medical/medical_insurance'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
