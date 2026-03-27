<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function getPriceAttribute($value)
    {
        return number_format($value, 2, ',', '.') . ' đ';
    }

}
