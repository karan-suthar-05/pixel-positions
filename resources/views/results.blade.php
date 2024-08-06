<x-layout>
    <x-page-heading>Results</x-page-heading>
    <div class="space-y-4">
        @if ($jobs->isNotEmpty())
            @foreach ($jobs as $job)
                <x-job-card-wide :job="$job" />
            @endforeach
        @else
            <p>No jobs available.</p>
        @endif
    </div>
</x-layout>
