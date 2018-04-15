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
			<a href="{{ URL::to('/').'/Categories/'.$Categories_Products_val->id}}" class="btn btn-default filter-button" > {{$Categories_Products_val->title}}   </a>
			
 					@endforeach
					
			</div>
			<br/>

		   @foreach($Products as $Products_val)

				 
				 <a href="{{ URL::to('/').'/All_Product/'.$Products_val->id}}">
				 
				 <div class="gallery_product col-sm-3 isotopeSelector filter 2 3 ">
				 
	 						 <article class="">
	 								 <figure>
						   <img src="{{ URL::to('/').'/images/'.$Products_val->single_photo}}" alt="foodafood"  class="img-responsive" >

 	 										 <div class="overlay-background">
												 <div class="inner">
														 	<a href="{{ URL::to('/').'/All_Product/'.$Products_val->id}}"><i class="fa fa-search-plus"></i></a>
												 </div>
											  </div>
	 								 </figure>
	 								 <div class="article-title"><a href="{{ URL::to('/').'/All_Product/'.$Products_val->id}}"> 
									   {{$Products_val->name}}    </a></div>
	 								 <div class="article-title"><a href="{{ URL::to('/').'/Categories/'.$Products_val->get_cat_data['id']}}">  
									  {{  $Products_val->get_cat_data['title'] }}    </a></div>
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