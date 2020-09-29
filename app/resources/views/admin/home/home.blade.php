@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <section class = "content_header">
    	<small> Stock Management </small>
    	<ol class = "breadcrumb">
    		<li><a href = "#"><i class = "fa fa-dashboard"></i>Dashboard </a> </li>
    	</ol>
    </section>
@stop

@section('content')
    	
    	<section class = "content">
    		<div class = "row">
    			<!-- Products -->
    		<div class="col-lg-3 col-xs-6">
    			<div class = "small-box bg-blue">
    				<div class = "inner">
    					 <h3>{{ $nprodutos }} </h3>
    					<p>Available Products</p>
    				</div>
    			<div class = "icon">
    				<i class = "ion ion-bag"></i>
    			</div>

    			<a href = "admin/stock?disponiveis=disponiveis"
    			class = "small-box-footer">List Products &nbsp; <i class = "fa fa-arrow-circle-right"></i></a>
    		</div>
    		</div>

    			<!---Stock--->
    		<div class="col-lg-3 col-xs-6">
          		<div class="small-box bg-yellow">
            		<div class="inner">
              		<!--Ir buscar o stock $stock-->
              		 <h3>{{ $stock }}</h3>
              <p>Stock Ending</p>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            </div>

	


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

