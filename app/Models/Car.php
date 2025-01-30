<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Parallax\FilamentComments\Models\Traits\HasFilamentComments;

/**
 * @property mixed $contract
 */
class Car extends Model
{
    use SoftDeletes, HasFilamentComments;

    protected $table = 'cars';
    protected $fillable = [
        'name',
        'vin',
        'customer_fio',
        'customer_phone',
        'purchase_price',
        'sale_price',
        'commission_payment',
        'payment_status',
        'status',
        'purchase_currency',
        'purchase_exchange_rate',
        'sale_currency',
        'sale_exchange_rate',
        'contract_id',
        'manager_id',
    ];

    protected array $dates = ['deleted_at'];

    public function contract(): BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }

    public function manager(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
