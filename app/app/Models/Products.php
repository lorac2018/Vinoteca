<?php

namespace appModels\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Products extends Model
{

		protected $table = "products";
		
	
  /*  public function categories(){
        return $this->hasOne('Categories', 'id');
    }*/

     public function subcategoria(){
        return $this->hasMany('appModels\Models\SubCategories', 'id', 'sub_categories');
    }
	




}
