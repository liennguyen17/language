<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $fillable = ['title','content','locale','category_id','image','post_id'];

    public function category(){
        return $this->belongsTo(CategoryTranslation::class,'category_id');
    }

    public function post(){
        return $this->belongsTo(Post::class,'post_id');
    }
}
