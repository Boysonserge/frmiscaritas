<?php

namespace App\Filament\Resources\WordResource\Pages;

use App\Filament\Resources\WordResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWord extends EditRecord
{
    protected static string $resource = WordResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }
}
