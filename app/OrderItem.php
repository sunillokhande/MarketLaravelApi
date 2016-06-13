<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    public function order(){
        $this->hasOne('order');
    }
    public function product(){
        $this->hasOne('product');
    }
}
