<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function post_tag()   
        {
                return $this->hasMany(Post_tag::class); 
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
        
        public function posts(){
    return $this->belongsToMany(Post::class);
   }
    
    use HasFactory;
}
