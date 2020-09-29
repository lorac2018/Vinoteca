<?php

namespace appModels\Http\Controllers\Site;

use Illuminate\Http\Request;
use appModels\Http\Controllers\Controller;
use appModels\Models\Products;
use appModels\Models\SubCategories;
use Illuminate\Support\Facades\View;

class SiteController extends Controller
{
  
	public function index($nProdutos = 5){


		$products = new Products;

		if(request()->has('cat')!= null) {


			$products = Products::orderBy('name')->where('subcategoryname', '=', request('cat'));

		}
		else {

			$products = Products::orderBy('name');
		}





		$products=$products
		->where('state', '=', '1')
		->where('quantity', '>', '0')
		->where('levelofalcohol', '>', '0');
		 $products = $products->paginate(6);
		 $subcategories = SubCategories::orderBy('name')->get();




	return View('site.home.welcome',  ['products' => $products, 'subcategories' => $subcategories]);


}

}
 

    