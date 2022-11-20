<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','price','capacity','description','image','price'];  
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_product');
    }
}
