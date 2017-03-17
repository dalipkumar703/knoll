
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
   <form class="form-vertical" role="form" method="post" action="{{route('updateGenericValue')}}" enctype="multipart/form-data">
   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

    <label for="name">Name</label>
    <input class="form-control" id="name" name="name" type="text" value="{{$generic->name}}">
    <input type="hidden" name="id" type="text" value="{{$generic->id}}">
    <span class="help-block">{{ $errors->first('name') }}</span>
   </div>
   <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
    <label for="brand">Brand</label>
    <input class="form-control" id="brand" name="brand" type="text" value="{{$generic->brand}}">
    <span class="help-block">{{ $errors->first('brand') }}</span>
   </div>
    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
<label class="form-label">Generic Image</label>
<input id="photo" type="file"  name="file" value="{{$generic->filepath}}">
<span class="help-block">{{ $errors->first('file') }}</span>
    </div>
   <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
    <label for="type">Type</label>
    <input class="form-control" id="type" name="type" value="{{$generic->type}}" type="text">
    <span class="help-block">{{ $errors->first('type') }}</span>
   </div>
   <div class="form-group{{ $errors->has('unit') ? ' has-error' : '' }}">
    <label for="unit">Unit</label>
    <input class="form-control" id="unit" name="unit" value="{{$generic->unit}}" type="text">
    <span class="help-block">{{ $errors->first('unit') }}</span>
   </div>
   <div class="form-group{{ $errors->has('constituent') ? ' has-error' : '' }}">
    <label for="constituent">Constituent</label>
    <input class="form-control" id="constituent" value="{{$generic->constituent}}" name="constituent" type="text">
    <span class="help-block">{{ $errors->first('constituent') }}</span>
   </div>
   <div class="form-group{{ $errors->has('package') ? ' has-error' : '' }}">
    <label for="package">Package</label>
    <input class="form-control" id="package" name="package" value="{{$generic->package}}" type="text">
    <span class="help-block">{{ $errors->first('package') }}</span>
   </div>
   <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
    <label for="price">Price</label>
    <input class="form-control" id="price" name="price" value="{{$generic->price}}" type="text">
    <span class="help-block">{{ $errors->first('price') }}</span>
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