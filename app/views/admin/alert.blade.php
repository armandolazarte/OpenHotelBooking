@if(!empty($alert))
	<div class="alert {{ $alert_type }}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ $alert }}
	</div>
@endif