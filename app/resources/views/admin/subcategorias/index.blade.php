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
              <h3 class="box-title">SubCategory List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row">
                <div class="col-sm-6"><div class="dataTables_length" id="example1_length">
          </div></div><div class="col-sm-6">
                  
                  <div id="datatables_filter" class="dataTables_filter"><label><div class="form-group form-group-sm is-empty"><span class="material-input"></span></div></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-no-bordered table-hover dataTable dtr-inline" id="datatables" style="width: 100%;" role="grid" aria-describedby="datatables_info" width="100%" cellspacing="0">
                <thead>
                <tr role="row">
                  <th style="width: 18.467px;">ID</th>
                  <th style="width: 100px;">Name</th>
                  <th style="width: 100px;">Created By</th>
                  <th style="width: 100px;">Created At</th>
                  


                  </tr>

                </thead>
                <tbody>
                @foreach ($subcategories as $s)
                  <tr role="row" class="odd" align="left">
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->created_by }}</td>
                     <td>{{ $s->created_at }}</td>

                  </tr>
                @endforeach 

                </tbody>


              </table></div></div><div class="row">

              <div class="col-sm-12">
             {{ $subcategories->links() }}
              </div>
                                  
            <!-- /.box-body -->
          </div>

@stop