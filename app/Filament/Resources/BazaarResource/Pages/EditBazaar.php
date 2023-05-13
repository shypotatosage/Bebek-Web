<?php

namespace App\Filament\Resources\BazaarResource\Pages;

use App\Filament\Resources\BazaarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBazaar extends EditRecord
{
    protected static string $resource = BazaarResource::class;

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
