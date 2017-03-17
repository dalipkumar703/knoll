 @extends('template.default')

 @section('content')
   <br><br>
   <section data-section="services">

   <div class="text-center">
   <h2>Description</h2>
</div>
 <div class="container">
 <div class="col-md-12">

 <div class="table-responsive">          
  <table class="table table-hover">
    <thead>
      <tr>
        
        <th>Name</th>
        <th>Type</th>
        <th>Unit</th>
        <th>Constituent</th>
        <th>Package</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td>{{$generic->name}}</td>
        <td>{{$generic->type}}</td>
        <td>{{$generic->unit}}</td>
        <td>{{$generic->constituent}}</td>
        <td>{{$generic->package}}</td>
        <td>{{$generic->price}}</td>
      </tr>
    </tbody>
  </table>
  </div>

  <div>&nbsp;</div>
  <div class="text-center">
<a class="btn btn-primary" href="{{url('generic')}}"> Search Again <span class="glyphicon glyphicon-question-sign"></span></a>
</div>
<div>&nbsp;</div>

<div>&nbsp;</div>

</div>
      
 </div>
 </section>
  @stop