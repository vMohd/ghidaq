<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_email',
        'order_itemId',
        'order_itemName',
        'fullname',
        'email',
        'phone',
        'address',
        'country',
        'city',
        'district',
        'price',
        'total',
        'promoCode',
        'promoCodeValue',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}


