<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function category_posts()   
        {
                return $this->hasMany(CategoryPost::class); 
            }
                
    public function category()
        {
            return $this->belongsTo(Category::class);
        }
        
     public function area()
        {
            return $this->belongsTo(Area::class);
        }
        
     public function price()
        {
            return $this->belongsTo(Price::class);
        }
        
    use HasFactory;
}
