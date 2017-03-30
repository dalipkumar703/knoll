
@extends('template.default')

@section('content')
<div>&nbsp;</div>
<div class="row">
<h2><center>{{Request::is('category/TABLET')?'Tablet':''}}{{Request::is('category/DROP')?'Drop':''}}{{Request::is('category/LIQUID')?'Liquid':''}}{{Request::is('category/OINMENT')?'Oinment':''}}</center></h2>
</div>
<div class="row">
<div class="col-md-offset-10 col-md-2">
  <a href="http://localhost:8000/category/download/{{Request::is('category/TABLET')?'Tablet':''}}{{Request::is('category/DROP')?'Drop':''}}{{Request::is('category/LIQUID')?'Liquid':''}}{{Request::is('category/OINMENT')?'Oinment':''}}"><span class="glyphicon glyphicon-download"></span>&nbsp;Download</a>
</div>
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
  @foreach($products as $product)<tr>
    <td><img src="http://localhost:8000/{{$product->image}}" height="120" width="180"></td>
    <td>
    {{$product->productname}}  
    </td>
    <td> 
     <a href="generic-detail/{{$product->id}}" >{{$product->composition}}</a>
    </td>
    <td>{{$product->packing}}</td>
    <td><span style='font-family: "Times New Roman", Georgia, Serif;'>&#x20B9;</span>{{$product->mrp}} </td>
    <td>
    {{ $product->division}} 
    </td>
    <td>
    {{$product->category}} 
    </td>
    </tr>
    @endforeach

    </tbody>

    </table>
    {!! $products->render() !!}
    </div>
    </div>
    <div class="col-md-1">
    </div>
</div>
		
@stop