@extends('layouts.app')
@section('page-title', 'Truly Indian Restaurants | Catering')
@section('body')
<main class="main">
    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.webp)">
        <div class="container">
            <h2 class="breadcrumb-title">Catering</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Hem</a></li>
                <li class="active">Catering</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <section class="catering-service py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image on the left -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('assets/img/catering/catering.png') }}" alt="Catering Service" class="img-fluid rounded shadow">
            </div>
            <!-- Text on the right -->
            <div class="col-lg-6">
                <h2 class="mb-3">Fira med indiens rika och färgstarka smaker</h2>
                <p>Anpassade för alla smaker och behov. vår catering passar både små och stora evenemang, från bröllop och födelsedagar till företagsevenemang och privata fester. vi erbjuder äkta indisk mat med ett brett utbud av veganska, glutenfria och specialanpassade rätter som möter olika kostpreferenser.</p>
                <p>Från klassiska grytor och aromatiska biryanis till fräscha sallader och mejerifria desserter – varje rätt tillagas med noga utvalda råvaror, traditionella kryddor och stor omsorg.</p>
                <a href="{{ route('contact-us') }}" class="theme-btn">Boka nu</a>
            </div>
        </div>
    </div>
</section>
@endsection