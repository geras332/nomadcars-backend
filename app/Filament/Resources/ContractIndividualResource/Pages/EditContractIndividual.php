<?php

namespace App\Filament\Resources\ContractIndividualResource\Pages;

use App\Filament\Resources\ContractIndividualResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContractIndividual extends EditRecord
{
    protected static string $resource = ContractIndividualResource::class;
    protected static ?string $title = 'Редактировать онтракт для физ. лица';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
