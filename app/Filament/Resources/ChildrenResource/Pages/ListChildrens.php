<?php

namespace App\Filament\Resources\ChildrenResource\Pages;

use App\Filament\Resources\ChildrenResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChildrens extends ListRecords
{
    protected static string $resource = ChildrenResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
