<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $fillable = [
        'vin_code', // VIN код
        'name', // Название
        'body_type', // Тип кузова
        'transmission', // Тип коробки передач
        'engine_type', // Тип двигателя
        'drive_type', // Привод
        'engine_capacity', // Объем двигателя
        'year', // Год выпуска
        'mileage', // Пробег
        'price', // Цена
        'generation_id', // Идентификатор поколения
    ];

    public function generation(): BelongsTo
    {
        return $this->belongsTo(Generation::class);
    }

    public function characteristics(): HasMany
    {
        return $this->hasMany(CarCharacteristic::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class);
    }

    public function getMainImageUrlAttribute(): string|null
    {
        $mainImage = $this->images()->where('is_main', true)->first();

        return $mainImage ? $mainImage->imageUrl : null;
    }
}
