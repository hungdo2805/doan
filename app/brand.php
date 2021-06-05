<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    //
     protected $table="brand";
     protected $fillable=["id","name"];
      public $timestamps=false;

      public function product(){
        	return $this->hasMany('App\product','brand_id','id');
        }
    
}
