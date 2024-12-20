<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'order_id',
        'created_payment_id',
        'created_signature',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
