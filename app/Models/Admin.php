<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admin';
    protected $primaryKey = 'id';
    public $timestamps = true; 

    protected $fillable = ['name', 'email', 'password', 'role', 'created_at'];
}
