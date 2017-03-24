<body>
	<header role="banner" id="fh5co-header" style="position: relative;">
		<div class="fluid-container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="{{url('/')}}"><img src="{{url('images/knoll2.jpg')}}" height="40" width="100"></a> 
				</div>
				@if(!Request::is('admin')&&(!Request::is('admin/index'))&&!Request::is('admin/generic/update/*')&&!Request::is('admin/brand/update/*'))
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="{{Request::is('/')?'active':''}}">
						<a  href="http://localhost:8000" class="external"><span>Home</span></a></li>
						<li class="{{Request::is('about')?'active':''}}"><a href="http://localhost:8000/about" class="external" ><span>About Us</span></a></li>
						
						
						<li class="{{Request::is('vision')?'active':''}}"><a href="http://localhost:8000/vision" class="external"><span>Vision</span></a></li>
						<li class="dropdown"><a href="#" class="external" ><span>Product Search</span></a>
						<div class="dropdown-content">
    
    <a href="{{url('generic')}}"  class="external">By Generic</a>
    
    <a href="{{url('brand')}}"  class="external">By Brand</a>
  	<a href="{{url('category')}}"  class="external">By Categories</a>
  	
  </div>
  </li>
						
						<li class="{{Request::is('enquiry')?'active':''}}"><a href="http://localhost:8000/enquiry" class="external"><span>Enquiry</span></a></li>
						<li class="{{Request::is('media')?'active':''}}"><a href="http://localhost:8000/media" class="external"><span>Media</span></a></li>
						
						<!--<li class="call-to-action"><a href="#"><span>Sign up free</span></a></li>-->
						
						
						
					</ul>
				</div>
				@endif
			</nav>
	  </div>
	</header>
