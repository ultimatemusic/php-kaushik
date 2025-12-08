<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Mail;
use App\Mail\ContactMail;

class ContactModel extends Model
{
    use HasFactory,Notifiable;
    public $fillable=[
       'name','email','subject','description',
    ];
    public $table="contact_us";

     public static function boot()
    {
        parent::boot();
        static::created(function($item){
          
            $to="forpubgkr1965@gmail.com";
             Mail::to($to)->send(new ContactMail($item));

            // $adminEmail="brijeshpandey.tops@gmail.com";
            // Mail::to($adminEmail)->send(new ContactMail($item));

        });
    }


    
        
}
