@extends('partials.master')

@section('header')
	
	@include('partials.breadcrumb_and_header',['breadcrumb'=>'Edit Page','header'=>'Store'])

@endsection

@section('content')
	
	<div class="panel panel-default">
		<div class="panel-heading">Store:Edit</div>
			<div class="panel-body"> 
				<div class="col-md-12">
					<div class="container">
						@if($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul></b>
							</div>
						@endif

						@if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br/>
                    	@endif
					</div>
					<br>
					<form action="/store/{{ $store->id }}" method="POST">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Item Id</label>
                                <input type="text" class="form-control" placeholder="item id" name="item_id" value="{{ $store->item_id }}">
                            </div>

                            <div class="form-group has-success">
                                <label>Quantity Stocked</label>
                                <input type="text" class="form-control" placeholder="quantity stocked"
                                       name="quantity_stocked" value="{{ $store->quantity_stocked }}">
                            </div>
                            <div class="form-group has-success">
                                <label>Status</label>
                                <input type="text" class="form-control" placeholder="status" name="status" value="{{ $store->status }}">
                                
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date" value="{{ $store->date }}">
                            </div>

                            <div class="`form-group has-success">
                                <label>Vendor Id</label>
                                <input type="text" class="form-control" placeholder="vendor id" name="vendor_id" value="{{ $store->vendor_id }}">
                            </div>
                        </div>
                    </div>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </center>
								
							</div>
						</div>
					</form>
				</div>
			</div>		
	</div>

@endsection