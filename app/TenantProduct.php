<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenantProduct extends Model
{
    //
    public function tenant(){
        $this->hasOne('tenant');
    }
    public function product(){
        $this->hasOne('product');
    }
}

