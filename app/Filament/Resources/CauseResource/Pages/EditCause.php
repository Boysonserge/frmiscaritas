<?php

namespace App\Filament\Resources\CauseResource\Pages;

use App\Filament\Resources\CauseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCause extends EditRecord
{
    protected static string $resource = CauseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
