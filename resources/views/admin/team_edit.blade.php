@include('admin.sidemenu')

	<div class="col-12">
		<h2 class="main-title">
			Add New Member:
		</h2>
	</div>
	
	<form class="form-group col-12" method="POST" enctype="multipart/form-data"  action="{{ url('admin/team/editSave/'.$team->id) }}">
		@csrf
		<div class="group two">
			<label>Member name (English):</label>
			<input type="text" value="{{ $team->translate('en')->name }}" name="name_en" required>
		</div>
		<div class="group two ar">
			<label>Member name (Arabic):</label>
			<input type="text" value="{{ $team->translate('ar')->name }}" name="name_ar" required>
		</div>
		<div class="group two">
			<label>Member job (English):</label>
			<input type="text" value="{{ $team->translate('en')->job }}" name="job_en" required>
		</div>
		<div class="group two ar">
			<label>Member job (Arabic):</label>
			<input type="text" value="{{ $team->translate('ar')->job }}" name="job_ar" required>
		</div>
		<div class="group two">
			<label>Member slogan (English):</label>
			<input type="text" value="{{ $team->translate('en')->slogan }}" name="slogan_en">
		</div>
		<div class="group two ar">
			<label>Member slogan (Arabic):</label>
			<input type="text" value="{{ $team->translate('ar')->slogan }}" name="slogan_ar">
		</div>
		<div class="group two">
			<label>Member description (English):</label>
			<input type="text" value="{{ $team->translate('en')->team_desc }}" name="desc_en" required>
		</div>
		<div class="group two ar">
			<label>Member description (Arabic):</label>
			<input type="text" value="{{ $team->translate('ar')->team_desc }}" name="desc_ar" required>
		</div>
		<div class="group">
			<label>Member image:</label>
			<img src="{{  asset ($team->team_img) }}" class="img-fluid">
			<input type="file" name="image" required>
		</div>
		
		<div class="group">
			<button type="submit">Edit</button>
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