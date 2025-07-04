<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model{

    protected $table = 'user_addresses';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'city',
        'street',
        'district',
        'created_at',
        'updated_at',
    ];
}
