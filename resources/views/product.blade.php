@include('layouts.header')

<!-- Our Products -->
<div class="products">
	<div class="container">

		<h2 class="main-title">
			<img src="{{ asset('images/icon.png') }}" class="img-responsive">
			<span>Our Products</span>
		</h2>

		@php
		$i = 0;
		$k = 0;
		$j = $products->currentPage() - 1;
		@endphp

		@foreach ($products as $product)
		@php
		$k++;
		$i = ($j * 5) + $k;
		@endphp
		<div class="pro-box">
			<span class="number"><?php echo $i ?></span>
			<div class="row">
				<div class="col-xs-12">
					<h2>
						<a href="{{ url ('/product/'.$product->id) }}">
							{!! $product->translate('en')->product_title !!}
						</a>
					</h2>
					<div class="pro-slider">
						@foreach ($product-> images as $img)
						<div class="item">
							<a href="{{ url ('/product/'.$product->id) }}">
								<img src="{{ asset($img -> product_img) }}" class="img-responsive">
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		@endforeach

		{{ $products->links() }}

	</div>
</div>
<!-- ./Our Products -->

@include('layouts.footer')		