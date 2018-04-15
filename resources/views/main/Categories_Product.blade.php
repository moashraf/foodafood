@extends('main.master')
@section('content')

<!-- innerpages_banner -->
	<div class="innerpages_banner">
		<h2> {{ trans('langsite.Categories')}}  </h2>
	</div>
<!-- //innerpages_banner -->

<!-- Portfolio section -->
<div class="popular_cakes">
	<div class="container">
 				<div class="cakes_grids">
				@foreach($Categories_Products as $Categories_Products_val)
		
			<div class="col-sm-4">
			<div class="cakes_grid1">
				<a href="{{ URL::to('/').'/Categories/'.$Categories_Products_val->id }}" class="pop-ca">
				<img class="img-responsive img-thumbnail" src="{{ URL::to('/').'/images/'.$Categories_Products_val->single_photo}}" alt="popular cakes" />
				<h3>    {{$Categories_Products_val->title}}   </h3>
				<p>    {{$Categories_Products_val->body}}   </p>
			</a>
			</div>
		</div>
		@endforeach
			 
			<div class="clearfix"></div>
			<center>	{{ $Categories_Products->links() }}</center>	

		</div>
	</div>
</div>
<!-- /Portfolio section -->
@endsection