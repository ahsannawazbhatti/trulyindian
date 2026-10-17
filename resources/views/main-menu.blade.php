@extends('layouts.app')
@section('page-title', 'Alla Cart Meny – Indisk Restaurang i Trollhättan | Truly Indian')
@section('meta-description', 'Utforska vår autentiska indiska à la carte-meny i Trollhättan. Välj bland kycklingrätter, vegetariska rätter, naan, ris och curry.')
@section('meta-keywords', 'Alla Cart Trollhättan, Indisk à la carte, Kycklingrätter, Vegetariska rätter, Naan, Curry, Truly Indian, Indisk mat')
@section('structured-data')
    <script type="application/ld+json">
        {!! $structuredDataMainMenu  !!}
    </script>
@endsection
@section('body')
<main class="main">
    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.webp)">
        <div class="container">
            <h2 class="breadcrumb-title">Alla Cart Meny</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Hem</a></li>
                <li class="active">Alla Cart Meny</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->
    <!-- menu area -->
    <div class="menu-area2 py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                        <h1 class="site-title-tagline">Alla Cart Meny<h1>
                        <h2 class="site-title">Låt oss kolla <span>Vår meny</span></h2>
                        <h5> Allergi fråga personalen</h5>
                        <h5>Alla rätter kan fås som Mild och stark.</h5>
                        <h5>Även som laktos och glutenfri</h5>
                    </div>
                </div>
            </div>
            @foreach($mainMenuCategories as $category)
                @if($category->mainMenu->count() > 0)
                    <div class="row wow fadeInUp" data-wow-delay=".25s">
                        <h3 class="h3-title text-center my-4"><b>{{ $category->name }}</b></h3>
                        @foreach($category->mainMenu as $index => $item)
                            <div class="col-md-6">
                                <div class="menu-item">
                                    <div class="menu-content">
                                        <h4>{{ $item->serial_no ? $item->serial_no . ', ' : '' }}{{ $item->name }} {!! \App\Helpers\MenuHelper::getChillyImg($item->spicy_category_id) !!}</h4>
                                        <p>{!! $item->ingredient !!}</p>
                                    </div>
                                    <div class="menu-price">
                                        <span>{{ $item->price }} Sek</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            @endforeach
         <div class="row">
            <div class="col-lg-12 col-md-12">{!! \App\Helpers\MenuHelper::getChillyTitle()  !!}</div>
        </div>
        </div>
    </div>
    <!-- menu area end -->
</main>
@endsection