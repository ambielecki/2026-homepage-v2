<x-layouts.admin title="Images">
    <div class="flex flex-col gap-8">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-sm font-semibold uppercase text-cyan-700">Admin</p>
                <h1 class="mt-3 text-3xl font-semibold text-zinc-950">Images</h1>
            </div>

            <a
                href="{{ route('admin.images.create') }}"
                class="inline-flex h-11 items-center justify-center rounded-md bg-zinc-950 px-5 text-sm font-semibold text-white shadow-sm transition hover:bg-zinc-800 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600"
            >
                Upload image
            </a>
        </div>

        @if (session('status'))
            <div class="rounded-md border border-cyan-200 bg-cyan-50 px-4 py-3 text-sm font-medium text-cyan-900">
                {{ session('status') }}
            </div>
        @endif

        <div class="overflow-hidden rounded-lg border border-zinc-200 bg-white shadow-sm">
            @forelse ($images as $image)
                <div class="grid gap-4 border-b border-zinc-200 p-5 last:border-b-0 sm:grid-cols-[7rem_1fr_auto] sm:items-center">
                    <div class="h-24 w-28 overflow-hidden rounded-md bg-zinc-100">
                        @if ($image->thumbnail_url)
                            <img
                                src="{{ $image->thumbnail_url }}"
                                alt="{{ $image->alt_text ?: '' }}"
                                class="h-full w-full object-cover"
                            >
                        @endif
                    </div>

                    <div>
                        <p class="font-semibold text-zinc-950">{{ $image->original_file_name }}</p>
                        <p class="mt-2 line-clamp-2 text-sm leading-6 text-zinc-700">
                            {{ $image->description ?: 'No description provided.' }}
                        </p>
                        <p class="mt-2 text-xs font-semibold uppercase text-zinc-500">
                            {{ $image->has_sizes ? 'Processed' : 'Processing pending' }}
                        </p>
                    </div>

                    <a
                        href="{{ route('admin.images.edit', $image) }}"
                        class="inline-flex h-10 items-center justify-center rounded-md border border-zinc-300 bg-white px-4 text-sm font-semibold text-zinc-950 transition hover:border-zinc-500 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600"
                    >
                        Edit
                    </a>
                </div>
            @empty
                <div class="p-8 text-center">
                    <p class="font-semibold text-zinc-950">No images have been uploaded.</p>
                    <p class="mt-2 text-sm text-zinc-700">Upload the first image to make it available for homepage content.</p>
                </div>
            @endforelse
        </div>

        {{ $images->links() }}
    </div>
</x-layouts.admin>
