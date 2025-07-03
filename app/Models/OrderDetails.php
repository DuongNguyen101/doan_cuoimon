<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class OrderDetails extends Model{
    public $table = 'order_details';
    public $primaryKey = 'order_id';
    public $timestamps = false;
    public $fillable = [
        'order_detail_id',
        'order_id',
        'product_id',
        'quantity',
        'unit_price',
        'subtotal'

    ];
    
}

?>