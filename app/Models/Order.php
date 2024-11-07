<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'payment_id',
        'amount',
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
