<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuTabs extends Model
{
    protected $table = 'menu_tabs';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'slug', 'parent_id', 'order', 'status', 'created_at', 'updated_at'];
}
