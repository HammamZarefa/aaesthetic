<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Image extends Model
{
    protected $table = 'product_imgs';

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
