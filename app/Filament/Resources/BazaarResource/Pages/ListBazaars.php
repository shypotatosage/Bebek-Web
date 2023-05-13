<?php

namespace App\Filament\Resources\BazaarResource\Pages;

use App\Filament\Resources\BazaarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBazaars extends ListRecords
{
    protected static string $resource = BazaarResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
