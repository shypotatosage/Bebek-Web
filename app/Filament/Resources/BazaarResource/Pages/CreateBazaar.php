<?php

namespace App\Filament\Resources\BazaarResource\Pages;

use App\Filament\Resources\BazaarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBazaar extends CreateRecord
{
    protected static string $resource = BazaarResource::class;

    protected function getRedirectUrl(): string 
    {
        return $this->getResource()::getUrl('index');
    }
}
