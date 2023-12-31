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
    </head>
    <body class="relative font-sans antialiased bg-white dark:bg-slate-950 overflow-x-hidden">
        <div class="absolute inset-0 top-0 w-full h-screen bg-gradient-to-br from-primary-100 via-white to-white dark:from-primary-950/50 dark:via-secondary-950 dark:to-secondary-950"></div>
        <x-layouts.header />
            <div class="relative flex flex-col xl:gap-64 lg:gap-52 sm:gap-40 gap-28 lg:pt-56 sm:pt-36 pt-28 xl:pb-32">
                {{ $slot }}
            </div>
        <x-layouts.footer/>
        @stack('js')
        <script src="{{ asset('assets/fslightbox.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            var projectsSwiper = new Swiper(".projectsSwiper", {
                slidesPerView: 'auto',
                spaceBetween: 30,
                navigation: {
                    nextEl: ".projectsSwiper-next",
                    prevEl: ".projectsSwiper-prev",
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
