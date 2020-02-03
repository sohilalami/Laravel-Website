<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','description','price','pub_date'];

    public function getPriceDisplay()
    {
        return '$ ' . $this->price;
    }
}
