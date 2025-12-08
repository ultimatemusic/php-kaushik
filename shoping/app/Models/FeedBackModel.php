<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FeedBackModel extends Model
{
    use HasFactory,Notifiable;
    public $fillable=[
        "user_id","user_name","user_email","feedback"
    ];
    public $table="feedback";
}
