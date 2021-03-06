<!DOCTYPE html>
<html lang="en">
<head>
 
 
<title> {{ site_settings("Web site name")  }}    </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href=" {{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap css -->

<link href=" {{ asset('css/jQuery.lightninBox.css') }} " rel="stylesheet" type="text/css" media="all" /><!-- for gallery lightninBox css -->
<link href=" {{ asset('css/font-awesome.css') }} " rel="stylesheet"><!-- fontawesome css -->
<?php if (App::isLocale('en')) { ?>
 <link rel='stylesheet' href="{{ asset('css/gallery-en.css') }}" > 
 <link rel='stylesheet' href="{{ asset('css/style-en.css') }}" > 
 <?php }else{   ?>
<link href=" {{ asset('css/gallery.css') }} " rel="stylesheet" type="text/css" media="all" /><!-- gallery css -->
 <link href=" {{ asset('css/style.css') }} " rel="stylesheet" type="text/css" media="all" />
 <?php  }   ?>

</head>
<body>

	<!-- header -->
	<div class="header" id="home">
		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				    	<span class="sr-only">Toggle navigation</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
			    	</button>
						<a class="navbar-brand" href="{{ URL::to('/') }}">
							<img class="img-responsive" src="{{ URL::to('/').'/images/'.site_settings('logo') }}" alt="" />
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">


<?php if (App::isLocale('ar') =='ar' ) {   ?>

								<li><a href="{{ URL::to('/')}}" class="<?php if (Request::segment(1) ==NULL ) { echo'active';} ?>"> {{ trans('langsite.Home')}} </a></li>
								<li><a href="{{ URL::to('/about')}}" class="<?php if (Request::segment(1) =='about') { echo'active';} ?>"  >  {{ trans('langsite.About')}}   </a></li>
								<li><a href="{{ URL::to('/All_Product')}}"  class="<?php if (Request::segment(1) =='All_Product') { echo'active';} ?>"  >  {{ trans('langsite.Products')}}  </a></li>
								<li><a href=" {{ URL::to('/Categories')}}" class="<?php if (Request::segment(1) =='Categories') { echo'active';} ?>"  >  {{ trans('langsite.Categories')}}  </a></li>  
								<li><a href="{{ URL::to('/contact')}}" class="<?php if (Request::segment(1) =='contact') { echo'active';} ?>"  > {{ trans('langsite.Contact Us')}}  </a></li>

<?php  } else{  ?>

								<li><a href="{{ URL::to('/en')}}" class="<?php if (Request::segment(2) ==NULL ) { echo'active';} ?>"   > {{ trans('langsite.Home')}} </a></li>
								<li><a href="{{ URL::to('/en/about')}}" class="<?php if (Request::segment(2) =='about') { echo'active';} ?>"  >  {{ trans('langsite.About')}}   </a></li>
								<li><a href="{{ URL::to('/en/All_Product')}}" class="<?php if (Request::segment(2) =='All_Product') { echo'active';} ?>"  >  {{ trans('langsite.Products')}}  </a></li>
								<li><a href=" {{ URL::to('/en/Categories')}}" class="<?php if (Request::segment(2) =='Categories') { echo'active';} ?>"  >  {{ trans('langsite.Categories')}}  </a></li>  
								<li><a href="{{ URL::to('/en/contact')}}" class="<?php if (Request::segment(2) =='contact') { echo'active';} ?>"  > {{ trans('langsite.Contact Us')}}  </a></li>

	<?php  }  ?>


								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">  {{ trans('langsite.lang')}}  <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="{{ URL::to('/en')}}">English</a></li>
										<li class="divider"></li>
										<li><a href="{{ URL::to('/')}}">العربية </a></li>

									</ul>
								</li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- //header -->





	@yield('content')	


<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="w3_agile_footer_grids">
			<div class="col-sm-4 col-sm-offset-0 col-xs-9 col-xs-offset-2 w3_agile_footer_grid">
				<h3>   {{ trans('langsite.About')}}  </h3>
				<div class="w3ls_footer_grid_left">
					<p>  {{ site_settings("About Us")  }}  </p>
					 
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-sm-4 col-sm-offset-0 col-xs-9 col-xs-offset-2 w3ls_address_mail_footer_grids w3_agile_footer_grid">
				<h3>قوائم سريعة </h3>
				<ul class="agileits_w3layouts_footer_grid_list">


<?php if (App::isLocale('ar') =='ar' ) {   ?>



					<li>
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<a href="{{ URL::to('/')}}"> {{ trans('langsite.Home')}}  </a>
					</li>
					<li>
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<a href="{{ URL::to('/about')}}">   {{ trans('langsite.About')}}  </a>
					</li>
				  	<li>
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<a href="{{ URL::to('/All_Product')}}"> {{ trans('langsite.Products')}}  </a>
					</li>
			        <li>
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<a href="{{ URL::to('/Categories')}}">  {{ trans('langsite.Categories')}}  </a>
					</li>

					<li>
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<a href="{{ URL::to('/contact')}}">   {{ trans('langsite.Contact Us')}}  </a>
					</li>

<?php  } else{  ?>

	              <li>
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<a href="{{ URL::to('/en')}}"> {{ trans('langsite.Home')}}  </a>
					</li>
					<li>
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<a href="{{ URL::to('/en/about')}}">   {{ trans('langsite.About')}}  </a>
					</li>
				  	<li>
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<a href="{{ URL::to('/en/All_Product')}}"> {{ trans('langsite.Products')}}  </a>
					</li>
			        <li>
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<a href="{{ URL::to('/en/Categories')}}">  {{ trans('langsite.Categories')}}  </a>
					</li>

					<li>
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<a href="{{ URL::to('/en/contact')}}">   {{ trans('langsite.Contact Us')}}  </a>
					</li>

	<?php  }  ?>

				</ul><br>
			</div>
			<div class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1 w3_agile_footer_grid">
				<h3>الاتصال بنا </h3>
				<div class="w3ls_footer_grid_left">
					<div class="w3l-icon">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<p> 
						<span>  {{ site_settings("Location")  }}</span>
					</p>
										<p> {{ site_settings("working time")  }}  </p>

					<div class="clearfix"></div>
				</div>
				<div class="w3ls_footer_grid_left">
					<div class="w3l-icon">
						<span class="fa fa-phone" aria-hidden="true"></span>
					</div>
					<p>  
					{{ site_settings("phone")  }} 
					</p>
					<div class="clearfix"></div>
				</div>
				<div class="w3ls_footer_grid_left">
					<div class="w3l-icon">
						<span class="" aria-hidden="true"><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
					</div>
					<p>
						<a href="{{ site_settings('facebook')  }} " target="_blank">facebook</a>
					</p>
					<div class="clearfix"></div>
				</div>
				<div class="w3ls_footer_grid_left">
					<div class="w3l-icon">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<p>
						<a href="mailto:{{ site_settings('Mail')  }}">{{ site_settings('Mail')  }}</a>
					</p>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="agileinfo_copyright">
			<p> {{ trans('langsite.copyright')}} <a href="#">Be4e.Marketing</a>
			</p>
		</div>
	</div>
</div>
<!-- //footer -->

<!-- Supportive js -->
<script type="text/javascript" src=" {{ asset('js/jquery-2.1.4.min.js') }} "></script>
<!-- //Supportive js -->
<script type="text/javascript" src="  {{ asset('js/bootstrap.js') }} "></script><!-- bootstrap js file -->

<!-- js for portfolio lightbox -->
<script src="  {{ asset('js/jQuery.lightninBox.js') }} "></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio lightbox -->

<!-- smooth scrolling js -->
<script src="  {{ asset('js/SmoothScroll.min.js') }} "></script>
<!-- smooth scrolling js -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="  {{ asset('js/move-top.js') }} "></script>
<script type="text/javascript" src="  {{ asset('js/easing.js') }} "></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

	<!-- here starts scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->

<!-- move to top-js-files -->
	<script type="text/javascript" src="  {{ asset('js/move-top.js') }} "></script>
	<script type="text/javascript" src="  {{ asset('js/easing.js') }} "></script>
<!-- //move to top-js-files -->

</body>
</html>

