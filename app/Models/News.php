<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class News extends Model{
    public $table = 'news';
    public $primaryKey = 'news_id';
    public $timestamps = false;
    public $fillable = [
        'news_id',
        'title',
        'content',
        'author',
        'image_url',
        'publish_date',
        'status',
        'created_at',
        'updated_at'

    ];
    
}

?>