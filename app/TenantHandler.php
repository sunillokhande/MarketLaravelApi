<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenantHandler extends Model
{
    //
    public function tenant(){
        $this->hasOne('tenant');
    }
}
