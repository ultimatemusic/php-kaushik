<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Mail;
use App\Mail\OTPverificationMail;

class OTPEmailModel extends Model
{
    use HasFactory,Notifiable;
    public $fillable=[
       'email','otp',
    ];
    public $table="_o_t_pverification";

     public static function boot()
    {
        parent::boot();
        static::created(function($item){
          
            $to=$item->email;
            Mail::to($to)->send(new OTPverificationMail($item));

          
        });
    }
}
