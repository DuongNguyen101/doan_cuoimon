<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qna extends Model
{
    protected $table = 'qna';
    protected $primaryKey = 'qna_id';
    protected $fillable = ['qna_id', 'user_id', 'product_id', 'question', 'answer', 'status', 'created_at', 'updated_at'];
}
