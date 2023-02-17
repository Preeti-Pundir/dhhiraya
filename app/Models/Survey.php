<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Survey extends Model
{
    protected $fillable=['user_id' ,'que_1','que_2','que_3','que_4','que_5',];

    public $timestamps = false;

}