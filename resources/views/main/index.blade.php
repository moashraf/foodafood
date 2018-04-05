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
			<div class="item active">
				<div class="container">
					 <div class="carousel-caption">
						<div class="col-md-6 slider_left">
							<!-- <h3><span>الشركة السورية المصرية للصناعات الغذائية </span></h3>
							<p>مصنع بسكويت سوري متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة </p> -->
						</div>
						<div class="col-md-6 slider_right">
							 <!-- <img src="images/cake1.png" alt="cake1" /> -->
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					 <div class="carousel-caption">
						<div class="col-md-6 slider_left">
							<!-- <h3><span>الشركة السورية المصرية للصناعات الغذائية </span></h3>
							<p>مصنع بسكويت سوري متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة </p> -->
						</div>
						<div class="col-md-6 slider_right">
							<!-- <img src="images/cake2.png" alt="cake1" /> -->
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					 <div class="carousel-caption">
						<div class="col-md-6 slider_left">
							<!-- <h3><span>الشركة السورية المصرية للصناعات الغذائية </span></h3>
							<p>مصنع بسكويت سوري متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة </p> -->
						</div>
						<div class="col-md-6 slider_right">
							<!-- <img src="images/cake4.png" alt="cake1" /> -->
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
				<div data-video="qvtjaAW3m-E" id="video"> <img src="images/about.png" alt="" class="img-responsive" /> </div>
			</div>
		</div>
		<div class="col-md-6 welcome_left">
			<h3 class="agileits-title">مرحبا 	"فودا فود "</h3>
			<h4> مصنع بسكويت سوري متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة </h4>
			<p>مصنع بسكويت سوري متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة . مصنع بسكويت سوري متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة . مصنع بسكويت سوري متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة .</p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //welcome -->

<!-- Popular cakes -->
<div class="popular_cakes">
	<div class="container">
		<h3 class="heading">فودا فود </h3>
		<div class="cakes_grids">
			<div class="col-sm-4">
			<div class="cakes_grid1">
				<a href="gallery.html" class="pop-ca">
				<img class="img-responsive img-thumbnail" src="images/c1.jpg" alt="popular cakes" />
				<h3>لافيرا</h3>
				<p>لكل العيلة </p>
			</a>
			</div>
		</div>
			<div class="col-sm-4">
			<div class="cakes_grid1">
				<a href="gallery.html" class="pop-ca">
				<img class="img-responsive img-thumbnail" src="images/c2.jpg" alt="popular cakes" />
				<h3>سوبرانو </h3>
				<p>بتظبط أي قعدة </p>
				<a>
			</div>
		</div>
			<div class="col-sm-4">
			<div class="cakes_grid1">
				<a href="gallery.html" class="pop-ca">
				<img class="img-responsive img-thumbnail" src="images/c3.jpg" alt="popular cakes" />
				<h3>فودا فود </h3>
				<p>كبرت العيلة </p>
			</a>
			</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //Popular cakes -->
<br><br>

@endsection