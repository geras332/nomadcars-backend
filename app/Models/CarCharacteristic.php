<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarCharacteristic extends Model
{
    use HasFactory;

    protected $table = 'car_characteristics';
    protected $fillable = [
        'key',
        'value',
        'car_id',
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
