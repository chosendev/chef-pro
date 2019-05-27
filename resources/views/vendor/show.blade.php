@extends('partials.master')

@section('header')
	
	@include('partials.breadcrumb_and_header',['breadcrumb'=>'Show Page','header'=>'Vendor']);

@endsection

@section('content')
	
	<div class="panel panel-default">
		<div class="panel-heading">Vendor:Show</div>
			<div class="panel-body">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-12 text-right">
							<center>
								<h4>{{ $vendor->name }}</h4>
								<h5>{{ $vendor->phone_number }}</h5>
								<h6>{{ $vendor->item_id }}</h6>
								{{ $vendor->location }}
							</center>
						</div>
						<div class="col-sm-6">
							<a href="/vendor/{{ $vendor->id }}/edit" class="btn btn-success">EDIT</a>
							<form action="{{ route('vendor.destroy', $vendor->id)}}" method="POST">
								@csrf
								@method('DELETE')
								<input type="submit" class="btn btn-danger" value="DELETE">
							</form>
						</div>
					</div>
					
				</div>
			</div>
	</div>
@endsection