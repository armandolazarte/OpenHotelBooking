<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ trans('project.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::style('bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('css/login.css')}}
</head>
<body>
	<div class="panel panel-info" id="login">
		<div class="panel-heading">
			<h3 class="panel-title">{{ trans('form.login') }}</h3>
		</div>
		<div class="panel-body">
			@if (isset($error_message))
				<div class="alert alert-danger">
				{{ $error_message }}					
				</div>
			@endif
			{{ Form::open(array('role' => 'form')) }}
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					{{ Form::text(
					'email', 
					null, 
					array(
					'class' => 'form-control input-sm', 
					'placeholder' => trans('form.email'),
					)
					) }}
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					{{ Form::password(
					'password', 
					array(
					'class' => 'form-control input-sm',
					'placeholder' => trans('form.password')
					)
					) }}
				</div>
			</div>						
			<div class="checkbox">
				<label>
					{{ Form::checkbox('remember_me', Null, false) }} 
					{{ trans('form.remember_me') }}
				</label>
			</div>
			{{ Form::submit(trans('general.login'), array('class' => 'btn btn-success btn-block')) }}
			{{link_to('forgotten_password', trans('form.forget_password'))}}
			{{ Form::close() }}
		</div>
	</div>
</body>
</html>