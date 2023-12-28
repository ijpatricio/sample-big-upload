<?php

declare(strict_types=1);

namespace App\Models;

use Bhushan\BigFileUpload\Forms\Components\BigFileUpload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = [
        'media'
    ];

    public static function getForm(): array
    {
        return [
            BigFileUpload::make('media')
                ->required()
                ->columnSpanFull(),
        ];
    }
}
