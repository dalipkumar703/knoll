
@extends('template.default')

@section('content')

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Knoll</a>
    </div>
    <ul class="nav navbar-nav">
      
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Generic
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('admin/index/#demo')}}"  data-toggle="collapse">Add Generic</a></li>
          <li><a href="#">Update Generic</a></li>
          
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Brand
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Add Brand</a></li>
          <li><a href="#">Update Brand</a></li>
          <li><a href="#">Delete Brand</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="{{url('admin/logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">

<div class="row">
   <form class="form-vertical" role="form" method="post" action="{{route('updateBrandValue')}}" enctype="multipart/form-data">
    <div class="form-group{{ $errors->has('brand1') ? ' has-error' : '' }}">
    <label for="brand">Brand</label> 
    <input class="form-control" id="brand" name="brand1" type="text" value="{{$brand->brand}}">
    <input name="id" type="hidden" value="{{$brand->id}}">
    <span class="help-block">{{ $errors->first('brand1') }}</span>
   </div>
   <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
    <label for="category">Category</label>
    <input class="form-control" id="category" name="category" type="text" value="{{$brand->category}}">
    <span class="help-block">{{ $errors->first('category') }}</span>
   </div>
  <div class="form-group{{ $errors->has('file1') ? ' has-error' : '' }}">
<label class="form-label">Brand Image</label>
<input id="photo" type="file"  name="file1" value="{{$brand->file}}">
<span class="help-block">{{ $errors->first('file1') }}</span>
    </div>
   <div class="form-group{{ $errors->has('unit1') ? ' has-error' : '' }}">
    <label for="unit">Unit</label>
    <input class="form-control" id="unit" name="unit1" type="text" value="{{$brand->unit}}">
    <span class="help-block">{{ $errors->first('unit1') }}</span>
   </div>
   <div class="form-group{{ $errors->has('packageunit') ? ' has-error' : '' }}">
    <label for="packageunit">Package</label>
    <input class="form-control" id="packageunit" name="packageunit" type="text" value="{{$brand->packageunit}}">
    <span class="help-block">{{ $errors->first('packageunit') }}</span>
   </div>
   <div class="form-group{{ $errors->has('price1') ? ' has-error' : '' }}">
    <label for="price">Price</label>
    <input class="form-control" id="price" name="price1" type="text" value="{{$brand->unit}}">
    <span class="help-block">{{ $errors->first('price1') }}</span>
   </div>
   <div class="form-group{{ $errors->has('priceunit') ? ' has-error' : '' }}">
    <label for="priceunit">Price Unit</label>
    <input class="form-control" id="priceunit" name="priceunit" type="text" value="{{$brand->priceunit}}">
    <span class="help-block">{{ $errors->first('priceunit') }}</span>
   </div>
   <div class="form-group">
    <input class="btn btn-default"  type="submit" value="Submit">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="hidden" name="_token" value="{{ Session::token() }}">
   </div>
    </form>
</div>

</div>
 


@stop