@props(['width' => 90, 'logo'])
{{-- <img src="http://picsum.photos/seed/{{ rand(0, 55555) }}/{{ $width }}" class="rounded-lg" alt=""> --}}
@php
    if (!isset($logo)) {
        $logo = '';
    }
@endphp

<img src="{{ asset('storage/' . $logo) }}" class="rounded-lg" width="{{ $width }}">
