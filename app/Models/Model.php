<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as LaravelModel;

class Model extends LaravelModel
{
    use HasFactory;

    protected $table = 'models';
    protected $fillable = [
        'name',
        'brand_id',
    ];
}
