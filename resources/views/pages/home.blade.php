<x-app-layout>
    <section class="relative max-w-6xl mx-auto snap-always snap-start">
        <div class="flex items-center justify-center w-full gap-28">
            <div class="flex flex-col w-full gap-10 mt-12">
                <h1 class="relative flex flex-col gap-6">
                    <x-icons.subtitle-lines/>
                    <span class="block text-2xl font-bold leading-tight text-secondary-700 dark:text-secondary-400">
                        "Hey, I’m Subtain Farooq
                    </span>
                    <span class="text-6xl font-bold leading-tight tracking-wide text-secondary-900 dark:text-secondary-50">
                        Crafting Seamless <br/> Web Experiences with Frontend Excellence
                    </span>
                </h1>
                <a href="" class="btn-primary">
                    Get in Touch
                </a>
            </div>
            <img class="z-10 w-full max-w-xs shrink-0" alt="" src="{{ asset('assets/illustration/img-3.png') }}" />
        </div>
    </section>

    <section class="max-w-6xl mx-auto snap-always snap-start">
        <div class="flex flex-col items-center justify-center w-full gap-20">
            <div class="relative z-10 flex flex-col items-center justify-center gap-8">
                <h2 class="text-5xl font-bold text-center text-secondary-950 dark:text-white">
                    My Services
                </h2>
                <p class="max-w-2xl mx-auto text-lg font-medium leading-7 text-center text-secondary-500 dark:text-secondary-400">
                    Transform your online presence with my expert web design services. We specialize in creating beautiful websites and applications that drive results.
                </p>
            </div>
            <div class="relative z-0 flex items-center justify-center w-full">
                <div class="absolute bg-primary-50 dark:bg-primary-950 blur-3xl rounded-[32px] w-[768px] mx-auto h-96"></div>
                <div class="relative grid w-full grid-cols-2 gap-8">
                    <div class="w-full rounded-[32px] border-2 border-primary-50 dark:border-primary-300/20 bg-white/50 dark:bg-black/20 backdrop-blur dark:backdrop-blur-lg">
                        <div class="flex gap-5 px-8 py-9">
                            <div class="flex items-center justify-center w-16 h-16 shrink-0 bg-sky-50 dark:bg-sky-600 rounded-3xl">
                                <x-phosphor-pen-nib-fill class="w-10 h-10 fill-current text-sky-300 dark:text-sky-100" />
                            </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="text-2xl font-bold text-secondary-950 dark:text-white">
                                    Web Design
                                </h3>
                                <p class="max-w-lg mx-auto text-base font-medium leading-7 text-secondary-500 dark:text-secondary-400">
                                    Enhance your online presence with our custom website design services that are tailored to your brand and business goals.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full rounded-[32px] border-2 border-primary-50 dark:border-primary-300/20 bg-white/50 dark:bg-black/20 backdrop-blur dark:backdrop-blur-lg">
                        <div class="flex gap-5 px-8 py-9">
                            <div class="flex items-center justify-center w-16 h-16 shrink-0 bg-rose-50 dark:bg-rose-600 rounded-3xl">
                                <x-phosphor-browser-fill class="w-10 h-10 fill-current text-rose-300 dark:text-rose-100"  />
                            </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="text-2xl font-bold text-secondary-950 dark:text-white">
                                    Landing Page Design
                                </h3>
                                <p class="max-w-lg mx-auto text-base font-medium leading-7 text-secondary-500 dark:text-secondary-400">
                                    Boost your lead generation efforts with our eye-catching landing page design that is optimized for maximum conversions
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full rounded-[32px] border-2 border-primary-50 dark:border-primary-300/20 bg-white/50 dark:bg-black/20 backdrop-blur dark:backdrop-blur-lg">
                        <div class="flex gap-5 px-8 py-9">

                            <div class="flex items-center justify-center w-16 h-16 shrink-0 bg-emerald-50 dark:bg-emerald-600 rounded-3xl">
                                <x-phosphor-figma-logo-fill class="w-10 h-10 fill-current text-emerald-300 dark:text-emerald-100" />
                            </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="text-2xl font-bold text-secondary-950 dark:text-white">
                                    Figma / PSD to HTML
                                </h3>
                                <p class="max-w-lg mx-auto text-base font-medium leading-7 text-secondary-500 dark:text-secondary-400">
                                    Bring your designs to life with our Figma/PSD to HTML conversion service that is both functional and responsive.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full rounded-[32px] border-2 border-primary-50 dark:border-primary-300/20 bg-white/50 dark:bg-black/20 backdrop-blur dark:backdrop-blur-lg">
                        <div class="flex gap-5 px-8 py-9">
                            <div class="flex items-center justify-center w-16 h-16 shrink-0 bg-cyan-50 dark:bg-cyan-600 rounded-3xl">
                                <x-phosphor-layout-fill class="w-10 h-10 fill-current text-cyan-300 dark:text-cyan-100" />
                             </div>
                            <div class="flex flex-col gap-3">
                                <h3 class="text-2xl font-bold text-secondary-950 dark:text-white">
                                    Dashboard Design
                                </h3>
                                <p class="max-w-lg mx-auto text-base font-medium leading-7 text-secondary-500 dark:text-secondary-400">
                                    Achieve your business objectives with a perfectly crafted web application that meets your unique requirements and specifications.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="btn-primary">
                Get in Touch
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
                    <button type="button" class="flex items-center justify-center w-20 h-20 -mr-32 transition-colors duration-300 ease-in-out rounded-full cursor-pointer swiper-review-next bg-secondary-100 dark:bg-secondary-900 text-secondary-600 hover:text-white dark:hover:text-secondary-100 hover:bg-secondary-950 dark:hover:bg-primary-500">
                        <x-phosphor-caret-right  class="w-8 h-8 -mr-0.5 transition-colors duration-300 ease-in-out"/>
                    </button>
                    <button type="button" class="flex items-center justify-center w-20 h-20 -ml-32 transition-colors duration-300 ease-in-out rounded-full cursor-pointer swiper-review-prev bg-secondary-100 dark:bg-secondary-900 text-secondary-600 hover:text-white dark:hover:text-secondary-100 hover:bg-secondary-950 dark:hover:bg-primary-500">
                        <x-phosphor-caret-left  class="w-8 h-8 -ml-0.5 transition-colors duration-300 ease-in-out"/>
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
                        {{-- I'm a full-time freelance web developer with experience in Laravel, Tailwind CSS/UI, Headless UI, Alpine JS, and Figma, PSD, XD, Sketch to HTML conversions using Tailwind CSS and Alpine JS. I'm excited to work with you and help bring your web development projects to life. Let's connect and discuss how I can support your business needs. --}}
                        Hi, I'm Subtain Farooq, a passionate and skilled website developer with expertise in a range of cutting-edge technologies. With a strong foundation in web development, I specialize in creating dynamic, responsive, and user-friendly websites.
                    </p>
                </div>
                <a href="" class="btn-primary">
                    Read More
                </a>
            </div>
        </div>
    </div>
</section>

<section class="w-full max-w-6xl mx-auto">
    <div class="flex flex-col w-full gap-24">
        <div class="flex flex-col items-center gap-8">
            <h2 class="text-secondary-950 dark:text-white  text-[42px] text-center font-bold">
                My Skills & Software
            </h2>
            <p class="max-w-xl mx-auto text-lg font-medium leading-8 text-center text-secondary-500 dark:text-secondary-400">
                Explore My Toolbox: Unleash the potential of my skills and software, tailored to elevate your web projects
            </p>
        </div>

        <div class="grid grid-cols-3">
            <div class="flex flex-col items-center gap-8">
                <div class="rounded-[28px] dark:bg-sky-500 bg-sky-100 dark:text-sky-100 text-sky-400 w-20 h-20 flex items-center justify-center">
                    <x-phosphor-paint-bucket-fill class="w-10 h-10 fill-current " />
                </div>
                <h2 class="text-2xl font-bold text-secondary-950 dark:text-white ">
                    Frontend Development
                </h2>
                <ul class="space-y-4 text-lg font-semibold text-center text-secondary-500 dark:text-secondary-400">
                    <li>
                        HTML
                    </li>
                    <li>
                        Tailwind CSS
                    </li>
                    <li>
                        Tailwind UI
                    </li>
                    <li>
                        Headless UI
                    </li>
                    <li>
                        Alpine JS
                    </li>
                    <li>
                        Laravel Blade
                    </li>
                </ul>
            </div>

            <div class="flex flex-col items-center gap-8 border-x dark:border-secondary-800 border-secondary-200">
                <div class="rounded-[28px] dark:bg-violet-500 bg-violet-100 dark:text-violet-100 text-violet-500 w-20 h-20 flex items-center justify-center">
                    <x-phosphor-codesandbox-logo-fill class="w-10 h-10 fill-current"  />
                </div>
                <h2 class="text-2xl font-bold text-secondary-950 dark:text-white ">
                    Backend Development
                </h2>

                <ul class="space-y-4 text-lg font-semibold text-center text-secondary-500 dark:text-secondary-400">
                    <li>
                        Laravel
                    </li>
                    <li>
                        Livewire
                    </li>
                    <li>
                       Tailwind CSS
                    </li>
                    <li>
                        Alpine JS
                    </li>
                    <li>
                       MySQL
                    </li>
                </ul>
            </div>

            <div class="flex flex-col items-center gap-8">
                <div class="rounded-[28px] dark:bg-rose-500 dark:text-rose-100 bg-rose-100 text-rose-500 w-20 h-20 flex items-center justify-center">
                    <x-phosphor-suitcase-simple-fill class="w-10 h-10 fill-current" />
                </div>
                <h2 class="text-2xl font-bold text-secondary-950 dark:text-white ">
                    Tools & Technologies
                </h2>

                <ul class="space-y-4 text-lg font-semibold text-center text-secondary-500 dark:text-secondary-400">
                    <li>
                        VS Code
                    </li>
                    <li>
                        PHP Storm
                    </li>
                    <li>
                       Figma
                    </li>
                    <li>
                       Adobe Photoshop
                    </li>
                    <li>
                        Adobe XD
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="overflow-hidden">
    <section class="max-w-6xl mx-auto w-full">
        <div class=" w-full">
            <div class="relative space-y-20 swiper projectsSwiper w-full">

                <div class="flex items-center justify-between w-full gap-5">
                    <h2 class="max-w-md text-5xl font-bold leading-tight text-secondary-950 dark:text-white">
                        Take a look at my portfolio
                    </h2>
                    <div class="flex flex-row-reverse gap-5">
                        <button type="button" class="flex items-center justify-center w-20 h-20 -mr-32 transition-colors duration-300 ease-in-out rounded-full cursor-pointer projectsSwiper-next bg-secondary-100 dark:bg-secondary-900 text-secondary-600 hover:text-white dark:hover:text-secondary-100 hover:bg-secondary-950 dark:hover:bg-primary-500">
                            <x-phosphor-caret-right  class="w-8 h-8 -mr-0.5 transition-colors duration-300 ease-in-out"/>
                        </button>
                        <button type="button" class="flex items-center justify-center w-20 h-20 -ml-32 transition-colors duration-300 ease-in-out rounded-full cursor-pointer projectsSwiper-prev bg-secondary-100 dark:bg-secondary-900 text-secondary-600 hover:text-white dark:hover:text-secondary-100 hover:bg-secondary-950 dark:hover:bg-primary-500">
                            <x-phosphor-caret-left  class="w-8 h-8 -ml-0.5 transition-colors duration-300 ease-in-out"/>
                        </button>
                    </div>
                </div>

                <div class="flex w-full swiper-wrapper">

                    @foreach ($projects as $project)
                        <div class="relative w-1/2 swiper-slide group shrink-0">
                            <div class="flex flex-col gap-10">
                                <div class="h-[410px] relative overflow-hidden rounded-3xl">
                                    <img class="relative object-cover object-top w-full h-[410px] border-4 border-primary-200/40 dark:border-primary-300/20 rounded-3xl" src="{{ asset($project->featured_image) }}" />
                                    <div class="absolute inset-0 duration-300 ease-in-out rounded-3xl group-hover:bg-transparent"></div>
                                </div>
                                <div class="flex flex-col gap-4">
                                    <h3 class="text-2xl font-black tracking-wide dark:text-primary-500 text-primary-500">
                                        {{ $project->title }}
                                    </h3>
                                    <p class="text-lg leading-7 text-secondary-500 dark:text-secondary-400 line-clamp-2">
                                        {{ $project->short_description }}
                                    </p>
                                    <p class="text-secondary-950 dark:text-white text-lg inline-flex items-center gap-1.5 font-bold dark:font-semibold group-hover:text-primary-300 transition-all ease-in-out duration-300">
                                        View More Details
                                        <x-phosphor-arrow-right class="w-5 h-5 fill-current group-hover:translate-x-1.5 mt-0.5 transition-all ease-in-out duration-300" />
                                    </p>
                                </div>
                            </div>
                            <a href="{{ route('project', ['project' => $project->slug]) }}" class="absolute inset-0 "></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>


</x-app-layout>
