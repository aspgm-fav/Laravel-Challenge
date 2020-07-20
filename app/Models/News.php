<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'content'
    ];

    public function images() 
    {
        return $this->belongsToMany('\App\Models\Image', 'news_images');
    }

    public function category()
    {
        return $this->hasOne('\App\Models\Category', 'id', 'category_id');
    }
    
    public function tags() 
    {
        return $this->belongsToMany('\App\Models\Tag', 'news_tags');
    }

    public function comments()
    {
        return $this->hasMany('\App\Models\Comment', 'news_id', 'id');
    }
}
