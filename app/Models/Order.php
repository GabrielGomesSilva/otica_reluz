<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'OS', 'purchase_date', 'delivery_date', 'customer_name', 'address', 'contact', 'lens_type', 'frame', 'payment_method', 'value', 'obs'
    ];
}
