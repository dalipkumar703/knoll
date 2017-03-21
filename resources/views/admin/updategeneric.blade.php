
@extends('template.default')

@section('content')

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Knoll</a>
    </div>
    <ul class="nav navbar-nav">
      
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Generic
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('admin/index/#demo')}}"  data-toggle="collapse">Add Generic</a></li>
          <li><a href="#">Update Generic</a></li>
          
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Brand
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Add Brand</a></li>
          <li><a href="#">Update Brand</a></li>
          <li><a href="#">Delete Brand</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="{{url('admin/logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">

<div class="row">
       <form class="form-vertical" role="form" method="post" action="{{ route('updateProductValue')}}" enctype="multipart/form-data">
   <div class="form-group{{ $errors->has('productname') ? ' has-error' : '' }}">

    <label for="name">Product Name</label>
    <input class="form-control" id="name" name="productname" value="{{$generic->productname}}" type="text">
    <input class="form-control" name="id" value="{{$generic->id}}" type="hidden">
    <span class="help-block">{{ $errors->first('productname') }}</span>
   </div>
   <div class="form-group{{ $errors->has('composition') ? ' has-error' : '' }}">
    <label for="brand">Composition</label>
    <input class="form-control" id="brand" name="composition" value="{{$generic->composition}}" type="text">
    <span class="help-block">{{ $errors->first('composition') }}</span>
   </div>
    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
<label class="form-label">Product Image</label>
<input id="photo" type="file"  name="file" value="{{$generic->image}}">
<span class="help-block">{{ $errors->first('file') }}</span>
    </div>
   
   <div class="form-group{{ $errors->has('package') ? ' has-error' : '' }}">
    <label for="package">Package</label>
    <input class="form-control" id="package" name="package" value="{{$generic->packing}}" type="text">
    <span class="help-block">{{ $errors->first('package') }}</span>
   </div>
   <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
    <label for="price">Price</label>
    <input class="form-control" id="price" name="price" value="{{$generic->mrp}}" type="text">
    <span class="help-block">{{ $errors->first('price') }}</span>
   </div>
   <div class="form-group{{ $errors->has('division') ? ' has-error' : '' }}">
    <label for="price">Division</label>
    <input class="form-control" id="price" name="division" type="text" value="{{$generic->division}}">
    <span class="help-block">{{ $errors->first('division') }}</span>
   </div>
   <div class="form-group">
<label for="category">Category</label>
<select id="category" class="form-control" name="category" value="{{$generic->category}}">
  <option value="">{{$generic->category}}</option>
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
   <div class="form-group">
    <input class="btn btn-default"  type="submit" value="Submit">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="hidden" name="_token" value="{{ Session::token() }}">
   </div>
    </form>
</div>

</div>
 


@stop