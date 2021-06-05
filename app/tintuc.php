<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    protected $table="tintuc";
    public $timestamps=false;

   public function catalog_detail(){
    	return $this->belongsTo('App\catalog_detail','id_catalog_detail','id');
    }
}
