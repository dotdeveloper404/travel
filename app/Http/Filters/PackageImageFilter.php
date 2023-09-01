<?php

namespace App\Http\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class PackageImageFilter implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->fit(268, 268);
    }
}
