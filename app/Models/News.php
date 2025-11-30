<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug', 'content', 'image','users_id', 'created_at', 'updated_at'];

    public function user(){
        return $this->belongsTo(\App\Models\User::class, 'users_id');
    }
}

