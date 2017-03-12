 @extends('template.default')
 @section('content')
   <br><br><br><br>
 <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>S.no</th>
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
        <td>1</td>
        <td>{{ $generic->name }}</td>
        <td>{{$generic->type}}</td>
        <td>{{$generic->unit}}</td>
        <td>{{$generic->constituent}}</td>
        <td>{{$generic->package}}</td>
        <td>{{$generic->price}}</td>
      </tr>
    </tbody>
  </table>
  </div>

      
 
  @stop