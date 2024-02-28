<!DOCTYPE html>
<html lang="en">

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
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset('app/static/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('app/static/plugins/slick/slick-theme.css')}}">
    <!-- website style -->
    <link rel="stylesheet" href="{{asset('app/static/css/style.min.css')}}">

    <!-- Smartsupp Live Chat script -->
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

<body dir="ltr">
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
                    <a href="/contact"><i class="fa-solid fa-location-dot me-2"></i>contact us</a>
                    <a href="mailto:info@qatarbima.com"><i
                            class="fa-solid fa-envelope me-2"></i>info@qatarbima.com</a>
                    <a href="tel:+974 5053 5033"><i class="fa-brands fa-whatsapp me-2 text-success h5"></i><i
                            class="fa-solid fa-phone me-1"></i>+974 5053 5033 </a>
                    <a href="#quote" class="btn">get a quote</a>
                    <a href="../ar">AR</a>
                </div>
            </div>
        </div>
    </div>
    <!-- menu sec -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{asset('app/assets/images/logo.png')}}"
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
                        <a class="nav-link" href="{{App::getLocale() . '/about'}}">about us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{App::getLocale() . '/private_motor'}}" role="button"
                           data-hover="dropdown" aria-expanded="false">Motor</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{App::getLocale() . '/private_motor'}}">third party
                                    insurance (TPL)</a>
                            </li>
                            <li><a class="dropdown-item" href="{{App::getLocale() . '/private_motor'}}">comprehensive
                                    insuranse</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="travel_medical" role="button"
                           data-hover="dropdown" aria-expanded="false">Travel & Medical</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="travel_medical/travel_insurance">travel
                                    outbound</a></li>
                            <li><a class="dropdown-item" href="travel_medical/travel_insurance">hayya
                                    card</a></li>
                            <li><a class="dropdown-item" href="travel_medical/travel_insurance">visit
                                    visa</a></li>
                            <li><a class="dropdown-item" href="travel_medical/medical_insurance">+60
                                    medical</a></li>
                            <li><a class="dropdown-item"
                                   href="travel_medical/medical_insurance">residents mandatory
                                    medical</a></li>
                            <li><a class="dropdown-item" href="travel_medical/medical_insurance">Group
                                    Health Insurance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ '../../'.App::getLocale() .'/personal_insurance'}}"
                           role="button"
                           data-hover="dropdown" aria-expanded="false">Personal Insurance</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ '../../'.App::getLocale() .'/private_motor'}}">private
                                    motor
                                    insurance</a></li>
                            <li><a class="dropdown-item"
                                   href="{{ '../../'.App::getLocale() .'/travel_medical/travel_insurance'}}">Travel
                                    Insurance</a></li>
                            <li><a class="dropdown-item"
                                   href="{{ '../../'.App::getLocale() .'/travel_medical/medical_insurance'}}">Medical
                                    Insurance</a></li>
                            <li><a class="dropdown-item"
                                   href="{{ '../../'.App::getLocale() .'/personal_insurance/motorcycle_insurance'}}">motorcycle
                                    insurance</a>
                            </li>
                            <li><a class="dropdown-item"
                                   href="{{ '../../'.App::getLocale() .'/personal_insurance/yacht_watercraft'}}">Yacht &
                                    Watercraft Insurance</a></li>
                            <li><a class="dropdown-item"
                                   href="{{ '../../'.App::getLocale() .'/personal_insurance'}}"><small>+
                                        see all</small></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ '../../'.App::getLocale() .'/business_insurance'}}"
                           role="button"
                           data-hover="dropdown" aria-expanded="false">Business Insurance</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                   href="{{ '../../'.App::getLocale() .'/business_insurance/business_package'}}">Business
                                    Package Insurance</a></li>
                            <li><a class="dropdown-item"
                                   href="{{ '../../'.App::getLocale() .'/business_insurance/cyber_liability'}}">Cyber
                                    Liability Insurance</a></li>
                            <li><a class="dropdown-item"
                                   href="{{ '../../'.App::getLocale() .'/business_insurance/general_liability'}}">General
                                    Liability Insurance</a></li>
                            <li><a class="dropdown-item"
                                   href="{{ '../../'.App::getLocale() .'/business_insurance/motor_fleet'}}">Motor Fleet
                                    Insurance </a></li>
                            <li><a class="dropdown-item"
                                   href="{{ '../../'.App::getLocale() .'/business_insurance/commercial_property'}}">Commercial
                                    Property
                                    Insurance</a></li>
                            <li><a class="dropdown-item"
                                   href="{{ '../../'.App::getLocale() .'/business_insurance'}}"><small>+
                                        see all</small></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '../../'.App::getLocale() .'/blogs'}}">blogs</a>
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
                    <a href="{{ request()->root() .'/'.App::getLocale() .'/contact'}}"><i
                            class="fa-solid fa-location-dot me-2"></i>contact us</a>
                    <a href="mailto:info@qatarbima.com"><i
                            class="fa-solid fa-envelope me-2"></i>info@qatarbima.com</a>
                    <a href="tel:+974 5053 5033"><i class="fa-brands fa-whatsapp me-2 text-success h5"></i><i
                            class="fa-solid fa-phone me-1"></i>+974 5053 5033 </a>
                    <a href="#quote" class="btn">get a quote</a>
                    <a href="../ar/index">AR</a>

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
                    <h1>Less Risks to Move Forward</h1>
                    <h3>we are committed to offer a technical insurance expertise and professional advice to our
                        clients. </h3>
                    <div>
                        <a href="{{ request()->root() .'/'.App::getLocale() .'/contact'}}"
                           class="btn btn-outline"><span>contact us</span> <i
                                class="fa-solid fa-arrow-right"></i></a>
                        <a href="{{ request()->root() .'/'.App::getLocale() .'/about'}}"
                           class="btn"><span>about bima</span> <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>

                </div>
                <div class="col-lg-5 col-12">
                    <div class="d-flex flex-wrap">
                        <div class="category">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/home/motor.png')}}" class="img-fluid">
                            </div>
                            <h4>private motor</h4>
                            <a href="private_motor" class="btn_sec">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                        <div class="category">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/home/travel.png')}}" class="img-fluid">
                            </div>
                            <h4>travel & medical</h4>
                            <a href="travel_medical" class="btn_sec">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                        <div class="category">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/home/personal.png')}}" class="img-fluid">
                            </div>
                            <h4>personal insurance</h4>
                            <a href="personal_insurance" class="btn_sec">
                                <button class="btn">learn more</button>
                            </a>
                        </div>
                        <div class="category">
                            <div class="img-container">
                                <img src="{{asset('app/assets/images/icons/home/business.png')}}" class="img-fluid">
                            </div>
                            <h4>business insurance</h4>
                            <a href="business_insurance" class="btn_sec">
                                <button class="btn">learn more</button>
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
                    <h3>our partners</h3>
                </div>
                <div class="col-12">
                    <div class="slider">
                        <div class="item">
                            <div class="img-container"><img src="{{asset('app/assets/images/partners/Ori.png')}}"
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
                            <div class="img-container"><img src="{{asset('app/assets/images/partners/Misr.png')}}"
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
                            <div class="img-container"><img src="{{asset('app/assets/images/partners/AlKoot.png')}}"
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
                        <h3>CLAIMS SUPPORT</h3>
                        <p>Our Team provide our customers with superior’s claim handling services by coordinating
                            each case to the respective Insurance Partners and assess/settle the case at the
                            earliest time. Giving assurance to our customers that throughout the whole claim
                            process, we are there in every step of the way.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                        <i class="fa-solid fa-people-group"></i>
                        <h3>EXPERIENCED TEAM</h3>
                        <p>Our team is our main competitive advantage, daily navigating through the insurance
                            companies kept us updated in terms of type of services provided in the market, the right
                            insurance company for each service and the best prices offered.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                        <h3>COMPETETIVE PRICE</h3>
                        <p>Our priority is to find the right coverage matches your situation, then don’t worry about
                            the cost as We offer a wide variety of policies covers a range of prices.</p>
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
                    <h3><i class="fa-solid fa-envelope-open-text me-2"></i><span>Get Quote by Our Team </span></h3>
                    <p>We will be glad to support your request and find the right coverage for you.</p>
                    <div class="form-group d-flex flex-md-row flex-column">
                        <div class="mb-3 w-md-50 w-100 pe-md-2">
                            <input type="text" class="form-control" id="firstName" name="first_name"
                                   placeholder="first name"
                                   required>
                        </div>
                        <div class="mb-3 w-md-50 w-100">
                            <input type="text" class="form-control" id="lastName" name="last_name"
                                   placeholder="last name" required>
                        </div>
                    </div>
                    <div class="form-group d-flex flex-md-row flex-column">
                        <div class="mb-3 w-md-50 w-100 pe-md-2">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email"
                                   required>
                        </div>
                        <div class="mb-3 w-md-50 w-100">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="phone number"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                                <textarea class="form-control" rows="10" cols="50" id="text" name="text"
                                          placeholder="how can we help" required></textarea>
                        </div>
                    </div>
                    <button class="btn" type="submit">submit</button>
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
                    <a href="{{ request()->root() .'/'.App::getLocale() .'/contact'}}" class="btn">contact us</a>
                </div>
                <div class="profile_link">
                    <a href="https://drive.google.com/file/d/1nEQjIHtV1QtCiIk23zELeR3N86pZrqL6/view" class="btn"
                       download>get company profile <i class="fa-solid fa-cloud"><i
                                class="fa-solid fa-arrow-down"></i></i></a>
                </div>
                <div class="subscribe">
                    <h4>subscribe for our latest news</h4>
                    <form action="{{route('subscribe', App::getLocale())}}" method="post" id="subscribe">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="your email"
                                   aria-describedby="subscribe" name="subscriber_email">
                            <button class="btn" type="submit" id="subscribe">subscribe</button>
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
                    <li class="mb-1"><b>License No:</b> 2008/8</li>
                    <li><b>رقم الترخيص:</b> وت/ ر.ش.ت</li>
                </ul>
                <p>we protect, we support, we care and we value our clients.</p>
            </div>
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-5">
                        <h3>motor</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{ '../'.App::getLocale() .'/private_motor'}}">third party insurance (TPL)</a>
                            </li>
                            <li><a href="{{ '../'.App::getLocale() .'/private_motor'}}">comprehensive insuranse</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-5">
                        <h3>travel & medical </h3>
                        <ul class="list-unstyled">
                            <li><a href="{{ '../'.App::getLocale() .'/travel_medical/travel_insurance'}}">travel
                                    outbound</a></li>
                            <li><a href="{{ '../'.App::getLocale() .'/travel_medical/travel_insurance'}}">hayya card</a>
                            </li>
                            <li><a href="{{ '../'.App::getLocale() .'/travel_medical/travel_insurance'}}">visit visa</a>
                            </li>
                            <li><a href="{{ '../'.App::getLocale() .'/travel_medical/medical_insurance'}}">+60
                                    medical</a></li>
                            <li><a href="{{ '../'.App::getLocale() .'/travel_medical/medical_insurance'}}">residents
                                    mandatory
                                    medical</a></li>
                            <li><a href="{{ '../'.App::getLocale() .'/travel_medical/medical_insurance'}}">Group Health
                                    Insurance</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-5">
                        <h3>personal insurance</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{ '../'.App::getLocale() .'/travel_medical/private_motor'}}">private motor
                                    insurance</a></li>
                            <li><a href="{{ '../'.App::getLocale() .'/travel_medical/travel_insurance'}}">Travel
                                    Insurance</a></li>
                            <li><a href="{{ '../'.App::getLocale() .'/travel_medical/medical_insurance'}}">Medical
                                    Insurance</a></li>
                            <li><a href="{{ '../'.App::getLocale() .'/personal_insurance/motorcycle_insurance'}}">motorcycle
                                    insurance</a></li>
                            <li><a href="{{ '../'.App::getLocale() .'/personal_insurance/yacht_watercraft'}}">Yacht &
                                    Watercraft Insurance</a>
                            </li>
                            <li><a href="{{ '../'.App::getLocale() .'/personal_insurance'}}"><small>+ see
                                        all</small></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-5">
                        <h3>business insurance</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{ '../'.App::getLocale() .'/business_insurance/business_package'}}">Business
                                    Package Insurance</a>
                            </li>
                            <li><a href="{{ '../'.App::getLocale() .'/business_insurance/cyber_liability'}}">Cyber
                                    Liability Insurance</a></li>
                            <li><a href="{{ '../'.App::getLocale() .'/business_insurance/general_liability'}}">General
                                    Liability Insurance</a>
                            </li>
                            <li><a href="{{ '../'.App::getLocale() .'/business_insurance/motor_fleet'}}">Motor Fleet
                                    Insurance </a></li>
                            <li><a href="{{ '../'.App::getLocale() .'/business_insurance/commercial_property'}}">Commercial
                                    Property
                                    Insurance</a></li>
                            <li><a href="{{ '../'.App::getLocale() .'/business_insurance/'}}"><small>+ see
                                        all</small></a></li>
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
                <p>© 2024 Qatar Bima International. All rights reserved.</p>
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
                <p class="mb-lg-0 mb-3 pt-2">Less Risks to Move Forward</p>
                <a href="{{App::getLocale() . '/contact'}}" class="btn">contact us</a>
                <a href="#quote" class="btn-outline">get a quote</a>
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
