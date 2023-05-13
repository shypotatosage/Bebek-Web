<?php

namespace App\Filament\Resources\BazaarTenantResource\Pages;

use App\Filament\Resources\BazaarTenantResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBazaarTenant extends CreateRecord
{
    protected static string $resource = BazaarTenantResource::class;

    protected function getRedirectUrl(): string 
    {
        return $this->getResource()::getUrl('index');
    }
}
