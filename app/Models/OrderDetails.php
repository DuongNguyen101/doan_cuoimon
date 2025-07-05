<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $table = 'order_details';
    protected $primaryKey = 'order_detail_id';
    protected $fillable = ['order_detail_id', 'order_id', 'product_id', 'quantity', 'unit_price', 'subtotal'];
    public $timestamps = false;
    public $incrementing = true;
}
