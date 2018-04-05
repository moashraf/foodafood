@extends('main.master')
@section('content')

<!-- innerpages_banner -->
	<div class="innerpages_banner">
		<h2>تفاصيل المنتج </h2>
	</div>
<!-- //innerpages_banner -->

<!-- Portfolio section -->
<section class="portfolio-agileinfo gallery00000" id="portfolio">
			<br><br>
			 
			 <div class="container">
				
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
								<div class="panel with-nav-tabs panel-warning">
										<div class="panel-body">
												<div class="tab-content">
														<div class="tab-pane fade active in" id="tab1warning"><img src="images/g1.png" class="img-responsive"></div>
														<div class="tab-pane fade" id="tab2warning"><img src="images/g2.png" class="img-responsive"></div>
														<div class="tab-pane fade" id="tab3warning"><img src="images/g3.png" class="img-responsive"></div>
														<div class="tab-pane fade" id="tab4warning"><img src="images/g4.png" class="img-responsive"></div>
												</div>
										</div>
				 <div class="panel-heading">
					 <div class='col-xs-12'>
			 <div class="carousel slide media-carousel nav nav-tabs" id="media">
				 <div class="carousel-inner">
					 <div class="item  active">
						 <div class="row">
							 <div class="col-md-3 col-xs-6">
								 <a class="thumbnail" href="#tab1warning" data-toggle="tab"><img src="images/g1.png" class="img-responsive"></a>
							 </div>
							 <div class="col-md-3 col-xs-6">
								 <a class="thumbnail" href="#tab2warning" data-toggle="tab"><img src="images/g2.png" class="img-responsive"></a>
							 </div>
							 <div class="col-md-3 col-xs-6">
								 <a class="thumbnail" href="#tab3warning" data-toggle="tab"><img src="images/g3.png" class="img-responsive"></a>
							 </div>
							 <div class="col-md-3 col-xs-6">
								<a class="thumbnail" href="#tab4warning" data-toggle="tab"><img src="images/g4.png" class="img-responsive"></a>
							</div>
						 </div>
					 </div>
					 <div class="item">
						 <div class="row">
							 <div class="col-md-3 col-xs-6">
								 <a class="thumbnail" href="#tab1warning" data-toggle="tab"><img src="images/g1.png" class="img-responsive"></a>
							 </div>
							 <div class="col-md-3 col-xs-6">
								 <a class="thumbnail" href="#tab2warning" data-toggle="tab"><img src="images/g2.png" class="img-responsive"></a>
							 </div>
							 <div class="col-md-3 col-xs-6">
								 <a class="thumbnail" href="#tab3warning" data-toggle="tab"><img src="images/g3.png" class="img-responsive"></a>
							 </div>
							 <div class="col-md-3 col-xs-6">
								<a class="thumbnail" href="#tab4warning" data-toggle="tab"><img src="images/g4.png" class="img-responsive"></a>
							</div>
						 </div>
					 </div>
				 </div>
				 <a data-slide="prev" href="#media" class="right carousel-control">‹</a>
				 <a data-slide="next" href="#media" class="left carousel-control">›</a>
			 </div>
			</div>
													 
										</div>
								</div>



	 <div class="singel_product">
					<div class="col-md-12">
					<p><span>المكونات: </span>الطحينة والسكر والجلوكوز وحمض الستريك والفانيلا والفستق.</p>
					<p><span>محتوي التعبئة : </span>ناؤمننتالاان</p>
					<p>صافي الوزن 750 جم </p>
					<p>الإجمالي وزن 795 جم </p>
					<br><br>
					<p class="no">ملاحظة: يحفظ بعيدا عن ضوء الشمس والرطوبة.</p>
					<br><br>
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