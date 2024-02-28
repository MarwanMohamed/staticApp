<!-- menu sec -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ '../../'.App::getLocale() .'/'}}"><img src="{{asset('app/assets/images/whiteLogo.png')}}"
                                                       class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ '../../'.App::getLocale() .'/about'}}">نبذة عنا</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ '../../'.App::getLocale() .'/private_motor'}}" role="button"
                       data-hover="dropdown" aria-expanded="false">السيارات</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/private_motor'}}"> التأمين ضد الغير(TPL)</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/private_motor'}}"> التأمين الشامل</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ '../../'.App::getLocale() .'/travel_medical'}}" role="button"
                       data-hover="dropdown" aria-expanded="false">السفر و الطبي</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/travel_medical/travel_insurance'}}"> السفر
                                للخارج</a></li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/travel_medical/travel_insurance'}}"> بطاقة
                                هيا</a></li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/travel_medical/travel_insurance'}}">تأشيرة
                                الزيارة والسياحة</a></li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/travel_medical/medical_insurance'}}">+60
                                التأمين الطبي </a></li>
                        <li><a class="dropdown-item"
                               href="{{ '../../'.App::getLocale() .'/travel_medical/medical_insurance'}}">التأمين الطبي الإلزامي
                                للمقيمين</a></li>
                        <li><a class="dropdown-item"
                               href="{{ '../../'.App::getLocale() .'/travel_medical/medical_insurance'}}">التأمين الصحي الجماعي</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ '../../'.App::getLocale() .'/personal_insurance'}}" role="button"
                       data-hover="dropdown" aria-expanded="false">تأمين الأشخاص</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/private_motor'}}">تأمين السيارات الخاصة</a></li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/travel_medical/travel_insurance'}}">تأمين
                                السفر</a></li>
                        <li><a class="dropdown-item"
                               href="{{ '../../'.App::getLocale() .'/travel_medical/medical_insurance'}}">التأمين الطبي</a></li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/motorcycle_insurance'}}">التأمين
                                على الدراجات النارية</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/personal_insurance/motorcycle_insurance'}}">تأمين
                                اليخوت والمراكب المائية</a></li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/personal_insurance'}}"><small>+ المزيد</small></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ '../../'.App::getLocale() .'/business_insurance'}}" role="button"
                       data-hover="dropdown" aria-expanded="false">تأمين الأعمال</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/business_insurance/business_package'}}">تأمين باقة
                                الأعمال</a></li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/business_insurance/cyber_liability'}}">تأمين
                                المسؤولية السيبرانية</a></li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/business_insurance/general_liability'}}">التأمين
                                على المسؤولية العامة</a></li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/business_insurance/motor_fleet'}}">تأمين أسطول
                                السيارات </a></li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/business_insurance/commercial_property'}}">تأمين
                                الممتلكات التجارية</a></li>
                        <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/business_insurance'}}"><small>+ المزيد</small></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ '../../'.App::getLocale() .'/blogs'}}">المدونات</a>
                </li>
            </ul>
            <!-- in mobile view -->
            <div class="top_header d-lg-none d-flex flex-column bg-transparent">
                <ul class="list-unstyled d-flex">
                    <li><a href="https://www.facebook.com/QatarBima?mibextid=LQQJ4d" target="_blank"><i
                                class="fa-brands fa-facebook-f"></i></a></li>
                    <li>
                        <a href="https://www.linkedin.com/in/qatarbima?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"
                           target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="https://instagram.com/qatarbima?igshid=MzRlODBiNWFlZA==" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/@qatarbima7575" target="_blank"><i
                                class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="https://twitter.com/bimaqatar?s=11" target="_blank"><i
                                class="fa-brands fa-x-twitter"></i></a>
                    </li>

                    <li><a href="#" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </li>
                </ul>
                <a href="{{ '../../'.App::getLocale() .'/contact'}}"><i class="fa-solid fa-location-dot me-2"></i>تواصل معنا</a>
                <a href="mailto:info@qatarbima.com" dir="rtl"><i
                        class="fa-solid fa-envelope me-2"></i>info@qatarbima.com</a>
                <a href="tel:+974 5053 5033" dir="ltr"><i
                        class="fa-brands fa-whatsapp me-2 text-success h5"></i><i
                        class="fa-solid fa-phone me-1"></i>+974 5053 5033 </a>
                <a href="#quote" class="btn">إحصل على عرض سعر</a>
                @if(request()->segment(count(request()->segments())-1) == 'ar')
                    <a href="{{ request()->root() .'/ar/'  . request()->segment(count(request()->segments()))}}">EN</a>
                @else
                    <a href="{{ request()->root() .'/ar/'  . request()->segment(count(request()->segments()) -1).'/' . request()->segment(count(request()->segments()))}}">EN</a>
                @endif


            </div>
        </div>
    </div>
</nav>
