<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Image;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Encoders\WebpEncoder;
use Intervention\Image\Laravel\Facades\Image as InterventionImage;
use Throwable;

class ProcessImage extends Command
{
    protected $signature = 'images:process {image_id}';

    protected $description = 'Process an uploaded image into public WebP sizes';

    /**
     * @var array<string, int>
     */
    private array $sizes = [
        'large' => 2048,
        'medium' => 1200,
        'small' => 640,
    ];

    public function handle(): int
    {
        $image = Image::query()->find($this->argument('image_id'));

        if (! $image instanceof Image) {
            $this->error('Image not found.');

            return self::FAILURE;
        }

        try {
            $this->process($image);
        } catch (Throwable $throwable) {
            $image->forceFill([
                'processing_failed_at' => now(),
                'processing_error' => $throwable->getMessage(),
            ])->save();

            $this->error('Image processing failed: '.$throwable->getMessage());

            return self::FAILURE;
        }

        $this->info('Image processed.');

        return self::SUCCESS;
    }

    private function process(Image $image): void
    {
        $disk = Storage::disk('public');
        $sourcePath = $disk->path((string) $image->file_path);
        $source = InterventionImage::decodePath($sourcePath);
        $fileName = $image->file_name ?: Str::uuid()->toString().'.webp';

        foreach ($this->sizes as $folder => $width) {
            $disk->put(
                'images/'.$folder.'/'.$fileName,
                $source->scaleDown(width: $width)->encode(new WebpEncoder(quality: 82))->toString(),
            );

            $source = InterventionImage::decodePath($sourcePath);
        }

        $image->forceFill([
            'file_name' => $fileName,
            'has_sizes' => true,
            'width' => $source->width(),
            'height' => $source->height(),
            'processed_at' => now(),
            'processing_failed_at' => null,
            'processing_error' => null,
        ])->save();
    }
}
