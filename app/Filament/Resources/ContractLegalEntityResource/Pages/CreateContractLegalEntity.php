<?php

namespace App\Filament\Resources\ContractLegalEntityResource\Pages;

use App\Filament\Resources\ContractLegalEntityResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContractLegalEntity extends CreateRecord
{
    protected static string $resource = ContractLegalEntityResource::class;
    protected static ?string $title = 'Создать контракт для юр. лица';
}
