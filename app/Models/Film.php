<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'year', 'description', 'category_id'];

    public function category()
    { 
        return $this->belongsTo(Category::class); 
    }
}
