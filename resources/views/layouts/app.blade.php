<!DOCTYPE html>
<html lang="sv">
    <head>
        <!-- meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- SEO Meta Tags -->
        <meta name="keywords" content="@yield('meta-keywords', 'Truly Indian Restaurants, Indian Restaurant Trollhättan, Indisk restaurang Trollhättan, Storgatan 44 Trollhättan, Catering Trollhättan, Indisk mat, Evenemangscatering, Professionella kockar, Bröllopscatering, Företagsevent, Skräddarsydd meny, Lunch Trollhättan, Middag Trollhättan, Takeaway Trollhättan, Indisk Mat')">
        <meta name="description" content="@yield('meta-description', 'Truly Indian Restaurants i Trollhättan erbjuder äkta indisk mat med färska råvaror och traditionella kryddor. Perfekt för lunch, middag, catering och takeaway på Storgatan 44.')">
        <meta name="robots" content="index, follow">
        <meta name="language" content="sv">
        <title>@yield('page-title', 'Truly Indian Restaurants | Indisk Restaurang Trollhättan')</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/favicon.png') }}">

        <!-- css -->
        @include('layouts.partials.css')
        @yield('structured-data')

    </head>
<body>
    <!-- preloader -->
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->

    @include('layouts.partials.navbar')
    @yield('body')
    @include('layouts.partials.footer')
    @include('layouts.partials.js')
</body>
</html>