<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Payments extends Model{
    public $table = 'payments';
    public $primaryKey = 'payment_id';
    public $timestamps = false;
    public $fillable = [
        'payment_id',
        'order_id',
        'amount',
        'payment_method',
        'payment_date',
        'status',
        'transaction_id',
        'created_at',
        'updated_at'

    ];
    
}

?>