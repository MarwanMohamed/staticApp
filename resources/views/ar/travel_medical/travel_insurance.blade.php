@extends('ar.layout')
@section('content')
    <!-- page content-->
    <div class="page-content">
        <!-- page title -->
        <div class="page-title category_title travel_insurance">
            <div class="container content">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>تأمين السفر</h3>
                        <a href="#quote"><span>إحصل على عرض سعر</span> <i class="fa-solid fa-arrow-down"></i></a>
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
                            <img src="{{asset('app/assets/images/icons/travel_medical/Outbound.png')}}" class="img-fluid">
                        </div>
                        <h3>تأمين السفر للخارج</h3>
                        <p>تغطي بوليصة تأمين السفر المساعدة الطبية والطارئة وخدمات المساعدة الشخصية والخسائر والتأخير
                            وإلغاء الرحلات والحوادث الشخصية والمسؤولية المدنية المزايا الخاضعة لحدود وشروط واستثناءات
                            معينة</p>
                        <a href="#quote" class="more">
                            <button class="btn">معرفة المزيد</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="subcategory">
                        <div class="img-container">
                            <img src="{{asset('app/assets/images/icons/travel_medical/Inbound.png')}}" class="img-fluid">
                        </div>
                        <h3>السفر الى قطر (هيا وفيزا)</h3>
                        <p>يوفر تأمين السفر تغطية للمسافرين القادمين إلى قطر من أي جزء من العالم. لا ينطبق هذا المنتج
                            على المقيمين الدائمين في دولة قطر.</p>
                        <a href="#quote" class="more">
                            <button class="btn">معرفة المزيد</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
