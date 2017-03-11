 @extends('template.default')
 @section('content')
   



<div class="row" >
<div class="col-md-6" ng-controller="genericsearch">

<br>
<br>
<br> 
 <p>Looking for an android app. We design you app from scratch to end with your requirements and satify you untill app is develop properly according to your demand.  <% name %></p>
    
            
                    <form class="navbar-form" role="search">
                      <div class="form-group" >
                        <input type="text" id="searchbox" name="q" placeholder="Search..." class="form-control"></select>
                      </div>
                    </form>
                 



</div>
<div class="col-md-6">
</div>
</div>

  
        <!-- AngularJS Application Scripts -->
       
        <script src="app/controllers/genericsearch.js"></script>


 
  @stop