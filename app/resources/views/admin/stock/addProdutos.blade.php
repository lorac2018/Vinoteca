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
              <h3 class="box-title">Add Product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action = "{{ route('produto.store') }}" method = "POST">
                  
                  {!! csrf_field() !!}
                <div class="form-group col-md-12">
                  <label>Category</label>
                  <input name="categories" class="form-control" placeholder="Product Category..." required type="text">
                </div>
                <div class="form-group col-md-12">
                  <label>SubCategory Name</label>
                  <input name="subcategoryname" class="form-control" placeholder="Product SubCategory..." required  type="text">
                </div>
                  <div class="form-group col-md-12">
                  <label>SubCategory ID</label>
                  <input name="sub_category" class="form-control" placeholder="Product SubCategory..." required  type="text">
                </div>

                  <div class="form-group col-md-12">
                  <label>Name</label>
                  <input name="name" class="form-control" placeholder="Product Name ..." required  type="text">
                </div>
                <div class="form-group col-md-12">
                  <label>Brand</label>
                  <input name="brand" class="form-control" placeholder="Product Brand..."  required  type="text">
                </div>
                <div class="form-group col-md-12">
                  <label>Level of Alcohol</label>
                  <input name="levelofalcohol" class="form-control" placeholder="Level Of Alcohol ..." type="text">
                </div>
                <div class="form-group col-md-12">
          
                  <label>Price:</label>
                  <div class="input-group">
                    <input name="price" min="0.00" class="form-control" type="number" step="0.01">
                    <span class="input-group-addon">€</span>
                  </div>
                
                <div class="form-group col-md-4">
                  <label>Quantity:</label>
                  <input name="quantity" min="0" class="form-control" placeholder="Quantity ..." type="number">
                </div>
               
                </div>
                <input TYPE="hidden" name="state" class="form-control" type="number" value="1">     
                
                <div class="form-group col-md-4">
                  <label>Image:</label>
                  <input name="foto" class="form-control" placeholder="Image ..." type="file">
                </div>
              <div class="box-footer col-md-12">
                <button type="submit" class="btn btn-primary" value="insert">Submit</button>
              </div>
              </form>
            </div>
          </div>



            <!-- /.box-body -->
          



@stop