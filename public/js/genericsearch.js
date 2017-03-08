var timer;
function up()
{
	
	timer=setTimeout(function() {
     var keywords=$("#searchbox").val();
     console.log(keywords);
     if(keywords.length>0)
     {
     	 var root = '{{url("/")}}';
     	$.post(root+"api/search",{keywords:keywords},function() {
     		//('#search-results').html(markup);
     		console.log("working");
     	});
     }
	},500);
}
function down()
{
    console.log("Down");
	clearTimeout(timer);
}