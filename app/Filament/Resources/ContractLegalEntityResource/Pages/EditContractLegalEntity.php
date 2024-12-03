<?php

namespace App\Filament\Resources\ContractLegalEntityResource\Pages;

use App\Filament\Resources\ContractLegalEntityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContractLegalEntity extends EditRecord
{
    protected static string $resource = ContractLegalEntityResource::class;
    protected static ?string $title = 'Редактировать контракт для юр. лица';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
