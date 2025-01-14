<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    /* Relations */
    public function posts() {
        return $this->hasMany('App\Models\Post');
    }
    
    public function galleries() {
        return $this->hasMany('App\Models\Gallery');
    }

    public function products() {
        return $this->hasMany('App\Models\Product');
    }
}
