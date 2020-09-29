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
              <h3 class="box-title">Edit Products</h3>
            </div>
            <!-- /.box-header -->
            @foreach ($products as $p)        
            <div class="box-body">
              <form action = "{{ route('produto.update') }}" method = "POST">
                {!! csrf_field() !!}

                <div class="form-group col-md-12">
                  <label>Categories</label>
                  <input name="categories" class="form-control" value="{{ $p->categories }}" type="text">
                </div>  

                <div class="form-group col-md-12">
                  <label>SubCategory Name</label>
                  <input name="subcategoryname" class="form-control" value="{{ $p->subcategoryname }}" type="text">
                </div>

                <div class="form-group col-md-12">
                  <label>Name</label>
                  <input name="name" class="form-control" value="{{ $p->name }}" type="text">
                </div>
                <div class="form-group col-md-12">
                  <label>Brand</label>
                  <input name="brand" class="form-control" value="{{ $p->brand }}" type="text">
                </div>

                <div class="form-group col-md-12">
                  <label>Level of Alcohol</label>
                  <input name="levelofalcohol" class="form-control"value="{{ $p->levelofalcohol }}" type="text">
                </div>
                
                <div class="form-group col-md-4">
                  <label>Price:</label>
                  <input name="price" class="form-control" value="{{ $p->price }}" type="text">
                   <span class="input-group-addon">€</span>
                </div>
                <input TYPE="hidden" name="id" class="form-control" type="text" value="{{ $p->id }}">
                <div class="form-group col-md-4">
                  <label>Quantity:</label>
                  <div class="input-group">
                    <input name="quantity"   class="form-control" type="text" value="{{ $p->quantity }}">
                   
                  </div>
                </div>

                 <div class="form-group col-md-4">
                  <label>Image:</label>
                  <input name="foto" class="form-control"  type="file" value = "{{ $p->image}}">
                </div>
              
                <div class="form-group col-md-4">
                  <label>State:</label>
                  <input name="state" class="form-control" value="{{ $p->state}}" type="text">
                </div>
               
            <div class="box-footer col-md-12">
                <button type="submit" class="btn btn-primary" value="insert">Submit</button>
              </div>
              </form>
            </div>
            @endforeach 

            <!-- /.box-body -->
          </div>

@stop