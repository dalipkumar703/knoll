
@extends('template.default')

@section('content')

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Generic
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#demo"  data-toggle="collapse">Add Generic</a></li>
          <li><a href="#demo2"  data-toggle="collapse">Update Generic</a></li>
          
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Brand
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#demo1"  data-toggle="collapse">Add Brand</a></li>
          <li><a href="#demo3"  data-toggle="collapse">Update Brand</a></li>
          
        </ul>
      </li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="{{url('admin/logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
 @if(Session::has('added_generic'))
 <div class="row">
  <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success:</strong> {{Session::get('added_generic')}}
        </div>
 </div>
 @endif
  @if(Session::has('updated_brand'))
 <div class="row">
  <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success:</strong> {{Session::get('updated_brand')}}
        </div>
 </div>
 @endif
 @if(Session::has('deleted_brand'))
 <div class="row">
  <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success:</strong> {{Session::get('deleted_brand')}}
        </div>
 </div>
 @endif
  @if(Session::has('deleted_generic'))
 <div class="row">
  <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success:</strong> {{Session::get('deleted_generic')}}
        </div>
 </div>
 @endif
  @if(Session::has('added_brand'))
 <div class="row">
  <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success:</strong> {{Session::get('added_brand')}}
        </div>
 </div>
 @endif
 <div class="row">
  <div class="text-center" >
  <h1> Create a new entry </h1>
   </div>
  </div>
 <div class="row">
<div class="col-md-offset-3 col-md-6">
 <a href="#demo" class="btn btn-primary btn-block" data-toggle="collapse">Add new generic</a>
 </div>
 </div>
 <div class="row">
 <div class="col-md-offset-3 col-md-6 collapse" style="background-color: #ecffee;" id="demo">
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
</div>

 <div>&nbsp;</div>
 <div class="row">
 <div class="col-md-offset-3 col-md-6">
 <a href="#demo1" class="btn btn-primary btn-block" data-toggle="collapse">Add new brand</a>
 </div>
 </div>
 <div class="row">
 <div class="col-md-offset-3 col-md-6 collapse" style="background-color: #ecffee;" id="demo1">
     <div class="row">
     <br>
  <h2><center>Add New Brand</center></h2>
  </div>
    <form method="post" action="{{route('addBrand')}}" class="form-vertical" enctype="multipart/form-data">
   <div class="form-group{{ $errors->has('brand1') ? ' has-error' : '' }}">
    <label for="brand">Brand</label>
    <input class="form-control" id="brand" name="brand1" type="text">
    <span class="help-block">{{ $errors->first('brand1') }}</span>
   </div>
   <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
    <label for="category">Category</label>
    <input class="form-control" id="category" name="category" type="text">
    <span class="help-block">{{ $errors->first('category') }}</span>
   </div>
  <div class="form-group{{ $errors->has('file1') ? ' has-error' : '' }}">
<label class="form-label">Brand Image</label>
<input id="photo" type="file"  name="file1" value="">
<span class="help-block">{{ $errors->first('file1') }}</span>
    </div>
   <div class="form-group{{ $errors->has('unit1') ? ' has-error' : '' }}">
    <label for="unit">Unit</label>
    <input class="form-control" id="unit" name="unit1" type="text">
    <span class="help-block">{{ $errors->first('unit1') }}</span>
   </div>
   <div class="form-group{{ $errors->has('packageunit') ? ' has-error' : '' }}">
    <label for="packageunit">Package</label>
    <input class="form-control" id="packageunit" name="packageunit" type="text">
    <span class="help-block">{{ $errors->first('packageunit') }}</span>
   </div>
   <div class="form-group{{ $errors->has('price1') ? ' has-error' : '' }}">
    <label for="price">Price</label>
    <input class="form-control" id="price" name="price1" type="text">
    <span class="help-block">{{ $errors->first('price1') }}</span>
   </div>
   <div class="form-group{{ $errors->has('priceunit') ? ' has-error' : '' }}">
    <label for="priceunit">Price Unit</label>
    <input class="form-control" id="priceunit" name="priceunit" type="text">
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
 <hr />
 
 
  <div class="col-md-12">
  
    
    
    
    
  </div>
  <!-- update generic-->
  <div class="row">
  <div class="text-center" >
  <h1> Update an existing entry </h1>
   </div>
  </div>
  <div class="row">
 <div class="col-md-offset-3 col-md-6">
  <a href="#demo2" class="btn btn-primary btn-block" data-toggle="collapse">Update generic</a>
 </div>
</div>
 <div class="row" >
  <div class="col-md-12 collapse" id="demo2">
         <div class="row" ng-controller="genericsearch">
           <div class="col-md-12 text-center">
           <div>&nbsp;</div>
  <div>&nbsp;</div>
           <form ng-submit="clickedOnSearch(asyncSelected)">
           <div class="col-md-offset-3 col-md-5" style="padding-right: 0px;">
           <div class="form-group">
            <input type="text" ng-model="asyncSelected" placeholder="Type the generic name..." uib-typeahead="generic for generic in generic($viewValue)" typeahead-loading="loadingGeneric" typeahead-no-results="noResults"
            typeahead-select-on-exact="true" class="form-control" typeahead-min-length="1" id="searchGeneric"  autocomplete="off" autofocus="" style="width:100%" />
            </div>
            </div>
           <div class="col-md-1">
           <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
           </div>

           </form>
           

           
           
    
    <i ng-show="loadingGeneric" class="glyphicon glyphicon-refresh"></i>
    </div>
    <div ng-show="noResults">
      <div><i class="glyphicon glyphicon-remove"></i> No Results Found</div>
    </div>

    
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div class="col-md-12 text-center">
      

      <div class="col-md-offset-1 col-md-9" ng-if="genericSearchSuccessfull">
      <div class="table-responsive">          
  <table class="table table-hover">
  
  <thead>
  <tr>
    <td>
    Constituent Name
    </td>
    <td>
    Type
    </td>
    <td>
    Package
    </td>
    <td>
    Price
    </td>
  </tr>
  </thead>
  <tbody>
  <tr ng-repeat="x in genericData">
    <td> 
     <a href="generic-detail/<% x.id %>" ><% x.constituent %></a>
    </td>
    <td><% x.type %></td>
    <td><% x.package %></td>
    
    <td><span style='font-family: "Times New Roman", Georgia, Serif;'>&#x20B9;</span><% x.price %></td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    

    </div>
  </div>

  </div>
  <div>&nbsp;</div>

  <div class="row">
 <div class="col-md-offset-3 col-md-6">
  <a href="#demo3" class="btn btn-primary btn-block" data-toggle="collapse">Update brand</a>
 </div>
 </div>
  
  <!-- Update brand-->
  <div class="row collapse" ng-controller="brandsearch" id="demo3">
  <div>&nbsp;</div>
  <div>&nbsp;</div>
<form ng-submit="brandSubmit()">
<div class="col-md-offset-2 col-md-4" style="padding-right:0px;">
<div class="form-group">
    <label for="brand">Brand</label>
	<input type="text" id="brand" ng-model="asyncSelected" uib-typeahead="brand for brand in brand($viewValue)" typeahead-loading="loadingBrand" typeahead-focus-on-select="false" typeahead-no-results="noResults" class="form-control" typeahead-min-length="1" placeholder="Search with brand name..." autocomplete="off" autofocus="" required="">
<i ng-show="loadingBrand" class="glyphicon glyphicon-refresh"></i>
    <div ng-show="noResults">
      <i class="glyphicon glyphicon-remove"></i> No Results Found
</div>
</div>
</div>

<div class="col-md-3" style="padding-right:0px;">
<div class="form-group">
<label for="category">Category</label>
<select id="category" class="form-control" ng-model="category">
	<option value="">--- Select ---</option>
                          <option value="B.Complex and Multi Vitamins Preparations" 
                                        class=even > B.Complex and Multi Vitamins Preparations</option>
                                        <option value="Calcium with Vit D3 Preparations" 
                                        class=odd > Calcium with Vit D3 Preparations</option>
                                        <option value="Iron Preparations" 
                                        class=even > Iron Preparations</option>
                                        <option value="Cough Syrups (Decongestants, Bronchodialator etc.)" 
                                        class=odd > Cough Syrups (Decongestants, Bronchodialator etc.)</option>
                                        <option value="Locally Acting Skin Preparations" 
                                        class=even > Locally Acting Skin Preparations</option>
                                        <option value="Locally Acting Eye Preparations" 
                                        class=odd > Locally Acting Eye Preparations</option>
                                        <option value="Locally Acting Nasal Preparations (For Nose)" 
                                        class=even > Locally Acting Nasal Preparations (For Nose)</option>
                                        <option value="Locally Acting Preparations For Mouth and Throat" 
                                        class=odd > Locally Acting Preparations For Mouth and Throat</option>
                                        <option value="Locally Acting Ear Preparations" 
                                        class=even > Locally Acting Ear Preparations</option>
                                        <option value="Specified Group" 
                                        class=odd > Specified Group</option>
                                        <option value="Preparations for Intravenous Infusions" 
                                        class=even > Preparations for Intravenous Infusions</option>
                                        <option value="Locally Acting Musculo-Skeletal Preparations" 
                                        class=odd > Locally Acting Musculo-Skeletal Preparations</option>
                                        <option value="Locally Acting Drugs On Colon And Rectum" 
                                        class=even > Locally Acting Drugs On Colon And Rectum</option>
                                        <option value="Locally Acting Intravaginal Preparations" 
                                        class=odd > Locally Acting Intravaginal Preparations</option>
                                        <option value="Inhalers, Puffs and Drugs for Nebulization" 
                                        class=even > Inhalers, Puffs and Drugs for Nebulization</option>
                                        <option value="Locally Acting Eye/Ear Preparations" 
                                        class=odd > Locally Acting Eye/Ear Preparations</option>
                                        <option value="Locally acting specified group" 
                                        class=even > Locally acting specified group</option>
</select>
</div>

</div>

<div class="col-md-2">
<div class="form-group">
<br>
<button type="submit" class="btn btn-primary" style="
    margin-top: 5px;">
  <span class="glyphicon glyphicon-search"></span>
</button>
</div>
</div>
</form>
<div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
<div class="col-md-12 text-center">
<div ng-if="!(searchSuccessfull) && searchInitialised" class="text-center">
    
    <span>Your search didn't match anything</span>
</div>
</div>
<div class="col-md-12 text-center">
      

      <div class="col-md-offset-1 col-md-9" ng-if="searchSuccessfull">
      <div class="table-responsive">          
  <table class="table table-hover">
  <thead>
  <tr>
    <td>
    Brand
    </td>
    <td>
    Category
    </td>
    <td>
    Unit
    </td>
    <td>
    Package Unit
    </td>
    <td>
    Price
    </td>
    <td>
    Price/Unit
    </td>
    <td>
    Edit
    </td>
    <td>
    Delete
    </td>
  </tr>
  </thead>
  <tbody>
  
  <tr ng-repeat="brand in brandData">

    <td>
     <% brand.brand %>
    </td>
    <td><% brand.category %></td>
    <td><% brand.unit %></td>
    <td><% brand.packageunit %></td>
    <td><span style='font-family: "Times New Roman", Georgia, Serif;'>&#x20B9;</span><% brand.price %></td>
    
    <td><span style='font-family: "Times New Roman", Georgia, Serif;'>&#x20B9;</span><% brand.priceunit %></td>
    <td>
    <a href="{{url('admin/brand/update/<% brand.id %>')}}">Edit</a>
    </td>
    <td>
    <a href="{{url('admin/brand/delete/<% brand.id %>')}}">Delete</a>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
</div>

<div>&nbsp;</div>

<div>&nbsp;</div>

<div>&nbsp;</div>

<div>&nbsp;</div>

<div>&nbsp;</div>
</div>
<script src="{{url('app/controllers/genericsearch.js')}}"></script>
<script src="{{url('app/controllers/brandsearch.js')}}"></script>
@stop