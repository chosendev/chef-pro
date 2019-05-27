@extends('partials.master')

@section('header')

	@include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Items'])

@endsection

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">Items:All</div>
		<div class="panel-body">
			<div class="col-md-12">
				<div class="row">
					<div class="col-sm-12 text-right">
						<a href="{{ route('item.create')}}" style="height: 50px; width: 200px;" class="btn btn-success text-right" type="button"><i class="fa fa-plus"></i>Add</a>
					</div>
				</div>
				<div class="col-sm-5">
					<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Name</th>
						</tr>
					</thead>
					<tbody>
						@foreach($items as $item)
						<tr>
							<td><a href="/item/{{ $item->id }}">{{ $item->name }}</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>	
				</div>
				
			</div>
		</div>
		
	</div>	
	@endsection