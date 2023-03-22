
@include('layouts.header')

<!-- Slider -->
<div class="slider-box">
	<div class="main-slider">
		<div class="item">
			<img src="{{ asset('images/logo.jpg') }}" class="img-responsive">
		</div>
		@foreach ($slides as $slide)
		<div class="item">
			<img src="{{ asset($slide -> slide_img) }}" class="img-responsive">
		</div>
		@endforeach
	</div>
	<div class="overlay"></div>
</div>

<!-- ./Slider -->

<!-- About us -->
<div class="about-us rtl">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<h2 class="main-title">
					<img src="{{ asset('images/icon.png') }}" class="img-responsive">
					<span>About Us</span>
				</h2>
				<div class="para">
					<p>
						{!! $about->translate('en')->about_desc !!}
					</p>
				</div>
				<a href="{{ url('/about-us')}}" class="more-btn">
					<span class="bg"></span>
					<span class="link">Read More</span>
					<i uk-icon="arrow-right"></i>
				</a>
			</div>
			<div class="col-sm-6 hidden-xs">
				<img src="{{ asset ($about -> img) }}" class="img-responsive about-img ">
			</div>
		</div>
	</div>
</div>
<!-- ./About us -->

<!-- Our Products -->
<div class="products">
	<div class="container">

		<h2 class="main-title">
			<img src="{{ asset('images/icon.png') }}" class="img-responsive">
			<span>Our Last Products</span>
		</h2>
		@php
		$i = 0
		@endphp
		@foreach ($products as $product)
		@php
		$i++;
		@endphp
		<div class="pro-box">
			<span class="number"><?php echo $i ?></span>
			<div class="row">
				<div class="col-xs-12">
					<h2>
						<a href="{{ url('/product/'.$product->id) }}">
							{!! $product->translate('en')->product_title !!}
						</a>
					</h2>
					<div class="pro-slider">
						@foreach ($product -> images as $img)
						<div class="item">
							<a href="{{ url('/product/'.$product->id) }}">
								<img src="{{ asset($img -> product_img) }}" class="img-responsive">
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		@endforeach

	</div>
</div>
<!-- ./Our Products -->

@include('layouts.footer')