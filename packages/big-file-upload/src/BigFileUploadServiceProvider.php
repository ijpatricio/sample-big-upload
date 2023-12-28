<?php

declare(strict_types=1);

namespace Bhushan\BigFileUpload;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BigFileUploadServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('big-file-upload')
            ->hasViews();
    }
}
