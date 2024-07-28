<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function tags()   
        {
            return $this->hasMany(Tag::class);  
        }
    
    use HasFactory;
}
