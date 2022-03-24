<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    protected $guarded = ['created_at','updated_at'];
    use HasFactory;
    
    //we have tag belongsToMany posts
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

}
