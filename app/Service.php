<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function schemes(){
    	return $this->hasMany('App\Scheme');
    }
}
