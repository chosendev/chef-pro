@extends('partials.master')
 
 @section('header')
  @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Staff'])
 @endsection
 @section('content')

	<div class="panel panel-default">
		<div class="panel-heading">Buttons</div>
		<div class="panel-body">
			<div class="col-md-12">
				<form action="home_submit" method="get" accept-charset="utf-8">
					home_submit
					get
				</form>
			</div>
		</div>
	</div><!-- /.panel-->


 @endsection
