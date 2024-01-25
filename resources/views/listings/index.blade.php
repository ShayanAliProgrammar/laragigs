<x-layout>

    @include('partials._hero')
    @include('partials._search')

    <section class="gap-4 mx-4 space-y-4 lg:grid lg:grid-cols-2 md:space-y-0">

        @unless (count($listings) == 0)
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        @else
            <div class="grid col-span-2 p-3 mt-10 place-items-center">
                <h3 class="text-xl font-medium">No Listings Found!</h3>
            </div>
        @endunless

    </section>

    <div class="p-4 mt-6">
        {{ $listings->links() }}
    </div>

</x-layout>
