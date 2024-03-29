<?php

namespace App\Filament\Resources\WordResource\Pages;

use App\Filament\Resources\WordResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWords extends ListRecords
{
    protected static string $resource = WordResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
