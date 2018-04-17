@extends('main.master')
@section('content')
<!-- innerpages_banner -->
	<div class="innerpages_bannerco">
		<h2> {{ trans('langsite.About')}} </h2>
	</div>
<!-- //innerpages_banner -->

<!-- welcome -->
<div class="welcome" style="background:none">
	<div class="container">
		<div class="col-md-6 welcome-w3lright">
			<div class="video-grid-single-page-agileits">
				  <img src="{{ URL::to('/')}}/images/about.png" alt="" class="img-responsive" />  
			</div>
		</div>
		<div class="col-md-6 welcome_left">
			<h3 class="agileits-title"> {{ trans('langsite.Welcome') }}</h3>
			<h4>  {{ site_settings("sub titles")  }}  </h4>
			<p>   {{ site_settings("About Us")  }} </p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //welcome -->

@endsection