
@extends('template.default')

@section('content')
<div class="row">
<h1><center>Categories</center></h1>
</div>
<div class="row">
<div class="col-md-offset-2 col-md-2">
<h3><center><a href="{{url('category/TABLET')}}">Tablet</a></center><h3>
</div>
<div class="col-md-2">
<h3><center><a href="{{url('category/LIQUID')}}">Liquid</a></center><h3>
</div>
<div class="col-md-2">
<h3><center><a href="{{url('category/DROP')}}">Drop</a></center><h3>
</div>
<div class="col-md-2">
<h3><center><a href="{{url('category/SOAP')}}">Soap</a></center><h3>
</div>
<div class="col-md-2">

</div>
<div class="col-md-2">
</div>
</div>
		
		
@stop