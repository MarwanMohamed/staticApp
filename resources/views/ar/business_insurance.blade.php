@extends('ar.layout')
@section('content')
    <!-- page content-->
    <div class="page-content">
        <!-- page title -->
        <div class="page-title category_title business_bg">
            <div class="container content">
                <div class="row">
                    <div class="col-12">
                        <h3>تأمين الأعمال</h3>
                        <p>نقدم تأمين الاعمال ليشمل مختلف تخصصاته وأحجامه، والذي سيساعدك في تقليل فرصة الخسارة والمساعدة
                            في التعافي بشكل أسرع.
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
                        <p>الطريقة الوحيدة لحماية عملك هي اختيار البوليصة الصحيحة، والتي تساعد على تقليل المخاطر
                            والتركيز على مستقبل عملك، لأنك تواجه ما هو غير متوقع على أساس يومي، فهناك دائمًا مخاطر
                            متضمنة. سواء كان ذلك بسبب خطر الضرر أو الخسارة لممتلكاتك أو عملائك.
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
                            <h3>تأمين باقة الأعمال</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/business_package'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/cyper liability.png')}}" class="img-fluid">
                            </div>
                            <h3>تأمين المسؤولية السيبرانية</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/cyber_liability'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/general liability.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>التأمين على المسؤولية العامة</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/general_liability'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/motor fleet.png')}}" class="img-fluid">
                            </div>
                            <h3>تأمين أسطول السيارات</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/motor_fleet'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Commercial Property.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>تأمين الممتلكات التجارية</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/commercial_property'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Business Flood.png')}}" class="img-fluid">
                            </div>
                            <h3>التأمين ضد مخاطر الفيضانات على الأعمال</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/business_flood'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Contract Works Construction.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>التأمين على عقود البناء والإنشاءات</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/contract_construction'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Special Event.png')}}" class="img-fluid">
                            </div>
                            <h3>تأمين المناسبات الخاصة</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/special_event'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/health.png')}}" class="img-fluid">
                            </div>
                            <h3>التأمين الصحي الجماعي</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/group_health'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Directors and Officers Liability.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>تأمين مسؤولية كبار الموظفين</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/directors_officers'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/machine.png')}}" class="img-fluid">
                            </div>
                            <h3>تأمين أعطال الآلات/الإلكترونيات</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/machinery_electronic'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/liability.png')}}" class="img-fluid">
                            </div>
                            <h3>تأمين المسؤولية الإدارية</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/management_liability'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/Marine Cargo.png')}}" class="img-fluid">
                            </div>
                            <h3>تأمين شحن البضائع البحرية</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/marine_cargo'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/indemnity.png')}}" class="img-fluid">
                            </div>
                            <h3>تأمين الأخطاء المهنية</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/professional_indemnity'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/workerscompansation.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>تأمين تعويض العمال</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/workers_compensation'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/school.png')}}" class="img-fluid">
                            </div>
                            <h3>تأمين المدارس</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/school_insurance'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/business/cafe.png')}}" class="img-fluid">
                            </div>
                            <h3>تأمين المقاهي والمطاعم</h3>
                            <a href="{{ '../../'.App::getLocale() .'/business_insurance/café_restaurant'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
