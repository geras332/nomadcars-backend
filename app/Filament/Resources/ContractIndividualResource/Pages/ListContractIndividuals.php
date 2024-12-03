<?php

namespace App\Filament\Resources\ContractIndividualResource\Pages;

use App\Filament\Resources\ContractIndividualResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContractIndividuals extends ListRecords
{
    protected static string $resource = ContractIndividualResource::class;
    protected static ?string $title = 'Контракты для физ. лиц';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
