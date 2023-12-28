<?php

use App\Filament\Resources\UploadResource;
use App\Models\Upload;
use Illuminate\Http\UploadedFile;
use function Pest\Livewire\livewire;

it('can create', function () {
    $this->get(UploadResource::getUrl('create'))->assertSuccessful();

    livewire(UploadResource\Pages\CreateUpload::class)
        ->fillForm([
            'media' => UploadedFile::fake()->image('img.png')
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $this->assertDatabaseHas(Upload::class, [
        'media' => 'img.png'
    ]);
});
