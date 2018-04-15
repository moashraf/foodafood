


@extends('main.master')
@section('content')
	<!-- banner slider -->
<div class="container-fluid">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators">
  @foreach($slider as $sliderval)
   
     <li data-target="#myCarousel" data-slide-to=" <?php  if($loop->iteration){echo $loop->iteration ;}    ?>" class="<?php  if($loop->iteration==1){echo 'active';}    ?>"></li>
   
	 @endforeach
	 
   </ol>

   <!-- Wrapper for slides -->
   <div class="carousel-inner">
   
  @foreach($slider as $sliderval)

     <div class="item  <?php  if($loop->iteration==1){echo 'active';}    ?> ">
       <img src="{{   URL::to('/').'/images/'.$sliderval->single_photo }}" alt="Los Angeles" style="width:100%;">
     </div>

    		     @endforeach

   </div>

   <!-- Left and right controls -->
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#myCarousel" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>
</div>

<!-- welcome -->
<div class="welcome">
	<div class="container">
		<div class="col-md-6 welcome-w3lright">
			<div class="video-grid-single-page-agileits">
				<div data-video="qvtjaAW3m-E" id="video"> <img src="{{   URL::to('/').'/images/'.site_settings('about photo')  }}" alt="" class="img-responsive" /> </div>
			</div>
		</div>
		<div class="col-md-6 welcome_left">
			<h3 class="agileits-title"> 	{{ trans('langsite.Welcome')}} </h3>
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
		<h3 class="heading">   {{ trans('langsite.Categories')}} </h3>
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

