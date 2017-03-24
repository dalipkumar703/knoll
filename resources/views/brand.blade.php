@extends('template.default')

@section('content')
<section data-section="services">
<div>&nbsp;</div>
<div>&nbsp;</div>
<div class="text-center">
  <h2>Search by Brand Name</h2>
  
  </div>
<div>&nbsp;</div>
<div>&nbsp;</div>

<div class="row" ng-controller="brandsearch">
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
<label for="category">Division</label>
<select id="category" class="form-control" ng-model="category">
	<option value="">--- Select ---</option>
                          <option value="Fruiton" 
                                        class=even>Fruiton</option>
                                        <option value="Indigen" 
                                        class=odd > Indigen</option>
                                        <option value="Herbolife" 
                                        class=even > Herbolife</option>
                                        
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
     <th><center>Image</centre></th>
        <th><center>Product</centre></th>
        <th><center>Composition</centre></th>
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
  
  <tr ng-repeat="brand in brandData">

     <td><img src="http://localhost:8000/<% brand.image %>" height="120" width="180"></td>
    <td>
    <% brand.productname %>
    </td>
    <td> 
     <% brand.composition %>
    </td>
    <td><% brand.package %></td>
    <td><span style='font-family: "Times New Roman", Georgia, Serif;'>&#x20B9;</span><% brand.mrp %></td>
    <td>
    <% brand.division %>
    </td>
    <td>
    <% brand.category %>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
<div>&nbsp;</div>
<div class="row">
<h2><center>Division</center></h2>
</div>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-2">
<a href="{{route('fruiton')}}"><img src="http://localhost:8000/images/division_1.jpg"></a>
</div>
<div class="col-md-2">
<a href="{{route('indigen')}}"><img src="http://localhost:8000/images/division_2.jpg"></a>
</div>
<div class="col-md-2">
<a href="{{route('herbolife')}}"><img src="http://localhost:8000/images/division_5.jpg"></a>
</div>
<div class="col-md-3"></div>
</div>
</div>




  <script src="app/controllers/brandsearch.js"></script>
  
</section>
@stop