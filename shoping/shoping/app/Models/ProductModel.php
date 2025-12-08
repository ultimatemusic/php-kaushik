<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProductModel extends Model
{
    use HasFactory,Notifiable;
    public $fillable=[
        "product_name","description","price","category","QTY","product_image"
    ];
    public $table="_product";
}
