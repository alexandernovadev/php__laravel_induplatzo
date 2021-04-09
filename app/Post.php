<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // un post pertences a UN user 
    // por eso solo es user no users
    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function getGetTitleAttribute()
    {
        return strtoupper($this->title);
    }
    
}   
