<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'email', 'password', 'role', 'created_at'];
}
