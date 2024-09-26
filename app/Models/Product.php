<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_name',
        'pro_price',
        'pro_keyword',
        'shelf_life',
        'pro_description',
        'pro_width',
        'pro_height',
        'pro_length',
        'pro_image_url'
    ];
    //declares a relation
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
}


