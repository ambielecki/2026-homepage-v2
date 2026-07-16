<?php

declare(strict_types=1);

namespace App\Support;

use App\Models\Image;
use Symfony\Component\Process\Process;

class ImageProcessingDispatcher
{
    public function dispatch(Image $image): void
    {
        Process::fromShellCommandline(
            'php artisan images:process '.(int) $image->id.' > /dev/null 2>&1 &',
            base_path(),
        )->run();
    }
}
