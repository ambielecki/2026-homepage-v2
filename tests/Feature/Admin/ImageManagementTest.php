<?php

declare(strict_types=1);

use App\Models\Image;
use App\Models\User;
use App\Support\ImageProcessingDispatcher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

test('guests cannot access the admin image list', function () {
    $this->get('/admin/images')
        ->assertRedirect('/login');
});

test('authenticated admins can view the image list', function () {
    $user = User::factory()->create();
    Image::factory()->create([
        'original_file_name' => 'homepage.jpg',
        'description' => 'Homepage header image.',
    ]);

    $this->actingAs($user)
        ->get('/admin/images')
        ->assertOk()
        ->assertSee('Images')
        ->assertSee('homepage.jpg')
        ->assertSee('Homepage header image.');
});

test('authenticated admins can view the upload form', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/admin/images/create')
        ->assertOk()
        ->assertSee('Upload image')
        ->assertSee('name="description"', false)
        ->assertSee('name="alt_text"', false)
        ->assertSee('name="image"', false)
        ->assertSee('name="is_header"', false);
});

test('authenticated admins can upload an image', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $dispatcher = Mockery::mock(ImageProcessingDispatcher::class);

    $dispatcher->shouldReceive('dispatch')
        ->once()
        ->with(Mockery::on(fn (Image $image): bool => $image->exists));

    $this->instance(ImageProcessingDispatcher::class, $dispatcher);

    $this->actingAs($user)
        ->post('/admin/images', [
            'description' => 'A useful image.',
            'alt_text' => 'Useful image',
            'is_header' => '1',
            'image' => UploadedFile::fake()->image('useful.jpg', 1200, 800),
        ])
        ->assertRedirect();

    $image = Image::query()->firstOrFail();

    expect($image->description)->toBe('A useful image.')
        ->and($image->alt_text)->toBe('Useful image')
        ->and($image->is_header)->toBeTrue()
        ->and($image->has_sizes)->toBeFalse()
        ->and($image->original_file_name)->toBe('useful.jpg')
        ->and($image->file_path)->toStartWith('images/originals/');

    Storage::disk('public')->assertExists($image->file_path);
});

test('image upload validates the uploaded file', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->from('/admin/images/create')
        ->post('/admin/images', [
            'description' => 'Missing upload.',
        ])
        ->assertRedirect('/admin/images/create')
        ->assertSessionHasErrors('image');
});

test('authenticated admins can update image metadata', function () {
    $user = User::factory()->create();
    $image = Image::factory()->create([
        'description' => 'Old description',
        'alt_text' => 'Old alt text',
        'is_header' => false,
    ]);

    $this->actingAs($user)
        ->put(route('admin.images.update', $image), [
            'description' => 'New description',
            'alt_text' => 'New alt text',
            'is_header' => '1',
        ])
        ->assertRedirect(route('admin.images.edit', $image));

    $image->refresh();

    expect($image->description)->toBe('New description')
        ->and($image->alt_text)->toBe('New alt text')
        ->and($image->is_header)->toBeTrue();
});
