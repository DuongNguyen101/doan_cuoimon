<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $table = 'about';
    public $primaryKey = 'id';
    public $timestamps = false;
    public $fillable = [
        'title',
        'description',
        'image',
        'created_at',

    ];
}
