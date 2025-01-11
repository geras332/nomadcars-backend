<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as LaravelModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Model extends LaravelModel
{
    use HasFactory;

    protected $table = 'models';
    protected $fillable = [
        'name',
        'brand_id',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
