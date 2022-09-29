<?php

namespace App\Filament\Resources\EveryYearResource\Pages;

use App\Filament\Resources\EveryYearResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEveryYears extends ListRecords
{
    protected static string $resource = EveryYearResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
