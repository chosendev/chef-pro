used@extends('partials.master')

@section('header')

	@include('partials.breadcrumb_and_header',['breadcrumb'=>'Show Page','header'=>'Used Items']);

@endsection

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">Used Items:Show</div>
			<div class="panel-body">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-12">
							<center>
								<h5>{{ $used_item->quantity }}</h5>
								<h6>{{ $used_item->staff_id }}</h6>
								{{ $used_item->date }}	
							</center>
							<div class="col-sm-6">
								<a href="/used_item/{{ $used_item->id }}/edit" class="btn btn-success">EDIT</a>
								<form action="{{ route('used_item.destroy',$used_item->id) }}" method="POST">
									@csrf
									@method('DELETE')
									<input type="submit" class="btn btn-danger" value="DELETE">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>

@endsection