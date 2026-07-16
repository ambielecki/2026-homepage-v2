<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Image>
 */
class ImageFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => fake()->sentence(),
            'alt_text' => fake()->words(3, true),
            'file_path' => 'images/originals/example.jpg',
            'file_name' => fake()->uuid().'.webp',
            'has_sizes' => false,
            'is_header' => false,
            'original_file_name' => 'example.jpg',
            'mime_type' => 'image/jpeg',
            'file_size' => 1024,
            'width' => null,
            'height' => null,
            'processed_at' => null,
            'processing_failed_at' => null,
            'processing_error' => null,
        ];
    }
}
