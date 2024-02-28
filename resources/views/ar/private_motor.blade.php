@extends('ar.layout')
@section('content')
    <!-- page content-->
    <div class="page-content">
        <!-- page title -->
        <div class="page-title category_title motor_bg">
            <div class="container content">
                <div class="row">
                    <div class="col-12">
                        <h3>السيارات الخاصة</h3>
                        <p>ليست كل وثائق التأمين على المركبات هي نفسها؟ هل تعرف ما الذي تغطيه وثيقتك الحالية؟ يمكن أن
                            يتراوح التأمين على المركبات بين التغطية الكاملة لكل من سيارتك ومركبة الطرف الآخر أو التغطية
                            التي تغطي ضد الغير فقط
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
                                <img src="{{asset('app/assets/images/icons/private_motor/TPL.png')}}" class="img-fluid">
                            </div>
                            <h3> التأمين ضد الغير(TPL)</h3>
                            <a href="#quote" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="subcategory">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/private_motor/Comprehensive.png')}}"
                                     class="img-fluid">
                            </div>
                            <h3> التأمين الشامل</h3>
                            <a href="#quote" class="more">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
