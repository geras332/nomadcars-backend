<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class AdvertisementMedia extends Model
{
    use HasFactory;

    protected $table = 'advertisement_media';
    protected $fillable = [
        'path',
        'car_id',
    ];

    public function advertisement(): BelongsTo
    {
        return $this->belongsTo(Advertisement::class);
    }

    public function getImageUrlAttribute(): string
    {
        return Storage::url($this->getAttribute('path'));
    }
}
