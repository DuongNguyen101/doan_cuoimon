<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ProductDetail extends Model
{
    public $table = 'product_detail';
    public $primaryKey = 'product_id';
    public $timestamps = false;
    public $fillable = [
        'product_id',
        'nutritional_info',
        'description',
        'usage_instructions',
        'expiration_date',
        'stock',
        'packaging_type',
        'origin',
        'created_at',
        'updated_at'

    ];
}
