<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //
    protected $table="userssss";
     public $timestamps=false;

     // public function comment(){
     // 	return $this->hasMany('App\comment','user_id','id');
     // }
     // public function bill(){
     // 	return $this->hasMany('App\bill','user_id','id');
     // }
}
