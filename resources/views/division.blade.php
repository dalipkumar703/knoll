
@extends('template.default')

@section('content')
<div>&nbsp;</div>
<div class="row">
<h2><center>{{Request::is('brand/fruiton')?'Fruiton':''}}{{Request::is('brand/indigen')?'Indigen':''}}{{Request::is('brand/herbolife')?'Herbolife':''}}</center></h2>
</div>

<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
      <div class="table-responsive">          
  <table class="table table-hover">
  
  <thead>
  <tr>
     <th>
    <center>Image</centre>
    </th>
    <th>
    <center>Product </centre>
    </th>
    <th>
    <center>Composition</centre>
    </th>
    <th>
    <center>Package</centre>
    </th>
    <th>
    <center>Price</centre>
    </th>
    <th>
    <center>Division</centre>
    </th>
    <th>
     <center>Category</centre>
    </th>
  </tr>
  </thead>
  <tbody>
  @foreach($brands as $brand)<tr>
    <td><img src="public/{{$brand->image}}" height="120" width="180"></td>
    <td>
    {{$brand->productname}}  
    </td>
    <td> 
     {{$brand->composition}}
    </td>
    <td>{{$brand->packing}}</td>
    <td><span style='font-family: "Times New Roman", Georgia, Serif;'>&#x20B9;</span>{{$brand->mrp}} </td>
    <td>
    {{ $brand->division}} 
    </td>
    <td>
    {{$brand->category}} 
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    <div class="col-md-1">
    </div>
</div>
		
@stop