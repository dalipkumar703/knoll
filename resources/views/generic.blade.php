 @extends('template.default')
 @section('content')
   


        <div class="row" ng-controller="genericsearch">
           <br><br><br><br><br>
           <input type="text" ng-model="asyncSelected" placeholder="Type the generic name..." uib-typeahead="generic for generic in generic($viewValue)" typeahead-loading="loadingGeneric" typeahead-focus-on-select="false" typeahead-no-results="noResults" class="form-control" typeahead-min-length="2">
    <i ng-show="loadingGeneric" class="glyphicon glyphicon-refresh"></i>
    <div ng-show="noResults">
      <i class="glyphicon glyphicon-remove"></i> No Results Found
    </div>
    
    <div class="col-md-6" ng-if="asyncSelected">
                                                                                      

     <a href="generic-detail/" ng-repeat="x in data"><br></a>
    </div>
        </div>
    

  
        <!-- AngularJS Application Scripts -->
       
        <script src="app/controllers/genericsearch.js"></script>

 
  @stop