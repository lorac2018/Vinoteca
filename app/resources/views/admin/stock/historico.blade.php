@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  <section class="content-header">
   <small>Stock Management</small>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Stock Verification</li>
    </ol>
  </section>
  <br>
  <div class="box">        
            <div class="box-header">
              <h3 class="box-title">Product List </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row">
                <div class="col-sm-6"><div class="dataTables_length" id="example1_length">
                Sort: <a href="{{route('stock.home',['order' => request('order'), 'sort' => 'asc']) }}"> Ascending </a> | <a href="{{route('stock.home',['order' => request('order'), 'sort' => 'desc']) }}"> Descending </a> 
          </div></div><div class="col-sm-6">
                  
                  <div id="datatables_filter" class="dataTables_filter"><label><div class="form-group form-group-sm is-empty"><input class="form-control" placeholder="Search records" aria-controls="datatables" type="search"><span class="material-input"></span></div></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-no-bordered table-hover dataTable dtr-inline" id="datatables" style="width: 100%;" role="grid" aria-describedby="datatables_info" width="100%" cellspacing="0">
                <thead>
                <tr role="row">
                  <th class="sorting" style="width: 18.467px;"><a href="?order=categoria">Category</a></th>
                  <th class="sorting" style="width: 18.467px;"><a href="?order=sub_categoria">Sub Category </a></th>
                  <th class="sorting" style="width: 225.017px;"><a href="?order=Nome">Name</a></th>
                  <th class="sorting" style="width: 198.733px;"><a href="?order=Marca">Brand</a></th>
                  <th class="sorting" style="width: 155.9px;"><a href="?order=Quantidade">Quantity</a></th>
                  <th class="sorting" style="width: 110.883px;"><a href="?order=Preco">Price</a></th>
                  <th class="sorting" style="width: 110.883px;"><a href="?order=state">State</a></th>
                  <th style="width: 110.883px;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($products as $p)
                  <tr role="row" class="odd" align="center">
                    <td class="sorting_1">{{ $p->categories}} </td>
                    <td>{{ $p->subcategoryname}}</td>
                    <td>{{ $p->name}}</td>
                    <td>{{ $p->brand }}</td>
                    <td>{{ $p->quantity }}</td>
                    <td>{{ $p->price }} €</td>
                    <td>{{ $p->state }}</td>
                    <td>

                      <a href="?public={{ $p->id }}" title="public"><i class="fa fa-recycle" style="font-size:17px; color:orange;" aria-hidden="true"></i></a>
                      &nbsp;&nbsp;&nbsp;
                      <a href="?remove={{ $p->id }}" title="Remover"><i class="fa fa-times" style="font-size:19px; color:red;" aria-hidden="true"></i></a>

                    </td>
                  </tr>
                @endforeach 

                </tbody>


              </table></div></div><div class="row">

              <div class="col-sm-12"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
              {{$products->links()}}
              </div></div>
                                  
            <!-- /.box-body -->
          </div>

@stop