<x-layout title="Manage Your Listings | Laragigs">

    <section class="mx-4">
        <x-card class="p-10">
            <header>
                <h1 class="my-6 text-3xl font-bold text-center uppercase">
                    Manage Gigs
                </h1>
            </header>

            <table class="w-full rounded-sm table-auto">
                <tbody>
                    @forelse ($listings as $listing)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 text-lg border-gray-300 border-y">
                                <a href="show.html">
                                    {{ $listing->title }}
                                </a>
                            </td>
                            <td class="px-4 py-8 text-lg border-gray-300 border-y">
                                <a href="/listings/{{ $listing->id }}/edit" class="px-6 py-2 text-blue-400 rounded-xl"><i
                                        class="fa-solid fa-pencil"></i>
                                    Edit</a>
                            </td>
                            <td class="px-4 py-8 text-lg border-gray-300 border-y">
                                <form action="/listings/{{ $listing->id }}/destroy" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600">
                                        <i class="fa-solid fa-trash"></i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @empty
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 text-lg border-gray-300 border-y">
                                <p class="text-center">No Listings Found</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </x-card>
    </section>
</x-layout>
