<x-layout title="Edit Listing - {{ $listing->title }}">

    <div class="mx-4">
        <div class="max-w-lg p-10 mx-auto mt-24 border border-gray-200 rounded bg-gray-50">
            <header class="text-center">
                <h2 class="mb-1 text-2xl font-bold uppercase">
                    Edit Gig
                </h2>
                <p class="mb-4">Edit: Senior Developer</p>
            </header>

            <form action="/listings/{{ $listing->id }}/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="company" class="inline-block mb-2 text-lg">Company Name</label>
                    <input type="text" class="w-full p-2 border border-gray-200 rounded" name="company"
                        value="{{ $listing->company }}" />
                </div>

                <div class="mb-6">
                    <label for="title" class="inline-block mb-2 text-lg">Job Title</label>
                    <input type="text" class="w-full p-2 border border-gray-200 rounded" name="title"
                        placeholder="Example: Senior Laravel Developer" value="{{ $listing->title }}" />
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block mb-2 text-lg">Job Location</label>
                    <input type="text" class="w-full p-2 border border-gray-200 rounded" name="location"
                        placeholder="Example: Remote, Boston MA, etc" value="{{ $listing->location }}" />
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block mb-2 text-lg">Contact Email</label>
                    <input type="text" class="w-full p-2 border border-gray-200 rounded" name="email"
                        value="{{ $listing->email }}" />
                </div>

                <div class="mb-6">
                    <label for="website" class="inline-block mb-2 text-lg">
                        Website/Application URL
                    </label>
                    <input type="text" class="w-full p-2 border border-gray-200 rounded" name="website"
                        value="{{ $listing->website }}" />
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block mb-2 text-lg">
                        Tags (Comma Separated)
                    </label>
                    <input type="text" class="w-full p-2 border border-gray-200 rounded" name="tags"
                        placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ $listing->tags }}" />
                </div>

                <div class="mb-6">
                    <label for="logo" class="inline-block mb-2 text-lg">
                        Company Logo
                    </label>
                    <input type="file" class="w-full p-2 border border-gray-200 rounded" name="logo" />
                </div>

                <div class="mb-6">
                    <label for="description" class="inline-block mb-2 text-lg">
                        Job Description
                    </label>
                    <textarea class="w-full p-2 border border-gray-200 rounded" name="description" rows="10"
                        placeholder="Include tasks, requirements, salary, etc">{{ $listing->description }}</textarea>
                </div>

                <div class="relative flex items-center justify-between mb-6">
                    <button class="px-4 py-2 text-lg text-white rounded bg-laravel hover:bg-black">
                        Update Gig
                    </button>

                    <a href="/listings/manage" class="ml-4 text-black">
                        Back
                    </a>

                    <a href="/listings/{{ $listing->id }}" target="_blank"
                        class="px-4 py-2 ml-4 text-lg text-white rounded bg-laravel">
                        View
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
