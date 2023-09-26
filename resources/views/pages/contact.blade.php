<x-app-layout>
    <section class="max-w-6xl pt-24 mx-auto">
        <div class="flex flex-col w-full gap-24 py-24">
            <div class="flex flex-col items-center gap-8">
                <h2 class="text-6xl font-bold text-center text-secondary-950 dark:text-white">
                    Contact Me
                </h2>
                <p class="w-full max-w-3xl mx-auto text-lg font-medium leading-7 text-center text-secondary-500 dark:text-secondary-300">
                    Ready to discuss your next web project? Feel free to get in touch with me. I'm always excited to take on new challenges and turn your web development dreams into reality.
                </p>
            </div>

            <div class="flex w-full gap-16">
                <div class="w-full rounded-[32px] border-2 border-primary-50 dark:border-primary-300/20 bg-white/50 dark:bg-black/20 backdrop-blur dark:backdrop-blur-lg p-16">
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <label for="name" class="label">Name</label>
                            <div class="mt-2">
                                <input type="text" name="name" class="form-input-fields ">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="label">Email</label>
                            <div class="mt-2">
                                <input type="email" name="email" class="form-input-fields ">
                            </div>
                        </div>
                        <div>
                            <label for="phone" class="label">Phone</label>
                            <div class="mt-2">
                                <input type="text" name="phone" class="form-input-fields ">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="label">Subject</label>
                            <div class="mt-2">
                                <input type="text" name="subject" class="form-input-fields ">
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="subject" class="label">Message</label>
                            <div class="mt-2">
                                <textarea rows="7" class="form-input-fields "></textarea>
                            </div>
                        </div>
                        <a href=""
                            class="transition-all ease-in-out duration-500 hover:bg-white hover:text-primary-600 border-2 border-primary-500 rounded-3xl text-center font-bold text-xl text-white bg-primary-500 w-56 h-[72px]  inline-flex items-center justify-center hover:scale-95">
                            Send Message
                        </a>
                    </div>
                </div>

                <div class="w-full max-w-xs shrink-0">
                    <div>
                        <h2 class="text-3xl font-bold text-secondary-500 dark:text-secondary-300">Contact Information</h2>
                        {{-- <p class="mt-4 text-lg font-medium leading-6 text-secondary-500 dark:text-secondary-300">Lorem ipsum dolor sit amet con
                            sec etur adipiscing elit.</p> --}}
                    </div>
                    <div class="flex flex-col gap-5 mt-12">
                        <a href="mailto:subtain@coder-x.com" class="flex items-center gap-4 text-lg font-semibold transition-colors duration-300 ease-in-out text-secondary-500 hover:text-secondary-950 dark:hover:text-secondary-400">
                            <x-phosphor-envelope-simple class="fill-current w-7 h-7"/>
                            subtain@coder-x.com
                        </a>
                        <a href="mailto:subtainfrq@gmail.com" class="flex items-center gap-4 text-lg font-semibold transition-colors duration-300 ease-in-out text-secondary-500 hover:text-secondary-950 dark:hover:text-secondary-400">
                            <x-phosphor-at class="fill-current w-7 h-7"/>
                            subtainfrq@gmail.com
                        </a>
                        <a href="" class="flex items-center gap-4 text-lg font-semibold transition-colors duration-300 ease-in-out text-secondary-500 hover:text-secondary-950 dark:hover:text-secondary-400">
                            <x-phosphor-whatsapp-logo class="fill-current w-7 h-7"/>
                            +92 300 799 8354
                        </a>
                        <a href="" class="flex items-center gap-4 text-lg font-semibold transition-colors duration-300 ease-in-out text-secondary-500 hover:text-secondary-950 dark:hover:text-secondary-400">
                            <x-phosphor-telegram-logo class="fill-current w-7 h-7" />
                            +92 300 799 8354
                        </a>
                        <a href="" class="flex items-center gap-4 text-lg font-semibold transition-colors duration-300 ease-in-out text-secondary-500 hover:text-secondary-950 dark:hover:text-secondary-400">
                            <x-phosphor-linkedin-logo class="fill-current w-7 h-7" />
                            subtain.farooq
                        </a>
                    </div>
                </div>
            </div>

            <div class="pt-24">
                <div class="relative flex flex-col items-center justify-center gap-8 mb-24">
                    <h2 class="text-5xl font-bold text-center text-secondary-950 dark:text-white">
                        Frequently Asked Questions
                    </h2>
                    <p class="max-w-lg mx-auto text-lg font-medium leading-8 text-center text-secondary-500 dark:text-secondary-400">
                        Get quick answers to common queries with our Frequently Asked Questions section. Find solutions and insights to streamline your experience.
                    </p>
                </div>

                <div class="max-w-4xl mx-auto divide-y">
                    <div class="group" x-data="{ open: false }">
                        <div class="flex items-start justify-between py-10 cursor-pointer"
                            @click="open = !open">
                            <h4 class="text-2xl font-extrabold select-none text-secondary-950 dark:text-white">
                                What technologies do you specialize in?
                            </h4>
                            <div class="bg-secondary-200 dark:bg-secondary-900 group-hover:bg-secondary-800 text-secondary-900 dark:text-secondary-500 group-hover:text-white rounded-xl w-10 h-10 flex items-center justify-center -mt-0.5 transition-colors ease-in-out duration-200">
                                <x-phosphor-minus class="absolute w-5 h-5 fill-current"/>
                                <x-phosphor-minus class="absolute w-5 h-5 transition-all duration-200 ease-in-out fill-current" ::class="open ? '' : '-rotate-90'" />
                            </div>
                        </div>
                        <p class="pb-10 text-lg text-secondary-500 dark:text-secondary-400" x-show="open">
                            I specialize in a range of technologies, including Tailwind CSS, Tailwind UI, Headless UI, Alpine JS, Laravel, Livewire, and MySQL. These tools enable me to create modern, efficient, and interactive web solutions.
                        </p>
                    </div>
                    <div class="group" x-data="{ open: false }">
                        <div class="flex items-start justify-between py-10 cursor-pointer"
                            @click="open = !open">
                            <h4 class="text-2xl font-extrabold select-none text-secondary-950 dark:text-white">
                                What types of projects do you accept?
                            </h4>
                            <div class="bg-secondary-200 dark:bg-secondary-900 group-hover:bg-secondary-800 text-secondary-900 dark:text-secondary-500 group-hover:text-white rounded-xl w-10 h-10 flex items-center justify-center -mt-0.5 transition-colors ease-in-out duration-200">
                                <x-phosphor-minus class="absolute w-5 h-5 fill-current"/>
                                <x-phosphor-minus class="absolute w-5 h-5 transition-all duration-200 ease-in-out fill-current" ::class="open ? '' : '-rotate-90'" />
                            </div>
                        </div>
                        <p class="pb-10 text-lg text-secondary-500 dark:text-secondary-400" x-show="open">
                            I'm open to a wide range of projects, from personal websites to e-commerce platforms and web applications. Whether you need a simple blog or a complex web application, I'm here to help bring your vision to life.
                        </p>
                    </div>
                    <div class="group" x-data="{ open: false }">
                        <div class="flex items-start justify-between py-10 cursor-pointer"
                            @click="open = !open">
                            <h4 class="text-2xl font-extrabold select-none text-secondary-950 dark:text-white">
                                Do you offer ongoing support and maintenance?
                            </h4>
                            <div class="bg-secondary-200 dark:bg-secondary-900 group-hover:bg-secondary-800 text-secondary-900 dark:text-secondary-500 group-hover:text-white rounded-xl w-10 h-10 flex items-center justify-center -mt-0.5 transition-colors ease-in-out duration-200">
                                <x-phosphor-minus class="absolute w-5 h-5 fill-current"/>
                                <x-phosphor-minus class="absolute w-5 h-5 transition-all duration-200 ease-in-out fill-current" ::class="open ? '' : '-rotate-90'" />
                            </div>
                        </div>
                        <p class="pb-10 text-lg text-secondary-500 dark:text-secondary-400" x-show="open">
                            Yes, I provide ongoing support and maintenance services to ensure your website remains up-to-date, secure, and performs optimally. I'm committed to the long-term success of your web project.
                        </p>
                    </div>
                    <div class="group" x-data="{ open: false }">
                        <div class="flex items-start justify-between py-10 cursor-pointer"
                            @click="open = !open">
                            <h4 class="text-2xl font-extrabold select-none text-secondary-950 dark:text-white">
                                How can I get in touch with you for a project inquiry?
                            </h4>
                            <div class="bg-secondary-200 dark:bg-secondary-900 group-hover:bg-secondary-800 text-secondary-900 dark:text-secondary-500 group-hover:text-white rounded-xl w-10 h-10 flex items-center justify-center -mt-0.5 transition-colors ease-in-out duration-200">
                                <x-phosphor-minus class="absolute w-5 h-5 fill-current"/>
                                <x-phosphor-minus class="absolute w-5 h-5 transition-all duration-200 ease-in-out fill-current" ::class="open ? '' : '-rotate-90'" />
                            </div>
                        </div>
                        <p class="pb-10 text-lg text-secondary-500 dark:text-secondary-400" x-show="open">
                            You can easily reach out to me through the contact form on this website. Alternatively, you can email me at [Your Email Address] or call me at [Your Phone Number]. I'll be happy to discuss your project and answer any questions you have.
                        </p>
                    </div>

                    <div class="group" x-data="{ open: false }">
                        <div class="flex items-start justify-between py-10 cursor-pointer"
                            @click="open = !open">
                            <h4 class="text-2xl font-extrabold select-none text-secondary-950 dark:text-white">
                                Do you work with clients remotely?
                            </h4>
                            <div class="bg-secondary-200 dark:bg-secondary-900 group-hover:bg-secondary-800 text-secondary-900 dark:text-secondary-500 group-hover:text-white rounded-xl w-10 h-10 flex items-center justify-center -mt-0.5 transition-colors ease-in-out duration-200">
                                <x-phosphor-minus class="absolute w-5 h-5 fill-current"/>
                                <x-phosphor-minus class="absolute w-5 h-5 transition-all duration-200 ease-in-out fill-current" ::class="open ? '' : '-rotate-90'" />
                            </div>
                        </div>
                        <p class="pb-10 text-lg text-secondary-500 dark:text-secondary-400" x-show="open">
                            Yes, I'm experienced in working with clients from all around the world. Thanks to digital communication tools, I can collaborate effectively with clients regardless of their location.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
