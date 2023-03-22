@include('admin.sidemenu')

	<div class="col-12">
		<h2 class="main-title">
			Slides:
			<button data-toggle="modal" data-target="#exampleModal">
				<i class="fas fa-plus"></i>
				Add new slide
			</button>
		</h2>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add New Slides</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" enctype="multipart/form-data" action="{{url('admin/slides/add')}}">
						@csrf
						<p>Upload single or multiple images:</p>
						<input type="file" name="images[]" multiple required>
						<button type="submit">Add Slides</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	@foreach ($slides as $slide)
	<div class="col-md-4 col-sm-6 col-12">
		<div class="guide-block">
			<img src="{{ asset($slide->slide_img) }}" class="img-fluid">
			<ul>
				<li>
					<form method="POST" action="{{url('admin/slides/delete/'.$slide->id)}}">
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
		{{ $slides->links() }}
	</div>

	<!-- Message -->
	@if(session()->has('message'))
	<p class="message-box done">
		{{ session()->get('message') }}
	</p>
	@endif
	<!-- ./Message -->

@include('admin.footer')	