<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','created_by');
    }

    public function publisher()
    {
        return $this->belongsTo('App\User','published_by');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_post');
    }
}
