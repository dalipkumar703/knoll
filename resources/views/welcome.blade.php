@extends('template.default')

@section('content')



<div>&nbsp;</div>

<!--carousel-->
<div class="row">
	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="2000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <img src="http://localhost:8000/images/gallery3.jpg" alt="Chania" style="height:600px;">
      <div class="slide-1"></div>
       <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
       <img src="http://localhost:8000/images/gallery4.jpg" alt="Chania" style="height:600px;">
       <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <img src="http://localhost:8000/images/gallery2.jpg" alt="Chania" style="height:600px;">
      
       <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div> 
</div>
</div>

<!--end carousel-->
    <div>&nbsp;</div>
	<div class="row">
<div class="col-md-12 section-heading text-center" style="padding-bottom: 0px;">
<h2 class="" style="font-family: 'Voltaire', sans-serif;">Search Products</h2>
</div>		
<br />
<div>&nbsp;</div>
		<div class="col-md-6 col-sm-12 text-center">

		<a type="button" class="btn btn-primary" href="{{url('generic')}}">Search by Generic Name</a>
		</div>
		<div class="col-md-6 col-sm-12 text-center">
		<a type="button" class="btn btn-default" href="{{url('brand')}}">Search by Brand Name</a>
		</div>
	</div>	
		

	<!--
	<section id="fh5co-testimony" data-section="testimony">
		<div class="container">
			<div class="row">
				<div class="col-md-12 to-animate">
					<div class="wrap-testimony">
						<div class="owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person2.jpg" alt="user">
									</figure>
									<blockquote>
										<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
									</blockquote>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person3.jpg" alt="user">
									</figure>
									<blockquote>
										<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
									</blockquote>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person2.jpg" alt="user">
									</figure>
									<blockquote>
										<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
									</blockquote>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="getting-started getting-started-1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 to-animate">
					<h3>Getting Started</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				<div class="col-md-6 to-animate-2">
					<div class="call-to-action text-right">
						<a href="#" class="sign-up">Sign Up For Free</a>
					</div>
				</div>
			</div>
		</div>
	</div>
-->	
	<div>&nbsp;</div>
	<div class="row">
					<div class="col-md-3">
					
					<img src="images/product1.jpeg" alt="product" class="img-responsive" title="Product1">
					</div>
					<div class="col-md-3">
					<img src="images/product2.jpeg" alt="product" class="img-responsive" title="Product2">
					</div>
					<div class="col-md-3">
					<img src="images/product3.jpeg" alt="product" class="img-responsive" title="Product3">
					</div>
					<div class="col-md-3">
					<img src="images/product4.jpeg" alt="product" class="img-responsive" title="Product4">
					</div>
				</div>
				<div style="line-height:300%;">
				<br />
				</div>
				<div class="row" style="margin-bottom:4em;">
					<div class="col-md-3">
					
					<img src="images/product5.jpeg" alt="product" class="img-responsive" title="Product5">
					</div>
					<div class="col-md-3">
					<img src="images/product6.jpeg" alt="product" class="img-responsive" title="Product6">
					</div>
					<div class="col-md-3">
					<img src="images/product7.jpeg" alt="product" class="img-responsive" title="Product7">
					</div>
					<div class="col-md-3">
					<img src="images/product8.jpeg" alt="product" class="img-responsive" title="Product8">
					</div>
</div>

	<link rel="stylesheet" href="http://localhost:8000/css/carousel.css">	


@stop