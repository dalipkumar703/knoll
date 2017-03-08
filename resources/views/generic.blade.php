 @extends('template.default')
 @section('content')
   



<div class="row">
<div class="col-md-6">

<br>
<br>
<br> 
 <p>Looking for an android app. We design you app from scratch to end with your requirements and satify you untill app is develop properly according to your demand.</p>
     <select id="searchbox" name="q" placeholder="Search products or categories..." class="form-control"></select>



</div>
<div class="col-md-6">
</div>
</div>
<script type="text/javascript">

	  $(document).ready(function(){
	    $('#searchbox').selectize({
        valueField: 'url',
        labelField: 'name',
        searchField: ['name'],
        maxOptions: 10,
        options: [],
        create: false,
        render: {
            option: function(item, escape) {
                return '<div>' +escape(item.name)+'</div>';
            }
        },
        load: function(query, callback) {
            if (!query.length) return callback();
            $.ajax({
                url: root+'/api/search',
                type: 'GET',
                dataType: 'json',
                data: {
                    q: query
                },
                error: function() {
                    callback();
                },
                success: function(res) {
                    callback(res.data);
                }
            });
        },
        onChange: function(){
            window.location = this.items[0];
        }
    });
	});

</script>



 
  @stop