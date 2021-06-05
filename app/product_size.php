<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_size extends Model
{
    //
    protected $table="product_size";
    public $timestamps=false;


    public function product_details(){
     	return $this->hasMany('App\product_details','size_id','id');
     }

    // public function product(){
    //  	return $this->belongsToMany('App\product','size_id','id');
    //  }
}
