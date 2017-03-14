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
    Type
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
  </tr>
  </thead>
  <tbody>
  
  <tr ng-repeat="brand in brandData">

    <td>
     <% brand.brand %>
    </td>
    <td><% brand.category %></td>
    <td><% brand.type %></td>
    <td><% brand.packageunit %></td>
    <td><span style='font-family: "Times New Roman", Georgia, Serif;'>&#x20B9;</span><% brand.price %></td>
    
    <td><span style='font-family: "Times New Roman", Georgia, Serif;'>&#x20B9;</span><% brand.priceunit %></td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
</div>
<div>&nbsp;</div>

<div>&nbsp;</div>


  <script src="app/controllers/brandsearch.js"></script>
  <script src="{{URL::asset('js/custom.js')}}"></script>
</section>
@stop