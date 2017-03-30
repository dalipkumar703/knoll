
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>{{Request::is('category/download/tablet')?'Tablet':''}}{{Request::is('category/download/drop')?'Drop':''}}{{Request::is('category/download/liquid')?'Liquid':''}}{{Request::is('category/download/oinment')?'Oinment':''}}</h2>           
  <table class="table table-striped">
    <thead>
      <tr>
       <th>
    <center>Image</centre>
    </th>
    <th>
    <center>Product </centre>
    </th>
    <th>
    <center>Composition</centre>
    </th>
    <th>
    <center>Package</centre>
    </th>
    <th>
    <center>Price</centre>
    </th>
    <th>
    <center>Division</centre>
    </th>
    <th>
     <center>Category</centre>
    </th>
      </tr>
    </thead>
    <tbody>
       @foreach($products as $product)<tr>
    <td><img src="" height="120" width="180"></td>
    <td>
    {{$product->productname}}  
    </td>
    <td> 
     <a href="generic-detail/{{$product->id}}" >{{$product->composition}}</a>
    </td>
    <td>{{$product->packing}}</td>
    <td><span style='font-family: "Times New Roman", Georgia, Serif;'>&#x20B9;</span>{{$product->mrp}} </td>
    <td>
    {{ $product->division}} 
    </td>
    <td>
    {{$product->category}} 
    </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
