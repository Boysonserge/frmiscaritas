<?php

namespace App\Filament\Resources\CentraleResource\Pages;

use App\Filament\Resources\CentraleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCentrale extends EditRecord
{
    protected static string $resource = CentraleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
