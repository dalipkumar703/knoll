@extends('template.default')

@section('content')
<br>
<div class="row" ng-controller="brandsearch">
<form ng-submit="brandSubmit">
<div class="col-md-4">
<div class="form-group">
    <label for="brand">Brand</label>
	<input type="text" id="brand" ng-model="asyncSelected" uib-typeahead="brand for brand in brand($viewValue)" typeahead-loading="loadingBrand" typeahead-focus-on-select="false" typeahead-no-results="noResults" class="form-control" typeahead-min-length="2" placeholder="search brand">
<i ng-show="loadingBrand" class="glyphicon glyphicon-refresh"></i>
    <div ng-show="noResults">
      <i class="glyphicon glyphicon-remove"></i> No Results Found
</div>
</div>
</div>
<div class="col-md-2">

<div class="form-group">
  <label for="sel1">Type:</label>
<select class="form-control" id="sel1" ng-model="type">
 <option value="" class="odd">-- Select --</option>
                                        <option value="Aplicaps" 
                        						class=even>Aplicaps </option>
                                        <option value="Capsule" 
                        						class=odd>Capsule </option>
                                        <option value="Cream" 
                        						class=even>Cream </option>
                                        <option value="Drop" 
                        						class=odd>Drop </option>
                                        <option value="Elixir" 
                        						class=even>Elixir </option>
                                        <option value="Emulsion" 
                        						class=odd>Emulsion </option>
                                        <option value="Enema" 
                        						class=even>Enema </option>
                                        <option value="Expectorant" 
                        						class=odd>Expectorant </option>
                                        <option value="Gel" 
                        						class=even>Gel </option>
                                        <option value="Glue" 
                        						class=odd>Glue </option>
                                        <option value="Granules" 
                        						class=even>Granules </option>
                                        <option value="Gum Astringent" 
                        						class=odd>Gum Astringent </option>
                                        <option value="Gum Paint" 
                        						class=even>Gum Paint </option>
                                        <option value="Infusion" 
                        						class=odd>Infusion </option>
                                        <option value="Inhaler" 
                        						class=even>Inhaler </option>
                                        <option value="Injection" 
                        						class=odd>Injection </option>
                                        <option value="Kit" 
                        						class=even>Kit </option>
                                        <option value="Linctus" 
                        						class=odd>Linctus </option>
                                        <option value="Lotion" 
                        						class=even>Lotion </option>
                                        <option value="Lozenges" 
                        						class=odd>Lozenges </option>
                                        <option value="Mouth Paint" 
                        						class=even>Mouth Paint </option>
                                        <option value="Mouth Wash/Gargle" 
                        						class=odd>Mouth Wash/Gargle </option>
                                        <option value="Oil" 
                        						class=even>Oil </option>
                                        <option value="Ointment" 
                        						class=odd>Ointment </option>
                                        <option value="Patch" 
                        						class=even>Patch </option>
                                        <option value="Pen" 
                        						class=odd>Pen </option>
                                        <option value="Pessary" 
                        						class=even>Pessary </option>
                                        <option value="Powder" 
                        						class=odd>Powder </option>
                                        <option value="Respules" 
                        						class=even>Respules </option>
                                        <option value="otacap" 
                        						class=odd>Rotacap </option>
                                        <option value="Sachet" 
                        						class=even>Sachet </option>
                                        <option value="Shampoo" 
                        						class=odd>Shampoo </option>
                                        <option value="Soap/Bar" 
                        						class=even>Soap/Bar </option>
                                        <option value="Solution" 
                        						class=odd>Solution </option>
                                        <option value="Spray" 
                        						class=even>Spray </option>
                                        <option value="Suppository" 
                        						class=odd>Suppository </option>
                                        <option value="Suspension" 
                        						class=even>Suspension </option>
                                        <option value="Syrup" 
                        						class=odd>Syrup </option>
                                        <option value="Tablet" 
                        						class=even>Tablet </option>
                                        <option value="Tooth Paste" 
                        						class=odd>Tooth Paste </option></select>
                        						</div>

</div>
<div class="col-md-4">
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
                                        <option value="locally acting specified group" 
                                        class=even > locally acting specified group</option>
</select>
</div>

</div>
<div class="col-md-2">
<div class="form-group">
<br>
<input type="submit" value="Click" class="btn btn-default" ng-click="brandSubmit()">
</div>
</div>
</form>
</div>
  <script src="app/controllers/brandsearch.js"></script>

@stop