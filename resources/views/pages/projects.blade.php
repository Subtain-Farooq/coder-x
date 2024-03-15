<x-app-layout>
    <section class="w-full max-w-6xl mx-auto box">
        <div class="flex flex-col w-full lg:gap-24 gap-10">
            <div class="flex flex-col items-center gap-8">
                <h2 class="sm:text-5xl text-4xl font-bold text-center text-secondary-950 dark:text-white">
                    My Work
                </h2>
            </div>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-16 lg:max-w-full max-w-lg mx-auto">
                @foreach ($projects as $project)
                <div class="flex flex-col gap-10 group relative z-10">
                    <div class="xl:h-[310px] lg:h-72 sm:h-80 h-56 rounded-3xl overflow-hidden xl:px-10 sm:px-6 xl:pt-10 sm:pt-6 sm:pb-0 pt-1.5 pb-1.5 px-1.5 relative z-0">
                      <div class="absolute inset-0 bg-gradient-to-tr from-rose-200 via-sky-200 to-purple-100 dark:from-indigo-900 dark:via-sky-900 dark:to-primary-900 w-full h-full rounded-[28px]"></div>
                          <img class="relative z-20 object-cover object-top w-full h-full transition-all duration-500 ease-in-out sm:rounded-b-none shadow-lg sm:rounded-2xl rounded-3xl group-hover:scale-105" alt="{{ $project->featured_imag_alt }}" src="{{ asset($project->featured_image) }}" />
                    </div>
                    <div class="flex flex-col gap-4">
                        <h3 class="text-2xl font-bold dark:text-primary-500 text-primary-500">
                              {{ $project->title }}
                        </h3>
                        <p class="text-lg font-medium leading-7 text-secondary-500 dark:text-secondary-400 group-hover:dark:text-secondary-300 transition-colors ease-in-out duration-200">
                            {{ $project->description }}
                        </p>
                        <p class="text-secondary-950 dark:text-white text-lg inline-flex items-center gap-1.5 font-bold group-hover:text-primary-300 transition-colors ease-in-out duration-200">
                            View More Details
                            <svg class="w-5 h-5 group-hover:translate-x-1.5 mt-0.5 fill-current transition-all ease-in-out duration-500" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="fill-current" viewBox="0 0 256 256"><path d="M220.24,132.24l-72,72a6,6,0,0,1-8.48-8.48L201.51,134H40a6,6,0,0,1,0-12H201.51L139.76,60.24a6,6,0,0,1,8.48-8.48l72,72A6,6,0,0,1,220.24,132.24Z"></path></svg>
                        </p>
                    </div>
                    <a  href="{{ route('project', [$project->slug]) }}" aria-label=" {{ $project->title }}" class="absolute inset-0"></a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</x-app-layout>
