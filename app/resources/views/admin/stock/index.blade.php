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
              <h3 class="box-title">Product List</h3>
              <form enctype="multipart/form-data" role="form" action="?marca=marca" method="GET">
                  {!! csrf_field() !!}
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input name="marca" class="form-control pull-right" placeholder="Search Brand" type="text">

                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                  </div>
              </form>

               <form enctype="multipart/form-data" role="form" action="?preco=preco" method="GET">
                  {!! csrf_field() !!}
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input name="preco" class="form-control pull-right" placeholder="Search Price" type="text">

                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                  </div>
              </form>





            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row">
                <div class="col-sm-6"><div class="dataTables_length" id="example1_length">
               Sort: <a href="{{route('stock.home',['order' => request('order'), 'sort' => 'asc']) }}"> Ascending </a> | <a href="{{route('stock.home',['order' => request('order'), 'sort' => 'desc']) }}"> Descending </a>
          </div></div><div class="col-sm-6">

                <div id="datatables_filter" class="dataTables_filter"><label><div class="form-group form-group-sm is-empty"><span class="material-input"></span></div></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-no-bordered table-hover dataTable dtr-inline" id="datatables" style="width: 100%;" role="grid" aria-describedby="datatables_info" width="100%" cellspacing="0">
                <thead>
                <tr role="row">
                  <th class="sorting" style="width: 10.467px;"><a href="?order=categoria">Category</a></th>
                  <th class="sorting" style="width: 225.017px;"><a href="?order=Nome">Name</a></th>
                  <th class="sorting" style="width: 198.733px;"><a href="?order=Marca">Brand</a></th>
                  <th class="sorting" style="width: 155.9px;"><a href="?order=Quantidade">Quantity</a></th>
                  <th class="sorting" style="width: 110.883px;"><a href="?order=Preco">Price</a></th>
                  
                  <th style="width: 110.883px;">Actions</th>
                  </tr>
                </thead>
                <tbody>
              <!--Here lays the foreach-->
               @foreach ($products as $p)
                
                 <tr role="row" class="odd" align="center">
                    <td class="sorting_1">{{ $p->categories}} </td>
                    <td>{{ $p->name }} </td>
                    <td>{{ $p->brand }} </td>
                    <td>{{ $p->quantity }} </td>
                    <td>{{ $p->price }} € </td>
                   
                    <td>
                      <a href="?produto={{ $p->id }}" value="{{ $p->id }}" title="See Details"><i class="fa fa-eye" style="font-size:19px; color:black;" aria-hidden="true"></i></a>
                      &nbsp;&nbsp;&nbsp;
                      <a href="?editar={{ $p->id}}" title="Edit"><i class="fa fa-pencil" style="font-size:17px; color:black;" aria-hidden="true"></i></a>
                      &nbsp;&nbsp;&nbsp;
                      <a href="?remove={{ $p->id}}" title="Remove"><i class="fa fa-times" style="font-size:19px; color:black;" aria-hidden="true"></i></a>

                    </td>
                  </tr>
                @endforeach 

                </tbody>



              </table></div></div>

              
                <div class="col-sm-12">
                      <a href="http://app.test/lorac/vendor/tecnick.com/tcpdf/examples/example_001.php ">Send List by email</a>
                  </div>
              <div class="col-sm-12">
              {{$products->links()}}
              </div>
                                  
            <!-- /.box-body -->
          </div>

              


           
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop



