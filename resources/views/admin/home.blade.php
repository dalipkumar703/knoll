
@extends('template.default')

@section('content')
<br><br>
<div class="container" ng-controller="admincontroller">
    <div class="row">
        <!-- Card Projects -->
        <div class="col-md-6 col-md-offset-3">
            <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="http://material-design.storage.googleapis.com/publish/v_2/material_ext_publish/0Bx4BSt6jniD7TDlCYzRROE84YWM/materialdesign_introduction.png">
                    <span class="card-title">Login to Knoll Admin </span>
                </div>
                <form ng-submit="adminLogin()">
                <div class="card-content">
                    <div class="row">
                     <div class="col-md-1"></div>
                     <div class="col-md-10">
                     	<div class="form-group">
                       <label for="username">Username</label>
                       <input type="text" ng-model="username" id="username" class="form-control">
                      </div>
                      <div class="form-group">
                       <label for="password">Password</label>
                       <input type="password"  ng-model="password" id="password" class="form-control">
                      </div>
                     
                     </div>
                      <div class="col-md-1"></div>
                    </div>
                </div>
                
                <div class="card-action">
                    <div class="form-group">
                     <center><input type="submit"  value="Submit" class="btn btn-default"></center>
                     <span class="danger" style="color:red;" ng-if="!flag&&initialize">User or password is incorrect</span>
                    </div>                   
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<link  rel="stylesheet" href="{{URL::asset('public/css/carddesign.css')}}" type="text/css">

  <script src="{{url('public/app/controllers/admincontroller.js')}}"></script>

@stop