<x-app-layout>
    <section class="w-full max-w-6xl mx-auto">
        <div class="flex flex-row-reverse items-center w-full gap-16">
            <div class="flex flex-col w-1/2 gap-16 shrink-0">
                <h1 class="text-6xl font-bold leading-tight text-secondary-950 dark:text-white">
                    I’m Subtain Farooq,
                    a Product and Web Designer
                </h1>
                <p class="text-lg font-medium leading-8 text-secondary-500 dark:text-secondary-400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus mattis nunc aliquam tincidunt est non. Viverra nec eu, in ridiculus egestas mi. Vulputate tristique porttitor enim aliquam ullamcorper. Velit dui laoreet in et mus.
                </p>
            </div>
            <img class="w-full rounded-[32px] overflow-hidden" src="{{ asset('assets/images/my.jpg') }}" />
        </div>
    </section>

    <section class="w-full max-w-6xl mx-auto">
        <div class="relative flex items-start w-full gap-20">
            <div class="sticky top-0 flex flex-col w-1/2 gap-16">
                <div class="flex flex-col gap-14">
                    <div class="flex flex-col gap-8">
                        <h2 class="text-secondary-950 dark:text-white  text-[42px] font-bold">
                            My story
                        </h2>
                        <p class="text-lg font-medium leading-8 text-secondary-500 dark:text-secondary-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus vivamus risus posuere vitae vivamus. Enim dui nibh magna hac id lacus euismod mi diam. Consequat elementum tincidunt egestas egestas orci. At facilisi ultrices tortor, volutpat varius sit vitae rhoncus. Ut nisi, feugiat leo aenean massa enim.
                        </p>
                    </div>

                    <div class="flex flex-col gap-8">
                        <h2 class="text-3xl font-bold text-secondary-950 dark:text-white">
                            Designing since I was 16 years old
                        </h2>
                        <p class="text-lg font-medium leading-8 text-secondary-500 dark:text-secondary-400">
                            At facilisi ultrices tortor, volutpat varius sit vitae rhoncus. Ut nisi, feugiat leo aenean massa enim. Sed accumsan, ac dictum tempus luctus id in porttitor dictum.
                        </p>

                        <ul class="pl-5 space-y-3 text-lg font-medium leading-8 list-disc text-secondary-500 dark:text-secondary-400">
                            <li>
                                Ornare lectus sit amet est placerat in egestas erat imperdiet
                            </li>
                            <li>
                                Cras tincidunt lobortis feugiat vivamus at augue eget arcu dictum.
                            </li>
                            <li>
                                Posuere mori leo urna molestie at.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-1/2 gap-8">
                <img class="w-full rounded-[32px] overflow-hidden" src="{{ asset('assets/images/my-2.jpg') }}" />
                <img class="w-full rounded-[32px] overflow-hidden" src="{{ asset('assets/images/my-1.jpg') }}" />
            </div>
        </div>
    </section>

    <section class="w-full max-w-6xl mx-auto">
        <div class="flex flex-col w-full gap-24">
            <div class="flex flex-col items-center gap-8">
                <h2 class="text-secondary-950 dark:text-white  text-[42px] text-center font-bold">
                    My skills & software
                </h2>
                <p class="max-w-xl mx-auto text-lg font-medium leading-8 text-center text-secondary-500 dark:text-secondary-400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus mattis nunc aliquam tincidunt est non. Viverra nec eu.
                </p>
            </div>

            <div class="grid grid-cols-3">
                <div class="flex flex-col items-center gap-8">
                    <div class="rounded-[28px] bg-sky-50 w-20 h-20 flex items-center justify-center">
                        <svg class="w-10 h-10 fill-current text-sky-300" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current" viewBox="0 0 256 256"><path d="M213.34,122.73a6,6,0,1,0-10.68-5.46,81.79,81.79,0,0,1-35.81,35.36l-18.14-40.8A38,38,0,0,0,134,42.48V24a6,6,0,0,0-12,0V42.48a38,38,0,0,0-14.71,69.35L58.52,221.56a6,6,0,1,0,11,4.88l25.9-58.26A93.37,93.37,0,0,0,128,174a97,97,0,0,0,32.68-5.69l25.84,58.13a6,6,0,1,0,11-4.88l-25.77-58A93.92,93.92,0,0,0,213.34,122.73ZM128,54a26,26,0,1,1-26,26A26,26,0,0,1,128,54Zm0,108a81.51,81.51,0,0,1-27.73-4.83l18-40.45a37.85,37.85,0,0,0,19.52,0l18,40.6A85.34,85.34,0,0,1,128,162Z"></path></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-secondary-950 dark:text-white ">
                        Design
                    </h2>

                    <ul class="space-y-4 text-lg font-semibold text-center text-secondary-500 dark:text-secondary-400">
                        <li>
                            UI/UX Design
                        </li>
                        <li>
                            Product Design
                        </li>
                        <li>
                            Web Design
                        </li>
                        <li>
                            Design Thinking
                        </li>
                        <li>
                            Branding
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col items-center gap-8 border-x bordere-secondary-200">
                    <div class="rounded-[28px] bg-violet-50 w-20 h-20 flex items-center justify-center">
                        <svg class="w-10 h-10 fill-current text-violet-300"  xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current" viewBox="0 0 256 256"><path d="M232,170H222V72a22,22,0,0,0-22-22H56A22,22,0,0,0,34,72v98H24a6,6,0,0,0-6,6v16a22,22,0,0,0,22,22H216a22,22,0,0,0,22-22V176A6,6,0,0,0,232,170ZM46,72A10,10,0,0,1,56,62H200a10,10,0,0,1,10,10v98H46ZM226,192a10,10,0,0,1-10,10H40a10,10,0,0,1-10-10V182H226ZM150,88a6,6,0,0,1-6,6H112a6,6,0,0,1,0-12h32A6,6,0,0,1,150,88Z"></path></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-secondary-950 dark:text-white ">
                        Development
                    </h2>

                    <ul class="space-y-4 text-lg font-semibold text-center text-secondary-500 dark:text-secondary-400">
                        <li>
                            HTML & CSS
                        </li>
                        <li>
                          Javascript
                        </li>
                        <li>
                           React
                        </li>
                        <li>
                            React Native
                        </li>
                        <li>
                            No Code
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col items-center gap-8">
                    <div class="rounded-[28px] bg-rose-50 w-20 h-20 flex items-center justify-center">
                        <svg class="w-10 h-10 fill-current text-violet-300"  xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current" viewBox="0 0 256 256"><path d="M232,170H222V72a22,22,0,0,0-22-22H56A22,22,0,0,0,34,72v98H24a6,6,0,0,0-6,6v16a22,22,0,0,0,22,22H216a22,22,0,0,0,22-22V176A6,6,0,0,0,232,170ZM46,72A10,10,0,0,1,56,62H200a10,10,0,0,1,10,10v98H46ZM226,192a10,10,0,0,1-10,10H40a10,10,0,0,1-10-10V182H226ZM150,88a6,6,0,0,1-6,6H112a6,6,0,0,1,0-12h32A6,6,0,0,1,150,88Z"></path></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-secondary-950 dark:text-white ">
                        Tools
                    </h2>

                    <ul class="space-y-4 text-lg font-semibold text-center text-secondary-500 dark:text-secondary-400">
                        <li>Webflow HTML & CSS
                        </li>
                        <li>
                          Figma
                        </li>
                        <li>
                           Notion
                        </li>
                        <li>
                            Affinity Designeer
                        </li>
                        <li>
                           Photoshop
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
