<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

}