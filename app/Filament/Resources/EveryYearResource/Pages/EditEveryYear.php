<?php

namespace App\Filament\Resources\EveryYearResource\Pages;

use App\Filament\Resources\EveryYearResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEveryYear extends EditRecord
{
    protected static string $resource = EveryYearResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
