
@if(!Request::is('admin')&& !Request::is('admin/index')&& !Request::is('admin/generic/update'))
<div id="fh5co-footer" role="contentinfo">
		
		<div class="container">
			<div class="row">
				<div class="col-md-4 to-animate">
					<h3 class="section-title">About Us</h3>
					<p>A dynamic and optimistic player in the healthcare industry.</p>
					<p class="copy-right">&copy; 2017 Knoll Healthcare. <br>All Rights Reserved. <br>
						Designed by <a href="http://genithub.com" target="_blank">genithub.com</a>
						
					</p>
				</div>

				<div class="col-md-4 to-animate">
					<h3 class="section-title">Our Address</h3>



 
					<ul class="contact-info">
						<li><i class="icon-map-marker"></i>M-17, Pharma Tower, Basement & Ground,</br>
						Badli Industrial Area, New Delhi 110 042</li>
						<li><i class="icon-phone"></i> +91-9958879977<br />+91-11-27557541-42-43-44 </li>
						<li><i class="icon-envelope"></i><a href="#">sales@knollhealthcare.com</a></li>
						<li><i class="icon-globe2"></i><a href="#">www.knollhealthcare.com</a></li>
					</ul>
					<h3 class="section-title">Connect with Us</h3>
					<ul class="social-media">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 to-animate">
					<h3 class="section-title">Drop us a line</h3>
					<form class="contact-form">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="name" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</div>
	@endif
	<!--
	<div id="map" class="fh5co-map"></div>
	-->
	
	<!-- jQuery -->
	<script src="{{ URL::to('/') }}/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{ URL::to('/') }}/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{ URL::to('/') }}/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{ URL::to('/') }}/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="{{ URL::to('/') }}/js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="{{ URL::to('/') }}/js/owl.carousel.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="{{ URL::to('/') }}/js/main.js"></script>

	</body>
</html>

