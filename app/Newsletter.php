<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{

    protected $tables = 'newsletters';
    protected $fillable = [
         'email',
    ];
}
