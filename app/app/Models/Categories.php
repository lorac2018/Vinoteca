<?php

namespace appModels\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Categories extends Model
{
	protected $table = "categories";

     function produtos() {

    	return $this->belongsTo('Products', 'id');
    }

    function subcategories() {

    	return $this->hasMany('SubCategories', 'id');
    }
}
