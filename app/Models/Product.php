<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * relation ship function
     */
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('total_quantity','total_price');
    }

    /**
     * getter for the price
     */


     public function price():Attribute
     {
       return Attribute::make(
        get: fn($value)=>str_replace('.',',', $value / 100).'$'
       );
     }
}
