<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Products extends Model{
    public $table = 'products';
    public $primaryKey = 'product_id';
    public $timestamps = false;
    public $fillable = [
        'product_id',
        'name',
        'description',
        'short_description',
        'price',
        'quantity',
        'stock',
        'category_id',
        'image_url',
        'status',
        'created_at',
        'updated_at'

    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }
}

?>