<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    //
     protected $table="bill";

     public $timestamps=false;

	


     public function users(){
     	return $this->belongsTo('App\bill','user_id','id');
     }
}
