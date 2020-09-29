<?php

namespace appModels\Http\Controllers\Admin;

use Illuminate\Http\Request;
use appModels\Http\Controllers\Controller;
use appModels\Http\Requests;
use appModels\Models\Products;
use appModels\Models\Categories;
use appModels\Models\SubCategories;
use Illuminate\Support\Facades\DB;



class StockController extends Controller
{
    
    public function index($nProdutos=5) {

        $products = new Products;
      
    if(request()->has('stock')!=null){
            
            
            $products = Products::orderBy('name')->where('quantity','<', '7');


    } else if(request()->has('disponiveis')!=null){

            
            $products = Products::orderBy('name')->where('quantidade','>', '0');


    }  else if (request()->has('produto') != null) {

             
             $products = Products::orderBy('name')->where('id', '=', request('produto'))->get(); 
          
              return view('admin.stock.produto', compact('products'));


    } else if (request()->has('marca') != null) {

             
              $palavra = '%'.request('marca').'%';

              $products = Products::orderBy('name')->where('brand', 'like', request('marca'));

      
  } else if (request()->has('preco') != null) {

             
             $products = Products::orderBy('name')->where('price', '=', request('preco'));

              //$products = Products::orderBy('name')->where('price', '<=', request('preco'));


  }  else if (request()->has('editar') != null) {

              
              $products = Products::orderBy('name')->where('id', '=', request('editar'))->get();

              return view('admin.stock.edProdutos', compact('products'));

              


  }  else if (request()->has('order') != null and request()->has('sort') != null)  {

              
              $products = Products::orderBy('price', request('sort'))->where('state', '=', '1');



  } else if(request()->has('order') ==null and request()->has('sort')!=null ){
           
              
              $produtos = Products::orderBy('name',request('sort'))->where('state','=', '1');

  
  } else if(request()->has('order')!=null and request()->has('sort')==null ){
            
              
              $produtos = Products::orderBy(request('order'))->where('state','=', '0');
  
  }  else{  
    
            $produtos = Products::orderBy('name')->where('state','=', '0');
  }

  if(request()->has('remove')!=null){
            
            DB::table('products')->where('id','=', request('remove'))->update(array('state' => 1));
  }

            $products = $products->paginate(6)->appends([
            
            'order' => request('order'),
            'sort' => request('sort'),
            'preco' => request('preco'),
            'marca' => request('marca'),
            'stock' => request('stock'),
            'disponiveis' => request('disponiveis'),
        ]);


            
        return view('admin.stock.index', compact('products'));
    }


     public function historico(){
        
          $products = new Products;

          
      
    if(request()->has('produto')!=null){
            
            
            $products = Products::orderBy(request('order'), request('sort'))->where('name','=', request('produto'));
            

    }if(request()->has('order')!=null and request()->has('sort')!=null ){


            $products = Products::orderBy(request('order'),request('sort'))->where('state','=', '1');

    
    }else if(request()->has('order')==null and request()->has('sort')!=null ){

            $products = Products::orderBy('name',request('sort'))->where('state','=', '1');


    } else if(request()->has('order')!=null and request()->has('sort')==null ){


            $products = Products::orderBy(request('order'))->where('state','=', '1');

    }else
    {
            $products = Products::orderBy('name')->where('state','=', '1');
   

    }if(request()->has('remove')!=null){


            DB::table('products')->where('id','=', request('remove'))->delete();

    
    }if(request()->has('public')!=null){

            DB::table('products')->where('id','=', request('public'))->update(array('state' => 0));
    }

        
        $products = $products->paginate(5)->appends([
            
            'order' => request('order'),
            'sort' => request('sort'),
        ]);

        return view('admin.stock.historico', compact('products'));
    }



      public function addProdutos(){
        

            $products = Products::orderBy('name')->get();

            return view('admin.stock.addProdutos', compact('products'));
    }

     public function insert(Request $request, Products $produto){

        DB::table('products')->insert(
            array(                
              
            'categories' => request('categories'), 
            'subcategoryname' => request('subcategoryname'), 'sub_category' => request('sub_category'),
            'name' => request('name'), 
            'brand' => request('brand'), 
            'levelofalcohol' => request('levelofalcohol'),
            'price' => request('price'), 
            'quantity' => request('quantity'), 
            'state' => request('state'),
            'image' => request('foto'),
            'created_by' => auth()->user()->id,
            'created_at' => date("Y/m/d"),                
            )
        );

        $products = Products::orderBy('name')->get();
       return view('admin.stock.addProdutos', compact('products'));

      }




      /*Edit Products*/
    public function update(Request $Request) {

      DB::table('products')->where(
          'id', '=', request('id'))->update(
          ['categories' => request('categories'), 
          'subcategoryname' => request('subcategoryname'),
          'name' => request('name'), 
          'brand' => request('brand'), 
          'levelofalcohol' => request('levelofalcohol'),
          'price' => request('price'), 
          'quantity' => request('quantity'),
          'state' => request('state'), 
          'image' => request('foto'),
        ]
      );

      $products = Products::orderBy('name')->where('state', '=', '0')->paginate(5);
      return view('admin.stock.index', compact('products'));
    }


}