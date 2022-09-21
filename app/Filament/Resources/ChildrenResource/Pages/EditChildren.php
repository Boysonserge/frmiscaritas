<?php

namespace App\Filament\Resources\ChildrenResource\Pages;

use App\Filament\Resources\ChildrenResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChildren extends EditRecord
{
    protected static string $resource = ChildrenResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
