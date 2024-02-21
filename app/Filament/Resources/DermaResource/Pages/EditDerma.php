<?php

namespace App\Filament\Resources\DermaResource\Pages;

use App\Filament\Resources\DermaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDerma extends EditRecord
{
    protected static string $resource = DermaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
