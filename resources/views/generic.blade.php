 @extends('template.default')
 @section('content')
 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  



<div class="row">
<div class="col-md-6">

<br>
<br>
<br> 
 <p>Looking for an android app. We design you app from scratch to end with your requirements and satify you untill app is develop properly according to your demand.</p>
     <input class="typeahead form-control" style="margin:0px auto;width:300px;"  type="text">




</div>
<div class="col-md-6">
</div>
</div>
<script type="text/javascript">

	    var path = "{{ route('autocomplete') }}";

    $('input.typeahead').typeahead({

        source:  function (query, process) {

        return $.get(path, { query: query }, function (data) {

                return process(data);

            });

        }

    });

</script>



 
  @stop