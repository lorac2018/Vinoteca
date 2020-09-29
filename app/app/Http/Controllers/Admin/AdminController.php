<?php

namespace appModels\Http\Controllers\Admin;

use Illuminate\Http\Request;
use appModels\Http\Controllers\Controller;
use appModels\Models\Products as pModel;


class AdminController extends Controller
{
    
    public function index() {

    	$nprodutos = pModel::count();
    	$stock = pModel::where('quantity','<',10)->count();

    	return view('admin.home.home',  ['nprodutos' => $nprodutos, 'stock' => $stock]);

    }
}
