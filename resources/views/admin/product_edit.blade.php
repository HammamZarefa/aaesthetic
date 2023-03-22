@include('admin.sidemenu')

<div class="col-12">
		<h2 class="main-title">
			Product images:
			<button data-toggle="modal" data-target="#exampleModal">
				<i class="fas fa-plus"></i>
				Add new images
			</button>
		</h2>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add New Images</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" enctype="multipart/form-data" action="{{url('admin/product/'.$product->id.'/imgs/add')}}">
						@csrf
						<p>Upload single or multiple images:</p>
						<input type="file" name="images[]" multiple required>
						<button type="submit">Add Images</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	@foreach ($product-> images as $img)
		<div class="col-md-4 col-sm-6 col-12">
			<div class="guide-block">
				<img src="{{ asset ($img->product_img) }}" class="img-fluid">
				<ul>
					<li>
						<form method="POST" action="{{url('admin/products/img/delete/'.$img->id)}}">
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


	
	<form class="form-group col-12" method="POST" action="{{ url('admin/productInfo/edit/'.$product->id) }}">
		@csrf
		<div class="group two">
			<label>Product title (English):</label>
			<input type="text" name="pro_title_en" value="{!! $product->translate('en')->product_title !!}" required>
		</div>
		<div class="group two">
			<label>Product title (Arabic):</label>
			<input type="text" name="pro_title_ar" value="{!! $product->translate('ar')->product_title !!}" required>
		</div>
		<div class="group two">
			<label>Product description (English):</label>
			<textarea name="pro_desc_en" required>{!! $product->translate('en')->product_desc !!}</textarea>
		</div>
		<div class="group two">
			<label>Product description (Arabic):</label>
			<textarea name="pro_desc_ar" required>{!! $product->translate('ar')->product_desc !!}</textarea>
		</div>
		<div class="group">
			<button type="submit">Save</button>
		</div>
	</form>

	<!-- Message -->
	@if(session()->has('message'))
	<p class="message-box done">
		{{ session()->get('message') }}
	</p>
	@endif
	<!-- ./Message -->
	
@include('admin.footer')	