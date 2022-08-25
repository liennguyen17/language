<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Post extends Model
{
    use Translatable;
    use HasFactory;

    public $timestamps = false;
    public $translatedAttributes = ['title', 'content','locale','category_id','image','post_id'];
    protected $fillable = ['status','author'];
}
