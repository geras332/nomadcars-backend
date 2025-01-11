<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Generation extends Model
{
    use HasFactory;

    protected $table = 'generations';
    protected $fillable = [
        'name',
        'thumbnail',
        'model_id',
    ];

    public function model(): BelongsTo
    {
        return $this->belongsTo(Model::class);
    }
}
