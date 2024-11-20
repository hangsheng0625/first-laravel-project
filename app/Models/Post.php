<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    //This is to determine which attribute to be mass assignable
    protected $fillable = ['title', 'excerpt', 'content', 'published_at', 'category_id'];

    //This is to determine which attribute to not be mass assignable
    // protected $guarded = ["id"];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
