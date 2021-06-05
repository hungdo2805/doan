<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_image extends Model
{
    //
    protected $table="list_image";
     public $timestamps=false;
    public function product(){
    	return $this->belongsTo('App\product','id_sp','id');
    }
}
