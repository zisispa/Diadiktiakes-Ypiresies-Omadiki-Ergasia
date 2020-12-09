<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $appends = ['products'];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function getProductsAttribute()
    {
        return $this->products()->get();
    }
}
