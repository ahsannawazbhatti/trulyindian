@extends('layouts.app')
@section('page-title', 'Truly Indian Restaurants | Gelleri')
@section('body')
<main class="main">
    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.webp)">
        <div class="container">
            <h2 class="breadcrumb-title">Gelleri</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Hem</a></li>
                <li class="active">Gelleri</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- gallery-area -->
        <div class="gallery-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading mb-4 text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline">Vårt fotogalleri</span>
                            <h2 class="site-title">Låt oss titta på <span>vårt fotogalleri</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row popup-gallery wow fadeInUp" data-wow-delay=".25s">
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/01.webp') }}" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/01.webp') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/02.webp') }}" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/02.webp') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/03.webp') }}" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/03.webp') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/04.webp') }}" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/04.webp') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/05.webp') }}" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/05.webp') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/06.webp') }}" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/06.webp') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/07.webp') }}" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/07.webp') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/08.jpg') }}" alt=" Chicken Korma">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/08.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/09.jpg') }}" alt="Aloo Saag">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/09.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/10.jpg') }}" alt="Chicken do piaza">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/10.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/11.jpg') }}" alt="Chicken Saag">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/11.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/12.jpg') }}" alt="Chicken Lababdar">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/12.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/13.jpg') }}" alt="Kadhi Chicken">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/13.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/14.jpg') }}" alt="Lamm Vindaloo">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/14.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/15.jpg') }}" alt="Lamm Madras">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/15.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/16.jpg') }}" alt="Truly Indian Chefs Chicken Curry">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/16.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/17.jpg') }}" alt="Butter Chicken ">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/17.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/18.jpg') }}" alt="Chicken Madras">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/18.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/19.jpg') }}" alt="Chicken Vindaloo">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/19.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/20.jpg') }}" alt="Jalfrezi">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/20.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/21.jpg') }}" alt="Kadai Gosht">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/21.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/22.jpg') }}" alt="Lamm Korma">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/22.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/23.jpg') }}" alt="Kali Mirch">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/23.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/24.jpg') }}" alt="Palak Gosht">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/24.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/25.jpg') }}" alt="Shahi Paneer">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/25.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/26.jpg') }}" alt="Tikka Masala">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/26.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                      <div class="col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/27.jpg') }}" alt="Truly Indian">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/27.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/gallery/28.jpg') }}" alt="Truly Indian Chefs Lamm Curry">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="{{ asset('assets/img/gallery/28.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- gallery-area end -->
@endsection