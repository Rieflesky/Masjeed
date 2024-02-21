<?php

namespace App\Filament\Resources\HebahResource\Pages;

use App\Filament\Resources\HebahResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHebahs extends ListRecords
{
    protected static string $resource = HebahResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
