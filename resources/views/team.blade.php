@include('layouts.header')

<!-- Our Team -->
<div class="team">
	<div class="container">
		<h2 class="main-title">
			<img src="{{ asset('images/icon.png') }}" class="img-responsive">
			<span>Our Team</span>
		</h2>
		
		@foreach ($teams as $team)
		<div class="sub-block">
			<img src="{{ asset($team->team_img) }}" class="img-responsive">
			<div class="info">
				
				<h2>{!! $team->translate('en')->name !!}</h2>
				<span class="job">{!! $team->translate('en')->job !!}</span>
				@if ($team->translate('en')->slogan != NULL)
				<span class="slogen">
					<i class="fas fa-quote-left"></i>
					{!! $team->translate('en')->slogan !!}
					<i class="fas fa-quote-right"></i>
				</span>
				@endif 
				<div class="para">
					<p>{!! $team->translate('en')->team_desc !!} </p>
				</div>
			</div>
		</div>
		@endforeach

	</div>
</div>
<!-- ./Our Team -->

@include('layouts.footer')		