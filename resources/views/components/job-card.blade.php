@props(['job'])

<x-panel class="flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <a href="{{ $job->url }}" target="_blank">
            <h3 class="font-bold text-xl group-hover:text-blue-800 transition-colors duration-300">{{ $job->title }}
            </h3>
        </a>
        <p class="mt-3 text-sm font-light">{{ $job->schedule }} from - {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach

        </div>
        <x-employer-logo :logo="$job->employer->logo" :width="42" />
    </div>
</x-panel>
