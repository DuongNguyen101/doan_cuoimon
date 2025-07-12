<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    const STATUS_PENDING = 'pending';
    const STATUS_RESOLVED = 'resolved';
    
    public $table = 'orders';
    public $primaryKey = 'order_id';
    public $timestamps = false;

    protected $fillable = [
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

    public function details()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'order_id');
    }

    // Optional: Helper functions
    public function isPending()
    {
        return $this->status === self::STATUS_PENDING;
    }

    public function isResolved()
    {
        return $this->status === self::STATUS_RESOLVED;
    }
}
