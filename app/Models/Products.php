<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Review;

class Products extends Model
{
    public $table = 'products';
    public $primaryKey = 'product_id';
    public $timestamps = true;
    public $fillable = [
        'product_id',
        'name',
        'description',
        'short_description',
        'price',
        'stock',
        'category_id',
        'image_url',
        'nutritional_info',
        'usage_instructions',
        'packaging',
        'origin',
        'status',
        'created_at',
        'updated_at'

    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id', 'product_id'); 
    }
}
