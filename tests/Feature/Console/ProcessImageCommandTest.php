<?php

declare(strict_types=1);

use App\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

test('the process image command creates webp sizes', function () {
    Storage::fake('public');

    $upload = UploadedFile::fake()->image('source.jpg', 1800, 1200);
    $path = $upload->storeAs('images/originals', 'source.jpg', 'public');
    $image = Image::factory()->create([
        'file_path' => $path,
        'file_name' => null,
        'has_sizes' => false,
        'width' => null,
        'height' => null,
    ]);

    $this->artisan('images:process', ['image_id' => $image->id])
        ->expectsOutput('Image processed.')
        ->assertSuccessful();

    $image->refresh();

    expect($image->has_sizes)->toBeTrue()
        ->and($image->file_name)->toEndWith('.webp')
        ->and($image->width)->toBe(1800)
        ->and($image->height)->toBe(1200)
        ->and($image->processed_at)->not->toBeNull()
        ->and($image->processing_error)->toBeNull();

    Storage::disk('public')->assertExists('images/large/'.$image->file_name);
    Storage::disk('public')->assertExists('images/medium/'.$image->file_name);
    Storage::disk('public')->assertExists('images/small/'.$image->file_name);
});

test('the process image command handles unknown images', function () {
    $this->artisan('images:process', ['image_id' => 999])
        ->expectsOutput('Image not found.')
        ->assertFailed();
});

test('the process image command records processing failures', function () {
    Storage::fake('public');

    $image = Image::factory()->create([
        'file_path' => 'images/originals/missing.jpg',
        'processing_error' => null,
    ]);

    $this->artisan('images:process', ['image_id' => $image->id])
        ->assertFailed();

    $image->refresh();

    expect($image->processing_failed_at)->not->toBeNull()
        ->and($image->processing_error)->not->toBeNull();
});
