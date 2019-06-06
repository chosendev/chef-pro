@extends('partials.master')

@section('header')

    @include('partials.breadcrumb_and_header',['breadcrumb' => 'Home Page', 'header' => 'Point of Sale'])

@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Point of sale:All</div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{route('point_of_sale.create')}}" style="height: 50px;width: 200px;" class="btn
                        btn-success
                        text-right "
                       type="button"><i
                            class="fa
                        fa-plus"></i>
                        Add
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach($point_of_sales as $point_of_sale)
                    1
                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel panel-teal"><h2>{{$point_of_sale->name}}</h2>
                                <span class="pull-right clickable panel-toggle"><em
                                        class="fa fa-toggle-up"></em></span></div>
                            <div class="panel-body">
                                <h3>Order id</h3><h4>{{$point_of_sale->order_id}}</h4>
                                <h3>Staff id</h3><h4>{{$point_of_sale->order_id}}</h4>
                                <h3>Date</h3><h4>{{$point_of_sale->date}}</h4>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
