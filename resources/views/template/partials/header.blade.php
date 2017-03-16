<body>
	<header role="banner" id="fh5co-header" style="position: relative;">
		<div class="fluid-container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="{{url('/')}}"><span>Knoll</span> Healthcare</a> 
				</div>
				@if(!Request::is('admin')&&(!Request::is('admin/index'))&&!Request::is('admin/generic/update/*'))
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
						<a href="#" data-nav-section="home" style=""><span>Home</span></a></li>
						<li><a href="#" data-nav-section="explore"><span>About Us</span></a></li>
						
						
						<li><a href="#" data-nav-section="vision"><span>Vision</span></a></li>
						<li class="dropdown"><a href="#" class="external" data-nav-section = "services"><span>Products</span></a>
						<div class="dropdown-content">
    
    <a href="{{url('generic')}}" target="_blank" class="external">Generic Name</a>
    
    <a href="{{url('brand')}}" target="_blank" class="external">Brand Name</a>
  	
  	
  </div>
  </li>
						
						<li><a href="#" data-nav-section="faq"><span>Enquiry</span></a></li>
						
						<!--<li class="call-to-action"><a href="#"><span>Sign up free</span></a></li>-->
						
						<li><a href="#" class="external"><span>Network</span></a></li>
						
					</ul>
				</div>
				@endif
			</nav>
	  </div>
	</header>
