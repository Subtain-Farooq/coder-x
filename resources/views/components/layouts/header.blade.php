<div class="absolute inset-x-0 top-0">
    <div class="absolute inset-0 top-0 w-full h-screen bg-gradient-to-b from-primary-200 to-white dark:from-primary-950/50 dark:via-secondary-900 dark:to-secondary-950"></div>
    
    <div class="relative z-20 mx-auto max-w-7xl box">
        <nav class="lg:grid content-center lg:grid-cols-3 flex items-center justify-between gap-5 py-7 ">
            <div class="">
                <a href="/" class="inline-flex items-center gap-2 ">
                    <svg class="w-10 h-10 fill-current dark:text-secondary-100 text-secondary-950" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current"
                        viewBox="0 0 256 256">
                        <path
                            d="M173.19,155c-9.92,17.16-26.39,27-45.19,27s-35.27-9.84-45.19-27a6,6,0,0,1,10.38-6c7.84,13.54,20.2,21,34.81,21s27-7.46,34.81-21a6,6,0,1,1,10.38,6ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128ZM92,118a10,10,0,1,0-10-10A10,10,0,0,0,92,118Zm72-20a10,10,0,1,0,10,10A10,10,0,0,0,164,98Z">
                        </path>
                    </svg>
                    <span class="text-3xl dark:text-secondary-100 text-secondary-950">Coder-X</span>
                </a>
            </div>

            <div class="lg:flex hidden items-center justify-center gap-12">
                <a href="{{ route('home') }}"
                    class="text-lg font-semibold transition-colors duration-200 ease-in-out text-secondary-950 dark:text-secondary-100 hover:text-primary-600 dark:hover:text-primary-600">
                    Home
                </a>
                <a href="{{ route('about') }}"
                    class="text-lg font-semibold transition-colors duration-200 ease-in-out text-secondary-950 dark:text-secondary-100 hover:text-secondary-400">
                    About
                </a>
                <a href="{{ route('projects') }}"
                    class="text-lg font-semibold transition-colors duration-200 ease-in-out text-secondary-950 dark:text-secondary-100 hover:text-secondary-400">
                    Projects
                </a>
                <a href="{{ route('contact') }}"
                    class="text-lg font-semibold transition-colors duration-200 ease-in-out text-secondary-950 dark:text-secondary-100 hover:text-secondary-400">
                    Contact
                </a>
            </div>

            <div class="flex flex-row-reverse items-center gap-5">
                <button class="dark:text-white text-secondary-900 lg:hidden">
                    <svg class="w-7 h-7 fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>
                </button>
                <button type="button" @click="darkMode = !darkMode">
                    <svg x-show="darkMode" class="w-6 h-6 transition-all duration-300 ease-in-out fill-current dark:text-white text-secondary-900 hover:rotate-45" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current" viewBox="0 0 256 256"><path d="M120,40V16a8,8,0,0,1,16,0V40a8,8,0,0,1-16,0Zm72,88a64,64,0,1,1-64-64A64.07,64.07,0,0,1,192,128Zm-16,0a48,48,0,1,0-48,48A48.05,48.05,0,0,0,176,128ZM58.34,69.66A8,8,0,0,0,69.66,58.34l-16-16A8,8,0,0,0,42.34,53.66Zm0,116.68-16,16a8,8,0,0,0,11.32,11.32l16-16a8,8,0,0,0-11.32-11.32ZM192,72a8,8,0,0,0,5.66-2.34l16-16a8,8,0,0,0-11.32-11.32l-16,16A8,8,0,0,0,192,72Zm5.66,114.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32-11.32ZM48,128a8,8,0,0,0-8-8H16a8,8,0,0,0,0,16H40A8,8,0,0,0,48,128Zm80,80a8,8,0,0,0-8,8v24a8,8,0,0,0,16,0V216A8,8,0,0,0,128,208Zm112-88H216a8,8,0,0,0,0,16h24a8,8,0,0,0,0-16Z"></path></svg>
                    <svg x-show="!darkMode" class="w-6 h-6 fill-current dark:text-white text-secondary-900" width="32" height="32" fill="fill-current" viewBox="0 0 256 256"><path d="M240,96a8,8,0,0,1-8,8H216v16a8,8,0,0,1-16,0V104H184a8,8,0,0,1,0-16h16V72a8,8,0,0,1,16,0V88h16A8,8,0,0,1,240,96ZM144,56h8v8a8,8,0,0,0,16,0V56h8a8,8,0,0,0,0-16h-8V32a8,8,0,0,0-16,0v8h-8a8,8,0,0,0,0,16Zm72.77,97a8,8,0,0,1,1.43,8A96,96,0,1,1,95.07,37.8a8,8,0,0,1,10.6,9.06A88.07,88.07,0,0,0,209.14,150.33,8,8,0,0,1,216.77,153Zm-19.39,14.88c-1.79.09-3.59.14-5.38.14A104.11,104.11,0,0,1,88,64c0-1.79,0-3.59.14-5.38A80,80,0,1,0,197.38,167.86Z"></path></svg>
                </button>
                
                <a href="#"
                    class="xl:flex hidden items-center justify-center gap-2 text-lg font-medium text-secondary-950 dark:text-secondary-100 hover:text-secondary-500">
                    <svg class="w-6 h-6 fill-current mt-0.5" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                        fill="fill-current" viewBox="0 0 256 256">
                        <path
                            d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48ZM203.43,64,128,133.15,52.57,64ZM216,192H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z">
                        </path>
                    </svg>
                    <span>subtainfrq@gmail.com</span>
                </a>
            </div>
        </nav>
    </div>
</div>
