<x-app-layout>
    <section class="relative max-w-6xl mx-auto snap-always snap-start">
        <div class="flex items-center justify-center w-full gap-28">
            <div class="flex flex-col max-w-2xl gap-10 mt-12 shrink-0">
                <h1 class="relative flex flex-col gap-6">
                    <svg class="absolute w-12 fill-current -left-10 -top-12 text-secondary-500 dark:text-secondary-400"
                        width="68" height="74" viewBox="0 0 68 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.4259 68.5278C16.0259 66.7318 9.32534 65.8258 2.82534 64.9958C1.42534 64.8218 0.125535 65.7928 0.0255346 67.1608C-0.174465 68.5298 0.826121 69.7817 2.12612 69.9557C8.42612 70.7548 14.9255 71.6097 21.0255 73.3387C22.3255 73.7137 23.7261 72.9418 24.1261 71.6138C24.5261 70.2868 23.7259 68.9038 22.4259 68.5278Z"
                            fill="fill-current" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M41.8251 43.0648C31.5251 32.5538 19.9251 23.3958 9.8251 12.6028C8.9251 11.5948 7.3251 11.5408 6.3251 12.4818C5.3251 13.4238 5.22549 15.0078 6.22549 16.0158C16.3255 26.8398 27.9255 36.0278 38.2255 46.5698C39.2255 47.5538 40.8251 47.5678 41.8251 46.5998C42.7251 45.6328 42.8251 44.0488 41.8251 43.0648Z"
                            fill="fill-current" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M61.1264 2.63576C61.4264 8.65176 61.7259 14.6678 62.0259 20.6848C62.0259 22.0628 63.2264 23.1268 64.6264 23.0598C66.0264 22.9918 67.0259 21.8188 67.0259 20.4398C66.7259 14.4138 66.4264 8.38876 66.1264 2.36376C66.0264 0.985757 64.8262 -0.0712432 63.4262 0.00375683C62.1262 0.0787568 61.0264 1.25876 61.1264 2.63576Z"
                            fill="fill-current" />
                    </svg>
                    <span class="block text-2xl font-bold leading-tight text-secondary-700 dark:text-secondary-400">
                        "Hey, I’m Subtain Farooq
                    </span>
                    <span class="font-bold leading-tight tracking-wider text-7xl text-secondary-900 dark:text-secondary-50">
                        Expert frontend dev transforming web Experiences
                    </span>
                </h1>
                <a href="" class="transition-all ease-in-out duration-500 hover:bg-white hover:text-primary-600 border-2 border-primary-500 rounded-3xl text-center font-bold text-xl text-white bg-primary-500 w-56 h-[72px]  inline-flex items-center justify-center hover:scale-95">Get
                    in Touch
                </a>
            </div>
            <img class="z-10 w-full max-w-sm shrink-0" alt="" src="{{ asset('assets/illustration/img-3.png') }}" />
        </div>
    </section>

    <section class="max-w-6xl mx-auto snap-always snap-start">
        <div class="flex flex-col items-center justify-center w-full gap-20">
            <div class="relative z-10 flex flex-col items-center justify-center gap-8">
                <h2 class="text-5xl font-bold text-center text-secondary-950 dark:text-white">
                    My Services
                </h2>
                <p class="max-w-2xl mx-auto text-lg font-medium leading-7 text-center text-secondary-500 dark:text-secondary-400">
                    Transform your online presence with our expert web design services. We specialize in creating beautiful websites and applications that drive results.
                </p>
            </div>
            <div class="relative z-0 flex items-center justify-center w-full">
                <div class="absolute bg-primary-50 dark:bg-primary-950 blur-3xl rounded-[32px] w-[768px] mx-auto h-96"></div>
                <div class="relative grid w-full grid-cols-2 gap-8">
                    <div class="w-full rounded-[32px] border-2 border-primary-50 dark:border-primary-300/20 bg-white/50 dark:bg-black/20 backdrop-blur dark:backdrop-blur-lg">
                        <div class="px-8 py-9 flex  gap-5">
                            <div class="flex items-center justify-center w-16 h-16 shrink-0 bg-sky-50 dark:bg-sky-900 rounded-3xl">
                                <x-phosphor-pen-nib-fill class="w-10 h-10 fill-current text-sky-300 dark:text-sky-200" />
                            </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="text-2xl font-bold text-secondary-950 dark:text-white">
                                    Web Design
                                </h3>
                                <p class="text-base leading-7 text-secondary-500 dark:text-secondary-400 font-medium max-w-lg mx-auto">
                                    Enhance your online presence with our custom website design services that are tailored to your brand and business goals.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full rounded-[32px] border-2 border-primary-50 dark:border-primary-300/20 bg-white/50 dark:bg-black/20 backdrop-blur dark:backdrop-blur-lg">
                        <div class="px-8 py-9 flex  gap-5">
                            <div class="flex items-center justify-center w-16 h-16 shrink-0 bg-rose-50 dark:bg-rose-900 rounded-3xl">
                                <x-phosphor-browser-fill class="w-10 h-10 fill-current text-rose-300 dark:text-rose-200"  />
                            </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="text-2xl font-bold text-secondary-950 dark:text-white">
                                    Landing Page Design
                                </h3>
                                <p class="text-base leading-7 text-secondary-500 dark:text-secondary-400 font-medium max-w-lg mx-auto">
                                    Boost your lead generation efforts with our eye-catching landing page design that is optimized for maximum conversions
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full rounded-[32px] border-2 border-primary-50 dark:border-primary-300/20 bg-white/50 dark:bg-black/20 backdrop-blur dark:backdrop-blur-lg">
                        <div class="px-8 py-9 flex  gap-5">

                            <div class="flex items-center justify-center w-16 h-16 shrink-0 bg-emerald-50 dark:bg-emerald-900 rounded-3xl">
                                <x-phosphor-figma-logo-fill class="w-10 h-10 fill-current text-emerald-300 dark:text-emerald-200" />
                            </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="text-2xl font-bold text-secondary-950 dark:text-white">
                                    Figma / PSD to HTML
                                </h3>
                                <p class="text-base leading-7 text-secondary-500 dark:text-secondary-400 font-medium max-w-lg mx-auto">
                                    Bring your designs to life with our Figma/PSD to HTML conversion service that is both functional and responsive.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full rounded-[32px] border-2 border-primary-50 dark:border-primary-300/20 bg-white/50 dark:bg-black/20 backdrop-blur dark:backdrop-blur-lg">
                        <div class="px-8 py-9 flex  gap-5">
                            <div class="flex items-center justify-center w-16 h-16 shrink-0 bg-indigo-50 dark:bg-indigo-900 rounded-3xl">
                                <x-phosphor-layout-fill class="w-10 h-10 text-indigo-300 fill-current dark:text-indigo-200" />
                             </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="text-2xl font-bold text-secondary-950 dark:text-white">
                                    Dashboard Design
                                </h3>
                                <p class="text-base leading-7 text-secondary-500 dark:text-secondary-400 font-medium max-w-lg mx-auto">
                                    Achieve your business objectives with a perfectly crafted web application that meets your unique requirements and specifications.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#"
                class="transition-all ease-in-out duration-500 hover:bg-white hover:text-primary-600 border-2 border-primary-500 rounded-3xl text-center font-bold text-xl text-white bg-primary-500 w-56 h-[72px]  inline-flex items-center justify-center hover:scale-95">Get
                in Touch
            </a>
        </div>
    </section>

    <section class="max-w-6xl mx-auto snap-always snap-start">
        <div class="flex flex-col items-center justify-center gap-16">
            <div class="relative flex flex-col items-center justify-center gap-8">
                <h2 class="text-5xl font-bold text-center text-secondary-950 dark:text-white">
                    What my clients say about my work
                </h2>
                <p
                    class="text-center text-lg leading-7 text-secondary-500 dark:text-secondary-400 font-medium max-w-[510px] mx-auto">
                    Delivering exceptional client experiences and achieving their business objectives is of utmost
                    importance to me.
                </p>
            </div>
            <div class="relative max-w-4xl mx-auto swiper mySwiperReviewe">
                <div class="flex w-full overflow-hidden swiper-wrapper">
                    <div class="relative w-full swiper-slide shrink-0">
                        <div class="absolute inset-0 bg-gradient-to-tr from-rose-200 via-sky-200 to-purple-100 dark:from-indigo-900 dark:via-sky-900 dark:to-primary-900 w-full h-full rounded-[28px]"></div>
                        <div class="p-1">
                            <div class="flex flex-col items-center justify-center w-full gap-8 px-20 h-96 bg-white/90 dark:bg-black/75 backdrop-blur-2xl rounded-3xl">
                                <blockquote class="text-2xl leading-normal text-center text-secondary-500 dark:text-secondary-400">
                                    I absolutely love working with Subtainfarooq. From start to finish the communication and work product is exactly what we are looking for. I will use him moving forward for all of our front end design needs with no hesitation at all.
                                </blockquote>
                                <p class="text-2xl font-bold text-center text-secondary-950 dark:text-white">Billy</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative w-full swiper-slide shrink-0">
                        <div class="absolute inset-0 bg-gradient-to-tr from-rose-200 via-sky-200 to-purple-100 dark:from-indigo-900 dark:via-sky-900 dark:to-primary-900 w-full h-full rounded-[28px]"></div>
                        <div class="p-1">
                            <div class="flex flex-col items-center justify-center w-full gap-8 px-20 h-96 bg-white/90 dark:bg-black/75 backdrop-blur-2xl rounded-3xl">
                                <blockquote class="text-2xl leading-normal text-center text-secondary-500 dark:text-secondary-400">
                                    I absolutely love working with Subtainfarooq. From start to finish the communication and work product is exactly what we are looking for. I will use him moving forward for all of our front end design needs with no hesitation at all.
                                </blockquote>
                                <p class="text-2xl font-bold text-center text-secondary-950 dark:text-white">Tomas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute z-20 flex flex-row-reverse items-center justify-between w-full gap-5 mt-4 top-1/3">
                    <button type="button"
                        class="flex items-center justify-center w-20 h-20 -mr-32 transition-colors duration-300 ease-in-out rounded-full cursor-pointer swiper-button-next bg-secondary-100 dark:bg-secondary-900 text-secondary-600 hover:text-white dark:hover:text-secondary-400 hover:bg-secondary-950">
                        <svg class="transition-colors duration-300 ease-in-out w-9 h-9" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                    <button type="button"
                        class="flex items-center justify-center w-20 h-20 -ml-32 transition-colors duration-300 ease-in-out rounded-full cursor-pointer swiper-button-prev bg-secondary-100 dark:bg-secondary-900 text-secondary-600 hover:text-white dark:hover:text-secondary-400 hover:bg-secondary-950">
                        <svg class="transition-colors duration-300 ease-in-out w-9 h-9" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>


<section class="max-w-6xl mx-auto snap-always snap-start">
    <div class="flex flex-row-reverse items-center justify-between w-full">
        <div class="w-full max-w-xl -mr-16 shrink-0">
            <img class="w-full" alt="" src="{{ asset('assets/illustration/about-me-2.png') }}" />
        </div>
        <div class="w-full">
            <div class="flex flex-col gap-10">
                <div class="flex flex-col gap-6">
                    <h2 class="text-5xl font-bold text-secondary-950 dark:text-white">
                        About Me
                    </h2>
                    <p class="text-lg font-medium leading-8 text-secondary-500 dark:text-secondary-400">
                        I'm a full-time freelance web developer with experience in Laravel, Tailwind CSS/UI, Headless UI, Alpine JS, and PSD to HTML conversions using Figma, XD, and Sketch. I'm excited to work with you and help bring your web development projects to life. Let's connect and discuss how I can support your business needs.
                    </p>
                </div>
                <a href=""
                    class="transition-all ease-in-out duration-500 hover:bg-white hover:text-primary-600 border-2 border-primary-500 rounded-3xl text-center font-bold text-xl text-white bg-primary-500 w-56 h-[72px]  inline-flex items-center justify-center hover:scale-95">
                    Read More
                </a>
            </div>
        </div>
    </div>
</section>

<div class="overflow-hidden">
    <section class="max-w-6xl mx-auto snap-always snap-start">
        <div class="flex items-center justify-center w-full">
            <div class="relative space-y-20 swiper mySwiper">

                <div class="flex items-center justify-between gap-5 w-full">
                    <h2 class="max-w-md text-5xl font-bold leading-tight text-secondary-950 dark:text-white">
                        Take a look at my design portfolio
                    </h2>
                    <div class="flex flex-row-reverse gap-5">
                        <button type="button"
                            class="flex items-center justify-center w-20 h-20 -mr-32 transition-colors duration-300 ease-in-out rounded-full cursor-pointer swiper-button-next bg-secondary-100 dark:bg-secondary-900 text-secondary-600 hover:text-white dark:hover:text-secondary-400 hover:bg-secondary-950">
                            <svg class="transition-colors duration-300 ease-in-out w-9 h-9"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                        <button type="button"
                            class="flex items-center justify-center w-20 h-20 -ml-32 transition-colors duration-300 ease-in-out rounded-full cursor-pointer swiper-button-prev bg-secondary-100 dark:bg-secondary-900 text-secondary-600 hover:text-white dark:hover:text-secondary-400 hover:bg-secondary-950">
                            <svg class="transition-colors duration-300 ease-in-out w-9 h-9"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center w-full swiper-wrapper">

                    <div class="w-1/2 swiper-slide shrink-0 group">
                        <div class="flex flex-col gap-10">
                            <div class="h-[410px] relative overflow-hidden rounded-3xl">
                                <img class="relative object-cover object-top w-full h-[410px] border-4 border-primary-200/40 dark:border-primary-300/20 rounded-3xl" src="{{ asset('assets/images/img-21.png') }}" />
                                <div class="absolute inset-0 duration-300 ease-in-out rounded-3xl group-hover:bg-transparent"></div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <h3 class="text-2xl font-black tracking-wide dark:text-primary-500 text-primary-500">
                                Task manager web app design
                                </h3>
                                <p class="text-lg leading-7 text-secondary-500 dark:text-secondary-400 ">

                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus mattis nunc aliquam tincidunt est non. Viverra nec eu mi.

                                </p>
                                <a href="" class="text-secondary-950 dark:text-white text-lg inline-flex items-center gap-1.5 font-bold dark:font-semibold">
                            Visit the website
                                    <svg class="w-5 h-5 fill-current group-hover:translate-x-1.5 mt-0.5 transition-all ease-in-out duration-300"
                                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 swiper-slide shrink-0 group">
                        <div class="flex flex-col gap-10">
                            <div class="h-[410px] relative overflow-hidden rounded-3xl">
                                <img class="relative object-cover object-top w-full h-[410px] border-4 border-primary-200/40 dark:border-primary-300/20 rounded-3xl" src="{{ asset('assets/images/img-22.png') }}" />
                                <div class="absolute inset-0 duration-300 ease-in-out rounded-3xl group-hover:bg-transparent"></div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <h3 class="text-2xl font-black tracking-wide dark:text-primary-500 text-primary-500">
                                Task manager web app design
                                </h3>
                                <p class="text-lg leading-7 text-secondary-500 dark:text-secondary-400 ">

                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus mattis nunc aliquam tincidunt est non. Viverra nec eu mi.

                                </p>
                                <a href="" class="text-secondary-950 dark:text-white text-lg inline-flex items-center gap-1.5 font-bold dark:font-semibold">
                            Visit the website
                                    <svg class="w-5 h-5 fill-current group-hover:translate-x-1.5 mt-0.5 transition-all ease-in-out duration-300"
                                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                     <div class="w-1/2 swiper-slide shrink-0 group">
                        <div class="flex flex-col gap-10">
                            <div class="h-[410px] relative overflow-hidden rounded-3xl">
                                <img class="relative object-cover object-top w-full h-[410px] border-4 border-primary-100 dark:border-primary-300/20 rounded-3xl" src="{{ asset('assets/images/img-22.png') }}" />
                                <div class="absolute inset-0 duration-300 ease-in-out dark:bg-primary-950 mix-blend-color rounded-3xl group-hover:bg-transparent"></div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <h3 class="text-2xl font-black tracking-wide dark:text-primary-500 text-primary-500">
                                    Task Manageer Web App Design
                                </h3>
                                <p class="text-lg leading-7 text-secondary-500 dark:text-secondary-400 ">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus mattis nunc aliquam
                                    tincidunt est non. Viverra nec eu mi.
                                </p>

                                <a href=""
                                    class="text-secondary-950 dark:text-white text-lg inline-flex items-center gap-1.5 font-bold dark:font-semibold">
                                    Visit the website
                                    <svg class="w-5 h-5 fill-current group-hover:translate-x-1.5 mt-0.5 transition-all ease-in-out duration-300"
                                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 swiper-slide shrink-0 group">
                        <div class="flex flex-col gap-10">
                            <div class="h-[410px] relative overflow-hidden rounded-3xl">
                                <img class="relative object-cover object-top w-full h-[410px] border-4 border-primary-100 dark:border-primary-300/20 rounded-3xl" src="{{ asset('assets/images/img-22.png') }}" />
                                <div class="absolute inset-0 duration-300 ease-in-out dark:bg-primary-950 mix-blend-color rounded-3xl group-hover:bg-transparent"></div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <h3 class="text-2xl font-black tracking-wide dark:text-primary-500 text-primary-500">
                                    Task Manageer Web App Design
                                </h3>
                                <p class="text-lg leading-7 text-secondary-500 dark:text-secondary-400 ">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus mattis nunc aliquam
                                    tincidunt est non. Viverra nec eu mi.
                                </p>

                                <a href=""
                                    class="text-secondary-950 dark:text-white text-lg inline-flex items-center gap-1.5 font-bold dark:font-semibold">
                                    Visit the website
                                    <svg class="w-5 h-5 fill-current group-hover:translate-x-1.5 mt-0.5 transition-all ease-in-out duration-300"
                                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 swiper-slide shrink-0 group">
                        <div class="flex flex-col gap-10">
                            <div class="h-[410px] relative overflow-hidden rounded-3xl">
                                <img class="relative object-cover object-top w-full h-[410px] border-4 border-primary-100 dark:border-primary-300/20 rounded-3xl" src="{{ asset('assets/images/img-22.png') }}" />
                                <div class="absolute inset-0 duration-300 ease-in-out dark:bg-primary-950 mix-blend-color rounded-3xl group-hover:bg-transparent"></div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <h3 class="text-2xl font-black tracking-wide dark:text-primary-500 text-primary-500">
                                    Task Manageer Web App Design
                                </h3>
                                <p class="text-lg leading-7 text-secondary-500 dark:text-secondary-400">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus mattis nunc aliquam
                                    tincidunt est non. Viverra nec eu mi.
                                </p>

                                <a href=""
                                    class="text-secondary-950 dark:text-white text-lg inline-flex items-center gap-1.5 font-bold dark:font-semibold">
                                    Visit the website
                                    <svg class="w-5 h-5 fill-current group-hover:translate-x-1.5 mt-0.5 transition-all ease-in-out duration-300"
                                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 swiper-slide shrink-0 group">
                        <div class="flex flex-col gap-10">
                            <div class="h-[410px] relative overflow-hidden rounded-3xl">
                                <img class="relative object-cover object-top w-full h-[410px] border-4 border-primary-100 dark:border-primary-300/20 rounded-3xl" src="{{ asset('assets/images/img-22.png') }}" />
                                <div class="absolute inset-0 duration-300 ease-in-out dark:bg-primary-950 mix-blend-color rounded-3xl group-hover:bg-transparent"></div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <h3 class="text-2xl font-black tracking-wide dark:text-primary-500 text-primary-500">
                                    Task Manageer Web App Design
                                </h3>
                                <p class="text-lg leading-7 text-secondary-500 dark:text-secondary-400">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus mattis nunc aliquam
                                    tincidunt est non. Viverra nec eu mi.
                                </p>

                                <a href=""
                                    class="text-secondary-950 dark:text-white text-lg inline-flex items-center gap-1.5 font-bold dark:font-semibold">
                                    Visit the website
                                    <svg class="w-5 h-5 fill-current group-hover:translate-x-1.5 mt-0.5 transition-all ease-in-out duration-300"
                                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 swiper-slide shrink-0 group">
                        <div class="flex flex-col gap-10">
                            <div class="h-[410px] relative overflow-hidden rounded-3xl">
                                <img class="relative object-cover object-top w-full h-[410px] border-4 border-primary-100 dark:border-primary-300/20 rounded-3xl" src="{{ asset('assets/images/img-22.png') }}" />
                                <div class="absolute inset-0 duration-300 ease-in-out dark:bg-primary-950 mix-blend-color rounded-3xl group-hover:bg-transparent"></div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <h3 class="text-2xl font-black tracking-wide dark:text-primary-500 text-primary-500">
                                    Task Manageer Web App Design
                                </h3>
                                <p class="text-lg leading-7 text-secondary-500 dark:text-secondary-400">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus mattis nunc aliquam
                                    tincidunt est non. Viverra nec eu mi.
                                </p>
                                <a href=""
                                    class="text-secondary-950 dark:text-white text-lg inline-flex items-center gap-1.5 font-bold dark:font-semibold">
                                    Visit the website
                                    <svg class="w-5 h-5 fill-current group-hover:translate-x-1.5 mt-0.5 transition-all ease-in-out duration-300"
                                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


</x-app-layout>
