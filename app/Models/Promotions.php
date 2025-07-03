<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Promotions extends Model{
    public $table = 'promotions';
    public $primaryKey = 'promotion_id';
    public $timestamps = false;
    public $fillable = [
        'promotion_id',
        'title',
        'description',
        'discount_percentage',
        'discount_amount',
        'start_date',
        'end_date',
        'product_id',
        'status',
        'created_at',
        'updated_at'

    ];
    
}

?>