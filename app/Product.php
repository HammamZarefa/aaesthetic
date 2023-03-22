<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Image;

class Product extends Model
{
    use Translatable;
    protected $table = 'products';
    protected $fillable = ['product_img'];
    public $translatedAttributes = ['product_title','product_desc'];

    public function images(){
        return $this->hasMany('App\Image');
    }
}
