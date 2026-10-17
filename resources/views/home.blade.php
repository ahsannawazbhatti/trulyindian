@extends('layouts.app')
@section('page-title', 'Truly Indian Restaurants | Hem')
@section('structured-data')
    <script type="application/ld+json">
        {!! $structuredData !!}
    </script>
@endsection
@section('body')
<main class="main">
<!-- hero area -->
<div class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hero-single" style="background-image: url(assets/img/hero/slider-1.webp);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <div class="hero-content">
                            <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">
                                Välkommen till Truly Indian
                            </h6>
                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                Vi serverar den ursprungliga <span>smaken</span> du älskar
                            </h1>
                            <p data-animation="fadeInLeft" data-delay=".75s">
                                Våra rätter är fyllda med noga utvalda kryddor och färska ingredienser som fångar den äkta smaken av Indien.
                            </p>
                            <div class="d-flex flex-column flex-lg-row align-items-center gap-2 justify-content-center" data-animation="fadeInUp" data-delay="1s">
                                <a href="{{ route('lunch-menu') }}" class="theme-btn">Lunch Meny</a>
                                <a data-glf-cuid="44924cb1-a894-400a-834d-6b734eaa878f" data-glf-ruid="f7b0ec65-18d8-4481-906e-1dcdee7cf621" class="theme-btn normal-btn-home">
                                    Beställa online
                                </a>
                                <!-- Lunch button, shown/hidden via JS -->
                                <a  data-glf-cuid="0630ca10-6091-4114-b534-db8a223690ca" data-glf-ruid="cd0f7ccc-e6c8-4491-8b5a-c98a2347b85d" class="theme-btn lunch-btn-home" style="display:none;">
                                    Beställa online
                                </a>
                                <a href="{{ route('main-menu') }}" class="theme-btn">Alla Cart Meny</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-single" style="background-image: url(assets/img/hero/slider-2.webp);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <div class="hero-content">
                            <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">
                                Välkommen till Truly Indian
                            </h6>
                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                Vi serverar den ursprungliga <span>smaken</span> du älskar
                            </h1>
                            <p data-animation="fadeInLeft" data-delay=".75s">
                                Våra rätter är fyllda med noga utvalda kryddor och färska ingredienser som fångar den äkta smaken av Indien.
                            </p>
                            <div class="d-flex flex-column flex-lg-row align-items-center gap-2 justify-content-center" data-animation="fadeInUp" data-delay="1s">
                                <a href="{{ route('lunch-menu') }}" class="theme-btn">Lunch Meny</a>
                                <a data-glf-cuid="44924cb1-a894-400a-834d-6b734eaa878f" data-glf-ruid="f7b0ec65-18d8-4481-906e-1dcdee7cf621" class="theme-btn normal-btn-home">
                                    Beställa online
                                </a>
                                <!-- Lunch button, shown/hidden via JS -->
                                <a data-glf-cuid="0630ca10-6091-4114-b534-db8a223690ca" data-glf-ruid="cd0f7ccc-e6c8-4491-8b5a-c98a2347b85d" class="theme-btn lunch-btn-home" style="display:none;">
                                    Beställa online
                                </a>
                                <a href="{{ route('main-menu') }}" class="theme-btn">Alla Cart Meny</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-single" style="background-image: url(assets/img/hero/slider-3.webp);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <div class="hero-content">
                            <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">
                                Välkommen till Truly Indian
                            </h6>
                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                Vi serverar den ursprungliga <span>smaken</span> du älskar
                            </h1>
                            <p data-animation="fadeInLeft" data-delay=".75s">
                                Våra rätter är fyllda med noga utvalda kryddor och färska ingredienser som fångar den äkta smaken av Indien.
                            </p>
                            <div class="d-flex flex-column flex-lg-row align-items-center gap-2 justify-content-center"  data-animation="fadeInUp" data-delay="1s">
                                <a href="{{ route('lunch-menu') }}" class="theme-btn">Lunch Meny</a>
                                <a data-glf-cuid="44924cb1-a894-400a-834d-6b734eaa878f" data-glf-ruid="f7b0ec65-18d8-4481-906e-1dcdee7cf621" class="theme-btn normal-btn-home">
                                    Beställa online
                                </a>
                                <!-- Lunch button, shown/hidden via JS -->
                                <a data-glf-cuid="0630ca10-6091-4114-b534-db8a223690ca" data-glf-ruid="cd0f7ccc-e6c8-4491-8b5a-c98a2347b85d" class="theme-btn lunch-btn-home" style="display:none;">
                                    Beställa online
                                </a>
                                <a href="{{ route('main-menu') }}" class="theme-btn">Alla Cart Meny</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero area end -->
@endsection
@php
    $lunchStart = env('LUNCH_START', '11:00');
    $lunchEnd = env('LUNCH_END', '14:30');
    $lunchDays = env('LUNCH_DAYS', '1,2,3,4,5'); // CSV string
@endphp

<script>
    function initializeLunchButtons() {
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

        const normalBtns = document.querySelectorAll('.normal-btn-home');
        const lunchBtns = document.querySelectorAll('.lunch-btn-home');

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
                lunchBtns.forEach(btn => btn.style.display = 'inline-block');
                normalBtns.forEach(btn => btn.style.display = 'none');
            } else {
                lunchBtns.forEach(btn => btn.style.display = 'none');
                normalBtns.forEach(btn => btn.style.display = 'inline-block');
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
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initializeLunchButtons);
    } else {
        initializeLunchButtons();
    }
</script>