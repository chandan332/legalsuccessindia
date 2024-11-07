<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Payment extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'client_id',
        'businessName',
        'businessAddress',
        'businessEmployees',
        'areaName',
        'railwayName',
        'pinCode',
        'LandMarkName',
        'platform',
        'fees',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
