<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class adminusersModel extends Model
{
    use HasFactory,Notifiable;
    public $fillable=[
        "email","password"
    ];
    public $table="adminusers";

}
