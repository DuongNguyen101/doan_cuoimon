<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Categories extends Model{
    public $table = 'categories';
    public $primaryKey = 'category_id';
    public $timestamps = false;
    public $fillable = [
        'category_id',
        'name',
        'description',
        'created_at',
        'updated_at'

    ];
    public function products()
    {
        return $this->hasMany(Products::class, 'category_id', 'category_id');
    }
}

?>