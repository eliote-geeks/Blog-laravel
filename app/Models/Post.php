<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $table = 'posts';
    use HasFactory, SoftDeletes;

    // public static function boot()
    // {
    //     parent::boot();
    //     self::creating(function ($post){
    //         $post->user()->associate(auth()->user()->id);
    //         $post->category()->associate(request()->category);
    //     });
    // }

    // we have  post and it belongsTo a user
    public function user()
    {
        return $this->belongsTo(User::class);  
    }

    //we have a post and it belongsToMany tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //we have a post and it belongsTo a Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }



}
