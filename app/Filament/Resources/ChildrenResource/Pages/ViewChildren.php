<?php

namespace App\Filament\Resources\ChildrenResource\Pages;

use App\Filament\Resources\ChildrenResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewChildren extends ViewRecord
{
    protected static string $resource = ChildrenResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
