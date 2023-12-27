<?php

declare(strict_types=1);

namespace App\Filament\Resources\UploadResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\UploadResource;

class EditUpload extends EditRecord
{
    protected static string $resource = UploadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
