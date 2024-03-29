<!DOCTYPE html>
<html lang="en">

<head>
    <!-- page title -->
    <title>Bima</title>
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

     <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '433672eff4d48a5b5e986d103a87178ff1bc746c';
        window.smartsupp || (function (d) {
            var s, c, o = smartsupp = function () {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
</head>

<body dir="ltr">
<!-- header -->
<div class="header page-header">
    <!-- top header in desktop view -->
    @include('en.top_header')
    <!-- menu sec -->
    @include('en.menu')

</div>

<!-- page content-->
@yield('content')

<!-- contact and quote section -->
<div class="quote_sec pt-0 mt-5">
    <svg class="nectar-shape-divider" aria-hidden="true" fill="white" xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 100 10" preserveAspectRatio="none">
        <polygon points="100 10 100 0 -4 10"></polygon>
    </svg>
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
                    @if(session()->has('quote_success'))
                        <div class="alert alert-success">{{ session()->get('quote_success') }}</div>
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
            <span class="d-lg-none d-inline-flex show_sticky-footer"><i
                    class="fa-solid fa-chevron-up"></i></span>
            <div class="col-12 flex-lg-row flex-column align-items-center justify-content-center content">
                <p class="mb-lg-0 mb-3 pt-2">Less Risks to Move Forward</p>
                <a href="{{ request()->root() .'/'.App::getLocale() .'/contact'}}" class="btn">contact us</a>
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
