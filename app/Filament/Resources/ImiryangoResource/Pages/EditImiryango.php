<?php

namespace App\Filament\Resources\ImiryangoResource\Pages;

use App\Filament\Resources\ImiryangoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditImiryango extends EditRecord
{
    protected static string $resource = ImiryangoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
