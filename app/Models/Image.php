<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\ImageFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[Fillable([
    'description',
    'alt_text',
    'file_path',
    'file_name',
    'has_sizes',
    'is_header',
    'original_file_name',
    'mime_type',
    'file_size',
    'width',
    'height',
    'processed_at',
    'processing_failed_at',
    'processing_error',
])]
class Image extends Model
{
    /** @use HasFactory<ImageFactory> */
    use HasFactory;

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'has_sizes' => 'boolean',
            'is_header' => 'boolean',
            'file_size' => 'integer',
            'width' => 'integer',
            'height' => 'integer',
            'processed_at' => 'datetime',
            'processing_failed_at' => 'datetime',
        ];
    }

    /**
     * @return Attribute<string|null, never>
     */
    protected function url(): Attribute
    {
        return Attribute::get(fn (): ?string => $this->file_path
            ? Storage::disk('public')->url($this->file_path)
            : null);
    }

    /**
     * @return Attribute<string|null, never>
     */
    protected function thumbnailUrl(): Attribute
    {
        return Attribute::get(function (): ?string {
            if ($this->has_sizes && $this->file_name) {
                return Storage::disk('public')->url('images/small/'.$this->file_name);
            }

            return $this->url;
        });
    }

    public function sizePath(string $size): string
    {
        return 'images/'.$size.'/'.(string) $this->file_name;
    }
}
