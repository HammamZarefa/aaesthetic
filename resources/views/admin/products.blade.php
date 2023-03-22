@include('admin.sidemenu')

	<div class="col-12">
		<h2 class="main-title">
			Our products:
			<a href="{{ url('admin/product/add') }}">
				<i class="fas fa-plus"></i>
				Add new product
			</a>
		</h2>
	</div>

	@foreach ($products as $product)
	<div class="col-12">
		<div class="guide-block">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-12">
					<img src="{{ asset($product->images[0]->product_img) }}" class="img-fluid">
				</div>
				<div class="col-md-8 col-sm-6 col-12">
					<h3 class="product-title">{!! $product-> translate('en')->product_title !!}</h3>
					<p class="product-desc">
						{{str_limit(strip_tags($product-> translate('en')->product_desc),300,'...')}}
					</p>
				</div>
			</div>
			<ul>
				<li>
					<a href="{{ url('admin/products/edit/'.$product->id) }}">
						<i class="fas fa-pencil-alt"></i>
					</a> 
				</li>
				<li>
					<form method="POST" action="{{url('admin/products/delete/'.$product->id)}}">
						@csrf
						@method('DELETE')
						<button type="submit">
							<i class="fas fa-trash-alt"></i>
						</button>
					</form>
				</li>
			</ul>
		</div>
	</div>
	@endforeach
	
	<div class="col-12">
	{{ $products->links() }}
	</div>


	<!-- Message -->
	@if(session()->has('message'))
	<p class="message-box done">
		{{ session()->get('message') }}
	</p>
	@endif
	<!-- ./Message -->
	
@include('admin.footer')	