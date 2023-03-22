
@include('layouts.header')

<!-- Product Details -->
<div class="pro-details">
	<div class="container">
		<div class="col-xs-12">
			<h2 class="main-title">
				<img src="{{ asset('images/icon.png') }}" class="img-responsive">
				<span>{!! $product->translate('en')->product_title !!}</span>
			</h2>
			<div class="info">
				<p>
					{!! $product->translate('en')->product_desc !!}
				</p>
			</div>
			<div class="inner-slider" uk-lightbox="animation: scale">

				@foreach ($product->images as $img)
				<div class="item">
					<a href="{{ asset($img -> product_img) }}">
						<img src="{{ asset($img -> product_img) }}" class="img-responsive">
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<!-- ./Product Details -->

@include('layouts.footer')