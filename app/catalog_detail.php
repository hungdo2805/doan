<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catalog_detail extends Model
{
    //
    protected $table='catalog_detail';
     public $timestamps=false;
    public function catalog(){
    	return $this->belongsTo('App\catalog','parent_id','id');
    }

    public function product(){
    	return $this->hasMany('App\product','catalog_detail_id','id');
    }

    public function tintuc(){
    	return $this->hasMany('App\new','id_catalog_detail','id');
    }
}
