<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
     protected $table="comment";
     
     public $timestamps=false;

     public function product(){
     	return $this->belongsTo('App\product','product_id','id');
     }

     public function users(){
     	return $this->belongsTo('App\user1','user_id','id');
     }
}
