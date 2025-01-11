<?php

namespace App\Filament\Resources\GenerationResource\Pages;

use App\Filament\Resources\GenerationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGenerations extends ListRecords
{
    protected static string $resource = GenerationResource::class;
    protected static ?string $title = 'Поколении';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
