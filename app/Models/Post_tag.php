<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    
    public function post()
        {
            return $this->belongsTo(Post::class);
        }
        
    public function tag()
        {
            return $this->belongsTo(Tag::class);
        }
    
    use HasFactory;
}
