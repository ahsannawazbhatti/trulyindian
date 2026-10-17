<header class="header">
    @include('layouts.partials.top-header')
    <!-- navbar -->
    <div class="main-navigation">
        <nav class="navbar light navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" class="logo-scrolled" alt="Truly Indian Restaurants Logo">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" class="logo-display" alt="Truly Indian Restaurants Logo">
                </a>
            <div class="mobile-menu-right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a href="index.html" class="offcanvas-brand" id="offcanvasNavbarLabel">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                                class="far fa-xmark"></i></button>
                    </div>
                    <div class="offcanvas-body gap-xl-4">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link {!! \App\Helpers\MenuHelper::activeLink('home') !!}" href="{{ route('home') }}">Hem</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {!! \App\Helpers\MenuHelper::activeLink('about-us') !!}" href="{{ route('about-us') }}">Om oss</a>
                            </li>

                            <!-- Dropdown visible only on large screens (lg and up) -->
                            <li class="nav-item dropdown d-none d-lg-block {!! \App\Helpers\MenuHelper::activeLink('home') !!}">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Alla Meny</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item {!! \App\Helpers\MenuHelper::activeLink('main-menu') !!}" href="{{ route('main-menu') }}">Alla Cart Meny</a></li>
                                    <li><a class="dropdown-item {!! \App\Helpers\MenuHelper::activeLink('take-away-menu') !!}" href="{{ route('take-away-menu') }}">Take Away Meny</a></li>
                                    <li><a class="dropdown-item {!! \App\Helpers\MenuHelper::activeLink('lunch-menu') !!}" href="{{ route('lunch-menu') }}">Lunch Meny</a></li>
                                </ul>
                            </li>

                            <!-- Individual menu items visible only on small and medium screens -->
                            <li class="nav-item d-lg-none"><a class="nav-link {!! \App\Helpers\MenuHelper::activeLink('main-menu') !!}" href="{{ route('main-menu') }}">Alla Cart Meny</a></li>
                            <li class="nav-item d-lg-none"><a class="nav-link {!! \App\Helpers\MenuHelper::activeLink('take-away-menu') !!}" href="{{ route('take-away-menu') }}">Take Away Meny</a></li>
                            <li class="nav-item d-lg-none"><a class="nav-link {!! \App\Helpers\MenuHelper::activeLink('lunch-menu') !!}" href="{{ route('lunch-menu') }}">Lunch Meny</a></li>
                            <li class="nav-item"><a class="nav-link {!! \App\Helpers\MenuHelper::activeLink('gallery') !!}" href="{{ route('gallery') }}">Gelleri</a></li>
                            <li class="nav-item"><a class="nav-link {!! \App\Helpers\MenuHelper::activeLink('catering') !!}" href="{{ route('catering') }}">Catering</a></li>
                            <li class="nav-item"><a class="nav-link {!! \App\Helpers\MenuHelper::activeLink('contact-us') !!}" href="{{ route('contact-us') }}">Kontakta oss</a></li>
                            <li class="nav-item mt-3 me-2">
                                <a id="normal-btn" data-glf-cuid="44924cb1-a894-400a-834d-6b734eaa878f" data-glf-ruid="f7b0ec65-18d8-4481-906e-1dcdee7cf621" class="theme-btn">
                                    Beställa online
                                </a>
                                <!-- Lunch button, shown/hidden via JS -->
                                <a id="lunch-btn" data-glf-cuid="0630ca10-6091-4114-b534-db8a223690ca" data-glf-ruid="cd0f7ccc-e6c8-4491-8b5a-c98a2347b85d" class="theme-btn" style="display:none;">
                                    Beställa online
                                </a>
                            </li>
                            <li class="nav-item mt-3 me-2">
                                <a data-glf-cuid="44924cb1-a894-400a-834d-6b734eaa878f" data-glf-ruid="f7b0ec65-18d8-4481-906e-1dcdee7cf621" data-glf-reservation="true" class="theme-btn reservation">
                                    Bordsbokning
                                </a>
                            </li>
                            <li class="nav-item mt-3 me-2m d-lg-none">
                                <a href="{{ route('download-pdf-menu') }}" class="theme-btn">Download Menu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- navbar end-->
@php
    $lunchStart = env('LUNCH_START', '11:00');
    $lunchEnd = env('LUNCH_END', '14:30');
    $lunchDays = env('LUNCH_DAYS', '1,2,3,4,5'); // CSV string
@endphp
<script>
(function() {
    const lunchStart = "{{ env('LUNCH_START', '11:00') }}"; // t.ex. '11:00'
    const lunchEnd = "{{ env('LUNCH_END', '14:30') }}";     // t.ex. '14:30'
    const lunchDays = "{{ env('LUNCH_DAYS', '1,2,3,4,5') }}".split(',').map(Number); // [1,2,3,4,5]

    const publicHolidays = [
        '2025-01-01', // Nyårsdagen
        '2025-01-06', // Trettondedag jul
        '2025-04-18', // Långfredagen
        '2025-04-20', // Påskdagen
        '2025-04-21', // Annandag påsk
        '2025-05-01', // Första maj
        '2025-05-29', // Kristi himmelsfärdsdag
        '2025-06-06', // Sveriges nationaldag
        '2025-06-21', // Midsommardagen
        '2025-11-01', // Alla helgons dag
        '2025-12-25', // Juldagen
        '2025-12-26'  // Annandag jul
    ];

    const normalBtn = document.getElementById('normal-btn');
    const lunchBtn = document.getElementById('lunch-btn');

    function updateButtons() {
        const now = new Date().toLocaleString("sv-SE", { timeZone: "Europe/Stockholm" });
        const current = new Date(now);
        const dayOfWeek = current.getDay(); // 0=Sunday, 1=Monday...
        const currentDate = current.toISOString().split('T')[0]; // Format: YYYY-MM-DD
        const hours = current.getHours();
        const minutes = current.getMinutes();
        const currentMinutes = hours * 60 + minutes;

        const [startH, startM] = lunchStart.split(':').map(Number);
        const [endH, endM] = lunchEnd.split(':').map(Number);
        const lunchStartMinutes = startH * 60 + startM;
        const lunchEndMinutes = endH * 60 + endM;

        // Kontrollera om idag är en röd dag
        const isPublicHoliday = publicHolidays.includes(currentDate);

        // Visa lunchknappen endast under vardagar, inom lunchtid och inte på röda dagar
        if (lunchDays.includes(dayOfWeek) &&
            currentMinutes >= lunchStartMinutes &&
            currentMinutes < lunchEndMinutes &&
            !isPublicHoliday) {
            lunchBtn.style.display = 'inline-block';
            normalBtn.style.display = 'none';
        } else {
            lunchBtn.style.display = 'none';
            normalBtn.style.display = 'inline-block';
        }

        // Beräkna nästa uppdateringstid
        let nextUpdate = new Date(current);
        if (currentMinutes < lunchStartMinutes) {
            nextUpdate.setHours(startH, startM, 0, 0); // nästa lunchstart
        } else if (currentMinutes >= lunchStartMinutes && currentMinutes < lunchEndMinutes) {
            nextUpdate.setHours(endH, endM, 0, 0); // lunchslut
        } else {
            nextUpdate.setDate(nextUpdate.getDate() + 1);
            nextUpdate.setHours(startH, startM, 0, 0); // nästa dags lunchstart
        }

        const delay = nextUpdate - current;
        setTimeout(updateButtons, delay);
    }

    updateButtons();
})();
</script>
