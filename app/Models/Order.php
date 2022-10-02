<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * relation ship function
     */
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('total_quantity','total_price');
    }
}
