@include('admin.sidemenu')

	<div class="col-12">		
		<form class="form-group" action="{{ url('admin/about-us/edit') }}" method="post">
			@csrf
			<h2 class="main-title">
				About us (English):
			</h2>
			<div class="group">
				<textarea name="about_en" required>{!! $about->translate('en')->about_desc !!}</textarea>
			</div>	
			<h2 class="main-title">
				About us (Arabic):
			</h2>
			<div class="group ar">
				<textarea name="about_ar" required>{!! $about->translate('ar')->about_desc !!}</textarea>
			</div>
			<div class="group">
				<button type="submit">Save</button>
			</div>
		</form>
	</div>

	<!-- Message -->
	@if(session()->has('message'))
	<p class="message-box done">
		{{ session()->get('message') }}
	</p>
	@endif
	<!-- ./Message -->

	
@include('admin.footer')	