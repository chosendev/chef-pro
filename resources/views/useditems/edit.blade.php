@extends('partials.master')

@section('header')

	@include('partials.breadcrumb_and_header',['breadcrumb'=>'Edit Page','header'=>'Used Items']);

@endsection

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">Used Items:Edit</div>
			<div class="panel-body">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-12">
							<form action="/used_item/{{ $used_item->id }}" method="POST"> {{-- form begins here --}}
					 		@csrf
					 		{{ method_field('put') }}
					 			<div class="row">
					 				<div class="col-sm-6">
					 					<div class="form-group has-success">
					 						<label>Quantity</label>
					 						<input type="text" class="form-control" placeholder="Quantity" name="quantity" value="{{ $used_item->quantity }}">
					 					</div>

					 					<div class="form-group has-success">
					 						<label>Staff Id</label>
					 						<input type="text" class="form-control" placeholder="Staff Id" name="staff_id" value="{{ $used_item->staff_id }}">
					 					</div>

					 					<div class="form-group has-success">
					 						<label>Date</label>
					 						<input type="date" class="form-control" placeholder="Date" name="date" value="{{ $used_item->date }}">
					 					</div>

					 					<div class="form-group">
					 						<button type="submit" class="btn btn-primary"> Submit</button>
					 					</div>
					 				</div>
					 				
					 			</div>
					 			
					 		</form>
						</div>
					</div>
				</div>
			</div>		
	</div>

@endsection