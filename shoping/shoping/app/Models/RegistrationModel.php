<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RegistrationModel extends Model
{
    use HasFactory;
    protected $fillable=[
        "name","email","phone","password"
    ];

    protected $table="users";
}
