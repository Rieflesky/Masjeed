<?php

namespace App\Filament\Resources\HebahResource\Pages;

use App\Filament\Resources\HebahResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHebah extends EditRecord
{
    protected static string $resource = HebahResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
