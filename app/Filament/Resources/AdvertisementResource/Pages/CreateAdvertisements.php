<?php

namespace App\Filament\Resources\AdvertisementResource\Pages;

use App\Filament\Resources\AdvertisementResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAdvertisements extends CreateRecord
{
    protected static string $resource = AdvertisementResource::class;
    protected static ?string $title = 'Создать объявление';
}
