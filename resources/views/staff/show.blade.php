@extends('partials.master')

@section('header')

	@include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'staff'])

@endsection

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">Staff</div>
		<div class="panel-body">
			<div class="col-md-12">
				<div class="row">
					<div class="col-sm-12 text-right">
						<center>
							<h3>{{ $staff->staff_type_id }}</h3>
						<h4>{{ $staff->first_name }}</h4>
						<h5>{{ $staff->last_name }}</h5>
						<h6>{{ $staff->address }}</h6>
						{{ $staff->phone_number }}
						{{ $staff->next_of_kin_name }}
						{{ $staff->next_of_kin_phone_number }}	
						</center>
						
					</div>
					<div class="col-sm-6">
						<a href="/staff/{{ $staff->id }}/edit" class="btn btn-success">EDIT</a>
						<form action="{{ route('staff.destroy',$staff->id)}}" method="POST">
							@csrf
							@method('DELETE')
							<input type="submit" value="DELETE" class="btn btn-danger">
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>

@endsection