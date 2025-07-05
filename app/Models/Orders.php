<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Orders extends Model
{
    public $table = 'orders';
    public $primaryKey = 'order_id';
    public $timestamps = false;
    public $fillable = [
        'order_id',
        'user_id',
        'order_date',
        'total_amount',
        'status',
        'address',
        'created_at',
        'updated_at'

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
