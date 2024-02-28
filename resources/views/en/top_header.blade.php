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
                    <a href="{{ '../'.App::getLocale() .'/contact'}}"><i class="fa-solid fa-location-dot me-2"></i>contact
                        us</a>
                    <a href="mailto:info@qatarbima.com"><i
                                class="fa-solid fa-envelope me-2"></i>info@qatarbima.com</a>
                    <a href="tel:+974 5053 5033"><i class="fa-brands fa-whatsapp me-2 text-success h5"></i><i
                                class="fa-solid fa-phone me-1"></i>+974 5053 5033 </a>
                    <a href="#quote" class="btn">get a quote</a>
                    @if(request()->segment(count(request()->segments())-1) == 'en')
                        <a href="{{ request()->root() .'/ar/'  . request()->segment(count(request()->segments()))}}">AR</a>
                    @else
                        <a href="{{ request()->root() .'/ar/'  . request()->segment(count(request()->segments()) -1).'/' . request()->segment(count(request()->segments()))}}">AR</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
