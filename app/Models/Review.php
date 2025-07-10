<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'review_id';
    protected $fillable = ['review_id', 'user_id', 'product_id', 'rating', 'comment', 'created_at', 'updated_at'];
     public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'product_id'); 
    }
}
