<?php

namespace App\Filament\Resources\CauseResource\Pages;

use App\Filament\Resources\CauseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCause extends CreateRecord
{
    protected static string $resource = CauseResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
