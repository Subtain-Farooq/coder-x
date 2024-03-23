<x-app-layout>
    <section class="w-full max-w-6xl mx-auto box">
        <div class="flex flex-col w-full gap-24">

            <div class="flex flex-col gap-16">
                <h2 class="text-4xl font-bold leading-tight lg:text-6xl sm:text-5xl text-secondary-950 dark:text-white">
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

            <div x-data id="lazy-loading-page" class="flex flex-col gap-8 sm:gap-24">

                <div x-intersect.threshold.50="$refs.imgMain.src = $refs.imgMain.dataset.img" class="relative flex items-center justify-center overflow-hidden aspect-w-7 sm:aspect-h-4 aspect-h-5 sm:rounded-3xl rounded-xl bg-black/10">
                    <x-phosphor-circle-dashed class="absolute w-20 h-20 -mt-10 -ml-10 inset-x-1/2 inset-y-1/2 text-primary-400/20 animate-spin" />
                    <img
                        x-ref="imgMain" data-img="{{ asset($project->featured_image) }}"
                        class="object-cover object-top w-full h-full transition-opacity duration-300 ease-linear" alt="{{ $project->featured_image_alt }}" src="" />
                </div>

                <div class="gap-x-8 lg:columns-3 sm:columns-2 columns-1">
                    @foreach ($project->images as $image)
                    <a x-intersect.threshold.50="$refs.img.src = $refs.img.dataset.img" data-fslightbox href="{{ asset($image) }}" class="relative block mt-8 first:mt-0 bg-black/10">
                        <x-phosphor-circle-dashed class="absolute w-8 h-8 -mt-4 -ml-4 inset-x-1/2 inset-y-1/2 text-primary-400/20 animate-spin" />
                        <img
                        x-ref="img"
                        data-img="{{ asset($image) }}"
                        onload="this.classList.add('opacity-100')"
                        class="relative transition-opacity duration-300 ease-linear border-4 shadow-lg opacity-0 bg-primary-950 rounded-xl border-primary-950/5" src="{{ asset($image) }}" />
                    </a>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
</x-app-layout>
