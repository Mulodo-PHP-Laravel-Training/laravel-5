@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<p>You are logged in!</p>
					<p><a href="{{ url('administrator') }}">Dashboard</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection