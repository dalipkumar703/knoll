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
        
        <th>Image</th>
        <th>Product Name</th>
        <th>Composition</th>
        <th>
    Package
    </th>
    <th>
    Price
    </th>
    <th>
    Division
    </th>
    <th>
    Category
    </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td><img src="http://localhost:8000/{{$generic->image}}" height="120" width="180"></td>
        <td>{{$generic->productname}}</td>
        <td>{{$generic->composition}}</td>
        <td>{{$generic->packing}}</td>
        <td>{{$generic->mrp}}</td>
        <td>{{$generic->division}}</td>
        <td>{{$generic->category}}</td>
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