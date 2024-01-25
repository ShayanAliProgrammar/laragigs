<x-layout title="Listing | {{ $listing->title }}">

    @include('partials._hero')
    @include('partials._search')

    <a href="/" class="inline-block mb-4 ml-4 text-black">
        <i class="fa-solid fa-arrow-left"></i>
        Back
    </a>

    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mb-6 mr-6"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
                    alt="image" />

                <h3 class="mb-2 text-2xl">{{ $listing->title }}</h3>
                <div class="mb-4 text-xl font-bold">{{ $listing->company }}</div>
                <ul class="flex flex-wrap items-center justify-center gap-y-2">

                    <x-listing-tags :allTags='$listing->tags' />

                </ul>
                <div class="my-4 text-lg">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="w-full mb-6 border border-gray-200"></div>
                <div>
                    <h3 class="mb-4 text-3xl font-bold">
                        Job Description
                    </h3>
                    <div class="space-y-6 text-lg">
                        <p class="text-justify max-w-[90%] mx-auto">{{ $listing->description }}</p>

                        <div class="grid grid-cols-2 mt-6 gap-x-3">
                            <a href="mailto:{{ $listing->email }}"
                                class="flex items-center justify-center md:max-w-full w-full max-w-max mr-auto py-1.5 px-3 space-x-2 text-white bg-laravel rounded-xl hover:opacity-80">
                                <i class="fa-solid fa-envelope"></i>
                                <span class="hidden md:inline-block">Contact Employer</span>
                            </a>

                            <a href="{{ $listing->website }}" target="_blank"
                                class="flex items-center justify-center md:max-w-full w-full max-w-max ml-auto py-1.5 px-3 space-x-2 text-white bg-black rounded-xl hover:opacity-80">
                                <i class="fa-solid fa-globe"></i>
                                <span class="hidden md:inline-block">
                                    Visit Website
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>
