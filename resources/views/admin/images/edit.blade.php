<x-layouts.admin title="Edit image">
    <div class="grid gap-8 lg:grid-cols-[1fr_18rem]">
        <div>
            <p class="text-sm font-semibold uppercase text-cyan-700">Images</p>
            <h1 class="mt-3 text-3xl font-semibold text-zinc-950">Edit image</h1>

            @if (session('status'))
                <div class="mt-6 rounded-md border border-cyan-200 bg-cyan-50 px-4 py-3 text-sm font-medium text-cyan-900">
                    {{ session('status') }}
                </div>
            @endif

            <div class="mt-8 rounded-lg border border-zinc-200 bg-white p-6 shadow-sm sm:p-8">
                @include('admin.images.partials.form', [
                    'action' => route('admin.images.update', $image),
                    'method' => 'PUT',
                    'image' => $image,
                    'showFileInput' => false,
                    'submitLabel' => 'Save image',
                ])
            </div>
        </div>

        <aside class="rounded-lg border border-zinc-200 bg-white p-5 shadow-sm">
            @if ($image->thumbnail_url)
                <img
                    src="{{ $image->thumbnail_url }}"
                    alt="{{ $image->alt_text ?: '' }}"
                    class="aspect-square w-full rounded-md object-cover"
                >
            @endif

            <dl class="mt-5 space-y-3 text-sm">
                <div>
                    <dt class="font-semibold text-zinc-950">File</dt>
                    <dd class="mt-1 break-words text-zinc-700">{{ $image->original_file_name }}</dd>
                </div>
                <div>
                    <dt class="font-semibold text-zinc-950">Status</dt>
                    <dd class="mt-1 text-zinc-700">{{ $image->has_sizes ? 'Processed' : 'Processing pending' }}</dd>
                </div>
                @if ($image->width && $image->height)
                    <div>
                        <dt class="font-semibold text-zinc-950">Original size</dt>
                        <dd class="mt-1 text-zinc-700">{{ $image->width }} x {{ $image->height }}</dd>
                    </div>
                @endif
                @if ($image->processing_error)
                    <div>
                        <dt class="font-semibold text-red-800">Processing error</dt>
                        <dd class="mt-1 break-words text-red-700">{{ $image->processing_error }}</dd>
                    </div>
                @endif
            </dl>
        </aside>
    </div>
</x-layouts.admin>
