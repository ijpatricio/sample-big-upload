<?php

declare(strict_types=1);

namespace App\Filament\Resources\UploadResource\Pages;

use App\Filament\Resources\UploadResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUpload extends CreateRecord
{
    protected static string $resource = UploadResource::class;
}
