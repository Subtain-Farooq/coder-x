<!DOCTYPE html>
<html   lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark"
        x-data="{ darkMode: localStorage.getItem('dark') === 'true'}"
        x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
        x-bind:class="{ 'dark': darkMode }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coder-X</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('css')
    </head>
    <body class="relative font-sans antialiased bg-white dark:bg-slate-950">
        <div class="absolute inset-0 top-0 w-full h-screen bg-gradient-to-br from-primary-100 via-white to-white dark:from-primary-950/50 dark:via-secondary-950 dark:to-secondary-950"></div>
        <x-layouts.header />
            <div class="relative flex flex-col gap-64 pt-56 pb-32">
                {{ $slot }}
            </div>
        <x-layouts.footer/>
        @stack('js')
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: "auto",
                spaceBetween: 40,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

            });

            var swiper = new Swiper(".mySwiperReviewe", {
                effect: "fade",
                spaceBetween: 30,
                loop: true,
                navigation: {
                    nextEl: ".swiper-review-next",
                    prevEl: ".swiper-review-prev",
                },
            });
        </script>
    </body>
</html>
