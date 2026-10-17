@extends('layouts.app')
@section('page-title', 'Truly Indian Restaurants | Kontakta Oss')
@section('body')
<main class="main">
    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.webp)">
        <div class="container">
            <h2 class="breadcrumb-title">Kontakta Oss</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Hem</a></li>
                <li class="active">Kontakta Oss</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact area -->
    <div class="contact-area py-100">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="contact-form">
                        @if(session('success'))
                            <div style="color: green;">{{ session('success') }}</div>
                        @endif
                        @if ($errors->any())
                            <div style="color: red;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="contact-form-header">
                            <h2>Hör av dig</h2>
                            <p>Vi ser fram emot att höra från dig! Kontakta oss gärna för frågor, bokningar eller mer information.</p>
                        </div>
                        <div class="form-message"></div>
                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-icon">
                                            <i class="far fa-user-tie"></i>
                                            <input type="text" class="form-control" name="name" placeholder="Ditt namn" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-icon">
                                            <i class="far fa-envelope"></i>
                                            <input type="email" class="form-control" name="email" placeholder="Din e-post" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="far fa-phone"></i>
                                    <input type="text" class="form-control" name="phone" placeholder="Telefonnummer" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="far fa-pen"></i>
                                    <input type="text" class="form-control" name="subject" placeholder="Ditt ämne" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="far fa-comment-lines"></i>
                                    <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Skriv ditt meddelande" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div><br />
                            </div>
                            <button type="submit" class="theme-btn">Skicka meddelande<i class="far fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-content">
                        <div class="contact-info">
                            <div class="icon">
                                <i class="fal fa-map-location-dot"></i>
                            </div>
                            <div class="content">
                                <h5>Kontorets adress</h5>
                                <p>Storgatan 44 46130 Trollhättan.</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="icon">
                                <i class="fal fa-phone-volume"></i>
                            </div>
                            <div class="content">
                                <h5>Ring oss</h5>
                                <p>0520-480-900</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="icon">
                                <i class="fal fa-envelopes"></i>
                            </div>
                            <div class="content">
                                <h5>Maila oss</h5>
                                <p>info@trulyindian.se</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="icon">
                                <i class="fal fa-alarm-clock"></i>
                            </div>
                            <div class="content">
                                <h5>Öppettider</h5>
                                <p>Måndag - Fredag: 11:00 - 21:00</p>
                                <p>Lördag - Söndag: 11:00 - 21:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact area -->
    <!-- map -->
    <div class="contact-map">
        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Storgatan%2044%2046130%20Trollh%C3%A4ttan+(Truly%20Indian%20Restaurants%20)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.mapsdirections.info/fr/calculer-la-population-sur-une-carte">Estimer la population sur la carte</a></iframe>
    </div>
    <!-- map end -->
</main>
@endsection