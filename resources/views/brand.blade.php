@extends('template.default')

@section('content')
<br>
<div class="row" ng-controller="brandsearch">
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
<select class="form-control" id="sel1">
 <option value="" class="odd">-- Select --</option>
                                        <option value="31" 
                        						class=even>Aplicaps </option>
                                        <option value="4" 
                        						class=odd>Capsule </option>
                                        <option value="6" 
                        						class=even>Cream </option>
                                        <option value="8" 
                        						class=odd>Drop </option>
                                        <option value="20" 
                        						class=even>Elixir </option>
                                        <option value="29" 
                        						class=odd>Emulsion </option>
                                        <option value="37" 
                        						class=even>Enema </option>
                                        <option value="11" 
                        						class=odd>Expectorant </option>
                                        <option value="15" 
                        						class=even>Gel </option>
                                        <option value="84" 
                        						class=odd>Glue </option>
                                        <option value="21" 
                        						class=even>Granules </option>
                                        <option value="35" 
                        						class=odd>Gum Astringent </option>
                                        <option value="34" 
                        						class=even>Gum Paint </option>
                                        <option value="17" 
                        						class=odd>Infusion </option>
                                        <option value="23" 
                        						class=even>Inhaler </option>
                                        <option value="3" 
                        						class=odd>Injection </option>
                                        <option value="41" 
                        						class=even>Kit </option>
                                        <option value="19" 
                        						class=odd>Linctus </option>
                                        <option value="7" 
                        						class=even>Lotion </option>
                                        <option value="80" 
                        						class=odd>Lozenges </option>
                                        <option value="33" 
                        						class=even>Mouth Paint </option>
                                        <option value="32" 
                        						class=odd>Mouth Wash/Gargle </option>
                                        <option value="82" 
                        						class=even>Oil </option>
                                        <option value="9" 
                        						class=odd>Ointment </option>
                                        <option value="81" 
                        						class=even>Patch </option>
                                        <option value="83" 
                        						class=odd>Pen </option>
                                        <option value="79" 
                        						class=even>Pessary </option>
                                        <option value="13" 
                        						class=odd>Powder </option>
                                        <option value="43" 
                        						class=even>Respules </option>
                                        <option value="39" 
                        						class=odd>Rotacap </option>
                                        <option value="25" 
                        						class=even>Sachet </option>
                                        <option value="26" 
                        						class=odd>Shampoo </option>
                                        <option value="27" 
                        						class=even>Soap/Bar </option>
                                        <option value="10" 
                        						class=odd>Solution </option>
                                        <option value="30" 
                        						class=even>Spray </option>
                                        <option value="42" 
                        						class=odd>Suppository </option>
                                        <option value="1" 
                        						class=even>Suspension </option>
                                        <option value="14" 
                        						class=odd>Syrup </option>
                                        <option value="2" 
                        						class=even>Tablet </option>
                                        <option value="36" 
                        						class=odd>Tooth Paste </option></select>
                        						</div>

</div>
<div class="col-md-4">
<div class="form-group">
<label for="category">Category</label>
<select id="category" class="form-control">
	<option value="">--- Select ---</option>
                          <option value="1" 
                                        class=even > B.Complex and Multi Vitamins Preparations</option>
                                        <option value="2" 
                                        class=odd > Calcium with Vit D3 Preparations</option>
                                        <option value="3" 
                                        class=even > Iron Preparations</option>
                                        <option value="4" 
                                        class=odd > Cough Syrups (Decongestants, Bronchodialator etc.)</option>
                                        <option value="5" 
                                        class=even > Locally Acting Skin Preparations</option>
                                        <option value="6" 
                                        class=odd > Locally Acting Eye Preparations</option>
                                        <option value="7" 
                                        class=even > Locally Acting Nasal Preparations (For Nose)</option>
                                        <option value="8" 
                                        class=odd > Locally Acting Preparations For Mouth and Throat</option>
                                        <option value="9" 
                                        class=even > Locally Acting Ear Preparations</option>
                                        <option value="10" 
                                        class=odd > Specified Group</option>
                                        <option value="11" 
                                        class=even > Preparations for Intravenous Infusions</option>
                                        <option value="12" 
                                        class=odd > Locally Acting Musculo-Skeletal Preparations</option>
                                        <option value="13" 
                                        class=even > Locally Acting Drugs On Colon And Rectum</option>
                                        <option value="14" 
                                        class=odd > Locally Acting Intravaginal Preparations</option>
                                        <option value="15" 
                                        class=even > Inhalers, Puffs and Drugs for Nebulization</option>
                                        <option value="16" 
                                        class=odd > Locally Acting Eye/Ear Preparations</option>
                                        <option value="20" 
                                        class=even > locally acting specified group</option>
</select>
</div>

</div>
<div class="col-md-2">
<div class="form-group">
<br>
<button type="submit" class="btn btn-default">Submit</button>
</div>
</div>
</div>
  <script src="app/controllers/brandsearch.js"></script>

@stop