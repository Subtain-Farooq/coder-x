<x-app-layout>
    <section class="w-full max-w-6xl mx-auto">
        <div class="flex flex-row-reverse items-center w-full gap-16">
            <div class="flex flex-col w-1/2 gap-16 shrink-0">
                <h1 class="text-6xl font-bold leading-tight tracking-tight text-secondary-950 dark:text-white">
                    I’m Subtain Farooq, a Frontend Developer.
                </h1>
                <p class="text-lg font-medium leading-8 text-secondary-500 dark:text-secondary-400">
                    Hi, I'm Subtain Farooq, a passionate and skilled website developer with expertise in a range of cutting-edge technologies. With a strong foundation in web development, I specialize in creating dynamic, responsive, and user-friendly websites.
                </p>
            </div>
            <img class="w-full rounded-[32px] overflow-hidden" src="{{ asset('assets/images/my.jpg') }}" />
        </div>
    </section>

    <section class="w-full max-w-6xl mx-auto">
        <div class="relative flex items-start w-full gap-20">
            <div class="flex flex-col w-1/2 gap-16">
                <div class="flex flex-col gap-14">

                    <div class="flex flex-col gap-8">
                        <h2 class="text-3xl font-bold text-secondary-950 dark:text-white">
                            I have experience in:
                        </h2>

                        <ul class="pl-5 space-y-4 text-lg font-medium leading-8 list-disc text-secondary-500 dark:text-secondary-400">
                            <li>
                                <p>
                                    <b class="text-secondary-700 dark:text-secondary-100">
                                        Tailwind CSS:
                                    </b>
                                    Crafting beautiful and efficient user interfaces using the power of utility-first CSS framework.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b class="text-secondary-700 dark:text-secondary-100">
                                        Tailwind UI:
                                    </b>
                                    Implementing pre-designed, responsive components and layouts for a polished and consistent look and feel.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b class="text-secondary-700 dark:text-secondary-100">
                                        Headless UI:
                                    </b>
                                    Building accessible and customizable UI components for seamless web experiences.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b class="text-secondary-700 dark:text-secondary-100">
                                        Alpine JS:
                                    </b>
                                    Enhancing front-end interactivity and user experience through minimal JavaScript.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b class="text-secondary-700 dark:text-secondary-100">
                                        Laravel:
                                    </b>
                                    Developing robust and scalable web applications with the PHP web framework known for its elegance and simplicity.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b class="text-secondary-700 dark:text-secondary-100">
                                        Livewire:
                                    </b>
                                    Creating real-time, dynamic interfaces with Laravel Livewire for seamless interaction without writing extensive JavaScript.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b class="text-secondary-700 dark:text-secondary-100">
                                        MySQL:
                                    </b>
                                    Managing and optimizing database systems to ensure data integrity and optimal performance.
                                </p>
                            </li>
                        </ul>
                        <p class="text-lg font-medium leading-8 text-secondary-500 dark:text-secondary-400">
                            I am committed to delivering high-quality web solutions that align with your business goals and user expectations. My portfolio showcases a diverse range of projects that highlight my skills and expertise.
                        </p>
                    </div>

                    <div class="flex flex-col gap-8">
                        <h2 class="text-3xl font-bold text-secondary-950 dark:text-white">
                            My Approach
                        </h2>
                        <p class="text-lg font-medium leading-8 text-secondary-500 dark:text-secondary-400">
                            I believe in a collaborative approach to web development. By closely working with clients and understanding their unique needs, I ensure that each project is tailored to achieve its objectives effectively. My commitment to clean, maintainable code and a user-centric design philosophy sets me apart.
                        </p>
                    </div>

                </div>
            </div>
            <div class="sticky top-0 flex flex-col w-1/2 gap-8 ">
                <img class="w-full rounded-[32px] overflow-hidden" src="{{ asset('assets/images/my-2.jpg') }}" />
                <img class="w-full rounded-[32px] overflow-hidden" src="{{ asset('assets/images/my-1.jpg') }}" />
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
</x-app-layout>
