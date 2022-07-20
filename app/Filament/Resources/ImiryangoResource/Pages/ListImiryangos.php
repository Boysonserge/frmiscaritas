<?php

namespace App\Filament\Resources\ImiryangoResource\Pages;

use App\Filament\Resources\ImiryangoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImiryangos extends ListRecords
{
    protected static string $resource = ImiryangoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
