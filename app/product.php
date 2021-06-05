<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table="product";
    // protected $fillable=["id","name","catalog_detail_id","brand_id"];
    public $timestamps=false;

        public function catalog_detail(){
        	return $this->belongsTo('App\catalog_detail','catalog_detail_id','id');
        }

        public function comment(){
        	return $this->hasMany('App\comment','product_id','id');
        }

      public function list_image(){
        	return $this->hasMany('App\list_image','id_sp','id');
        }
     public function product_details(){
        	return $this->hasMany('App\product_details','product_id','id');
        }
        public function brand(){
            return $this->belongsTo('App\brand','brand_id','id');
        }

    public function product_size(){
     	return $this->belongsToMany('App\product_size','size_id','id');
     		
     }
     public function product_sizes(){
        return $this->belongsToMany('App\product_size','product_details','product_id','size_id');
    }

}
