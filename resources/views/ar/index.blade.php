<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- page title -->
    <title>index</title>
    <!-- support languages -->
    <meta charset="utf-8">
    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- aos animate -->
    <link href="{{asset('app/static/plugins/aos/css/aos.css')}}" rel="stylesheet">
    <!-- font awesome -->
    <link href="{{asset('app/static/plugins/fontawesome-free-6.4.2-web/css/all.min.css')}}" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('app/static/plugins/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('app/static/plugins/bootstrap-5.3.2-dist/css/bootstrap.rtl.min.css')}}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset('app/static/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('app/static/plugins/slick/slick-theme.css')}}">
    <!-- website style -->
    <link rel="stylesheet" href="{{asset('app/static/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('app/static/css/style-rtl.min.css')}}">

{{--    <script type="text/javascript">--}}
{{--        var _smartsupp = _smartsupp || {};--}}
{{--        _smartsupp.key = '433672eff4d48a5b5e986d103a87178ff1bc746c';--}}
{{--        window.smartsupp || (function (d) {--}}
{{--            var s, c, o = smartsupp = function () {--}}
{{--                o._.push(arguments)--}}
{{--            };--}}
{{--            o._ = [];--}}
{{--            s = d.getElementsByTagName('script')[0];--}}
{{--            c = d.createElement('script');--}}
{{--            c.type = 'text/javascript';--}}
{{--            c.charset = 'utf-8';--}}
{{--            c.async = true;--}}
{{--            c.src = 'https://www.smartsuppchat.com/loader.js?';--}}
{{--            s.parentNode.insertBefore(c, s);--}}
{{--        })(document);--}}
{{--    </script>--}}
</head>

<body dir="rtl">
<!-- header -->
<div class="header">
    <!-- top header in desktop view -->
    <div class="top_header d-lg-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 d-flex align-items-center">
                    <ul class="list-unstyled d-flex ms-4">
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
                </div>
                <div class="col-lg-9 col-12 text-lg-end">
                    <a href="/ar/contact"><i class="fa-solid fa-location-dot me-2"></i>تواصل معنا</a>
                    <a href="mailto:info@qatarbima.com" dir="rtl"><i
                            class="fa-solid fa-envelope me-2"></i>info@qatarbima.com</a>
                    <a href="tel:+974 5053 5033" dir="ltr"><i
                            class="fa-brands fa-whatsapp me-2 text-success h5"></i><i
                            class="fa-solid fa-phone me-1"></i>+974 5053 5033 </a>
                    <a href="#quote" class="btn">إحصل على عرض سعر</a>
                    <a href="../en">EN</a>
                </div>
            </div>
        </div>
    </div>
    <!-- menu sec -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/ar"><img src="{{asset('app/assets/images/logo.png')}}"
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
                        <a class="nav-link" href="{{url()->current() . '/about'}}">نبذة عنا</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{App::getLocale() . '/private_motor'}}" role="button"
                           data-hover="dropdown" aria-expanded="false">السيارات</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{App::getLocale() . '/private_motor'}}"> التأمين ضد
                                    الغير(TPL)</a>
                            </li>
                            <li><a class="dropdown-item" href="{{App::getLocale() . '/private_motor'}}"> التأمين
                                    الشامل</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{App::getLocale() . '/travel_medical'}}"
                           role="button"
                           data-hover="dropdown" aria-expanded="false">السفر و الطبي</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/travel_medical/travel_insurance'}}"> السفر
                                    للخارج</a></li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/travel_medical/travel_insurance'}}"> بطاقة
                                    هيا</a></li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/travel_medical/travel_insurance'}}">تأشيرة
                                    الزيارة والسياحة</a></li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/travel_medical/medical_insurance'}}">+60
                                    التأمين الطبي </a></li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/travel_medical/medical_insurance'}}">التأمين الطبي
                                    الإلزامي
                                    للمقيمين</a></li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/travel_medical/medical_insurance'}}">التأمين الصحي
                                    الجماعي</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{App::getLocale() . '/personal_insurance'}}"
                           role="button"
                           data-hover="dropdown" aria-expanded="false">تأمين الأشخاص</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{App::getLocale() . '/private_motor'}}">تأمين السيارات
                                    الخاصة</a></li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/travel_medical/travel_insurance'}}">تأمين
                                    السفر</a></li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/travel_medical/medical_insurance'}}">التأمين الطبي</a>
                            </li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/personal_insurance/motorcycle_insurance'}}">التأمين
                                    على الدراجات النارية</a>
                            </li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/personal_insurance/yacht_watercraft'}}">تأمين
                                    اليخوت والمراكب المائية</a></li>
                            <li><a class="dropdown-item" href="{{App::getLocale() . '/personal_insurance'}}"><small>+
                                        المزيد</small></a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{App::getLocale() . '/business_insurance'}}"
                           role="button"
                           data-hover="dropdown" aria-expanded="false">تأمين الأعمال</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/business_insurance/business_package'}}">تأمين باقة
                                    الأعمال</a></li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/business_insurance/cyber_liability'}}">تأمين
                                    المسؤولية السيبرانية</a></li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/business_insurance/general_liability'}}">التأمين
                                    على المسؤولية العامة</a></li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/business_insurance/motor_fleet'}}">تأمين أسطول
                                    السيارات </a></li>
                            <li><a class="dropdown-item"
                                   href="{{App::getLocale() . '/business_insurance/commercial_property'}}">تأمين
                                    الممتلكات التجارية</a></li>
                            <li><a class="dropdown-item" href="{{App::getLocale() . '/business_insurance'}}"><small>+
                                        المزيد</small></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{App::getLocale() . '/blogs'}}">المدونات</a>
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
                    <a href="ar/contact"><i class="fa-solid fa-location-dot me-2"></i>تواصل معنا</a>
                    <a href="mailto:info@qatarbima.com" dir="rtl"><i
                            class="fa-solid fa-envelope me-2"></i>info@qatarbima.com</a>
                    <a href="tel:+974 5053 5033" dir="ltr"><i
                            class="fa-brands fa-whatsapp me-2 text-success h5"></i><i
                            class="fa-solid fa-phone me-1"></i>+974 5053 5033 </a>
                    <a href="#quote" class="btn">إحصل على عرض سعر</a>
                    <a href="en/index">EN</a>

                </div>
            </div>
        </div>
    </nav>
</div>
<!-- page content-->
<div class="page-content">
    <!-- header cover -->
    <div class="cover">
        <div class="container content">
            <div class="row">
                <div class="col-lg-7 col-12 d-flex flex-column justify-content-center">
                    <h1>مخاطر أقل للمضي قدما</h1>
                    <h3>نحن ملتزمون بتقديم الخبرة التأمينية الفنية والمشورة المهنية لعملائنا.</h3>
                    <div>
                        <a href="{{App::getLocale() . '/contact'}}" class="btn btn-outline"><span>تواصل معنا</span> <i
                                class="fa-solid fa-arrow-right"></i></a>
                        <a href="{{App::getLocale() . '/about'}}" class="btn"><span>عن قطر بيمه </span> <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>

                </div>
                <div class="col-lg-5 col-12">
                    <div class="d-flex flex-wrap">
                        <div class="category">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/home/motor.png')}}" class="img-fluid">
                            </div>
                            <h4>السيارات الخاصة</h4>
                            <a href="{{App::getLocale() . '/private_motor'}}" class="btn_sec">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                        <div class="category">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/home/travel.png')}}" class="img-fluid">
                            </div>
                            <h4> السفر والطبي</h4>
                            <a href="{{App::getLocale() . '/travel_medical'}}" class="btn_sec">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                        <div class="category">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/home/personal.png')}}" class="img-fluid">
                            </div>
                            <h4>تأمين الأشخاص</h4>
                            <a href="{{App::getLocale() . '/personal_insurance'}}" class="btn_sec">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                        <div class="category">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/home/business.png')}}" class="img-fluid">
                            </div>
                            <h4>تأمين الأعمال </h4>
                            <a href="{{App::getLocale() . '/business_insurance'}}" class="btn_sec">
                                <button class="btn">معرفة المزيد</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners -->
    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>عملائنا</h3>
                </div>
                <div class="col-12">
                    <div class="slider" dir="ltr">
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/Ori.png')}}"
                                    class="img-fluid"></div>
                        </div>
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/Arabia_1. Eng-Ar.png')}}"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/doha-insurance Group.png')}}"
                                    class="img-fluid"></div>
                        </div>
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/GIG Gulf logo 2023 - PNG File.png')}}"
                                    class="img-fluid"></div>
                        </div>
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/Misr.png')}}"
                                    class="img-fluid"></div>
                        </div>
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/new-final-logo-ar lic.jpg')}}"
                                    class="img-fluid"></div>
                        </div>
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/Seib logo-05.png')}}"
                                    class="img-fluid"></div>
                        </div>
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/Logo New.PNG without white p.g.PNG')}}"
                                    class="img-fluid"></div>
                        </div>
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/General Takaful Logo-01.png')}}"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/doha takafol.png')}}"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/khaleg takafol.png')}}" class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/AlKoot.png')}}"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-container"><img
                                    src="{{asset('app/assets/images/partners/Sharq-Insurance.png')}}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services -->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                        <i class="fa-solid fa-headset"></i>
                        <h3>متابعة التعويضات</h3>
                        <p>يقدم فريق عملنا خدمة متابعة التعويضات لعملائنا من خلال تنسيق كل حالة مع شركاء التأمين
                            المعنيين وتقييم / تسوية الحالة في أقرب وقت، تقديم الضمانات لعملائنا أنه طوال عملية
                            المطالبة ستجدونا معك في كل مرحلة.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                        <i class="fa-solid fa-people-group"></i>
                        <h3>فريق عمل من ذوي الخبرة</h3>
                        <p>يعتبر فريق عملنا هو أهم ميزة تنافسية نمتلكها، فمن خلال عملنا اليومي مع شركاء التأمين
                            جعلنا على اطلاع دائم من حيث نوع الخدمات المقدمة في السوق وشريك التأمين المناسبة لكل خدمة
                            وأفضل الأسعار المقدمة.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                        <h3>سعر تنافسي</h3>
                        <p>أولويتنا هي العثور على التغطية المناسبة التي تناسب كل حالة، فلا تقلق بشأن التكلفة لأننا
                            نقدم مجموعة متنوعة من بوالص التأمين التي تغطي مجموعة من الأسعار.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact and quote section -->
<div class="quote_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12 mb-md-0 mb-3">
                <form class="contact-form" id="quote" method="post" action="{{route('getQuote', App::getLocale())}}">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <h3><i class="fa-solid fa-envelope-open-text me-2"></i><span>احصل على عرض سعر من
                                فريقنا</span></h3>
                    <p>سنكون سعداء بدعم طلبك والعثور على التغطية المناسبة لك.</p>
                    <div class="form-group d-flex flex-md-row flex-column">
                        <div class="mb-3 w-md-50 w-100 pe-md-2">
                            <input type="text" class="form-control" id="firstName" name="first_name"
                                   placeholder="الإسم الأول"
                                   required>
                        </div>
                        <div class="mb-3 w-md-50 w-100">
                            <input type="text" class="form-control" id="lastName" name="last_name"
                                   placeholder="الأسم الأخير"
                                   required>
                        </div>
                    </div>
                    <div class="form-group d-flex flex-md-row flex-column">
                        <div class="mb-3 w-md-50 w-100 pe-md-2">
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="البريد الإلكترونى"
                                   required>
                        </div>
                        <div class="mb-3 w-md-50 w-100">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="رقم الهاتف"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                                <textarea class="form-control" rows="10" cols="50" id="text" name="text"
                                          placeholder="كيف يمكننا مساعدتك" required></textarea>
                        </div>
                    </div>
                    <button class="btn" type="submit">إرسال</button>
                </form>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="contact_sec">
                    <div class="map">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe class="gmap_iframe" width="100%" frameborder="0"
                                        scrolling="no" marginheight="0" marginwidth="0"
                                        src="https://maps.google.com/maps?width=300&amp;height=190&amp;hl=en&amp;q=Office A - Tower B, 13th Floor,  Al Mana Twin Towers,    C-Ring Road, Bin Mahmoud,  Doha-Qatar. P.O. Box: 20794&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                <a
                                    href="https://connectionsgame.org/">Connections NYT</a></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 100%;
                                    height: 190px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 100%;
                                    height: 190px;
                                }

                                .gmap_iframe {
                                    height: 190px !important;
                                }
                            </style>
                        </div>
                    </div>
                    <h4>Office A - Tower B, 13th Floor, Al Mana Twin Towers,<br>
                        C-Ring Road, Bin Mahmoud,<br>
                        Doha-Qatar. P.O. Box: 20794</h4>
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
                    <a href="{{App::getLocale() . '/contact'}}" class="btn">تواصل معنا</a>
                </div>
                <div class="profile_link">
                    <a href="https://drive.google.com/file/d/1nEQjIHtV1QtCiIk23zELeR3N86pZrqL6/view" class="btn"
                       download>أحصل على ملف الشركه<i class="fa-solid fa-cloud"><i
                                class="fa-solid fa-arrow-down"></i></i></a>
                </div>
                <div class="subscribe">
                    <h4>اشترك للحصول على آخر أخبارنا</h4>
                    <form action="{{route('subscribe', App::getLocale())}}" method="post" id="subscribe">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="البريد الإلكترونى"
                                   aria-describedby="subscribe" name="subscriber_email">
                            <button class="btn" type="submit" id="subscribe">إشترك</button>
                        </div>
                        @if(session()->has('error'))
                            <div class="alert alert-danger">{{session()->get('error')}}</div>
                        @endif
                        @if(session()->has('success'))
                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 mb-lg-0 mb-5">
                <img src="{{asset('app/assets/images/formalLogo.png')}}" class="img-fluid" alt="bima logo">
                <ul class="list-unstyled text-center">
                    <li class="mb-1 licence"><b>License No:</b> 2008/8</li>
                    <li><b>رقم الترخيص:</b> وت/ ر.ش.ت</li>
                </ul>
                <p>نحن في بيمه قطر نحمي وندعم ونهتم ونقدر عملائنا.</p>
            </div>
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-5">
                        <h3>السيارات</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{App::getLocale() . '/private_motor'}}">التأمين ضد الغير(TPL)</a></li>
                            <li><a href="{{App::getLocale() . '/private_motor'}}">التأمين الشامل</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-5">
                        <h3>السفر والطبي</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{App::getLocale() . '/travel_medical/travel_insurance'}}">السفر للخارج</a>
                            </li>
                            <li><a href="{{App::getLocale() . '/travel_medical/travel_insurance'}}">بطاقة هيا</a></li>
                            <li><a href="{{App::getLocale() . '/travel_medical/travel_insurance'}}">تأشيرة الزيارة
                                    والسياحة</a>
                            </li>
                            <li><a href="{{App::getLocale() . '/travel_medical/medical_insurance'}}">+60 التأمين
                                    الطبي </a></li>
                            <li><a href="{{App::getLocale() . '/travel_medical/medical_insurance'}}">التأمين الطبي
                                    الإلزامي
                                    للمقيمين</a></li>
                            <li><a href="{{App::getLocale() . '/travel_medical/medical_insurance'}}">التأمين الصحي
                                    الجماعي</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-5">
                        <h3>التأمين الشخصي</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{App::getLocale() . '/private_motor'}}">تأمين السيارات الخاصة</a></li>
                            <li><a href="{{App::getLocale() . '/travel_medical/travel_insurance'}}">تأمين السفر</a>
                            </li>
                            <li><a href="{{App::getLocale() . '/travel_medical/medical_insurance'}}">التأمين الطبي</a>
                            </li>
                            <li><a href="{{App::getLocale() . '/personal_insurance/motorcycle_insurance'}}">التأمين على
                                    الدراجات
                                    النارية</a>
                            </li>
                            <li><a href="{{App::getLocale() . '/personal_insurance/yacht_watercraft'}}">تأمين اليخوت
                                    والمراكب المائية</a>
                            </li>
                            <li><a href="{{App::getLocale() . '/personal_insurance'}}"><small>+ المزيد</small></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-5">
                        <h3>تأمين الأعمال</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{App::getLocale() . '/personal_insurance/business_package'}}">تأمين باقة
                                    الأعمال</a>
                            </li>
                            <li><a href="{{App::getLocale() . '/personal_insurance/cyber_liability'}}">تأمين المسؤولية
                                    السيبرانية</a>
                            </li>
                            <li><a href="{{App::getLocale() . '/personal_insurance/general_liability'}}">التأمين على
                                    المسؤولية العامة</a>
                            </li>
                            <li><a href="{{App::getLocale() . '/personal_insurance/motor_fleet'}}">تأمين أسطول
                                    السيارات</a></li>
                            <li><a href="{{App::getLocale() . '/personal_insurance/commercial_property'}}">تأمين
                                    الممتلكات التجارية</a>
                            </li>
                            <li><a href="{{App::getLocale() . '/personal_insurance'}}"><small>+ المزيد</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p> جميع الحقوق محفوظه . قطر بيمه العالميه © 2024</p>
            </div>
        </div>
    </div>
</div>
<!-- fixed footer -->
<div class="sticky-bottom sticky-footer">
    <div class="container">
        <div class="row">
            <!-- collapsed btn in mobile view -->
            <span class="d-lg-none d-inline-flex show_sticky-footer"><i class="fa-solid fa-chevron-up"></i></span>
            <div class="col-12 flex-lg-row flex-column align-items-center justify-content-center content">
                <p class="mb-lg-0 mb-3 pt-2">مخاطر أقل للمضي قدما</p>
                <a href="{{App::getLocale() . '/contact'}}" class="btn">تواصل معنا</a>
                <a href="#quote" class="btn-outline">إحصل على عرض سعر</a>
            </div>
        </div>
    </div>
</div>
</body>
<!-- jquery -->
<script src="{{asset('app/static/plugins/jquery.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('app/static/plugins/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('app/static/plugins/slick/slick.min.js')}}"></script>
<!-- aos animate -->
<script src="{{asset('app/static/plugins/aos/js/aos.js')}}"></script>
<script src="{{asset('app/static/js/script.js')}}"></script>

</html>
