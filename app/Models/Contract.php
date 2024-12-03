<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed $first_name
 * @property mixed $last_name
 * @property mixed $middle_name
 * @property mixed $email
 * @property mixed $phone_number
 * @property mixed $address
 * @property mixed $passport_number
 * @property mixed $passport_issued_by
 * @property mixed $passport_issue_date
 * @property mixed $car_name
 * @property mixed $vin_code
 * @property mixed $price
 * @property mixed $currency
 * @property mixed $contract_number
 */
class Contract extends Model
{
    protected $table = 'contracts';
    protected $fillable = [
        'initiator_id',
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'phone_number',
        'address',
        'passport_number',
        'passport_issued_by',
        'passport_issue_date',
        'car_name',
        'vin_code',
        'price',
        'currency',
        'company_name',
        'inn',
        'legal_address',
        'bank_name',
        'bic',
        'account_number',
    ];

    protected $casts = [
        'passport_issue_date' => 'datetime',
        'price' => 'decimal:2',
    ];

    public function initiator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'initiator_id');
    }

    public function isLegalEntity(): bool
    {
        return !is_null($this->getAttribute('company_name'));
    }

    public function isIndividual(): bool
    {
        return is_null($this->getAttribute('company_name'));
    }

    public function getContractNumberAttribute(): string
    {
        return 'NOMADCARS' . $this->getAttribute('id');
    }

    public function getFullNameAttribute(): string
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'] . ' ' . $this->attributes['middle_name'];
    }
}
