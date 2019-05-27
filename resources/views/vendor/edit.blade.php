@extends('partials.master')

@section('header')
	
	@include('partials.breadcrumb_and_header',['breadcrumb'=>'Edit Page','header'=>'Vendor']);

@endsection

@section('content')
	
	<div class="panel panel-default">
		<div class="panel-heading">Vendor:Edit</div>
		<div class="panel-body">
			<div class="col-md-12">
				<div class="container">
					@if($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div><b/>
					@endif
					
					@if(session()->get('success'))
						<div class="alert alert-success">
							{{ session()->get('success')}}
						</div><b/>
					@endif
				</div>
				<br>

				<form action="/vendor/{{ $vendor->id }}" method="POST">
					@csrf
					{{ method_field('put') }}

					 <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="name"
                                       name="name" value="{{ $vendor->name }}">
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>phone Number</label>
                                <input type="text" class="form-control" placeholder="phone number" name="phone_number" value="{{ $vendor->phone_number }}">
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Item Id</label>
                                <input type="text" class="form-control" placeholder="item Id"
                                       name="item_id" value="{{ $vendor->item_id }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Location</label>
                                <input type="text" class="form-control" placeholder="location"
                                       name="location" value="{{ $vendor->location }}">
                            </div>
                        </div>

                    </div>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </center>
				</form>
			</div>
		</div>
	</div>

@endsection