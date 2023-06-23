<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoes extends Model
{
    use HasFactory;
    protected $fillable= ['namePicture','sizePicture','brand','size','color','price','speed'];

    public function scopePriceMatches($query, $price)
    {
        return $query->where('price', $price);
    }
}
