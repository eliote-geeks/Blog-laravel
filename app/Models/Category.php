<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    protected $table = 'categories';
    use HasFactory;

    // we have a category and it hasMany posts

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    
}
