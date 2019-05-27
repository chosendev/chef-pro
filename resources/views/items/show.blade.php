@extends('partials.master')

@section('header')

	@include('partials.breadcrumb_and_header',['breadcrumb'=>'Show Page','header'=>'Item']);

@endsection

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">Item:Show</div>
			<div class="panel-body">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="col-sm-6">
									<center>
										{{ $item->name }}
									</center>
								</div>
								<div class="card-body">
									<div class="row" >
										<div class="col-sm-6 text-left">
											<a href="/item/{{ $item->id }}/edit" class="btn btn-success">EDIT</a>
											<form action="{{ route('item.destroy',$item->id) }}" method="POST">
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
				</div>
			</div>
	</div>
@endsection