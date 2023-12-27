<?php

declare(strict_types=1);

namespace App\Filament\Resources\UploadResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\UploadResource;

class ListUploads extends ListRecords
{
    protected static string $resource = UploadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
