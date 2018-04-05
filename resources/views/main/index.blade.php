@extends('main.master')
@section('content')
	<!-- banner slider -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">



  @foreach($slider as $sliderval)

			<div class="item  " 
			style="background: linear-gradient(rgba(23, 22, 23, 0), rgba(23, 22, 23, 0)), url({{   URL::to('/').'/images/'.$sliderval->single_photo }}) no-repeat;">
				<div class="container">
					 <div class="carousel-caption">
						<div class="col-md-6 slider_left">
						 						</div>
						<div class="col-md-6 slider_right">
 						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			 
		     @endforeach

		     <div class="item active" 
			style="background: linear-gradient(rgba(23, 22, 23, 0), rgba(23, 22, 23, 0)), url({{   URL::to('/').'/images/'.$sliderval->single_photo }}) no-repeat;">
				<div class="container">
					 <div class="carousel-caption">
						<div class="col-md-6 slider_left">
						 						</div>
						<div class="col-md-6 slider_right">
 						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>


		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!-- //banner slider -->

<!-- welcome -->
<div class="welcome">
	<div class="container">
		<div class="col-md-6 welcome-w3lright">
			<div class="video-grid-single-page-agileits">
				<div data-video="qvtjaAW3m-E" id="video"> <img src="{{   URL::to('/').'/images/'.site_settings('about photo')  }}" alt="" class="img-responsive" /> </div>
			</div>
		</div>
		<div class="col-md-6 welcome_left">
			<h3 class="agileits-title">مرحبا 	"فودا فود "</h3>
			<h4> {{ site_settings("sub titles")  }}  </h4>
			<p> {{ site_settings("About Us")  }}  </p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //welcome -->

<!-- Popular cakes -->
<div class="popular_cakes">
	<div class="container">
		<h3 class="heading"> تصنيفات فودا فود </h3>
		<div class="cakes_grids">
			  @foreach($Categories_Products as $Categories_Productsval)
			 
			<div class="col-sm-4">
			<div class="cakes_grid1">
				<a href="{{   URL::to('/').'/Categories/'.$Categories_Productsval->id }}" class="pop-ca">
				<img class="img-responsive img-thumbnail" src="{{   URL::to('/').'/images/'.$Categories_Productsval->single_photo }}" alt="popular cakes" />
				<h3>{{ $Categories_Productsval->title }}</h3>
				<p>{{ $Categories_Productsval->body }} </p>
			</a>
			</div>
			</div>

			    @endforeach
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //Popular cakes -->
<br><br>

@endsection