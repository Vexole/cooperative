<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    public function service(){
    	return $this->belongsTo('App\Service');
    }
}
