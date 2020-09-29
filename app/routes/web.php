<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Admin: Requires authentification -> conjunto de rotas que requerem autentificação
$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
 	$this->get('/','AdminController@index')->name('admin.home');
    $this->get('stock','StockController@index')->name('stock.home');
    $this->get('stock/addProdutos','StockController@addProdutos')->name('addProdutos.home');
    $this->get('stock/historico','StockController@historico')->name('historico.home');
    $this->post('stock/edProdutos','StockController@update')->name('produto.update');
    $this->post('stock/addProdutos/store','StockController@insert')->name('produto.store');
    $this->get('stock/produto','StockController@index')->name('produto.home');
    $this->get('subcategorias','SubCategoriasController@index')->name('subcategorias.home');
    $this->get('subcategorias/addSubCategorias','SubCategoriasController@insert')->name('addSubCategorias.home');
    $this->post('subcategorias/addSubCategorias/store','SubCategoriasController@store')->name('subcategorias.store');

	

	



});


$this->get('/', 'Site\SiteController@index');



//Route::get('/', 'Site\SiteController@index');
//Route::get('/admin', 'Admin\AdminController@index');
//Route::get('/home', 'HomeController@index');
Auth::routes();   