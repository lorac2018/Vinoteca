<?php

namespace appModels\Http\Controllers\Admin;

use Illuminate\Http\Request;
use appModels\HTTP\Requests;
use appModels\Http\Controllers\Controller;

use appModels\Models\SubCategories;
use Illuminate\Support\Facades\DB;

class SubCategoriasController extends Controller
{


    public function index($nProdutos=7) {

      $SubCategories = new SubCategories;
         
    	$subcategories = SubCategories::orderBy('id')->paginate(7);

    	return view('admin.subcategorias.index', compact('subcategories'));

    }


   public function insert (Request $request) {


   	$subcategories = SubCategories::orderby('id')->paginate(7);

   	return view('admin.subcategorias.addSubCategorias', compact('subcategories'));


   }

  public function store(){
        DB::table('sub_categories')->insert(
            array(
                'id' => request('id'),
                'name' => request('name'),
                'created_by' => auth()->user()->name,
                'created_at' => date("Y/m/d"),                
            )
        );
        $subcategories = SubCategories::orderBy('id')->paginate(7);
        return view('admin.subcategorias.addSubCategorias', compact('subcategories'));
     
        
    }



   


   
}
