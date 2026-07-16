<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreImageRequest;
use App\Http\Requests\Admin\UpdateImageRequest;
use App\Models\Image;
use App\Support\ImageProcessingDispatcher;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function index(): View
    {
        return view('admin.images.index', [
            'images' => Image::query()
                ->latest()
                ->paginate(12),
        ]);
    }

    public function create(): View
    {
        return view('admin.images.create', [
            'image' => new Image,
        ]);
    }

    public function store(StoreImageRequest $request, ImageProcessingDispatcher $dispatcher): RedirectResponse
    {
        $upload = $request->file('image');
        $path = $upload->storeAs(
            'images/originals',
            Str::uuid()->toString().'.'.$upload->getClientOriginalExtension(),
            'public',
        );

        $image = Image::query()->create([
            ...$request->safe()->except('image'),
            'is_header' => $request->boolean('is_header'),
            'file_path' => $path,
            'original_file_name' => $upload->getClientOriginalName(),
            'mime_type' => $upload->getMimeType(),
            'file_size' => $upload->getSize(),
        ]);

        $dispatcher->dispatch($image);

        return redirect()
            ->route('admin.images.edit', $image)
            ->with('status', 'Image uploaded. Processing has started.');
    }

    public function edit(Image $image): View
    {
        return view('admin.images.edit', [
            'image' => $image,
        ]);
    }

    public function update(UpdateImageRequest $request, Image $image): RedirectResponse
    {
        $image->update([
            ...$request->validated(),
            'is_header' => $request->boolean('is_header'),
        ]);

        return redirect()
            ->route('admin.images.edit', $image)
            ->with('status', 'Image updated.');
    }
}
