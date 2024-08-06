@props(['job' => []])

<x-panel class="gap-x-6">
    <div>
        <x-employer-logo :logo="$job->employer->logo" />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="" class="text-sm text-gray-400">{{ $job->employer->name }}</a>
        <a href="{{ $job->url }}">
            <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">
                {{ $job->title }}
            </h3>
        </a>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>
    <div class="flex flex-col justify-between">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
    </div>
</x-panel>
