<?php

namespace App\Filament\Resources\CauseResource\Pages;

use App\Filament\Resources\CauseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCauses extends ListRecords
{
    protected static string $resource = CauseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
