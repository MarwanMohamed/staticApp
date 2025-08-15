@extends('ar.layout')
@section('content')
    <!-- page content-->
    <div class="page-content">
        <!-- page title -->
        <div class="page-title category_title personal_bg">
            <div class="container content">
                <div class="row">
                    <div class="col-12">
                        <h3>تأمين الأشخاص</h3>
                        <p>نحن نساعد في توفير راحة البال، خاصةً فيما يتعلق بالأشياء التي تخطط لها وتتطلع إليها، سواء كنت
                            في المنزل أو العمل أو في إجازة أو على الطريق.
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
                    <div class="col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/private motor.png')}}" class="img-fluid">
                            </div>
                            <h3>تأمين السيارات الخاصة</h3>
                            <a href="{{ '../../'.App::getLocale() .'/private_motor'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/travel insurance.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>تأمين السفر</h3>
                            <a href="{{ '../../'.App::getLocale() .'/travel_medical/travel_insurance'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/medical insurance.png')}}"
                                    class="img-fluid">
                            </div>
                            <h3>التأمين الطبي</h3>
                            <a href="{{ '../../'.App::getLocale() .'/travel_medical/medical_insurance'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/motorcycle.png')}}" class="img-fluid">
                            </div>
                            <h3>التأمين على الدراجات النارية</h3>
                            <a href="{{ '../../'.App::getLocale() .'/personal_insurance/motorcycle_insurance'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/watercraft.png')}}" class="img-fluid">
                            </div>
                            <h3>تأمين اليخوت والمراكب المائية</h3>
                            <a href="{{ '../../'.App::getLocale() .'/personal_insurance/yacht_watercraft'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/personal/Landlords.png')}}" class="img-fluid">
                            </div>
                            <h3>تأمين المؤجرين</h3>
                            <a href="{{ '../../'.App::getLocale() .'/personal_insurance/landlords_insurance'}}" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
