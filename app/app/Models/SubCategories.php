<?php

namespace appModels\Models;

use Illuminate\Database\Eloquent\Model;
use BD;

class SubCategories extends Model {


     
     public function produtos(){
        return $this->belongsTo('appModels\Models\Products', 'sub_categories', 'id');
    }
}
