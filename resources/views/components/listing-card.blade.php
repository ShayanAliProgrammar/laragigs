@props(['listing'])

@php
    $tags = explode(',', $listing->tags);
@endphp

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}" alt="image" loading='lazy'
            decoding="async" />
        <div>
            <h3 class="text-2xl">
                <a class="hover:underline" href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="mb-4 text-xl font-bold">{{ $listing->company }}</div>
            <ul class="flex flex-wrap gap-y-1">
                <x-listing-tags :allTags='$listing->tags' />
            </ul>
            <div class="mt-4 text-lg">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
