<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
   public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
