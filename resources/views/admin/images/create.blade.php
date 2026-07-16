<x-layouts.admin title="Upload image">
    <div class="max-w-3xl">
        <p class="text-sm font-semibold uppercase text-cyan-700">Images</p>
        <h1 class="mt-3 text-3xl font-semibold text-zinc-950">Upload image</h1>

        <div class="mt-8 rounded-lg border border-zinc-200 bg-white p-6 shadow-sm sm:p-8">
            @include('admin.images.partials.form', [
                'action' => route('admin.images.store'),
                'method' => 'POST',
                'image' => $image,
                'showFileInput' => true,
                'submitLabel' => 'Upload image',
            ])
        </div>
    </div>
</x-layouts.admin>
