<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'cashier_id', 'customer_id', 'invoice', 'cash', 'change', 'discount', 'grand_total'
    ];

    /**
     * Get all of the TransactionDetail for the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function TransactionDetail()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    /**
     * Get the Customer that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the Cashier that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Cashier()
    {
        return $this->belongsTo(User::class, 'cashier_id');
    }

    /**
     * Get all of the Profit for the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Profit()
    {
        return $this->hasMany(Profit::class);
    }
}
