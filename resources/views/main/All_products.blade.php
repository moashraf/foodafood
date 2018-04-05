@extends('main.master')
@section('content')

<!-- innerpages_banner -->
	<div class="innerpages_banner">
		<h2>منتجاتنا</h2>
	</div>
<!-- //innerpages_banner -->

<!-- Portfolio section -->
<section class="portfolio-agileinfo gallery" id="portfolio">
				<div class="container">
	
		<div class="row">
			<div align="center">
					<button class="btn btn-default filter-button" data-filter="all">الكل </button>
					<button class="btn btn-default filter-button" data-filter="1">فودا فود</button>
					<button class="btn btn-default filter-button" data-filter="2">ليغاس</button>
					<button class="btn btn-default filter-button" data-filter="3">لافيرا</button>
					<button class="btn btn-default filter-button" data-filter="4">سوبرانو</button>
			</div>
			<br/>

			<div class="gallery_product col-sm-3 isotopeSelector filter 1 ">
						 <article class="">
								 <figure>
										 <img src="images/cake1.jpg" class="img-responsive">
										 <div class="overlay-background">
												 <div class="inner">
                            	<a href="gallery-info3.html"><i class="fa fa-search-plus"></i></a>
												 </div>
										 </div>
								 </figure>
								 <div class="article-title"><a href="#">Nipperkin run</a></div>
						 </article>
				 </div>
				 <div class="gallery_product col-sm-3 isotopeSelector filter 2 3 ">
	 						 <article class="">
	 								 <figure>
	 										<img src="images/cake2.jpg" class="img-responsive">
	 										 <div class="overlay-background">
												 <div class="inner">
														 	<a href="gallery-info3.html"><i class="fa fa-search-plus"></i></a>
												 </div>
											  </div>
	 								 </figure>
	 								 <div class="article-title"><a href="#">Nipperkin run</a></div>
	 						 </article>
	 				 </div>
					 <div class="gallery_product col-sm-3 isotopeSelector filter 1 4 ">
								 <article class="">
										 <figure>
												<img src="images/cake3.jpg" class="img-responsive">
												 <div class="overlay-background">
													 <div class="inner">
																<a href="gallery-info3.html"><i class="fa fa-search-plus"></i></a>
													</div>
												 </div>
										 </figure>
										 <div class="article-title"><a href="#">Nipperkin run</a></div>
								 </article>
						 </div>
						 <div class="gallery_product col-sm-3 isotopeSelector 3 ">
									<article class="">
											<figure>
												 <img src="images/cake4.jpg" class="img-responsive">
													<div class="overlay-background">
														<div class="inner">
																<a href="gallery-info3.html"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
											</figure>
											<div class="article-title"><a href="#">Nipperkin run</a></div>
									</article>
							</div>
							<div class="gallery_product col-sm-3 isotopeSelector filter 2 ">
										<article class="">
												<figure>
													 <img src="images/cake5.jpg" class="img-responsive">
														<div class="overlay-background">
															<div class="inner">
																		<a href="gallery-info3.html"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
												</figure>
												<div class="article-title"><a href="#">Nipperkin run</a></div>
										</article>
								</div>
								<div class="gallery_product col-sm-3 isotopeSelector filter 1 3 ">
											<article class="">
													<figure>
														 <img src="images/cake1.jpg" class="img-responsive">
															<div class="overlay-background">
																<div class="inner">
																			<a href="gallery-info3.html"><i class="fa fa-search-plus"></i></a>
																</div>
															</div>
													</figure>
													<div class="article-title"><a href="#">Nipperkin run</a></div>
											</article>
									</div>
									<div class="gallery_product col-sm-3 isotopeSelector filter 2 4 ">
												<article class="">
														<figure>
															 <img src="images/cake2.jpg" class="img-responsive">
																<div class="overlay-background">
																	<div class="inner">
																			<a href="gallery-info3.html"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
														</figure>
														<div class="article-title"><a href="#">Nipperkin run</a></div>
												</article>
										</div>

					</div>
			</div>

	</div>
</section>
<!-- /Portfolio section -->
@endsection