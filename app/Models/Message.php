<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class Message extends Model
{
    public $fillable=['name','message','email','phone',];

    // public static function boot() {
  
    //     parent::boot();
  
    //     static::created(function ($item) {
    //         $adminEmail = "preetipundor340@gmail.com";
    //         Mail::to($adminEmail)->send(new ContactMail($item));
          
    //     });
    // }
}
