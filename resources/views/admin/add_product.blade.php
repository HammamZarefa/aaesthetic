@include('admin.sidemenu')

	<div class="col-12">
		<h2 class="main-title">
			Add New Product:
		</h2>
	</div>
	
	<form class="form-group col-12" method="POST" enctype="multipart/form-data" action="{{ url('admin/product/new') }}">
		@csrf
		<div class="group two">
			<label>Product title (English):</label>
			<input type="text" name="pro_title_en" required>
		</div>
		<div class="group two ar">
			<label>Product title (Arabic):</label>
			<input type="text" name="pro_title_ar" required>
		</div>
		<div class="group two">
			<label>Product description (English):</label>
			<textarea name="pro_desc_en" required></textarea>
		</div>
		<div class="group two ar">
			<label>Product description (Arabic):</label>
			<textarea name="pro_desc_ar" required></textarea>
		</div>
		<div class="group">
			<label>Add product images:</label>
			<input type="file" name="images[]" multiple required>
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