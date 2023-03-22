@include('admin.sidemenu')

	<div class="col-12">
		<h2 class="main-title">
			Add New Member:
		</h2>
	</div>
	
	<form class="form-group col-12" method="POST" enctype="multipart/form-data"  action="{{ url('admin/team/addSave') }}">
		@csrf
		<div class="group two">
			<label>Member name (English):</label>
			<input type="text" name="name_en" required>
		</div>
		<div class="group two ar">
			<label>Member name (Arabic):</label>
			<input type="text" name="name_ar" required>
		</div>
		<div class="group two">
			<label>Member job (English):</label>
			<input type="text" name="job_en" required>
		</div>
		<div class="group two ar">
			<label>Member job (Arabic):</label>
			<input type="text" name="job_ar" required>
		</div>
		<div class="group two">
			<label>Member slogan (English):</label>
			<input type="text" name="slogan_en">
		</div>
		<div class="group two ar">
			<label>Member slogan (Arabic):</label>
			<input type="text" name="slogan_ar">
		</div>
		<div class="group two">
			<label>Member description (English):</label>
			<input type="text" name="desc_en" required>
		</div>
		<div class="group two ar">
			<label>Member description (Arabic):</label>
			<input type="text" name="desc_ar" required>
		</div>
		<div class="group">
			<label>Member image:</label>
			<input type="file" name="image" required>
		</div>
		
		<div class="group">
			<button type="submit">Add</button>
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