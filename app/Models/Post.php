<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    //This is to determine which attribute to be mass assignable
    protected $fillable = ['title', 'excerpt', 'content', 'published_at'];

    //This is to determine which attribute to not be mass assignable
    // protected $guarded = ["id"];
}
