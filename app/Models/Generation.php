<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Generation extends Model
{
    use HasFactory;

    protected $table = 'generations';
    protected $fillable = [
        'name',
        'thumbnail',
        'model_id',
    ];
}
