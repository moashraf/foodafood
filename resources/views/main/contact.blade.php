
@extends('main.master')
@section('content')
<!-- innerpages_banner -->
	<div class="innerpages_bannerco">
		<h2>    {{ trans('langsite.Contact Us')}}  </h2>
	</div>
<!-- //innerpages_banner -->

<!-- Portfolio section -->
    <section class="portfolio-agileinfo gallery" id="contact-page"><br><br>
				<div class="container">
					<div class="contact-content">
					 <div class="row">
						<div class="col-md-7 content1">
			<form  action="{{ URL::to('/sendmail')  }}" method="post" >
			{{ csrf_field() }}

				<div class="row">

						<div class="col-md-6">
								<div class="form-group">
										<label for="name">
										{{ trans('langsite.Name')}} :</label>
										<input type="text" class="form-control" id="name" name="name"
											placeholder="{{ trans('langsite.Name')}}" required="required" />
								</div>
								<div class="form-group">
										<label for="email">
										{{ trans('langsite.Email')}} :</label>
												<input type="email" class="form-control" id="email"  name="email"
												placeholder="{{ trans('langsite.Email')}}" required="required" />
								</div>
								<div class="form-group">
										<label for="subject">
										{{ trans('langsite.Phone')}} :</label>
										<input type="tel" class="form-control" id="phone" name="phone"
										placeholder="{{ trans('langsite.Phone')}}" required="required" />
								</div>
						</div>
						<div class="col-md-6 ">
								<div class="form-group">
										<label for="name">
										{{ trans('langsite.Message')}}  </label>
										<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
												placeholder=" 	{{ trans('langsite.Message')}} "></textarea>
								</div>
						</div>
						<div class="col-md-12">
								<button type="submit" class="btn btn-success pull-left" id="btnContactUs">
									{{ trans('langsite.send')}}  </button>
						</div>
				</div>
				</form>
						</div>
						<div class="col-md-5 content2">
							<div class="w3ls_footer_grid_left">
								<div class="w3l-icon">
									<span class="fa fa-map-marker" aria-hidden="true"></span>
								</div>
								<p> {{ site_settings("Location")  }}  </p>
								<div class="clearfix"></div>
							</div>
							<div class="w3ls_footer_grid_left">
								<div class="w3l-icon">
									<span class="fa fa-phone" aria-hidden="true"></span>
								</div>
								<p>   {{ site_settings("phone")  }} </p>
								<div class="clearfix"></div>

								<div class="w3l-icon">
									<span class="fa fa-envelope-o" aria-hidden="true"></span>
								</div>
								<p>  {{ site_settings("Mail")  }} </p>


								<div class="clearfix"></div>
							</div>
							<div class="w3ls_footer_grid_left">
								 <p> {{ site_settings("working time")  }}  </p>
							</div>
						</div>
					</div>
				</div>
	      </div>
    </section>
<!-- /Portfolio section -->
<div class="contact-map" style="width: 100%; margin-top: 50px;">
   <iframe src="https://wego.here.com/directions/mix//%D8%A7%D9%84%D8%B4%D8%B1%D9%83%D8%A9-%D8%A7%D9%84%D8%B3%D9%88%D8%B1%D9%8A%D8%A9-%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A%D8%A9-%D9%84%D9%84%D8%B5%D9%86%D8%A7%D8%B9%D8%A7%D8%AA-%D8%A7%D9%84%D8%BA%D8%B0%D8%A7%D8%A6%D9%8A%D8%A9,-%D9%85%D8%AF%D9%8A%D9%86%D8%A9-%D8%A7%D9%84%D8%B3%D8%A7%D8%AF%D8%A7%D8%AA-%D8%A7%D9%84%D9%85%D9%86%D8%B7%D9%82%D8%A9-%D8%A7%D9%84%D8%B5%D9%86%D8%A7%D8%B9%D9%8A%D8%A9-%D8%A7%D9%84%D8%A3%D9%88%D9%84%D9%89,-32897-Sadat-City:e-eyJuYW1lIjoiXHUwNjI3XHUwNjQ0XHUwNjM0XHUwNjMxXHUwNjQzXHUwNjI5IFx1MDYyN1x1MDY0NFx1MDYzM1x1MDY0OFx1MDYzMVx1MDY0YVx1MDYyOSBcdTA2MjdcdTA2NDRcdTA2NDVcdTA2MzVcdTA2MzFcdTA2NGFcdTA2MjkgXHUwNjQ0XHUwNjQ0XHUwNjM1XHUwNjQ2XHUwNjI3XHUwNjM5XHUwNjI3XHUwNjJhIFx1MDYyN1x1MDY0NFx1MDYzYVx1MDYzMFx1MDYyN1x1MDYyNlx1MDY0YVx1MDYyOSIsImFkZHJlc3MiOiJcdTA2NDVcdTA2MmZcdTA2NGFcdTA2NDZcdTA2MjkgXHUwNjI3XHUwNjQ0XHUwNjMzXHUwNjI3XHUwNjJmXHUwNjI3XHUwNjJhIC0gXHUwNjI3XHUwNjQ0XHUwNjQ1XHUwNjQ2XHUwNjM3XHUwNjQyXHUwNjI5IFx1MDYyN1x1MDY0NFx1MDYzNVx1MDY0Nlx1MDYyN1x1MDYzOVx1MDY0YVx1MDYyOSBcdTA2MjdcdTA2NDRcdTA2MjNcdTA2NDhcdTA2NDRcdTA2NDksIFNhZGF0IENpdHksIEFsIEJ1aGF5cmFoLCBFZ3lwdCwgMzI4OTciLCJsYXRpdHVkZSI6MzAuMzY5MzIwNjkwMTA3LCJsb25naXR1ZGUiOjMwLjUzNzg3MjMxNDQ1MywicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoxNzM0NDU5NDMzNDM0ODExfQ==?map=30.36932,30.53787,15,normal&fb_locale=en_US" width="100%" height="200" frameborder="0" style="border:0"></iframe>
</div>
@endsection
