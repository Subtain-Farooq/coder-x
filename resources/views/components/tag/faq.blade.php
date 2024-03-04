<div class="group" x-data="{ open: false }" @click.away="open = false">
    <div class="flex items-start justify-between gap-5 py-10 cursor-pointer"
        @click="open = !open">
        <h4 class="text-2xl font-extrabold select-none text-secondary-950 dark:text-white">
            {{ $question }}
        </h4>
        <div class="bg-secondary-200 dark:bg-secondary-900 group-hover:bg-secondary-800 text-secondary-900 dark:text-secondary-500 group-hover:text-white rounded-xl sm:w-10 sm:h-10 w-8 h-8 flex items-center justify-center sm:-mt-0.5 transition-colors ease-in-out duration-200 shrink-0">
            <x-phosphor-minus class="absolute w-5 h-5 fill-current"/>
            <x-phosphor-minus class="absolute w-5 h-5 transition-all duration-200 ease-in-out fill-current" ::class="open ? '' : '-rotate-90'" />
        </div>
    </div>
    <div x-show="open" x-collapse x-cloak>
        <p class="pb-10 text-lg text-secondary-500 dark:text-secondary-400">
            {{ $answer ?? $slot }}
        </p>
    </div>
</div>