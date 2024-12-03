<?php

namespace App\Filament\Resources\ContractLegalEntityResource\Pages;

use App\Filament\Resources\ContractLegalEntityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContractLegalEntities extends ListRecords
{
    protected static string $resource = ContractLegalEntityResource::class;
    protected static ?string $title = 'Контракт для юр. лиц';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
