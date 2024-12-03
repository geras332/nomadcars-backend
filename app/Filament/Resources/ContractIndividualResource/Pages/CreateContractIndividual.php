<?php

namespace App\Filament\Resources\ContractIndividualResource\Pages;

use App\Filament\Resources\ContractIndividualResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContractIndividual extends CreateRecord
{
    protected static string $resource = ContractIndividualResource::class;
    protected static ?string $title = 'Создать контракт для физ. лица';
}
