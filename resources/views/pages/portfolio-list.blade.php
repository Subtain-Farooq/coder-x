<x-app-layout>
    <section class="w-full max-w-6xl mx-auto">
        <div class="flex flex-col w-full gap-24">
            <div class="flex flex-col items-center gap-8">
                <h2 class="text-6xl font-bold text-center text-secondary-950 dark:text-white">
                    My portfolio
                </h2>
                <p class="max-w-xl mx-auto text-lg font-medium leading-7 text-center text-secondary-500 dark:text-secondary-300">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus mattis nunc aliquam tincidunt est non. Viverra nec eu.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-16">

                  <div class="flex flex-col gap-10 group">
                      <div class="h-[410px] rounded-3xl overflow-hidden px-10 pt-10 relative">
                        <div class="absolute inset-0 bg-gradient-to-tr from-rose-200 via-sky-200 to-purple-100 dark:from-indigo-900 dark:via-sky-900 dark:to-primary-900 w-full h-full rounded-[28px]"></div>


                                <img class="relative z-20 object-cover object-top w-full h-full transition-all duration-500 ease-in-out rounded-b-none shadow-lg rounded-2xl group-hover:scale-110"
                              src="{{ asset('assets/images/img-25.png') }}" />


                      </div>

                      <div class="relative h-[410px] rounded-3xl shrink-0 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-tr from-rose-200 via-sky-200 to-purple-100 dark:from-indigo-900 dark:via-sky-900 dark:to-primary-900 w-full h-full rounded-[28px]"></div>
                            <div class="p-1">

                                    <div class="w-full px-10 pt-11 bg-white/80 dark:bg-black/60 backdrop-blur-2xl rounded-[27px]">
                                        <img class="object-cover object-top w-full h-full transition-all duration-500 ease-in-out rounded-b-none shadow-lg rounded-2xl group-hover:scale-110" src="{{ asset('assets/images/feature-1.png') }}" />
                                    </div>

                            </div>
                        </div>


                      <div class="flex flex-col gap-4">
                          <h3 class="text-2xl font-bold dark:text-primary-500 text-primary-500">
                                Titile
                          </h3>
                          <p class="text-lg font-medium leading-7 text-secondary-500 dark:text-secondary-400">
                              Description
                          </p>
                          <a href="" class="text-secondary-950 dark:text-white text-lg inline-flex items-center gap-1.5 font-bold">
                              View More Details
                              <svg class="w-5 h-5 group-hover:translate-x-1.5 mt-0.5 fill-current transition-all ease-in-out duration-500" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current" viewBox="0 0 256 256"><path d="M220.24,132.24l-72,72a6,6,0,0,1-8.48-8.48L201.51,134H40a6,6,0,0,1,0-12H201.51L139.76,60.24a6,6,0,0,1,8.48-8.48l72,72A6,6,0,0,1,220.24,132.24Z"></path></svg>
                          </a>
                      </div>
                  </div>




            </div>
        </div>
    </section>

</x-app-layout>
