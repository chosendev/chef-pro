@extends('partials.master')

@section('header')

	@include('partials.breadcrumb_and_header',['breadcrumb'=>'Home Page','header'=>'Used Items']);

@endsection

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">Used Items:All</div>
			<div class="panel-body">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-12 text-right">
							<a href="{{ route('used_item.create')}}" style="height: 50px;width: 200px;" class="btn btn-success text-right" type="button"><i class="fa fa-plus"></i>Add</a>
						</div>
					</div>
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Quantity</th>
								<th scope="col">Staff Id</th>
								<th scope="col">Date</th>
							</tr>
						</thead>
						<tbody>
							@foreach($used_items as $used_item)
								<tr>
									<td><a href="/used_item/{{ $used_item->id }}">{{ $used_item->quantity }}</a></td>
									<td>{{ $used_item->staff_id }}</td>
									<td>{{ $used_item->date }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
	</div>

@endsection