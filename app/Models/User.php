<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\UserAddress;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'password',
        'created_at',
        'updated_at',
        'role',
        'image_url',
        'status',
        'remember_token',
        'description'

    ];
    public function address()
    {
        return $this->hasOne(UserAddress::class, 'user_id');
    }
    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}
