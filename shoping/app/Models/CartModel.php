<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CartModel extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'cart';
    protected $fillable = [
        'product_id',
        'product_QTY',
        'product_price',
        'user_id',
        'status',
    ];
}
