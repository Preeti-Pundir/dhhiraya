<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = [
        'url', 'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
