<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    public function tenant(){
        $this->hasOne('tenant');
    }
    public function user(){
        $this->hasOne('user');
    }
}
