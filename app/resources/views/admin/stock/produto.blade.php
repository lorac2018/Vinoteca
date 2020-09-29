@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  <section class="content-header">
   <small>Gestão de Stock</small>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Consult Stock</li>
    </ol>
  </section>
  <br>
  <div class="box">
                @foreach ($products as $p)        
                      <div class="box-header">
                        <h3 class="box-title"> {{ $p->name }}</h3>  
                      </div>
                      
                      <div class="box-body">
                          <div class="form-group col-md-4">
                               <img src="{{ asset('img/' . $p->image) }}" width="150px"/>
                          </div>
                      </div>
          

                        <div class="box-body">
                          
                           <table class="table table-condensed">
                            <tr>
                            <th> Price:  <br> {{$p->price}} € </th>
                            <th>Level of Alcohol: <br> {{ $p->levelofalcohol}} </th>
                            <th> Quantity: <br> {{ $p->quantity }} </th>
                            <th> Brand: <br> {{$p->brand}} </th>
                            <th> Category : <br> {{$p->categories}} </th>
                            <th> SubCategory: <br> {{$p->subcategoryname}} </th>
                            <th> Created_by: <br>  {{$p->created_by}}</th>
                            <th> Modified_by: <br> {{$p->modified_by}} </th>
                            <th> Created_at: <br> {{$p->created_at}} </th>
                            <th> Modified_at: <br> {{$p->modified_at}} </th>
                            <th> State: <br> {{$p->state}} </th>

                            </tr>
                          </table>
                        </div>
                      </div>

              @endforeach

               <div class="col-sm-12">
                </div>

@stop