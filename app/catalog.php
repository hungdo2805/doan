<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catalog extends Model
{
    //
     protected $table="catalog";

     public $timestamps=false;

     public function catalog_detail(){
     	return $this->hasMany('App\catalog_detail','parent_id','id');
     }

     public function product(){
     	return $this->hasManyThrough('App\product',
     		'App\catalog_detail',
     		'parent_id',
     		'catalog_detail_id',
     		'id');
     }
}
