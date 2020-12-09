<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $appends = ['shops'];

    public function shops()
    {
        return $this->belongsToMany(Shop::class);
    }

    public function getShopsAttribute()
    {
        return $this->shops()->get();
    }
}
