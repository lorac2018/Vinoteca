@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  <section class="content-header">
   <small>Stock Management</small>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Add Stock</li>
    </ol>
  </section>
@stop

@section('content')
<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add SubCategory</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action = "{{ route ('subcategorias.store') }} " method = "POST">      
                  {!! csrf_field() !!}
                <div class="form-group col-md-12">
                  <label>Sub Category ID</label>
                  <input name="id" class="form-control" placeholder="ID SubCategory ..." required  type="number">
                </div>
                <div class="form-group col-md-12">
                  <label>Name</label>
                  <input name="name" class="form-control" placeholder="SubCategory Name ..."  required  type="text">
                </div>

              <div class="box-footer col-md-12">
                <button type="submit" class="btn btn-primary" value="insert">Submit</button>
              </div>
              </form>
            </div>

            <!-- /.box-body -->
          </div>

@stop
