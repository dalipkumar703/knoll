 @extends('template.default')
 @section('content')
   
<section data-section="services">
  <div class="container text-center">
  

  <div>&nbsp;</div>
  <div>
  <h2>Search by Generic Name</h2>
  
  </div>
  <div>&nbsp;</div>

  <div>&nbsp;</div>

        <div class="row" ng-controller="genericsearch">
           <div class="col-md-12 text-center">
           
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
    Image
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
    <td><img src="http://localhost:8000/uploads/<% x.filepath %>" height="120" width="180"></td>
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

 </section>
  @stop