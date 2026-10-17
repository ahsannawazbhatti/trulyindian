@extends('layouts.app')
@section('page-title', 'Truly Indian Restaurants | Om oss')
@section('body')
<main class="main">
<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.webp)">
    <div class="container">
        <h2 class="breadcrumb-title">Om oss</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ route('home') }}">Hem</a></li>
            <li class="active">Om oss</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<!-- about area -->
<div class="about-area py-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                    <div class="about-img">
                        <div class="row">
                            <div class="col-6">
                                <img class="img-1" src="{{ asset('assets/img/about/01.webp') }}" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-2" src="{{ asset('assets/img/about/02.webp') }}" alt="">
                            </div>
                        </div>
                        <div class="about-experience">
                            <h5>26<span>+</span></h5>
                            <p>År av erfarenhet</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline">Om oss</span>
                        <h2 class="site-title">Vi är alltid <span>Här för att tjäna dig</span> Färsk mat</h2>
                    </div>
                    <p class="about-text">Vår historia</p>
                    <p class="about-text">Truly indian restaurants och truly indian express grundades 1999 med en tydlig vision: att erbjuda autentisk, vällagad indisk mat baserad på traditionella recept, till konkurrenskraftiga priser, i en atmosfär inspirerad av indiens rika kultur.</p>
                    <p class="about-text">År 2010 öppnade vi truly indian restaurant i trollhättan samt truly indian express i borås, och sedan dess har vi stolt serverat genuina smaker till våra gäster.</p>
                    <p class="about-text">Vårt team består av engagerade medarbetare från olika bakgrunder och nationaliteter, med en gemensam passion för högkvalitativ mat och förstklassig service. Våra erfarna kockar tillagar varje rätt med omsorg i traditionella tandooriugnar och använder endast noggrant utvalda, autentiska kryddor för att säkerställa en genuin matupplevelse.</p>
                    <p class="about-text">Vi välkomnar dig varmt till en kulinarisk resa genom indiens smaker och traditioner.</p>
                    <p class="about-text">Upptäck en värld av smaker hos truly indian restaurants. Vi kombinerar traditionella indiska recept med noggrant utvalda råvaror för att ge dig en matupplevelse du sent kommer att glömma.</p>

                    <div class="about-content">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6">
                                <div class="about-item">
                                    <div class="icon">
                                        <img src="assets/img/icon/quality.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h6>Mat av bästa kvalitet</h6>
                                        <p>God mat börjar med bästa råvaror.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="about-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/delicious.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h6>Läcker mat</h6>
                                        <p>Smaker som får dig att vilja ha mer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area end -->


<!-- counter area -->
<div class="counter-area">
    <div class="counter-wrap">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/food-2.svg') }}" alt="Objekt Av Mat">
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="250" data-speed="3000">250</span>
                            <h6 class="title">+ Objekt Av Mat </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/happy.svg') }}" alt="">
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="5650" data-speed="3000">5650</span>
                            <h6 class="title">+ Nöjda kunder</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/chef-2.svg') }}" alt="">
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="6" data-speed="3000">6</span>
                            <h6 class="title">+ Our Chefs</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/award.svg" alt="">
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="26" data-speed="3000">26</span>
                            <h6 class="title">+ Årliga gäster</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter area end -->


<!-- choose area -->
<div class="choose-area py-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="site-heading mb-0 wow fadeInDown" data-wow-delay=".25s">
                    <span class="site-title-tagline">Varför välja oss</span>
                    <h2 class="site-title">Vi erbjuder <span>kvalitetsmat</span></h2>
                    <p>
                        Upptäck en värld av smaker hos Truly Indian Restaurants. Vi kombinerar traditionella indiska recept med noggrant utvalda råvaror för att ge dig en matupplevelse du sent kommer att glömma.
                    </p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row g-4 align-items-center wow fadeInUp" data-wow-delay=".25s">
                    <div class="col-md-6">
                        <div class="choose-img">
                            <img src="{{ asset('assets/img/about/03.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="choose-item">
                            <span class="count">01</span>
                            <div class="choose-item-icon">
                                <img src=" {{ asset('assets/img/icon/food.svg') }}" alt="">
                            </div>
                            <div class="choose-item-info">
                                <h4>Använda kvalitetsmaterial</h4>
                                <p>Vi använder endast noggrant utvalda kvalitetsmaterial för bästa resultat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="choose-item">
                            <span class="count">02</span>
                            <div class="choose-item-icon">
                                <img src="assets/img/icon/restaurant.svg" alt="">
                            </div>
                            <div class="choose-item-info">
                                <h4>Oförglömlig smak</h4>
                                <p>Oförglömlig smak som väcker dina sinnen och tar dig med på en resa till Indiens hjärta.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="choose-item">
                            <span class="count">03</span>
                            <div class="choose-item-icon">
                                <img src="assets/img/icon/food-3.svg" alt="">
                            </div>
                            <div class="choose-item-info">
                                <h4>Ren och hygienisk mat</h4>
                                <p>Vi prioriterar renlighet och hygien för att säkerställa att all mat tillagas och serveras i en trygg och ren miljö.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- choose area end -->
@endsection