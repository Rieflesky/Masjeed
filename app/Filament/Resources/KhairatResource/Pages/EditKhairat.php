<?php

namespace App\Filament\Resources\KhairatResource\Pages;

use App\Filament\Resources\KhairatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKhairat extends EditRecord
{
    protected static string $resource = KhairatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
