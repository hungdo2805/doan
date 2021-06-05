<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_details extends Model
{
    //
     protected $table="product_detail";
     public $timestamps=false;
     public function product(){
     	return $this->belongsTo('App\product','product_id','id');
     }

     // public function product_size(){
     // 	return $this->belongsTo('App\product_size','size_id','id');
     // }
     public function product_size(){
     	return $this->hasMany('App\product_size','size_id','id');
     }
}
