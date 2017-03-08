 @extends('template.default')
 @section('content')
   



<div class="row">
<div class="col-md-6">

<br>
<br>
<br> 
 <p>Looking for an android app. We design you app from scratch to end with your requirements and satify you untill app is develop properly according to your demand.</p>
     <div class="col-lg-4 col-lg-offset-4">
     	<div class="form-group">
           <input id="searchbox" name="q" placeholder="Generic Search" class="form-control" onkeydown="down()" onkeyup="up()">
        
     	</div>
        <div class="col-lg-12" id="search-results"></div>
     </div>
     



</div>
<div class="col-md-6">
</div>
</div>
<script type="text/javascript"> 
var timer;
function up()
{
	
	timer=setTimeout(function() {
     var keywords=$("#searchbox").val();
     console.log(keywords);
     if(keywords.length>0)
     {
     	console.log("inside if");
     	$.post("http:/localhost:8000/api/search",{keywords:keywords},function(data,status) {
     		//('#search-results').html(markup);
     		console.log("data"+data+"status"+status);
     	
     });
        console.log("end if");
     }
	},500);
}
function down()
{
    console.log("Down");
	clearTimeout(timer);
}
</script>




 
@stop