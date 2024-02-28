@extends('en.layout')
@section('content')
    <div class="page-content">
        <!-- page title -->
        <div class="page-title category_title about_bg">
            <div class="container content">
                <div class="row">
                    <div class="col-12">
                        <h3>about qatar bima</h3>
                        <p>At Qatar Bima we protect, we support, we care and we value our clients. </p>
                    </div>
                </div>
            </div>
            <svg class="nectar-shape-divider" aria-hidden="true" fill="white" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 10 100 0 -4 10"></polygon>
            </svg>
        </div>

        <!-- about us info -->
        <div class="about_info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 paragraph">
                        <p>Qatar Bima International established in 2008 as an Independent Insurance Brokerage Company
                            Approved and Licensed by Qatar Central Bank that deal with TAKAFUL and CONVENTIONAL
                            insurance, we have built our name over the years through being there when things go wrong,
                            doing everything in our power to make sure our clients finances don’t suffer, and getting
                            things back on track. we are committed to offer technical insurance expertise and
                            professional advice to our clients. </p>

                        <hr>
                        <h3>Mission statement</h3>
                        <p>At Qatar Bima we provide solutions to forthcoming financial losses. Our foundation is
                            upholding trust, strong relationship and quality service to our clients through effective &
                            efficient service when things go wrong.
                        </p>
                        <hr>
                        <h3>What makes Qatar Bima special</h3>
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="single-service">
                                    <i class="fa-solid fa-headset"></i>
                                    <h3>CLAIMS SUPPORT</h3>
                                    <p>Our Team provide our customers with superior’s claim handling services by
                                        coordinating each case to the respective Insurance Partners and assess/settle
                                        the case at the earliest time. Giving assurance to our customers that throughout
                                        the whole claim process, we are there in every step of the way.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="single-service">
                                    <i class="fa-solid fa-people-group"></i>
                                    <h3>EXPERIENCED TEAM</h3>
                                    <p>Our team is our main competitive advantage, daily navigating through the
                                        insurance companies kept us updated in terms of type of services provided in the
                                        market, the right insurance company for each service and the best prices
                                        offered.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="single-service">
                                    <i class="fa-solid fa-hand-holding-dollar"></i>
                                    <h3>COMPETETIVE PRICE</h3>
                                    <p>Our priority is to find the right coverage matches your situation, then don’t
                                        worry about the cost as We offer a wide variety of policies covers a range of
                                        prices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
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
                            </ul>
                            <a href="{{ '../'.App::getLocale() .'/contact'}}" class="btn">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
