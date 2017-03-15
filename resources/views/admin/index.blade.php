
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
          <li><a href="#">Add Generic</a></li>
          <li><a href="#">Update Generic</a></li>
          <li><a href="#">Delete Generic</a></li>
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
    <div class="col-md-5" style="background-color: #ecffee;">
     <br>
  <h2 ><center>Add New Generic</center></h2>
  
    <form class="form-vertical" role="form" method="post" action="{{ route('addGeneric')}}" enctype="multipart/form-data">
   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

    <label for="name">Name</label>
    <input class="form-control" id="name" name="name" type="text">
    <span class="help-block">{{ $errors->first('name') }}</span>
   </div>
   <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
    <label for="brand">Brand</label>
    <input class="form-control" id="brand" name="brand" type="text">
    <span class="help-block">{{ $errors->first('brand') }}</span>
   </div>
    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
<label class="form-label">Generic Image</label>
<input id="photo" type="file"  name="file" value="">
<span class="help-block">{{ $errors->first('file') }}</span>
    </div>
   <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
    <label for="type">Type</label>
    <input class="form-control" id="type" name="type" type="text">
    <span class="help-block">{{ $errors->first('type') }}</span>
   </div>
   <div class="form-group{{ $errors->has('unit') ? ' has-error' : '' }}">
    <label for="unit">Unit</label>
    <input class="form-control" id="unit" name="unit" type="text">
    <span class="help-block">{{ $errors->first('unit') }}</span>
   </div>
   <div class="form-group{{ $errors->has('constituent') ? ' has-error' : '' }}">
    <label for="constituent">Constituent</label>
    <input class="form-control" id="constituent" name="constituent" type="text">
    <span class="help-block">{{ $errors->first('constituent') }}</span>
   </div>
   <div class="form-group{{ $errors->has('package') ? ' has-error' : '' }}">
    <label for="package">Package</label>
    <input class="form-control" id="package" name="package" type="text">
    <span class="help-block">{{ $errors->first('package') }}</span>
   </div>
   <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
    <label for="price">Price</label>
    <input class="form-control" id="price" name="price" type="text">
    <span class="help-block">{{ $errors->first('price') }}</span>
   </div>
   <div class="form-group">
    <input class="btn btn-default"  type="submit" value="Submit">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 <input type="hidden" name="_token" value="{{ Session::token() }}">
   </div>
    </form>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-5" style="background-color: #ecffee;">
     <div class="row" >
     <br>
  <h2><center>Add New Brand</center></h2>
  </div>
    <form ng-submit="">
   <div class="form-group">
    <label for="brand">Brand</label>
    <input class="form-control" id="brand" name="brand" type="text">
   </div>
   <div class="form-group">
    <label for="category">Category</label>
    <input class="form-control" id="category" name="category" type="text">
   </div>
   <div class="form-group">
    <label for="unit">Unit</label>
    <input class="form-control" id="unit" name="unit" type="text">
   </div>
   <div class="form-group">
    <label for="packageunit">Package</label>
    <input class="form-control" id="packageunit" name="packageunit" type="text">
   </div>
   <div class="form-group">
    <label for="price">Price</label>
    <input class="form-control" id="price" name="price" type="text">
   </div>
   <div class="form-group">
    <label for="priceunit">Price Unit</label>
    <input class="form-control" id="priceunit" name="priceunit" type="text">
   </div>
   <div class="form-group">
    <input class="btn btn-default"  type="submit" value="Submit">
   </div>
    </form>
    </div>
  </div>
</div>
</body>
</html>
@stop