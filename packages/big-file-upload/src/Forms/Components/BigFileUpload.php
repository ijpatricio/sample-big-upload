<?php

declare(strict_types=1);

namespace Bhushan\BigFileUpload\Forms\Components;

use Filament\Forms\Components\FileUpload;

class BigFileUpload extends FileUpload
{
    protected string $view = 'big-file-upload::forms.components.big-file-upload';
}
