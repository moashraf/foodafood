@extends('main.master')
@section('content')

<!-- innerpages_banner -->
	<div class="innerpages_banner">
		<h2>{{ trans('langsite.Products')}}  </h2>
	</div>
<!-- //innerpages_banner -->

<!-- Portfolio section -->
<section class="portfolio-agileinfo gallery" id="portfolio">
				<div class="container">

		<div class="row">
			<div align="center">
			@foreach($Categories_Products as $Categories_Products_val)
			<a href="<?php
if (App::isLocale('ar')) {
    echo URL::to('/') . '/All_Product/';
} else {
    echo URL::to('/') . '/en/All_Product/';}?>"
				   class="btn btn-default filter-button"   data-filter="all" > {{$Categories_Products_val->title}}   </a>

 					@endforeach

			</div>
			<br/>

		   @foreach($Products as $Products_val)
				 <a href="
				 <?php
if (App::isLocale('ar')) {
    echo URL::to('/') . '/All_Product/' . $Products_val->id;
} else {
    echo URL::to('/') . '/en/All_Product/' . $Products_val->id;}?>">

				 <div class="gallery_product col-sm-3 isotopeSelector filter 2 3 ">

	 						 <article class="">
	 								 <figure>
						   <img src="{{ URL::to('/').'/images/'.$Products_val->single_photo}}" alt="foodafood"  class="img-responsive" >

 	 										 <div class="overlay-background">
												 <div class="inner">
														 	<a href=" <?php
if (App::isLocale('ar')) {
    echo URL::to('/') . '/All_Product/' . $Products_val->id;
} else {
    echo URL::to('/') . '/en/All_Product/' . $Products_val->id;}?>"><i class="fa fa-search-plus"></i></a>
												 </div>
											  </div>
	 								 </figure>
	 								 <div class="article-title"><a href=" <?php
if (App::isLocale('ar')) {
    echo URL::to('/') . '/All_Product/' . $Products_val->id;
} else {
    echo URL::to('/') . '/en/All_Product/' . $Products_val->id;}?> ">
									   {{$Products_val->name}}    </a></div>

	 						 </article>
	 				 </div>
					  </a>


					 		     @endforeach






					</div>
				<center>	{{ $Products->links() }}</center>

			</div>

	</div>
</section>
<!-- /Portfolio section -->
@endsection