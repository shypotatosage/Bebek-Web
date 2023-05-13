<?php

namespace App\Filament\Resources\BazaarTenantResource\Pages;

use App\Filament\Resources\BazaarTenantResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBazaarTenants extends ListRecords
{
    protected static string $resource = BazaarTenantResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
