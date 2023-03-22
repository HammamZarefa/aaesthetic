@include('admin.sidemenu')

	<div class="col-12">
		<h2 class="main-title">
			Our Team:
			<a href="{{ url('admin/team/add') }}">
				<i class="fas fa-plus"></i>
				Add new member
			</a>
		</h2>
	</div>

	@foreach ($teams as $team)
	<div class="col-md-4 col-sm-6 col-12">
		<div class="guide-block">
			<img src="{{ asset($team->team_img) }}" class="img-fluid">
			<span class="name"><i class="fas fa-user-circle"></i> {!! $team->translate('en')->name !!}</span>
			<ul>
				<li>
					<a href="{{ url('admin/team/edit/'.$team->id)}}">
						<i class="fas fa-pencil-alt"></i>
					</a>
				</li>
				<li>
					<form method="POST" action="{{url('admin/team/delete/'.$team->id)}}">
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
	

	<!-- Message -->
	@if(session()->has('message'))
	<p class="message-box done">
		{{ session()->get('message') }}
	</p>
	@endif
	<!-- ./Message -->

@include('admin.footer')	