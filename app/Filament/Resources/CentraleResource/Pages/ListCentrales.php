<?php

namespace App\Filament\Resources\CentraleResource\Pages;

use App\Filament\Resources\CentraleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCentrales extends ListRecords
{
    protected static string $resource = CentraleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
