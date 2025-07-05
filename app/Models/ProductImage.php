<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_images';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'product_id', 'image_path', 'caption', 'created_at', 'updated_at'];
}
