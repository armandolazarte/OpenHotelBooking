@include('admin/header')
@include('admin/alert')
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">{{ trans('admin.setting') }}</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group @if (isset($messages) && $messages->has('hotel_name')) has-error @endif">
				<label class="control-label col-sm-3" for="user_hotel_name">{{ trans('admin.hotel_name') }}</label>
				<div class="col-sm-9">
					{{ Form::text('hotel_name', Input::old('hotel_name') ? Input::old('hotel_name') : 'info->hotel_name', array('class'=>'form-control', 'id'=> 'user_hotel_name')) }}
					<span class="help-block">
					@if (isset($messages) && $messages->has('hotel_name'))
						{{	$messages->first('hotel_name')	}}
					@endif
					</span>
				</div>
			</div>
			<div class="well well-sm">
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>

					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@include('admin/footer')
