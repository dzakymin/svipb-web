<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug', 'content','users_id', 'created_at', 'updated_at'];

    public function user(){
        $this->belongsThis(User::class, 'users_id');
    }
}

