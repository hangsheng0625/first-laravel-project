<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{   
    use HasFactory;
    //This is to determine which attribute to be mass assignable
    protected $fillable = ['title', 'excerpt', 'content', 'published_at', 'category_id'];

    //This is to determine which attribute to not be mass assignable
    // protected $guarded = ["id"];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
