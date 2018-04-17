@extends('main.master')
@section('content')

<!-- innerpages_banner -->
	<div class="innerpages_banner">
		<h2>   {{   $Products->name }}  </h2>
	</div>
<!-- //innerpages_banner -->

<!-- Portfolio section -->
<section class="portfolio-agileinfo gallery00000" id="portfolio">
			<br><br>

			 <div class="container">

				<div class="row">
					<div class="col-sm-12  col-xs-12 col-xs-offset-0">
								<div class="panel with-nav-tabs panel-warning">
										<div class="panel-body">
												<div class="tab-content">
 <div class="tab-pane fade active in" id="tab0">
 <img src="{{ URL::to('/').'/images/'. $Products->single_photo }}" class="img-responsive"></div>
  	@foreach($Products->get_Product_Photos as $products_val)
 								<div class="tab-pane fade" id="<?php if ($loop->iteration) {echo 'tab' . $loop->iteration;}?>">
								 <img src="{{ URL::to('/').'/images/'. $products_val->Photo }}" class="img-responsive"></div>
								 	@endforeach
												</div>
										</div>
				 <div class="panel-heading">
					 <div class='col-xs-12'>

<?php if (!$Products->get_Product_Photos->isEmpty()) {?>

			 <div class="carousel slide media-carousel nav nav-tabs" id="media">
				 <div class="carousel-inner">
					 <div class="item  active">
						 <div class="row">

						 @foreach($Products->get_Product_Photos as $products_val)
						 <div class="col-md-2 col-xs-6">

								<a class="thumbnail" href="#<?php if ($loop->iteration) {echo 'tab' . $loop->iteration;}?>" data-toggle="tab">
								<img src="{{ URL::to('/').'/images/'. $products_val->Photo }}" class="img-responsive"></a>
							</div>


								 	@endforeach

						 </div>
					 </div>

				 </div>
				 <a data-slide="prev" href="#media" class="right carousel-control">‹</a>
				 <a data-slide="next" href="#media" class="left carousel-control">›</a>
			 </div>

<?php } else {?>
<h2 style="    padding: 58px;" > <center>     {{ trans('langsite.not found')}}   </center>  </h2>

<?php }?>





			</div>

										</div>
								</div>



	 <div class="singel_product">
					<div class="col-md-12">
					<p><span>  {{ trans('langsite.details')}}  : </span>  {{   $Products->body }} </p>
					<p><span>  {{ trans('langsite.Components')}} : </span> {{   $Products->component }} </p>
					<p><span>    {{ trans('langsite.Packing')}}  : </span>  {{   $Products->Packing_content }} </p>
 					<p><span>     {{ trans('langsite.Net weight')}}    : </span>  {{   $Products->Net_weight }} </p>
 					<br><br>
					<p><span>   {{ trans('langsite.Note')}}   : </span>  {{   $Products->Note }} </p>
					  					<br><br><br>
					</div>
				</div>



						</div>

			</div>


</div>
<script>
$(document).ready(function() {
 $('#media').carousel({
	 pause: true,
	 interval: false,
 });
});

</script>
</section>
<!-- /Portfolio section -->

 @endsection