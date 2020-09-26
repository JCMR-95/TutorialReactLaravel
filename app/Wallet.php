<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public function transfer(){
        return $this->hasMany('App\Transfer');
    }
}
