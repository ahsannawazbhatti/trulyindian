<!-- footer area -->
<footer class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="footer-widget-wrap pt-100 pb-80">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="assets/img/logo/logo.png" alt="">
                            </a>
                            <p class="mb-4">
                                Truly Indian Restaurants i Trollhättan bjuder på äkta indisk mat lagad av erfarna kockar med traditionella recept och kryddor. Upplev Indiens smaker – mitt i hjärtat av Trollhättan.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Snabblänk</h4>
                            <ul class="footer-list">
                                <li><a href="{{ route('about-us') }}"><i class="far fa-angle-double-right"></i>Om Os</a></li>
                                <li><a href="{{ route('main-menu') }}"><i class="far fa-angle-double-right"></i>Alla Cart Meny</a></li>
                                <li><a href="{{ route('lunch-menu') }}"><i class="far fa-angle-double-right"></i>Lunch Meny</a></li>
                                <li><a href="{{ route('take-away-menu') }}"><i class="far fa-angle-double-right"></i>Take Away Meny</a></li>
                                <li><a href="{{ route('gallery') }}"><i class="far fa-angle-double-right"></i>Galleri</a></li>
                                <li><a href="{{ route('catering') }}"><i class="far fa-angle-double-right"></i>Catering</a></li>                               
                                <li><a href="{{ route('contact-us') }}"><i class="far fa-angle-double-right"></i>Kontakta Oss</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Öppettider</h4>
                            <ul class="footer-opening">
                                <li><span class="day">Månday - Fredag</span><span class="time">11:00  - 21:00</span></li>
                                <li><span class="day">Lördag - Söndag</span><span class="time">11:00  - 21:00</span></li>
                            </ul>
                             <h4 class="footer-widget-title mt-4">Vi samarbetar med flera leveranspartners</h4>
                            <ul class="footer-contact" style="display: flex; list-style: none; align-items: center;">
                                <li>
                                    <a href="https://www.foodora.se/restaurant/s6lh/truly-indian" target="_blank">
                                        <img src="{{ asset('assets/img/food_delevery_logo/foodora.png') }}" alt="Foodora" style="height: 80px; width: auto;">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wolt.com/sv/swe/trollhattan/restaurant/truly-indian-trollhttan" target="_blank">
                                        <img src="{{ asset('assets/img/food_delevery_logo/wolt.png') }}" alt="Wolt" style="height: 80px; width: auto;">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.ubereats.com/se/store/truly-indian/hhdD0f4tVZSJ7ylFeZlJbA?diningMode=DELIVERY&sc=SEARCH_SUGGESTION" target="_blank">
                                        <img src="{{ asset('assets/img/food_delevery_logo/uber.png') }}" alt="Uber Eats" style="height: 80px; width: auto;">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget-box">
                            <h4 class="footer-widget-title">Hör av dig</h4>
                            <ul class="footer-contact">
                                <li>
                                    <div class="icon">
                                        <i class="far fa-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <h6>Vår adress</h6>
                                        <p>Storgatan 44 46130 Trollhättan</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <h6>Ring oss</h6>
                                        <a href="tel:+21236547898">0520-480-900</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h6>Maila oss</h6>
                                        <a href="mailto:info@trulyindian.se">info@trulyindian.se</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p class="copyright-text">
                        &copy; Copyright <span id="date"></span> <a href="#"> Truly Indian </a> All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="footer-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
<!-- scroll-top -->
<a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
<!-- scroll-top end -->
