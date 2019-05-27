@extends('partials.master')

@section('header')

	@include('partials.breadcrumb_and_header',['breadcrumb'=>'Edit Page','header'=>'Item']);

@endsection

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">Item:Edit</div>
			<div class="panel-body">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-12">
							<form action="/item/{{ $item->id }}" method="POST"> {{-- form begins here --}}
								@csrf
								@method('PUT')
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group has-success">
											<label>Name</label>
											<input type="text" class="form-control" placeholder="Name" name="name" value="{{ $item->name }}">
										</div>
										<br>
										<center>
											<button type="submit" class="btn btn-primary">Submit</button>
										</center>
										
									</div>
								</div>
							</form> {{-- Form ends here --}}
						</div>
					</div>
				</div>
			</div>
	</div>

@endsection