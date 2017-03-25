<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Knoll Healthcare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Knoll Healthcare" />
	<meta name="keywords" content="knoll, healthcare" />
	<meta name="author" content="knollhealthcare.com" />

 

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/favicon.png">


  <script type="text/javascript" src='http://code.jquery.com/jquery-1.10.2.min.js'></script>
  <script type="text/javascript">
    var root = '{{url("/")}}';
</script>

	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	

	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Voltaire" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{URL::asset('public/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{URL::asset('public/css/icomoon.css')}}">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="{{URL::asset('public/css/simple-line-icons.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{URL::asset('public/css/bootstrap.css')}}">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{URL::asset('public/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('public/css/owl.theme.default.min.css')}}">
	<!-- Style -->
	<link rel="stylesheet" href="{{URL::asset('public/css/style.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/public/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.js"></script>
       
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
		

       <script src="{{ URL::to('/') }}/public/app/app.js"></script>
 


	<!-- Modernizr JS -->
	<script src="{{ URL::to('/') }}/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
	p{
		font-size:1em;
		
	}

	li{
		font-size:0.95em;
	}
	@media only screen and (max-width: 610px) {

		div.carousel-caption>p{
			display:none;
			
		}



	}

	</style>
	<script>
	$('.dropdown .dropdown-content > a:not(a[href="#"])').on('click', function() {
    self.location = $(this).attr('href');
	});
	</script>

</head>