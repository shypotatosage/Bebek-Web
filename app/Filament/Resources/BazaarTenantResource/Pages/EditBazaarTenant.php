<?php

namespace App\Filament\Resources\BazaarTenantResource\Pages;

use App\Filament\Resources\BazaarTenantResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBazaarTenant extends EditRecord
{
    protected static string $resource = BazaarTenantResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string 
    {
        return $this->getResource()::getUrl('index');
    }

}
