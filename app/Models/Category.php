<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Category extends Model
{
    use Translatable;
    use HasFactory;
    public $timestamps = false;
    public $translatedAttributes = ['title', 'description','locale','category_id'];
    protected $fillable = ['status'];

}
