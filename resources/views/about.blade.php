@include('layouts.header')

<!-- About us -->
<div class="about-us inner">
	<div class="container">
		<h2 class="main-title">
			<img src="{{ asset('images/icon.png') }}" class="img-responsive">
			<span>About Us</span>
		</h2>
		<img src="{{ asset($about->img) }}" class="img-responsive about-img">
		<div class="para">
			<p>
				{!! $about->translate('en')->about_desc !!}
			</p>
		</div>
	</div>
</div>
<!-- ./About us -->

@include('layouts.footer')	