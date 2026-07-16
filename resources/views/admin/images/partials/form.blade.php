<form method="POST" action="{{ $action }}" enctype="multipart/form-data" class="space-y-6">
    @csrf

    @if ($method !== 'POST')
        @method($method)
    @endif

    <div>
        <label for="description" class="block text-sm font-semibold text-zinc-800">Description</label>
        <textarea
            id="description"
            name="description"
            rows="5"
            class="mt-3 block w-full rounded-md border border-zinc-300 bg-white px-3 py-3 text-zinc-950 shadow-sm focus:border-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600"
        >{{ old('description', $image->description) }}</textarea>
        @error('description')
            <p class="mt-2 text-sm font-medium text-red-700">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="alt_text" class="block text-sm font-semibold text-zinc-800">Alt text</label>
        <input
            id="alt_text"
            name="alt_text"
            type="text"
            value="{{ old('alt_text', $image->alt_text) }}"
            class="mt-3 block h-12 w-full rounded-md border border-zinc-300 bg-white px-3 text-zinc-950 shadow-sm focus:border-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600"
        >
        @error('alt_text')
            <p class="mt-2 text-sm font-medium text-red-700">{{ $message }}</p>
        @enderror
    </div>

    @if ($showFileInput)
        <div>
            <label for="image" class="block text-sm font-semibold text-zinc-800">Image file</label>
            <input
                id="image"
                name="image"
                type="file"
                accept="image/jpeg,image/png,image/webp,image/gif"
                required
                class="mt-3 block w-full rounded-md border border-zinc-300 bg-white px-3 py-3 text-sm text-zinc-950 shadow-sm file:mr-4 file:rounded-md file:border-0 file:bg-zinc-950 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white focus:border-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600"
            >
            @error('image')
                <p class="mt-2 text-sm font-medium text-red-700">{{ $message }}</p>
            @enderror
        </div>
    @endif

    <label class="flex items-center gap-3 text-sm font-semibold text-zinc-800">
        <input
            name="is_header"
            type="checkbox"
            value="1"
            @checked(old('is_header', $image->is_header))
            class="h-5 w-5 rounded border-zinc-300 text-cyan-700 focus:ring-cyan-600"
        >
        Header image
    </label>

    <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
        <button
            type="submit"
            class="inline-flex h-11 items-center justify-center rounded-md bg-zinc-950 px-5 text-sm font-semibold text-white shadow-sm transition hover:bg-zinc-800 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600"
        >
            {{ $submitLabel }}
        </button>

        <a
            href="{{ route('admin.images.index') }}"
            class="inline-flex h-11 items-center justify-center rounded-md border border-zinc-300 bg-white px-5 text-sm font-semibold text-zinc-950 transition hover:border-zinc-500 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600"
        >
            Back to images
        </a>
    </div>
</form>
