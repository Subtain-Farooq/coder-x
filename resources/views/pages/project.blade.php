<x-app-layout>
    <section class="w-full max-w-6xl mx-auto box">
        <div class="flex flex-col w-full gap-24">

            <div class="flex flex-col gap-16">
                <h2 class="lg:text-6xl sm:text-5xl text-4xl  font-bold leading-tight text-secondary-950 dark:text-white">
                    {{ $project->title }}
                </h2>
                <div class="w-full space-y-5">
                    <div class="space-y-2">
                        <p class="text-2xl font-extrabold text-secondary-950 dark:text-white">Frontend Stack</p>
                        <p class="text-xl font-semibold text-secondary-500 dark:text-secondary-400">
                            @foreach ($project->stack as $stack)
                            {{ $stack }}
                            @endforeach
                        </p>
                    </div>
                    <a href="{{ $project->website_link }}" target="_blank" class="text-secondary-950 dark:text-primary-500 text-lg inline-flex items-center gap-1.5 font-bold dark:font-semibold hover:dark:text-primary-600 transition-all ease-in-out duration-300 group">
                        Visit website
                        <x-phosphor-arrow-right class="w-5 h-5 fill-current group-hover:translate-x-1.5 mt-0.5 transition-all ease-in-out duration-300" />
                    </a>
                </div>
            </div>

            <div class="flex flex-col sm:gap-24 gap-8">

                <div class="overflow-hidden aspect-w-7 sm:aspect-h-4 aspect-h-5 sm:rounded-3xl rounded-xl bg-sky-100">
                    <img class="object-cover object-top w-full h-full transition-all duration-500 ease-in-out" alt="{{ $project->featured_image_alt }}" src="{{ asset($project->featured_image) }}" />
                </div>

                <div class="gap-x-8 lg:columns-3 sm:columns-2 columns-1">
                    @foreach ($project->images as $image)
                    <a data-fslightbox href="{{ asset($image) }}" class="block mt-8 first:mt-0">
                        <img class="transition-all duration-300 ease-in-out border-4 shadow-lg rounded-xl border-primary-950/5" src="{{ asset($image) }}" />
                    </a>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
</x-app-layout>
