<?php

namespace App\Filament\Resources\KhairatResource\Pages;

use App\Filament\Resources\KhairatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKhairats extends ListRecords
{
    protected static string $resource = KhairatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
