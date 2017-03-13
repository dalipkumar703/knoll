 @extends('template.default')
 @section('content')
   

  <div class="container text-center">
  <div>&nbsp;</div>
<div>&nbsp;</div>

  <div>
  <h2>Search by Generic Name</h2>
  
  </div>
        <div class="row text-center" ng-controller="genericsearch">
           <br><br>
           <div class="col-md-12">
           <div class="col-md-offset-2 col-md-8 text-center">

            <input type="text" ng-model="asyncSelected" placeholder="Type the generic name..." uib-typeahead="generic for generic in generic($viewValue)" typeahead-loading="loadingGeneric" typeahead-no-results="noResults"
            typeahead-select-on-exact="true" class="form-control" typeahead-min-length="1" style="display: inline-block; width: 50%;" id="searchGeneric" ng-keydown="enterPressedOnSearch(asyncSelected)"/>
           <button class="btn btn-primary" ng-click="clickedOnSearch(asyncSelected)" type="submit"><span class="glyphicon glyphicon-search"></span></button>
           </div>
           </div>
           <div style="display:block;">
           
           <div>
    
    <i ng-show="loadingGeneric" class="glyphicon glyphicon-refresh"></i>
    </div>
    <div ng-show="noResults">
      <div><i class="glyphicon glyphicon-remove"></i> No Results Found</div>
    </div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div class="col-md-12 text-center">
      

      <div class="col-md-offset-1 col-md-9" ng-if="asyncSelected">
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
  <tr ng-repeat="x in data">
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

<div>&nbsp;</div>

<div>&nbsp;</div>
  
        <!-- AngularJS Application Scripts -->
       
        <script src="app/controllers/genericsearch.js"></script>

 
  @stop